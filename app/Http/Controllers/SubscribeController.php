<?php

namespace App\Http\Controllers;

use App\Services\GoogleSheetsWebhook;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class SubscribeController extends Controller
{
    public function __construct(
        private readonly GoogleSheetsWebhook $googleSheets,
    ) {}

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validateWithBag('subscribe', [
            'email' => ['required', 'email', 'max:150'],
        ]);

        $sent = $this->googleSheets->send([
            'action' => 'subscribe',
            'email' => $validated['email'],
            'language' => strtoupper(app()->getLocale()),
        ]);

        if (! $sent) {
            return back()
                ->withInput()
                ->with('subscribe_error', __('site.footer.subscribe_error'));
        }

        return back()->with('subscribe_success', __('site.footer.subscribe_success'));
    }
}
