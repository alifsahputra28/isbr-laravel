<?php

namespace Tests\Feature;

use Illuminate\Http\Client\Request;
use Illuminate\Support\Facades\Http;
use Tests\TestCase;

class SubscribeFormTest extends TestCase
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

    public function test_footer_subscribe_form_is_locale_aware_and_does_not_expose_webhook_configuration(): void
    {
        $this->get(route('home', ['locale' => 'en']))
            ->assertOk()
            ->assertSee('action="'.route('subscribe.store', ['locale' => 'en']).'"', false)
            ->assertSee('method="POST"', false)
            ->assertSee('name="email"', false)
            ->assertDontSee('test-webhook-secret')
            ->assertDontSee(self::WEBHOOK_URL);
    }

    public function test_valid_subscribe_request_sends_expected_payload_and_returns_success(): void
    {
        Http::fake([
            self::WEBHOOK_URL => Http::response(['success' => true]),
        ]);

        $response = $this
            ->from(route('home', ['locale' => 'id']))
            ->post(route('subscribe.store', ['locale' => 'id']), [
                'email' => 'runner@example.com',
            ]);

        $response
            ->assertRedirect(route('home', ['locale' => 'id']))
            ->assertSessionHas('subscribe_success', 'Terima kasih. Anda telah berlangganan informasi ISBR.');

        Http::assertSent(function (Request $request): bool {
            return $request->url() === self::WEBHOOK_URL
                && $request['action'] === 'subscribe'
                && $request['secret'] === 'test-webhook-secret'
                && $request['email'] === 'runner@example.com'
                && $request['language'] === 'ID';
        });
    }

    public function test_invalid_subscribe_email_is_rejected_without_calling_webhook(): void
    {
        Http::fake();

        $response = $this
            ->from(route('home', ['locale' => 'id']))
            ->post(route('subscribe.store', ['locale' => 'id']), [
                'email' => 'not-an-email',
            ]);

        $response
            ->assertRedirect(route('home', ['locale' => 'id']))
            ->assertSessionHasErrors(['email'], null, 'subscribe')
            ->assertSessionHasInput('email', 'not-an-email');

        Http::assertNothingSent();
    }

    public function test_duplicate_subscriber_response_is_still_successful(): void
    {
        Http::fake([
            self::WEBHOOK_URL => Http::response([
                'success' => true,
                'duplicate' => true,
                'message' => 'Email is already subscribed.',
            ]),
        ]);

        $response = $this
            ->from(route('home', ['locale' => 'en']))
            ->post(route('subscribe.store', ['locale' => 'en']), [
                'email' => 'runner@example.com',
            ]);

        $response
            ->assertRedirect(route('home', ['locale' => 'en']))
            ->assertSessionHas('subscribe_success', 'Thank you. You are now subscribed to ISBR updates.')
            ->assertSessionMissing('subscribe_error');

        Http::assertSent(fn (Request $request): bool => $request['language'] === 'EN');
    }

    public function test_subscribe_webhook_failure_returns_localized_error_and_preserves_input(): void
    {
        Http::fake([
            self::WEBHOOK_URL => Http::response(['success' => false]),
        ]);

        $response = $this
            ->from(route('home', ['locale' => 'en']))
            ->post(route('subscribe.store', ['locale' => 'en']), [
                'email' => 'runner@example.com',
            ]);

        $response
            ->assertRedirect(route('home', ['locale' => 'en']))
            ->assertSessionHas('subscribe_error', 'Your subscription could not be processed. Please try again in a moment.')
            ->assertSessionHasInput('email', 'runner@example.com')
            ->assertSessionMissing('subscribe_success');
    }

    public function test_missing_webhook_configuration_fails_safely_without_an_http_request(): void
    {
        config([
            'services.google_sheets.webhook_url' => null,
            'services.google_sheets.webhook_secret' => null,
        ]);

        Http::fake();

        $this->post(route('subscribe.store', ['locale' => 'id']), [
            'email' => 'runner@example.com',
        ])->assertSessionHas('subscribe_error');

        Http::assertNothingSent();
    }
}
