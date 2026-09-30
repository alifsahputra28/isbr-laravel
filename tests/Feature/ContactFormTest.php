<?php

namespace Tests\Feature;

use Illuminate\Http\Client\Request;
use Illuminate\Support\Facades\Http;
use Tests\TestCase;

class ContactFormTest extends TestCase
{
    private const WEBHOOK_URL = 'https://webhook.example.test/google-sheets';

    protected function setUp(): void
    {
        parent::setUp();

        config([
            'services.google_sheets.webhook_url' => self::WEBHOOK_URL,
            'services.google_sheets.webhook_secret' => 'test-webhook-secret',
        ]);

        Http::preventStrayRequests();
    }

    public function test_contact_page_connects_external_interest_controls_to_the_form(): void
    {
        $response = $this->get(route('contact', ['locale' => 'id']));

        $response
            ->assertOk()
            ->assertSee('id="contact-form"', false)
            ->assertSee('action="'.route('contact.submit', ['locale' => 'id']).'"', false)
            ->assertSee('form="contact-form"', false)
            ->assertSee('name="full_name"', false)
            ->assertSee('type="submit"', false)
            ->assertSee('href="mailto:ibsirun@yapista.org"', false)
            ->assertSee('ibsirun@yapista.org')
            ->assertSee('href="https://www.instagram.com/ibnusinabatamrun/"', false)
            ->assertSee('target="_blank"', false)
            ->assertSee('rel="noopener noreferrer"', false)
            ->assertSee('@ibnusinabatamrun')
            ->assertSee('Lubuk Baja Kota, Lubuk Baja, Batam City, Riau Islands 29444')
            ->assertDontSee('test-webhook-secret');

        $this->assertSame(3, substr_count((string) $response->getContent(), 'form="contact-form"'));
    }

    public function test_valid_indonesian_contact_request_sends_expected_payload_and_returns_success(): void
    {
        Http::fake([
            self::WEBHOOK_URL => Http::response(['success' => true]),
        ]);

        $payload = [
            'interest' => 'participation',
            'full_name' => 'Pelari ISBR',
            'email' => 'runner@example.com',
            'subject' => 'Informasi lomba',
            'message' => 'Mohon informasi lebih lanjut.',
        ];

        $response = $this
            ->from(route('contact', ['locale' => 'id']))
            ->post(route('contact.submit', ['locale' => 'id']), $payload);

        $response
            ->assertRedirect(route('contact', ['locale' => 'id']))
            ->assertSessionHas(
                'contact_success',
                'Pesan Anda berhasil dikirim. Terima kasih telah menghubungi ISBR.'
            );

        Http::assertSent(function (Request $request) use ($payload): bool {
            return $request->url() === self::WEBHOOK_URL
                && $request['action'] === 'contact'
                && $request['secret'] === 'test-webhook-secret'
                && $request['interest'] === $payload['interest']
                && $request['full_name'] === $payload['full_name']
                && $request['email'] === $payload['email']
                && $request['phone'] === ''
                && $request['subject'] === $payload['subject']
                && $request['message'] === $payload['message']
                && $request['language'] === 'ID';
        });
    }

    public function test_valid_english_contact_request_sends_english_locale_and_optional_phone(): void
    {
        Http::fake([
            self::WEBHOOK_URL => Http::response(['success' => true]),
        ]);

        $payload = [
            'interest' => 'sponsorship',
            'full_name' => 'ISBR Partner',
            'email' => 'partner@example.com',
            'phone' => '812 3456 7890',
            'subject' => 'Partnership',
            'message' => 'Please send partnership information.',
        ];

        $response = $this
            ->from(route('contact', ['locale' => 'en']))
            ->post(route('contact.submit', ['locale' => 'en']), $payload);

        $response
            ->assertRedirect(route('contact', ['locale' => 'en']))
            ->assertSessionHas(
                'contact_success',
                'Your message has been sent successfully. Thank you for contacting ISBR.'
            );

        Http::assertSent(fn (Request $request): bool => $request['phone'] === $payload['phone']
            && $request['language'] === 'EN');
    }

    public function test_contact_validation_rejects_invalid_input_and_preserves_old_input(): void
    {
        Http::fake();

        $response = $this
            ->from(route('contact', ['locale' => 'id']))
            ->post(route('contact.submit', ['locale' => 'id']), [
                'interest' => 'invalid-interest',
                'full_name' => 'Nama yang dipertahankan',
                'email' => 'not-an-email',
                'phone' => str_repeat('1', 31),
                'subject' => '',
                'message' => '',
            ]);

        $response
            ->assertRedirect(route('contact', ['locale' => 'id']))
            ->assertSessionHasErrors(['interest', 'email', 'phone', 'subject', 'message'], null, 'contact')
            ->assertSessionHasInput('full_name', 'Nama yang dipertahankan');

        Http::assertNothingSent();
    }

    public function test_contact_webhook_failure_returns_localized_error_and_preserves_input(): void
    {
        Http::fake([
            self::WEBHOOK_URL => Http::response(['success' => false, 'message' => 'Internal detail']),
        ]);

        $response = $this
            ->from(route('contact', ['locale' => 'id']))
            ->post(route('contact.submit', ['locale' => 'id']), [
                'interest' => 'other',
                'full_name' => 'Pelari ISBR',
                'email' => 'runner@example.com',
                'subject' => 'Informasi',
                'message' => 'Mohon informasi.',
            ]);

        $response
            ->assertRedirect(route('contact', ['locale' => 'id']))
            ->assertSessionHas('contact_error', 'Pesan belum dapat dikirim. Silakan coba kembali beberapa saat lagi.')
            ->assertSessionHasInput('email', 'runner@example.com')
            ->assertSessionMissing('contact_success');
    }

    public function test_missing_webhook_configuration_fails_safely_without_an_http_request(): void
    {
        config([
            'services.google_sheets.webhook_url' => null,
            'services.google_sheets.webhook_secret' => null,
        ]);

        Http::fake();

        $this->post(route('contact.submit', ['locale' => 'en']), [
            'interest' => 'participation',
            'full_name' => 'Runner',
            'email' => 'runner@example.com',
            'subject' => 'Race information',
            'message' => 'Please send more information.',
        ])->assertSessionHas('contact_error', 'Your message could not be sent. Please try again in a moment.');

        Http::assertNothingSent();
    }

    public function test_contact_submission_is_rate_limited_after_five_requests_per_minute(): void
    {
        Http::fake([
            self::WEBHOOK_URL => Http::response(['success' => true]),
        ]);

        $payload = [
            'interest' => 'other',
            'full_name' => 'Rate Limit Test',
            'email' => 'rate-limit@example.com',
            'subject' => 'Rate limiting',
            'message' => 'Testing the contact endpoint rate limit.',
        ];

        for ($request = 1; $request <= 5; $request++) {
            $this->post(route('contact.submit', ['locale' => 'id']), $payload)
                ->assertRedirect();
        }

        $this->post(route('contact.submit', ['locale' => 'id']), $payload)
            ->assertTooManyRequests();

        Http::assertSentCount(5);
    }
}
