<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Throwable;

class GoogleSheetsWebhook
{
    public function send(array $payload): bool
    {
        $url = config('services.google_sheets.webhook_url');
        $secret = config('services.google_sheets.webhook_secret');
        $action = is_string($payload['action'] ?? null) ? $payload['action'] : 'unknown';

        if (! is_string($url) || ! filter_var($url, FILTER_VALIDATE_URL) || ! is_string($secret) || $secret === '') {
            Log::error('Google Sheets webhook configuration is missing or invalid.', [
                'action' => $action,
            ]);

            return false;
        }

        try {
            $response = Http::acceptJson()
                ->asJson()
                ->timeout(10)
                ->withOptions(['allow_redirects' => true])
                ->post($url, [
                    ...$payload,
                    'secret' => $secret,
                ]);
        } catch (Throwable $exception) {
            Log::error('Google Sheets webhook request failed.', [
                'action' => $action,
                'exception' => $exception::class,
            ]);

            return false;
        }

        if (! $response->successful()) {
            Log::error('Google Sheets webhook returned an unsuccessful HTTP response.', [
                'action' => $action,
                'status' => $response->status(),
            ]);

            return false;
        }

        $responseData = $response->json();

        if (! is_array($responseData) || ($responseData['success'] ?? null) !== true) {
            Log::error('Google Sheets webhook returned an invalid or unsuccessful payload.', [
                'action' => $action,
            ]);

            return false;
        }

        return true;
    }
}
