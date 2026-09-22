@extends('layouts.app')

@section('title', 'Registration Successful — Batam City Run 2026')

@section('content')
    <section class="bg-canvas py-12 sm:py-16 lg:py-20">
        <div class="mx-auto max-w-2xl px-4 sm:px-6">
            <div class="text-center">
                <span class="mx-auto flex size-14 items-center justify-center rounded-full bg-success-soft text-success"><x-icon name="check" class="size-7" /></span>
                <h1 class="mt-5 text-3xl font-bold tracking-tight text-ink sm:text-4xl">Registration Successful</h1>
                <p class="mt-3 text-base text-muted">You're officially on the starting list.</p>
            </div>

            <x-card class="mt-8" :padding="false">
                <div class="border-b border-line p-5 text-center sm:p-7">
                    <p class="text-xs font-semibold uppercase tracking-[0.18em] text-brand-700">Batam City Run 2026</p>
                    <h2 class="mt-2 text-xl font-semibold text-ink">Participant E-Ticket Preview</h2>
                </div>
                <div class="grid gap-7 p-5 sm:grid-cols-[1fr_180px] sm:items-center sm:p-7">
                    <dl class="space-y-4">
                        @foreach ([
                            ['Participant', 'John Doe'],
                            ['Category', '10K'],
                            ['Registration ID', 'BCR26-001234'],
                        ] as [$label, $value])
                            <div>
                                <dt class="text-xs text-muted">{{ $label }}</dt>
                                <dd class="mt-1 font-semibold text-ink">{{ $value }}</dd>
                            </div>
                        @endforeach
                        <div>
                            <dt class="text-xs text-muted">Payment</dt>
                            <dd class="mt-1"><x-badge variant="success">Paid</x-badge></dd>
                        </div>
                    </dl>

                    <div class="mx-auto flex size-44 items-center justify-center rounded-xl border border-line bg-white p-4" aria-label="QR code placeholder">
                        <svg viewBox="0 0 120 120" class="size-full text-ink" fill="currentColor" aria-hidden="true">
                            <path d="M4 4h36v36H4V4Zm8 8v20h20V12H12Zm68-8h36v36H80V4Zm8 8v20h20V12H88ZM4 80h36v36H4V80Zm8 8v20h20V88H12Z" />
                            <path d="M52 4h12v12H52V4Zm12 12h12v12H64V16ZM52 28h12v12H52V28Zm0 24h12v12H52V52Zm12 12h12v12H64V64Zm12-12h12v12H76V52Zm12 12h12v12H88V64Zm12-12h16v12h-16V52ZM52 80h12v12H52V80Zm12 12h12v24H64V92Zm12-12h12v12H76V80Zm12 12h12v12H88V92Zm12-12h16v12h-16V80Zm0 24h16v12h-16v-12Z" />
                        </svg>
                    </div>
                </div>
            </x-card>

            <div class="mt-6 grid gap-3 sm:grid-cols-2">
                <x-button href="#" variant="primary" size="lg" class="w-full"><x-icon name="download" class="size-4" />Download E-Ticket</x-button>
                <x-button href="{{ route('home') }}" variant="outline" size="lg" class="w-full">Back to Home</x-button>
            </div>
            <p class="mt-5 text-center text-xs leading-5 text-muted">The QR code and downloadable ticket are visual placeholders for this UI phase.</p>
        </div>
    </section>
@endsection
