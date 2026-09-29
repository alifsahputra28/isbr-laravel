@extends('layouts.app')

@section('seo_title', __('site.seo.contact.title'))
@section('seo_description', __('site.seo.contact.description'))
@section('seo_canonical', route('contact'))
@section('seo_image', asset('assets/images/event/contact.webp'))

@section('content')

    {{-- NAVBAR --}}
    <x-public.navbar variant="solid" />


    <main class="bg-white">

        {{-- =====================================================
             CONTACT HERO
        ====================================================== --}}
        <section
            class="relative min-h-[340px]
                   overflow-hidden
                   bg-neutral-950
                   sm:min-h-[400px]"
        >

            {{-- BACKGROUND IMAGE --}}
            <img
                src="{{ asset('assets/images/event/contact.webp') }}"
                alt="{{ __('site.contact.image_alt') }}"
                width="6000"
                height="3376"
                loading="eager"
                fetchpriority="high"
                decoding="async"
                class="absolute inset-0
                       h-full w-full
                       object-cover
                       object-center"
            >

            {{-- DARK OVERLAY --}}
            <div class="absolute inset-0 bg-black/55"></div>

            {{-- GRADIENT --}}
            <div
                class="absolute inset-0
                       bg-gradient-to-r
                       from-black/55
                       via-black/20
                       to-transparent"
            ></div>


            {{-- CONTENT --}}
            <div
                class="relative z-10
                       mx-auto flex
                       min-h-[340px]
                       max-w-[1180px]
                       items-end
                       px-6 pb-12
                       sm:min-h-[400px]
                       sm:px-8
                       sm:pb-14
                       lg:px-10"
            >

                <div>

                    <p
                        class="text-[12px]
                               font-semibold
                               uppercase
                               tracking-[0.16em]
                               text-white/75"
                    >
                        {{ __('site.contact.label') }}
                    </p>


                    <h1
                        class="mt-3
                               max-w-[700px]
                               text-[42px]
                               font-semibold
                               leading-[1]
                               tracking-[-0.05em]
                               text-white
                               sm:text-[54px]
                               lg:text-[64px]"
                    >
                        {{ __('site.contact.title') }}
                    </h1>

                </div>

            </div>

        </section>



        {{-- =====================================================
             CONTACT FORM
        ====================================================== --}}
        <section class="py-14 sm:py-16 lg:py-20">

            <div
                class="mx-auto max-w-[1180px]
                       px-6
                       sm:px-8
                       lg:px-10"
            >

                {{-- =============================================
                     INTEREST
                ============================================== --}}
                <div
                    class="grid gap-6
                           border-b border-line
                           pb-10
                           lg:grid-cols-[280px_1fr]
                           lg:items-center"
                >

                    <div>
                        <h2
                            class="text-[24px]
                                   font-semibold
                                   tracking-[-0.03em]
                                   text-heading"
                        >
                            {{ __('site.contact.interest_title') }}
                        </h2>
                    </div>


                    <div>
                        <div class="flex flex-wrap gap-3">

                        {{-- PARTICIPATION --}}
                        <label class="cursor-pointer">

                            <input
                                type="radio"
                                name="interest"
                                value="participation"
                                form="contact-form"
                                class="peer sr-only"
                                @checked(old('interest', 'participation') === 'participation')
                            >

                            <span
                                class="inline-flex h-11
                                       items-center justify-center
                                       rounded-full
                                       border border-line
                                       bg-white
                                       px-5
                                       text-sm font-medium
                                       text-body
                                       transition
                                       hover:border-brand-300
                                       peer-checked:border-brand-700
                                       peer-checked:bg-brand-700
                                       peer-checked:text-white"
                            >
                                {{ __('site.contact.interests.participation') }}
                            </span>

                        </label>


                        {{-- SPONSORSHIP --}}
                        <label class="cursor-pointer">

                            <input
                                type="radio"
                                name="interest"
                                value="sponsorship"
                                form="contact-form"
                                class="peer sr-only"
                                @checked(old('interest') === 'sponsorship')
                            >

                            <span
                                class="inline-flex h-11
                                       items-center justify-center
                                       rounded-full
                                       border border-line
                                       bg-white
                                       px-5
                                       text-sm font-medium
                                       text-body
                                       transition
                                       hover:border-brand-300
                                       peer-checked:border-brand-700
                                       peer-checked:bg-brand-700
                                       peer-checked:text-white"
                            >
                                {{ __('site.contact.interests.sponsorship') }}
                            </span>

                        </label>


                        {{-- OTHER --}}
                        <label class="cursor-pointer">

                            <input
                                type="radio"
                                name="interest"
                                value="other"
                                form="contact-form"
                                class="peer sr-only"
                                @checked(old('interest') === 'other')
                            >

                            <span
                                class="inline-flex h-11
                                       items-center justify-center
                                       rounded-full
                                       border border-line
                                       bg-white
                                       px-5
                                       text-sm font-medium
                                       text-body
                                       transition
                                       hover:border-brand-300
                                       peer-checked:border-brand-700
                                       peer-checked:bg-brand-700
                                       peer-checked:text-white"
                            >
                                {{ __('site.contact.interests.other') }}
                            </span>

                        </label>

                        </div>

                        @error('interest')
                            <p class="mt-2 text-sm text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                </div>



                {{-- =============================================
                     FORM AREA
                ============================================== --}}
                <div
                    class="grid gap-10
                           pt-10
                           lg:grid-cols-[280px_1fr]
                           lg:gap-14"
                >

                    {{-- LEFT TITLE --}}
                    <div>

                        <h2
                            class="text-[26px]
                                   font-semibold
                                   tracking-[-0.035em]
                                   text-heading"
                        >
                            {{ __('site.contact.form_title') }}
                        </h2>

                        <p
                            class="mt-3
                                   max-w-[240px]
                                   text-sm
                                   leading-6
                                   text-muted"
                        >
                            {{ __('site.contact.form_description') }}
                        </p>

                    </div>


                    {{-- FORM --}}
                    <div>
                        @if (session('contact_success'))
                            <div
                                role="status"
                                class="mb-5 rounded-lg border border-brand-200 bg-brand-50 px-4 py-3 text-sm text-brand-800"
                            >
                                {{ session('contact_success') }}
                            </div>
                        @endif

                        <form
                            id="contact-form"
                            action="{{ route('contact.submit', ['locale' => app()->getLocale()]) }}"
                            method="POST"
                            class="space-y-5"
                        >
                            @csrf


                        {{-- FULL NAME --}}
                        <div>

                            <label
                                for="full_name"
                                class="mb-2 block
                                       text-sm font-medium
                                       text-heading"
                            >
                                {{ __('site.contact.full_name') }}
                                <span class="text-danger">*</span>
                            </label>

                            <input
                                type="text"
                                id="full_name"
                                name="full_name"
                                value="{{ old('full_name') }}"
                                placeholder="{{ __('site.contact.full_name_placeholder') }}"
                                required
                                autocomplete="name"
                                class="block h-[52px]
                                       w-full
                                       rounded-lg
                                       border-line
                                       bg-white
                                       px-4
                                       text-sm
                                       text-ink
                                       placeholder:text-subtle
                                       focus:border-brand-500
                                       focus:ring-brand-500"
                            >

                            @error('full_name')
                                <p class="mt-2 text-sm text-danger">{{ $message }}</p>
                            @enderror

                        </div>



                        {{-- EMAIL --}}
                        <div>

                            <label
                                for="email"
                                class="mb-2 block
                                       text-sm font-medium
                                       text-heading"
                            >
                                {{ __('site.contact.email') }}
                                <span class="text-danger">*</span>
                            </label>

                            <input
                                type="email"
                                id="email"
                                name="email"
                                value="{{ old('email') }}"
                                placeholder="{{ __('site.contact.email_placeholder') }}"
                                required
                                autocomplete="email"
                                class="block h-[52px]
                                       w-full
                                       rounded-lg
                                       border-line
                                       bg-white
                                       px-4
                                       text-sm
                                       text-ink
                                       placeholder:text-subtle
                                       focus:border-brand-500
                                       focus:ring-brand-500"
                            >

                            @error('email')
                                <p class="mt-2 text-sm text-danger">{{ $message }}</p>
                            @enderror

                        </div>



                        {{-- PHONE --}}
                        <div>

                            <label
                                for="phone"
                                class="mb-2 block
                                       text-sm font-medium
                                       text-heading"
                            >
                                {{ __('site.contact.phone') }}
                            </label>

                            <div class="flex">

                                <div
                                    class="flex h-[52px]
                                           items-center
                                           rounded-l-lg
                                           border border-r-0
                                           border-line
                                           bg-surface-soft
                                           px-4
                                           text-sm
                                           font-medium
                                           text-body"
                                >
                                    +62
                                </div>

                                <input
                                    type="tel"
                                    id="phone"
                                    name="phone"
                                    value="{{ old('phone') }}"
                                    placeholder="812 3456 7890"
                                    autocomplete="tel"
                                    inputmode="tel"
                                    class="block h-[52px]
                                           w-full
                                           rounded-r-lg
                                           border-line
                                           bg-white
                                           px-4
                                           text-sm
                                           text-ink
                                           placeholder:text-subtle
                                           focus:border-brand-500
                                           focus:ring-brand-500"
                                >

                            </div>

                            @error('phone')
                                <p class="mt-2 text-sm text-danger">{{ $message }}</p>
                            @enderror

                        </div>



                        {{-- SUBJECT --}}
                        <div>

                            <label
                                for="subject"
                                class="mb-2 block
                                       text-sm font-medium
                                       text-heading"
                            >
                                {{ __('site.contact.subject') }}
                                <span class="text-danger">*</span>
                            </label>

                            <input
                                type="text"
                                id="subject"
                                name="subject"
                                value="{{ old('subject') }}"
                                placeholder="{{ __('site.contact.subject_placeholder') }}"
                                required
                                class="block h-[52px]
                                       w-full
                                       rounded-lg
                                       border-line
                                       bg-white
                                       px-4
                                       text-sm
                                       text-ink
                                       placeholder:text-subtle
                                       focus:border-brand-500
                                       focus:ring-brand-500"
                            >

                            @error('subject')
                                <p class="mt-2 text-sm text-danger">{{ $message }}</p>
                            @enderror

                        </div>



                        {{-- MESSAGE --}}
                        <div>

                            <label
                                for="message"
                                class="mb-2 block
                                       text-sm font-medium
                                       text-heading"
                            >
                                {{ __('site.contact.message') }}
                                <span class="text-danger">*</span>
                            </label>

                            <textarea
                                id="message"
                                name="message"
                                rows="6"
                                placeholder="{{ __('site.contact.message_placeholder') }}"
                                required
                                class="block
                                       w-full
                                       resize-none
                                       rounded-lg
                                       border-line
                                       bg-white
                                       px-4 py-3
                                       text-sm
                                       leading-6
                                       text-ink
                                       placeholder:text-subtle
                                       focus:border-brand-500
                                       focus:ring-brand-500"
                            >{{ old('message') }}</textarea>

                            @error('message')
                                <p class="mt-2 text-sm text-danger">{{ $message }}</p>
                            @enderror

                        </div>



                        {{-- SUBMIT --}}
                        <button
                            type="submit"
                            class="inline-flex h-[52px]
                                   w-full
                                   items-center
                                   justify-center
                                   rounded-lg
                                   bg-brand-700
                                   px-6
                                   text-sm font-semibold
                                   text-white
                                   transition
                                   hover:bg-brand-800
                                   active:bg-brand-900"
                        >
                            {{ __('site.contact.submit') }}
                        </button>

                        </form>
                    </div>

                </div>

            </div>

        </section>



        {{-- =====================================================
             CONTACT INFORMATION
        ====================================================== --}}
        <section
            class="border-t border-line
                   bg-surface-soft
                   py-14
                   sm:py-16"
        >

            <div
                class="mx-auto max-w-[1180px]
                       px-6
                       sm:px-8
                       lg:px-10"
            >

                <div
                    class="grid gap-10
                           md:grid-cols-2
                           lg:grid-cols-3"
                >

                    {{-- EMAIL --}}
                    <div>

                        <p
                            class="text-[11px]
                                   font-semibold
                                   uppercase
                                   tracking-[0.16em]
                                   text-brand-700"
                        >
                            Email
                        </p>

                        <p class="mt-3 text-lg font-semibold text-heading">-</p>

                    </div>


                    {{-- INSTAGRAM --}}
                    <div>

                        <p
                            class="text-[11px]
                                   font-semibold
                                   uppercase
                                   tracking-[0.16em]
                                   text-brand-700"
                        >
                            {{ __('site.contact.instagram') }}
                        </p>

                        <p class="mt-3 text-lg font-semibold text-heading">-</p>

                    </div>


                    {{-- LOCATION --}}
                    <div>

                        <p
                            class="text-[11px]
                                   font-semibold
                                   uppercase
                                   tracking-[0.16em]
                                   text-brand-700"
                        >
                            {{ __('site.contact.location') }}
                        </p>

                        <p class="mt-3 text-lg font-semibold text-heading">-</p>

                    </div>

                </div>

            </div>

        </section>

    </main>


    {{-- FOOTER --}}
    <x-public.footer />

@endsection
