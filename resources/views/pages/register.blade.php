@extends('layouts.app')

@section('title', 'Race Registration — Batam City Run 2026')

@section('content')
    @php
        $inputClass = 'block w-full rounded-lg border-line px-3.5 py-3 text-sm text-ink placeholder:text-subtle focus:border-brand-500 focus:ring-brand-500';
        $labelClass = 'mb-2 block text-sm font-medium text-ink';
    @endphp

    <section class="border-b border-line bg-white">
        <div class="mx-auto max-w-5xl px-4 py-12 sm:px-6 sm:py-16 lg:px-8">
            <p class="text-sm font-semibold text-brand-700">Batam City Run 2026</p>
            <h1 class="mt-2 text-3xl font-bold tracking-tight text-ink sm:text-4xl">Race Registration</h1>
            <p class="mt-3 text-sm text-muted sm:text-base">Complete your information to secure your race slot.</p>

            <ol class="mt-9 grid grid-cols-4 gap-2" aria-label="Registration progress">
                @foreach ([
                    ['1', 'Race Category', true, true],
                    ['2', 'Participant Details', true, false],
                    ['3', 'Review', false, false],
                    ['4', 'Payment', false, false],
                ] as [$number, $label, $active, $complete])
                    <li class="min-w-0">
                        <div @class(['h-1 rounded-full', 'bg-brand-600' => $active, 'bg-surface-muted' => ! $active])></div>
                        <div class="mt-3 flex items-start gap-2">
                            <span @class(['flex size-6 shrink-0 items-center justify-center rounded-full text-xs font-semibold', 'bg-brand-600 text-white' => $active, 'bg-surface-soft text-muted' => ! $active])>
                                @if ($complete)<x-icon name="check" class="size-3.5" />@else{{ $number }}@endif
                            </span>
                            <span @class(['hidden text-xs font-medium leading-5 sm:block', 'text-ink' => $active, 'text-muted' => ! $active])>{{ $label }}</span>
                        </div>
                    </li>
                @endforeach
            </ol>
        </div>
    </section>

    <section class="bg-canvas py-10 sm:py-14">
        <form action="{{ route('checkout') }}" method="get" class="mx-auto max-w-5xl space-y-6 px-4 sm:px-6 lg:px-8">
            <x-card>
                <div>
                    <h2 class="text-lg font-semibold text-ink">Choose Race Category</h2>
                    <p class="mt-1 text-sm text-muted">Select one category for this participant.</p>
                </div>
                <div class="mt-6 grid gap-3 sm:grid-cols-2 lg:grid-cols-4">
                    @foreach ([
                        ['5k', '5K', 'Rp175.000'],
                        ['10k', '10K', 'Rp250.000'],
                        ['21k', '21K', 'Rp350.000'],
                        ['kids', 'Kids Run', 'Rp125.000'],
                    ] as [$value, $label, $price])
                        <div>
                            <input type="radio" name="category" value="{{ $value }}" id="category-{{ $value }}" class="peer sr-only" {{ $value === '10k' ? 'checked' : '' }}>
                            <label for="category-{{ $value }}" class="block cursor-pointer rounded-xl border border-line bg-white p-4 transition peer-checked:border-brand-500 peer-checked:ring-1 peer-checked:ring-brand-500 hover:border-brand-300">
                                <span class="block text-xl font-bold tracking-tight text-ink">{{ $label }}</span>
                                <span class="mt-1 block text-xs text-muted">{{ $price }}</span>
                            </label>
                        </div>
                    @endforeach
                </div>
            </x-card>

            <x-card>
                <div>
                    <h2 class="text-lg font-semibold text-ink">Participant Information</h2>
                    <p class="mt-1 text-sm text-muted">Enter details exactly as shown on your identity document.</p>
                </div>

                <div class="mt-6 grid gap-5 sm:grid-cols-2">
                    @foreach ([
                        ['full_name', 'Full Name', 'text', 'John Doe', 'name'],
                        ['email', 'Email', 'email', 'john@example.com', 'email'],
                        ['phone', 'Phone Number', 'tel', '+62 812 3456 7890', 'tel'],
                        ['identity_number', 'Identity Number', 'text', 'Enter identity number', 'off'],
                    ] as [$name, $label, $type, $placeholder, $autocomplete])
                        <div>
                            <label for="{{ $name }}" class="{{ $labelClass }}">{{ $label }}</label>
                            <input id="{{ $name }}" name="{{ $name }}" type="{{ $type }}" autocomplete="{{ $autocomplete }}" placeholder="{{ $placeholder }}" class="{{ $inputClass }}">
                        </div>
                    @endforeach

                    <div>
                        <label for="gender" class="{{ $labelClass }}">Gender</label>
                        <select id="gender" name="gender" class="{{ $inputClass }}">
                            <option value="">Select gender</option>
                            <option>Male</option>
                            <option>Female</option>
                        </select>
                    </div>
                    <div>
                        <label for="birth_date" class="{{ $labelClass }}">Birth Date</label>
                        <input id="birth_date" name="birth_date" type="date" class="{{ $inputClass }}">
                    </div>
                    <div>
                        <label for="nationality" class="{{ $labelClass }}">Nationality</label>
                        <input id="nationality" name="nationality" type="text" value="Indonesia" class="{{ $inputClass }}">
                    </div>
                    <div>
                        <label for="city" class="{{ $labelClass }}">City</label>
                        <input id="city" name="city" type="text" placeholder="Your city" class="{{ $inputClass }}">
                    </div>
                    <div class="sm:col-span-2">
                        <label for="address" class="{{ $labelClass }}">Address</label>
                        <textarea id="address" name="address" rows="3" placeholder="Full address" class="{{ $inputClass }}"></textarea>
                    </div>
                </div>
            </x-card>

            <x-card>
                <div>
                    <h2 class="text-lg font-semibold text-ink">Emergency &amp; Race Details</h2>
                    <p class="mt-1 text-sm text-muted">Information used to support a safe race experience.</p>
                </div>
                <div class="mt-6 grid gap-5 sm:grid-cols-2">
                    <div>
                        <label for="emergency_name" class="{{ $labelClass }}">Emergency Contact Name</label>
                        <input id="emergency_name" name="emergency_name" type="text" placeholder="Contact person" class="{{ $inputClass }}">
                    </div>
                    <div>
                        <label for="emergency_phone" class="{{ $labelClass }}">Emergency Contact Number</label>
                        <input id="emergency_phone" name="emergency_phone" type="tel" placeholder="+62 812 3456 7890" class="{{ $inputClass }}">
                    </div>
                    <div>
                        <label for="community" class="{{ $labelClass }}">Community / Running Club</label>
                        <input id="community" name="community" type="text" placeholder="Optional" class="{{ $inputClass }}">
                    </div>
                    <div>
                        <label for="blood_type" class="{{ $labelClass }}">Blood Type</label>
                        <select id="blood_type" name="blood_type" class="{{ $inputClass }}">
                            <option value="">Select blood type</option>
                            @foreach (['A', 'B', 'AB', 'O'] as $bloodType)<option>{{ $bloodType }}</option>@endforeach
                        </select>
                    </div>
                    <fieldset class="sm:col-span-2">
                        <legend class="{{ $labelClass }}">Jersey Size</legend>
                        <div class="grid grid-cols-3 gap-2 sm:grid-cols-6">
                            @foreach (['XS', 'S', 'M', 'L', 'XL', 'XXL'] as $size)
                                <div>
                                    <input type="radio" name="jersey_size" value="{{ $size }}" id="size-{{ strtolower($size) }}" class="peer sr-only" {{ $size === 'M' ? 'checked' : '' }}>
                                    <label for="size-{{ strtolower($size) }}" class="flex min-h-11 cursor-pointer items-center justify-center rounded-lg border border-line bg-white text-sm font-semibold text-body peer-checked:border-brand-500 peer-checked:bg-brand-50 peer-checked:text-brand-700">{{ $size }}</label>
                                </div>
                            @endforeach
                        </div>
                    </fieldset>
                    <div class="sm:col-span-2">
                        <label for="medical_notes" class="{{ $labelClass }}">Medical Notes</label>
                        <textarea id="medical_notes" name="medical_notes" rows="3" placeholder="Allergies, medication, or relevant medical conditions (optional)" class="{{ $inputClass }}"></textarea>
                    </div>
                </div>
            </x-card>

            <x-card>
                <label for="terms" class="flex items-start gap-3 text-sm leading-6 text-body">
                    <input id="terms" name="terms" type="checkbox" class="mt-1 size-4 rounded border-line-strong text-brand-700 focus:ring-brand-500">
                    <span>I agree to the race rules, terms, and participant waiver.</span>
                </label>
                <div class="mt-6 flex flex-col-reverse gap-3 sm:flex-row sm:justify-end">
                    <x-button href="{{ route('prices') }}" variant="outline">Back to Categories</x-button>
                    <x-button type="submit" variant="accent">Continue to Review<x-icon name="arrow-right" class="size-4" /></x-button>
                </div>
            </x-card>
        </form>
    </section>
@endsection
