@props(['variant' => 'overlay'])

@php
    $eventActive = request()->routeIs('race-info', 'race-pack', 'prices', 'podium-prize', 'faq', 'terms');
@endphp

<header class="public-navbar {{ $variant === 'solid' ? 'is-solid' : 'is-overlay' }}">

    <div
        class="relative mx-auto flex h-[92px]
               max-w-[1440px]
               items-center
               px-6 sm:px-8 lg:px-10 xl:px-12"
    >

        {{-- =========================
             LEFT NAVIGATION
        ========================== --}}
        <nav
            class="hidden flex-1 items-center gap-7 lg:flex"
            aria-label="Main navigation"
        >

            {{-- HOME --}}
            <a
                href="{{ route('home') }}"
                class="text-[14px] font-medium
                       text-white/90
                       transition-colors duration-200
                       hover:text-white
                       {{ request()->routeIs('home') ? 'text-white underline underline-offset-8' : '' }}"
            >
                Home
            </a>


            {{-- ABOUT --}}
            <a
                href="{{ route('about') }}"
                class="text-[14px] font-medium
                       text-white/90
                       transition-colors duration-200
                       hover:text-white
                       {{ request()->routeIs('about') ? 'text-white underline underline-offset-8' : '' }}"
            >
                About
            </a>


            {{-- EVENT DROPDOWN --}}
            <div class="hs-dropdown relative inline-flex">

                <button
                    id="event-dropdown"
                    type="button"
                    class="hs-dropdown-toggle
                           inline-flex items-center gap-1.5
                           text-[14px] font-medium
                           text-white/90
                           transition-colors duration-200
                           hover:text-white
                           {{ $eventActive ? 'text-white underline underline-offset-8' : '' }}"
                    aria-haspopup="menu"
                    aria-expanded="false"
                >
                    Event

                    <svg
                        class="size-4
                               transition-transform duration-200
                               hs-dropdown-open:rotate-180"
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="2"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="m6 9 6 6 6-6"
                        />
                    </svg>
                </button>


                {{-- DROPDOWN --}}
                <div
                    class="hs-dropdown-menu
                           z-50 mt-5 hidden
                           min-w-[250px]
                           rounded-[14px]
                           bg-white
                           p-2
                           opacity-0
                           shadow-[0_20px_60px_rgba(0,0,0,0.18)]
                           transition-[opacity,margin]
                           duration-200
                           hs-dropdown-open:opacity-100"
                    role="menu"
                    aria-labelledby="event-dropdown"
                >

                    <a
                        href="{{ route('race-info') }}"
                        class="flex min-h-[50px]
                               items-center
                               rounded-[9px]
                               px-5
                               text-[14px] font-medium
                               text-ink
                               transition
                               hover:bg-brand-50"
                    >
                        Race Info
                    </a>

                    <a
                        href="{{ route('race-pack') }}"
                        class="flex min-h-[50px]
                               items-center
                               rounded-[9px]
                               px-5
                               text-[14px] font-medium
                               text-ink
                               transition
                               hover:bg-brand-50"
                    >
                        Race Pack
                    </a>

                    <a
                        href="{{ route('prices') }}"
                        class="flex min-h-[50px]
                               items-center
                               rounded-[9px]
                               px-5
                               text-[14px] font-medium
                               text-ink
                               transition
                               hover:bg-brand-50"
                    >
                        Prices
                    </a>

                    <a
                        href="{{ route('podium-prize') }}"
                        class="flex min-h-[50px]
                               items-center
                               rounded-[9px]
                               px-5
                               text-[14px] font-medium
                               text-ink
                               transition
                               hover:bg-brand-50"
                    >
                        Podium Prize
                    </a>

                    <a
                        href="{{ route('faq') }}"
                        class="flex min-h-[50px]
                               items-center
                               rounded-[9px]
                               px-5
                               text-[14px] font-medium
                               text-ink
                               transition
                               hover:bg-brand-50"
                    >
                        FAQ
                    </a>

                    <a
                        href="{{ route('terms') }}"
                        class="flex min-h-[50px]
                               items-center
                               rounded-[9px]
                               px-5
                               text-[14px] font-medium
                               text-ink
                               transition
                               hover:bg-brand-50"
                    >
                        Terms & Conditions
                    </a>

                </div>

            </div>


            {{-- ROUTE --}}
            <a
                href="{{ route('route') }}"
                class="text-[14px] font-medium
                       text-white/90
                       transition-colors duration-200
                       hover:text-white
                       {{ request()->routeIs('route') ? 'text-white underline underline-offset-8' : '' }}"
            >
                Route
            </a>


            {{-- CONTACT --}}
            <a
                href="{{ route('contact') }}"
                class="text-[14px] font-medium
                       text-white/90
                       transition-colors duration-200
                       hover:text-white
                       {{ request()->routeIs('contact') ? 'text-white underline underline-offset-8' : '' }}"
            >
                Contact Us
            </a>

        </nav>



        {{-- =========================
             CENTER LOGO
        ========================== --}}
        <a
            href="{{ route('home') }}"
            class="absolute left-1/2 top-1/2
                   z-10
                   -translate-x-1/2
                   -translate-y-1/2"
            aria-label="Home"
        >
            <img
                src="{{ asset('assets/images/logo/logo_ibsirun_2026_white.webp') }}"
                alt="Event Logo"
                class="h-10 w-auto
                       object-contain
                       sm:h-11
                       lg:h-12"
            >
        </a>



        {{-- =========================
             RIGHT
        ========================== --}}
        <div
            class="ml-auto flex flex-1
                   items-center justify-end"
        >

            {{-- MOBILE MENU BUTTON --}}
            <button
                type="button"
                id="mobile-navbar-toggle"
                class="hs-collapse-toggle
                       inline-flex size-11
                       items-center justify-center
                       rounded-full
                       border border-white/30
                       bg-black/10
                       text-white
                       backdrop-blur-sm
                       transition
                       hover:bg-white/10
                       lg:hidden"
                aria-expanded="false"
                aria-controls="mobile-navbar"
                data-hs-collapse="#mobile-navbar"
                aria-label="Open navigation"
            >

                {{-- Hamburger --}}
                <svg
                    class="size-5 hs-collapse-open:hidden"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                    stroke-width="2"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M4 6h16M4 12h16M4 18h16"
                    />
                </svg>


                {{-- Close --}}
                <svg
                    class="hidden size-5 hs-collapse-open:block"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                    stroke-width="2"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M6 18 18 6M6 6l12 12"
                    />
                </svg>

            </button>

        </div>

    </div>



    {{-- =========================
         MOBILE NAVIGATION
    ========================== --}}
    <div
        id="mobile-navbar"
        class="hs-collapse hidden
               overflow-hidden
               px-4
               transition-all duration-300
               lg:hidden"
        aria-labelledby="mobile-navbar-toggle"
    >

        <div
            class="rounded-2xl
                   border border-white/10
                   {{ $variant === 'solid' ? 'bg-brand-900/95' : 'bg-neutral-950/95' }}
                   p-2
                   shadow-2xl
                   backdrop-blur-xl"
        >

            <a
                href="{{ route('home') }}"
                class="block rounded-xl
                       px-4 py-3
                       text-sm font-medium
                       text-white
                       transition
                       hover:bg-white/10
                       {{ request()->routeIs('home') ? 'bg-white/10' : '' }}"
            >
                Home
            </a>


            <a
                href="{{ route('about') }}"
                class="block rounded-xl
                       px-4 py-3
                       text-sm font-medium
                       text-white
                       transition
                       hover:bg-white/10
                       {{ request()->routeIs('about') ? 'bg-white/10' : '' }}"
            >
                About
            </a>


            {{-- MOBILE EVENT ACCORDION --}}
            <div
                class="hs-accordion"
                id="mobile-event-accordion"
            >

                <button
                    type="button"
                    class="hs-accordion-toggle
                           flex w-full
                           items-center justify-between
                           rounded-xl
                           px-4 py-3
                           text-left
                           text-sm font-medium
                           text-white
                           transition
                           hover:bg-white/10
                           {{ $eventActive ? 'bg-white/10' : '' }}"
                >
                    Event

                    <svg
                        class="size-4
                               transition-transform duration-200
                               hs-accordion-active:rotate-180"
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        stroke-width="2"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="m6 9 6 6 6-6"
                        />
                    </svg>
                </button>


                <div
                    class="hs-accordion-content
                           hidden w-full
                           overflow-hidden
                           transition-[height]
                           duration-300"
                >

                    <div class="pb-2 pl-3">

                        <a
                            href="{{ route('race-info') }}"
                            class="block rounded-lg
                                   px-4 py-3
                                   text-sm
                                   text-white/65
                                   hover:bg-white/10
                                   hover:text-white"
                        >
                            Race Info
                        </a>

                        <a
                            href="{{ route('race-pack') }}"
                            class="block rounded-lg
                                   px-4 py-3
                                   text-sm
                                   text-white/65
                                   hover:bg-white/10
                                   hover:text-white"
                        >
                            Race Pack
                        </a>

                        <a
                            href="{{ route('prices') }}"
                            class="block rounded-lg
                                   px-4 py-3
                                   text-sm
                                   text-white/65
                                   hover:bg-white/10
                                   hover:text-white"
                        >
                            Prices
                        </a>

                        <a
                            href="{{ route('podium-prize') }}"
                            class="block rounded-lg
                                   px-4 py-3
                                   text-sm
                                   text-white/65
                                   hover:bg-white/10
                                   hover:text-white"
                        >
                            Podium Prize
                        </a>

                        <a
                            href="{{ route('faq') }}"
                            class="block rounded-lg
                                   px-4 py-3
                                   text-sm
                                   text-white/65
                                   hover:bg-white/10
                                   hover:text-white"
                        >
                            FAQ
                        </a>

                        <a
                            href="{{ route('terms') }}"
                            class="block rounded-lg
                                   px-4 py-3
                                   text-sm
                                   text-white/65
                                   hover:bg-white/10
                                   hover:text-white"
                        >
                            Terms & Conditions
                        </a>

                    </div>

                </div>

            </div>


            <a
                href="{{ route('route') }}"
                class="block rounded-xl
                       px-4 py-3
                       text-sm font-medium
                       text-white
                       transition
                       hover:bg-white/10
                       {{ request()->routeIs('route') ? 'bg-white/10' : '' }}"
            >
                Route
            </a>


            <a
                href="{{ route('contact') }}"
                class="block rounded-xl
                       px-4 py-3
                       text-sm font-medium
                       text-white
                       transition
                       hover:bg-white/10
                       {{ request()->routeIs('contact') ? 'bg-white/10' : '' }}"
            >
                Contact Us
            </a>


        </div>

    </div>

</header>
