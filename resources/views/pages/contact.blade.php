@extends('layouts.app')

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
                alt="Contact Ibnu Sina Batam Run 2027"
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
                        Contact Us
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
                        How can we help you?
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
                            I'm interested in...
                        </h2>
                    </div>


                    <div class="flex flex-wrap gap-3">

                        {{-- PARTICIPATION --}}
                        <label class="cursor-pointer">

                            <input
                                type="radio"
                                name="interest"
                                value="participation"
                                class="peer sr-only"
                                checked
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
                                Participation
                            </span>

                        </label>


                        {{-- SPONSORSHIP --}}
                        <label class="cursor-pointer">

                            <input
                                type="radio"
                                name="interest"
                                value="sponsorship"
                                class="peer sr-only"
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
                                Sponsorship & Partnership
                            </span>

                        </label>


                        {{-- OTHER --}}
                        <label class="cursor-pointer">

                            <input
                                type="radio"
                                name="interest"
                                value="other"
                                class="peer sr-only"
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
                                Others
                            </span>

                        </label>

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
                            My Contact Info
                        </h2>

                        <p
                            class="mt-3
                                   max-w-[240px]
                                   text-sm
                                   leading-6
                                   text-muted"
                        >
                            Fill in your details and our team will get back to you.
                        </p>

                    </div>


                    {{-- FORM --}}
                    <form class="space-y-5">


                        {{-- FULL NAME --}}
                        <div>

                            <label
                                for="full_name"
                                class="mb-2 block
                                       text-sm font-medium
                                       text-heading"
                            >
                                Full Name
                                <span class="text-danger">*</span>
                            </label>

                            <input
                                type="text"
                                id="full_name"
                                name="full_name"
                                placeholder="e.g. John Doe"
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

                        </div>



                        {{-- EMAIL --}}
                        <div>

                            <label
                                for="email"
                                class="mb-2 block
                                       text-sm font-medium
                                       text-heading"
                            >
                                Email Address
                                <span class="text-danger">*</span>
                            </label>

                            <input
                                type="email"
                                id="email"
                                name="email"
                                placeholder="e.g. mail@example.com"
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

                        </div>



                        {{-- PHONE --}}
                        <div>

                            <label
                                for="phone"
                                class="mb-2 block
                                       text-sm font-medium
                                       text-heading"
                            >
                                Phone Number
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
                                    placeholder="812 3456 7890"
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

                        </div>



                        {{-- SUBJECT --}}
                        <div>

                            <label
                                for="subject"
                                class="mb-2 block
                                       text-sm font-medium
                                       text-heading"
                            >
                                Subject
                                <span class="text-danger">*</span>
                            </label>

                            <input
                                type="text"
                                id="subject"
                                name="subject"
                                placeholder="e.g. I want to know about..."
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

                        </div>



                        {{-- MESSAGE --}}
                        <div>

                            <label
                                for="message"
                                class="mb-2 block
                                       text-sm font-medium
                                       text-heading"
                            >
                                Message
                                <span class="text-danger">*</span>
                            </label>

                            <textarea
                                id="message"
                                name="message"
                                rows="6"
                                placeholder="Type your message here..."
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
                            ></textarea>

                        </div>



                        {{-- SUBMIT --}}
                        <button
                            type="button"
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
                            Submit Message
                        </button>

                    </form>

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
                            Instagram
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
                            Location
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
