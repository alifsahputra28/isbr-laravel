<?php

namespace App\Http\Controllers;

use App\Services\GoogleSheetsWebhook;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function __construct(
        private readonly GoogleSheetsWebhook $googleSheets,
    ) {}

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validateWithBag('contact', [
            'interest' => ['required', 'in:participation,sponsorship,other'],
            'full_name' => ['required', 'string', 'max:100'],
            'email' => ['required', 'email', 'max:150'],
            'phone' => ['nullable', 'string', 'max:30'],
            'subject' => ['required', 'string', 'max:150'],
            'message' => ['required', 'string', 'max:3000'],
        ]);

        $sent = $this->googleSheets->send([
            'action' => 'contact',
            'interest' => $validated['interest'],
            'full_name' => $validated['full_name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'] ?? '',
            'subject' => $validated['subject'],
            'message' => $validated['message'],
            'language' => strtoupper(app()->getLocale()),
        ]);

        if (! $sent) {
            return back()
                ->withInput()
                ->with('contact_error', __('site.contact.error'));
        }

        return back()->with('contact_success', __('site.contact.success'));
    }
}
