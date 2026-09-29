<?php

namespace Tests\Feature;

use App\Mail\ContactMessageMail;
use Illuminate\Support\Facades\Mail;
use Tests\TestCase;

class ContactFormTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        config(['mail.contact_to' => 'contact@example.com']);
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
            ->assertSee('type="submit"', false);

        $this->assertSame(3, substr_count((string) $response->getContent(), 'form="contact-form"'));
    }

    public function test_indonesian_contact_submission_sends_mail_and_redirects_with_localized_success(): void
    {
        Mail::fake();

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

        Mail::assertSent(ContactMessageMail::class, function (ContactMessageMail $mail) use ($payload): bool {
            $replyTo = $mail->envelope()->replyTo[0] ?? null;

            return $mail->data === $payload
                && $mail->hasTo('contact@example.com')
                && $mail->envelope()->subject === 'New Contact Message — ISBR 2027'
                && $replyTo?->address === $payload['email']
                && $replyTo?->name === $payload['full_name'];
        });
    }

    public function test_english_contact_submission_accepts_optional_phone_and_uses_english_success(): void
    {
        Mail::fake();

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

        Mail::assertSent(ContactMessageMail::class, fn (ContactMessageMail $mail): bool => $mail->data === $payload);
    }

    public function test_contact_validation_rejects_invalid_input_and_preserves_old_input(): void
    {
        Mail::fake();

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
            ->assertSessionHasErrors(['interest', 'email', 'phone', 'subject', 'message'])
            ->assertSessionHasInput('full_name', 'Nama yang dipertahankan');

        Mail::assertNothingSent();
    }

    public function test_contact_email_escapes_user_content_and_formats_phone(): void
    {
        $html = (new ContactMessageMail([
            'interest' => 'other',
            'full_name' => '<script>alert("name")</script>',
            'email' => 'runner@example.com',
            'phone' => '81234567890',
            'subject' => '<b>Subject</b>',
            'message' => "First line\n<script>alert('message')</script>",
        ]))->render();

        $this->assertStringNotContainsString('<script>', $html);
        $this->assertStringContainsString('&lt;script&gt;', $html);
        $this->assertStringContainsString('+62 81234567890', $html);
        $this->assertStringContainsString("First line<br />\n&lt;script&gt;", $html);

        $withoutPhoneHtml = (new ContactMessageMail([
            'interest' => 'participation',
            'full_name' => 'Runner',
            'email' => 'runner@example.com',
            'subject' => 'Race information',
            'message' => 'Please send more information.',
        ]))->render();

        $this->assertMatchesRegularExpression('/Phone<\/td>\s*<td[^>]*>-<\/td>/', $withoutPhoneHtml);
    }

    public function test_contact_submission_is_rate_limited_after_five_requests_per_minute(): void
    {
        Mail::fake();

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

        Mail::assertSent(ContactMessageMail::class, 5);
    }
}
