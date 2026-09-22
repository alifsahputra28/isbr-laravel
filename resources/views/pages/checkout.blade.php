@extends('layouts.app')

@section('title', 'Checkout — Batam City Run 2026')

@section('content')
    <section class="border-b border-line bg-white">
        <div class="mx-auto max-w-6xl px-4 py-12 sm:px-6 lg:px-8">
            <p class="text-sm font-semibold text-brand-700">Step 3 of 4</p>
            <h1 class="mt-2 text-3xl font-bold tracking-tight text-ink sm:text-4xl">Review &amp; Checkout</h1>
            <p class="mt-3 text-sm text-muted sm:text-base">Confirm your participant and race details before payment.</p>
        </div>
    </section>

    <section class="bg-canvas py-10 sm:py-14">
        <div class="mx-auto grid max-w-6xl gap-6 px-4 sm:px-6 lg:grid-cols-[minmax(0,1fr)_380px] lg:items-start lg:px-8">
            <div class="space-y-6">
                <x-card>
                    <div class="flex items-center justify-between gap-4">
                        <h2 class="text-lg font-semibold text-ink">Participant Information</h2>
                        <a href="{{ route('register') }}" class="text-sm font-semibold text-brand-700 hover:text-brand-800">Edit</a>
                    </div>
                    <dl class="mt-6 grid gap-x-8 gap-y-5 sm:grid-cols-2">
                        @foreach ([
                            ['Full Name', 'John Doe'],
                            ['Email', 'john.doe@example.com'],
                            ['Phone Number', '+62 812 3456 7890'],
                            ['Identity Number', '2171••••••••1234'],
                            ['Gender', 'Male'],
                            ['Birth Date', '12 May 1994'],
                            ['City', 'Batam'],
                            ['Jersey Size', 'M'],
                        ] as [$label, $value])
                            <div>
                                <dt class="text-xs text-muted">{{ $label }}</dt>
                                <dd class="mt-1 text-sm font-medium text-ink">{{ $value }}</dd>
                            </div>
                        @endforeach
                    </dl>
                </x-card>

                <x-card>
                    <div class="flex items-start gap-4">
                        <span class="flex size-11 shrink-0 items-center justify-center rounded-lg bg-surface-soft text-ink"><x-icon name="flag" class="size-5" /></span>
                        <div>
                            <h2 class="font-semibold text-ink">Batam City Run 2026</h2>
                            <p class="mt-1 text-sm text-muted">10K · Open Category</p>
                            <div class="mt-4 flex flex-col gap-2 text-sm text-body sm:flex-row sm:gap-6">
                                <span class="flex items-center gap-2"><x-icon name="calendar" class="size-4" />15 November 2026</span>
                                <span class="flex items-center gap-2"><x-icon name="map-pin" class="size-4" />Batam, Kepulauan Riau</span>
                            </div>
                        </div>
                    </div>
                </x-card>
            </div>

            <x-card class="lg:sticky lg:top-24">
                <h2 class="text-lg font-semibold text-ink">Order Summary</h2>
                <p class="mt-1 text-sm text-muted">Batam City Run 2026 · 10K</p>
                <div class="mt-6 space-y-3 border-y border-line py-5 text-sm">
                    <div class="flex items-center justify-between gap-4"><span class="text-muted">Registration Fee</span><span class="font-medium text-ink">Rp250.000</span></div>
                    <div class="flex items-center justify-between gap-4"><span class="text-muted">Platform Fee</span><span class="font-medium text-ink">Rp5.000</span></div>
                </div>
                <div class="flex items-center justify-between gap-4 py-5">
                    <span class="font-semibold text-ink">Total</span>
                    <span class="text-xl font-bold tracking-tight text-ink">Rp255.000</span>
                </div>
                <x-button href="{{ route('registration.success') }}" variant="accent" size="lg" class="w-full">Continue to Payment<x-icon name="arrow-right" class="size-4" /></x-button>
                <p class="mt-4 text-center text-xs leading-5 text-muted">Payment integration will be connected in a later development phase.</p>
            </x-card>
        </div>
    </section>
@endsection
