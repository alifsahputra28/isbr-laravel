@extends('layouts.app')

@section('content')

    {{-- NAVBAR --}}
    <x-public.navbar variant="solid" />


    <main class="bg-white">

        {{-- =====================================================
             RACE INFORMATION
        ====================================================== --}}
        <section class="py-14 sm:py-16 lg:py-20">

            <div
                class="mx-auto max-w-[1180px]
                       px-6 sm:px-8
                       lg:px-10"
            >
                <div class="mb-10 max-w-2xl">

                    <p
                        class="text-[11px]
                               font-semibold
                               uppercase
                               tracking-[0.18em]
                               text-brand-700"
                    >
                        Event Information
                    </p>

                    <h1
                        class="mt-2
                               text-[36px]
                               font-semibold
                               tracking-[-0.04em]
                               text-heading
                               sm:text-[42px]"
                    >
                        Race Info
                    </h1>

                    <p
                        class="mt-3
                               max-w-xl
                               text-[15px]
                               leading-7
                               text-body"
                    >
                        Everything you need to know before race day,
                        from race categories and schedules to regulations
                        and jersey sizing.
                    </p>

                </div>

                {{-- TAB NAVIGATION --}}
                <div class="overflow-x-auto">

                    <nav
                        class="flex min-w-max
                               border-b border-line"
                        role="tablist"
                        aria-label="Race Information"
                    >

                        {{-- OVERVIEW --}}
                        <button
                            type="button"
                            class="active
                                   hs-tab-active:border-brand-600
                                   hs-tab-active:text-brand-700
                                   -mb-px
                                   inline-flex
                                   items-center
                                   border-b-2
                                   border-transparent
                                   px-5 py-4
                                   text-sm
                                   font-medium
                                   text-muted
                                   transition
                                   hover:text-ink"
                            id="race-tab-overview"
                            data-hs-tab="#race-panel-overview"
                            aria-controls="race-panel-overview"
                            role="tab"
                        >
                            Overview
                        </button>


                        {{-- SCHEDULE --}}
                        <button
                            type="button"
                            class="hs-tab-active:border-brand-600
                                   hs-tab-active:text-brand-700
                                   -mb-px
                                   inline-flex
                                   items-center
                                   border-b-2
                                   border-transparent
                                   px-5 py-4
                                   text-sm
                                   font-medium
                                   text-muted
                                   transition
                                   hover:text-ink"
                            id="race-tab-schedule"
                            data-hs-tab="#race-panel-schedule"
                            aria-controls="race-panel-schedule"
                            role="tab"
                        >
                            Schedule
                        </button>


                        {{-- RULES --}}
                        <button
                            type="button"
                            class="hs-tab-active:border-brand-600
                                   hs-tab-active:text-brand-700
                                   -mb-px
                                   inline-flex
                                   items-center
                                   border-b-2
                                   border-transparent
                                   px-5 py-4
                                   text-sm
                                   font-medium
                                   text-muted
                                   transition
                                   hover:text-ink"
                            id="race-tab-rules"
                            data-hs-tab="#race-panel-rules"
                            aria-controls="race-panel-rules"
                            role="tab"
                        >
                            Rules & Regulations
                        </button>


                        {{-- SIZE CHART --}}
                        <button
                            type="button"
                            class="hs-tab-active:border-brand-600
                                   hs-tab-active:text-brand-700
                                   -mb-px
                                   inline-flex
                                   items-center
                                   border-b-2
                                   border-transparent
                                   px-5 py-4
                                   text-sm
                                   font-medium
                                   text-muted
                                   transition
                                   hover:text-ink"
                            id="race-tab-size"
                            data-hs-tab="#race-panel-size"
                            aria-controls="race-panel-size"
                            role="tab"
                        >
                            Size Chart
                        </button>

                    </nav>

                </div>



                {{-- =================================================
                     TAB 1 — OVERVIEW
                ================================================== --}}
                <div
                    id="race-panel-overview"
                    role="tabpanel"
                    aria-labelledby="race-tab-overview"
                    class="pt-10"
                >

                    {{-- QUICK INFO --}}
                    <div
                        class="grid gap-px
                               overflow-hidden
                               rounded-2xl
                               border border-line
                               bg-line
                               sm:grid-cols-2
                               lg:grid-cols-4"
                    >

                        <div class="bg-white p-6">
                            <p class="text-xs font-medium text-muted">
                                Race Date
                            </p>

                            <p class="mt-2 font-semibold text-heading">
                                21 June 2026
                            </p>
                        </div>


                        <div class="bg-white p-6">
                            <p class="text-xs font-medium text-muted">
                                Location
                            </p>

                            <p class="mt-2 font-semibold text-heading">
                                Batam
                            </p>
                        </div>


                        <div class="bg-white p-6">
                            <p class="text-xs font-medium text-muted">
                                Categories
                            </p>

                            <p class="mt-2 font-semibold text-heading">
                                4 Race Categories
                            </p>
                        </div>


                        <div class="bg-white p-6">
                            <p class="text-xs font-medium text-muted">
                                Registration
                            </p>

                            <p class="mt-2 font-semibold text-brand-700">
                                Open
                            </p>
                        </div>

                    </div>



                    {{-- CATEGORY TITLE --}}
                    <div class="mt-12">

                        <h2
                            class="text-[26px]
                                   font-semibold
                                   tracking-[-0.03em]
                                   text-heading"
                        >
                            Race Categories
                        </h2>

                        <p class="mt-2 text-sm text-muted">
                            Choose the distance that matches your challenge.
                        </p>

                    </div>


                    {{-- CATEGORY GRID --}}
                    @php
                        $categories = [
                            [
                                'name' => 'Marathon',
                                'distance' => '42K',
                                'price' => 'Rp 1.200.000',
                                'package' => 'BIB Number, Jersey, Finisher Medal, Finisher Tee',
                            ],
                            [
                                'name' => 'Half Marathon',
                                'distance' => '21K',
                                'price' => 'Rp 900.000',
                                'package' => 'BIB Number, Jersey, Finisher Medal, Finisher Tee',
                            ],
                            [
                                'name' => '10K',
                                'distance' => '10K',
                                'price' => 'Rp 800.000',
                                'package' => 'BIB Number, Jersey, Finisher Medal',
                            ],
                            [
                                'name' => '5K Fun Run',
                                'distance' => '5K',
                                'price' => 'Rp 450.000',
                                'package' => 'BIB Number, Jersey, Finisher Medal',
                            ],
                        ];
                    @endphp


                    <div
                        class="mt-6
                               grid gap-4
                               md:grid-cols-2
                               xl:grid-cols-4"
                    >

                        @foreach ($categories as $category)

                            <article
                                class="rounded-2xl
                                       border border-line
                                       bg-white
                                       p-6
                                       transition
                                       hover:border-brand-300"
                            >

                                <div
                                    class="flex items-start
                                           justify-between gap-4"
                                >

                                    <div>

                                        <p
                                            class="text-xs
                                                   font-semibold
                                                   uppercase
                                                   tracking-[0.12em]
                                                   text-brand-700"
                                        >
                                            {{ $category['distance'] }}
                                        </p>

                                        <h3
                                            class="mt-2
                                                   text-lg
                                                   font-semibold
                                                   text-heading"
                                        >
                                            {{ $category['name'] }}
                                        </h3>

                                    </div>

                                </div>


                                <div class="my-5 border-t border-line"></div>


                                <p
                                    class="text-xl
                                           font-semibold
                                           tracking-[-0.025em]
                                           text-brand-700"
                                >
                                    {{ $category['price'] }}
                                </p>


                                <p
                                    class="mt-3
                                           text-sm
                                           leading-6
                                           text-muted"
                                >
                                    {{ $category['package'] }}
                                </p>

                            </article>

                        @endforeach

                    </div>

                </div>



                {{-- =================================================
                     TAB 2 — SCHEDULE
                ================================================== --}}
                <div
                    id="race-panel-schedule"
                    class="hidden pt-10"
                    role="tabpanel"
                    aria-labelledby="race-tab-schedule"
                >

                    <div class="max-w-4xl">

                        <h2
                            class="text-[26px]
                                   font-semibold
                                   tracking-[-0.03em]
                                   text-heading"
                        >
                            Race Day Schedule
                        </h2>

                        <p class="mt-2 text-sm text-muted">
                            Please arrive early and follow your designated
                            starting time.
                        </p>


                        <div
                            class="mt-8
                                   overflow-hidden
                                   rounded-2xl
                                   border border-line"
                        >

                            @foreach ([
                                ['04:30', 'Race Village Open', 'All participants'],
                                ['04:45', 'Marathon Start', '42K'],
                                ['05:15', 'Half Marathon Start', '21K'],
                                ['06:00', '10K Start', '10K'],
                                ['06:15', '5K Fun Run Start', '5K'],
                                ['09:30', 'Award Ceremony', 'Main Stage'],
                            ] as $schedule)

                                <div
                                    class="grid grid-cols-[90px_1fr]
                                           gap-5
                                           border-b border-line
                                           px-6 py-5
                                           last:border-b-0
                                           sm:grid-cols-[110px_1fr_180px]"
                                >

                                    <p
                                        class="font-semibold
                                               text-brand-700"
                                    >
                                        {{ $schedule[0] }}
                                    </p>

                                    <p
                                        class="font-medium
                                               text-heading"
                                    >
                                        {{ $schedule[1] }}
                                    </p>

                                    <p
                                        class="hidden
                                               text-sm
                                               text-muted
                                               sm:block"
                                    >
                                        {{ $schedule[2] }}
                                    </p>

                                </div>

                            @endforeach

                        </div>



                        {{-- CUT OFF --}}
                        <div class="mt-12">

                            <h3
                                class="text-lg
                                       font-semibold
                                       text-heading"
                            >
                                Cut Off Time
                            </h3>


                            <div
                                class="mt-5
                                       grid gap-4
                                       sm:grid-cols-2"
                            >

                                @foreach ([
                                    ['Marathon', '7 Hours'],
                                    ['Half Marathon', '4 Hours'],
                                    ['10K', '2 Hours'],
                                    ['5K Fun Run', '1 Hour'],
                                ] as $cutoff)

                                    <div
                                        class="flex items-center
                                               justify-between
                                               rounded-xl
                                               border border-line
                                               p-5"
                                    >

                                        <span
                                            class="text-sm
                                                   font-medium
                                                   text-heading"
                                        >
                                            {{ $cutoff[0] }}
                                        </span>

                                        <span
                                            class="text-sm
                                                   font-semibold
                                                   text-brand-700"
                                        >
                                            {{ $cutoff[1] }}
                                        </span>

                                    </div>

                                @endforeach

                            </div>

                        </div>

                    </div>

                </div>



                {{-- =================================================
                     TAB 3 — RULES
                ================================================== --}}
                <div
                    id="race-panel-rules"
                    class="hidden pt-10"
                    role="tabpanel"
                    aria-labelledby="race-tab-rules"
                >

                    <div class="max-w-4xl">

                        <h2
                            class="text-[26px]
                                   font-semibold
                                   tracking-[-0.03em]
                                   text-heading"
                        >
                            Rules & Regulations
                        </h2>

                        <p
                            class="mt-2
                                   text-sm
                                   leading-6
                                   text-muted"
                        >
                            Please review the participant requirements
                            before completing your registration.
                        </p>


                        {{-- PRELINE ACCORDION --}}
                        <div
                            class="hs-accordion-group
                                   mt-8
                                   space-y-3"
                        >

                            {{-- ELIGIBILITY --}}
                            <div
                                class="hs-accordion
                                       overflow-hidden
                                       rounded-xl
                                       border border-line
                                       bg-white"
                                id="rules-eligibility"
                            >

                                <button
                                    class="hs-accordion-toggle
                                           flex w-full
                                           items-center
                                           justify-between
                                           px-6 py-5
                                           text-left
                                           font-semibold
                                           text-heading"
                                    type="button"
                                >
                                    Participant Eligibility

                                    <svg
                                        class="size-4
                                               transition-transform
                                               hs-accordion-active:rotate-180"
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke="currentColor"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="2"
                                            d="m6 9 6 6 6-6"
                                        />
                                    </svg>

                                </button>

                                <div
                                    class="hs-accordion-content
                                           hidden w-full
                                           overflow-hidden
                                           transition-[height]"
                                >

                                    <div
                                        class="border-t border-line
                                               px-6 py-5"
                                    >

                                        <ul
                                            class="list-disc
                                                   space-y-3
                                                   pl-5
                                                   text-sm
                                                   leading-6
                                                   text-body"
                                        >
                                            <li>
                                                Participants must meet the minimum
                                                age requirement for their selected category.
                                            </li>

                                            <li>
                                                Registration information must match
                                                the participant's official identification.
                                            </li>

                                            <li>
                                                Participants are responsible for ensuring
                                                they are medically fit to compete.
                                            </li>
                                        </ul>

                                    </div>

                                </div>

                            </div>


                            {{-- REGISTRATION --}}
                            <div
                                class="hs-accordion
                                       overflow-hidden
                                       rounded-xl
                                       border border-line
                                       bg-white"
                                id="rules-registration"
                            >

                                <button
                                    class="hs-accordion-toggle
                                           flex w-full
                                           items-center
                                           justify-between
                                           px-6 py-5
                                           text-left
                                           font-semibold
                                           text-heading"
                                    type="button"
                                >
                                    Registration & Ticket

                                    <svg
                                        class="size-4
                                               transition-transform
                                               hs-accordion-active:rotate-180"
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke="currentColor"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="2"
                                            d="m6 9 6 6 6-6"
                                        />
                                    </svg>

                                </button>

                                <div
                                    class="hs-accordion-content
                                           hidden w-full
                                           overflow-hidden
                                           transition-[height]"
                                >

                                    <div
                                        class="border-t border-line
                                               px-6 py-5"
                                    >

                                        <ul
                                            class="list-disc
                                                   space-y-3
                                                   pl-5
                                                   text-sm
                                                   leading-6
                                                   text-body"
                                        >
                                            <li>
                                                Each registration is valid for one participant.
                                            </li>

                                            <li>
                                                Registration fees are subject to the event's
                                                refund and transfer policy.
                                            </li>

                                            <li>
                                                Category and jersey size changes may be
                                                restricted after registration.
                                            </li>
                                        </ul>

                                    </div>

                                </div>

                            </div>


                            {{-- RACE DAY --}}
                            <div
                                class="hs-accordion
                                       overflow-hidden
                                       rounded-xl
                                       border border-line
                                       bg-white"
                                id="rules-race-day"
                            >

                                <button
                                    class="hs-accordion-toggle
                                           flex w-full
                                           items-center
                                           justify-between
                                           px-6 py-5
                                           text-left
                                           font-semibold
                                           text-heading"
                                    type="button"
                                >
                                    Race Day Rules

                                    <svg
                                        class="size-4
                                               transition-transform
                                               hs-accordion-active:rotate-180"
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke="currentColor"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="2"
                                            d="m6 9 6 6 6-6"
                                        />
                                    </svg>

                                </button>

                                <div
                                    class="hs-accordion-content
                                           hidden w-full
                                           overflow-hidden
                                           transition-[height]"
                                >

                                    <div
                                        class="border-t border-line
                                               px-6 py-5"
                                    >

                                        <p
                                            class="text-sm
                                                   leading-7
                                                   text-body"
                                        >
                                            Participants must wear the official BIB
                                            visibly during the race and comply with
                                            instructions from race officials, marshals,
                                            and medical personnel.
                                        </p>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>



                {{-- =================================================
                     TAB 4 — SIZE CHART
                ================================================== --}}
                <div
                    id="race-panel-size"
                    class="hidden pt-10"
                    role="tabpanel"
                    aria-labelledby="race-tab-size"
                >

                    <div class="max-w-4xl">

                        <h2
                            class="text-[26px]
                                   font-semibold
                                   tracking-[-0.03em]
                                   text-heading"
                        >
                            Jersey Size Chart
                        </h2>

                        <p
                            class="mt-2
                                   max-w-2xl
                                   text-sm
                                   leading-6
                                   text-muted"
                        >
                            Check your measurements carefully before selecting
                            your jersey size during registration.
                        </p>


                        <div
                            class="mt-8
                                   overflow-hidden
                                   rounded-2xl
                                   bg-brand-800
                                   p-6
                                   sm:p-8"
                        >

                            <img
                                src="{{ asset('assets/images/event/size-chart.png') }}"
                                alt="Jersey Size Chart"
                                class="mx-auto
                                       max-h-[620px]
                                       w-auto
                                       max-w-full
                                       object-contain"
                            >

                        </div>

                    </div>

                </div>

            </div>

        </section>

    </main>


    <x-public.footer />

@endsection
