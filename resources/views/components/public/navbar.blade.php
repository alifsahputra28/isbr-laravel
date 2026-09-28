@props(['variant' => 'overlay'])

@php
    $eventActive = request()->routeIs(
        'race-info',
        'race-pack',
        'prices',
        'podium-prize',
        'faq',
        'terms'
    );

    $currentRouteName = request()->route()?->getName();

    $currentLocale = app()->getLocale();

    $localizableRoutes = [
        'home',
        'about',
        'race-info',
        'race-pack',
        'prices',
        'podium-prize',
        'faq',
        'terms',
        'contact',
        'route',
    ];

    /*
    |--------------------------------------------------------------------------
    | Current locale URL
    |--------------------------------------------------------------------------
    |
    | Digunakan seluruh link internal navbar agar locale tetap terbawa.
    |
    */
    $routeUrl = static fn (string $routeName): string =>
        route($routeName, ['locale' => $currentLocale]);

    /*
    |--------------------------------------------------------------------------
    | Language switcher URL
    |--------------------------------------------------------------------------
    |
    | Mempertahankan halaman yang sedang dibuka.
    |
    | /id/race-info -> /en/race-info
    | /en/faq       -> /id/faq
    |
    */
    $localeUrl = static fn (string $locale): string =>
        in_array($currentRouteName, $localizableRoutes, true)
            ? route($currentRouteName, ['locale' => $locale])
            : route('home', ['locale' => $locale]);
@endphp


<header
    class="public-navbar {{ $variant === 'solid' ? 'is-solid' : 'is-overlay' }}"
    data-public-navbar
    data-navbar-variant="{{ $variant }}"
>
    <div
        class="relative mx-auto flex h-[92px]
               max-w-[1440px]
               items-center
               px-5
               sm:px-8
               lg:px-10
               xl:px-12"
    >

        {{-- =========================================================
             DESKTOP LEFT NAVIGATION
        ========================================================== --}}
        <nav
            class="hidden flex-1 items-center gap-7 lg:flex"
            aria-label="{{ __('navigation.main_label') }}"
        >

            {{-- HOME --}}
            <a
                href="{{ $routeUrl('home') }}"
                class="text-[14px] font-medium
                       text-white/90
                       transition-colors duration-200
                       hover:text-white
                       {{ request()->routeIs('home')
                            ? 'text-white underline underline-offset-8'
                            : '' }}"
            >
                {{ __('navigation.home') }}
            </a>


            {{-- ABOUT --}}
            <a
                href="{{ $routeUrl('about') }}"
                class="text-[14px] font-medium
                       text-white/90
                       transition-colors duration-200
                       hover:text-white
                       {{ request()->routeIs('about')
                            ? 'text-white underline underline-offset-8'
                            : '' }}"
            >
                {{ __('navigation.about') }}
            </a>


            {{-- =====================================================
                 EVENT DROPDOWN
            ====================================================== --}}
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
                           {{ $eventActive
                                ? 'text-white underline underline-offset-8'
                                : '' }}"
                    aria-haspopup="menu"
                    aria-expanded="false"
                >
                    {{ __('navigation.event') }}

                    <svg
                        aria-hidden="true"
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


                {{-- DROPDOWN MENU --}}
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
                        href="{{ $routeUrl('race-info') }}"
                        class="flex min-h-[50px]
                               items-center
                               rounded-[9px]
                               px-5
                               text-[14px] font-medium
                               text-ink
                               transition
                               hover:bg-brand-50"
                    >
                        {{ __('navigation.race_info') }}
                    </a>

                    <a
                        href="{{ $routeUrl('race-pack') }}"
                        class="flex min-h-[50px]
                               items-center
                               rounded-[9px]
                               px-5
                               text-[14px] font-medium
                               text-ink
                               transition
                               hover:bg-brand-50"
                    >
                        {{ __('navigation.race_pack') }}
                    </a>

                    <a
                        href="{{ $routeUrl('prices') }}"
                        class="flex min-h-[50px]
                               items-center
                               rounded-[9px]
                               px-5
                               text-[14px] font-medium
                               text-ink
                               transition
                               hover:bg-brand-50"
                    >
                        {{ __('navigation.prices') }}
                    </a>

                    <a
                        href="{{ $routeUrl('podium-prize') }}"
                        class="flex min-h-[50px]
                               items-center
                               rounded-[9px]
                               px-5
                               text-[14px] font-medium
                               text-ink
                               transition
                               hover:bg-brand-50"
                    >
                        {{ __('navigation.podium_prize') }}
                    </a>

                    <a
                        href="{{ $routeUrl('faq') }}"
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
                        href="{{ $routeUrl('terms') }}"
                        class="flex min-h-[50px]
                               items-center
                               rounded-[9px]
                               px-5
                               text-[14px] font-medium
                               text-ink
                               transition
                               hover:bg-brand-50"
                    >
                        {{ __('navigation.terms') }}
                    </a>

                </div>
            </div>


            {{-- ROUTE --}}
            <a
                href="{{ $routeUrl('route') }}"
                class="text-[14px] font-medium
                       text-white/90
                       transition-colors duration-200
                       hover:text-white
                       {{ request()->routeIs('route')
                            ? 'text-white underline underline-offset-8'
                            : '' }}"
            >
                {{ __('navigation.route') }}
            </a>


            {{-- CONTACT --}}
            <a
                href="{{ $routeUrl('contact') }}"
                class="text-[14px] font-medium
                       text-white/90
                       transition-colors duration-200
                       hover:text-white
                       {{ request()->routeIs('contact')
                            ? 'text-white underline underline-offset-8'
                            : '' }}"
            >
                {{ __('navigation.contact') }}
            </a>

        </nav>



        {{-- =========================================================
             CENTER LOGO
        ========================================================== --}}
        <a
            href="{{ $routeUrl('home') }}"
            class="absolute left-1/2 top-1/2
                   z-10
                   -translate-x-1/2
                   -translate-y-1/2"
            aria-label="{{ __('navigation.home') }}"
        >
            <img
                src="{{ asset('assets/images/logo/logo_ibsirun_2026_white.webp') }}"
                alt="Ibnu Sina Batam Run 2027"
                width="1384"
                height="460"
                loading="eager"
                decoding="async"
                class="h-9 w-auto
                       object-contain
                       sm:h-11
                       lg:h-12"
            >
        </a>



        {{-- =========================================================
             RIGHT AREA
        ========================================================== --}}
        <div
            class="ml-auto flex flex-1
                   items-center justify-end
                   gap-3"
        >

            {{-- =====================================================
                 DESKTOP LANGUAGE SWITCHER
                 US + INDONESIA
            ====================================================== --}}
            <nav
                class="hidden items-center gap-3 lg:flex"
                aria-label="{{ __('navigation.language') }}"
            >

                {{-- ENGLISH --}}
                <a
                    href="{{ $localeUrl('en') }}"
                    hreflang="en"
                    lang="en"
                    aria-label="English"
                    @if ($currentLocale === 'en')
                        aria-current="page"
                    @endif
                    class="group inline-flex size-8
                           items-center justify-center
                           rounded-full
                           transition-all duration-200
                           {{ $currentLocale === 'en'
                                ? 'opacity-100'
                                : 'opacity-55 hover:opacity-100' }}"
                >
                    <span
                        class="block size-8
                               overflow-hidden
                               rounded-full
                               ring-1 ring-white/25
                               transition-all duration-200
                               group-hover:ring-white/60
                               {{ $currentLocale === 'en'
                                    ? 'ring-2 ring-white'
                                    : '' }}"
                    >
                        <img
                            src="{{ asset('assets/images/flags/us.svg') }}"
                            alt=""
                            width="32"
                            height="32"
                            class="h-full w-full object-cover"
                            aria-hidden="true"
                        >
                    </span>
                </a>


                {{-- INDONESIA --}}
                <a
                    href="{{ $localeUrl('id') }}"
                    hreflang="id"
                    lang="id"
                    aria-label="Bahasa Indonesia"
                    @if ($currentLocale === 'id')
                        aria-current="page"
                    @endif
                    class="group inline-flex size-8
                           items-center justify-center
                           rounded-full
                           transition-all duration-200
                           {{ $currentLocale === 'id'
                                ? 'opacity-100'
                                : 'opacity-55 hover:opacity-100' }}"
                >
                    <span
                        class="block size-8
                               overflow-hidden
                               rounded-full
                               ring-1 ring-white/25
                               transition-all duration-200
                               group-hover:ring-white/60
                               {{ $currentLocale === 'id'
                                    ? 'ring-2 ring-white'
                                    : '' }}"
                    >
                        <img
                            src="{{ asset('assets/images/flags/id.svg') }}"
                            alt=""
                            width="32"
                            height="32"
                            class="h-full w-full object-cover"
                            aria-hidden="true"
                        >
                    </span>
                </a>

            </nav>



            {{-- =====================================================
                 MOBILE LANGUAGE SWITCHER

                 PENTING:
                 Switcher ini berada DI LUAR mobile navigation menu.
                 Selalu tampil di navbar mobile.
            ====================================================== --}}
            <nav
                class="flex items-center gap-2 lg:hidden"
                aria-label="{{ __('navigation.language') }}"
            >

                {{-- ENGLISH --}}
                <a
                    href="{{ $localeUrl('en') }}"
                    hreflang="en"
                    lang="en"
                    aria-label="English"
                    @if ($currentLocale === 'en')
                        aria-current="page"
                    @endif
                    class="group inline-flex size-8
                           items-center justify-center
                           rounded-full
                           transition-all duration-200
                           {{ $currentLocale === 'en'
                                ? 'opacity-100'
                                : 'opacity-55 hover:opacity-100' }}"
                >
                    <span
                        class="block size-7
                               overflow-hidden
                               rounded-full
                               ring-1 ring-white/25
                               transition-all duration-200
                               group-hover:ring-white/60
                               sm:size-8
                               {{ $currentLocale === 'en'
                                    ? 'ring-2 ring-white'
                                    : '' }}"
                    >
                        <img
                            src="{{ asset('assets/images/flags/us.svg') }}"
                            alt=""
                            width="32"
                            height="32"
                            class="h-full w-full object-cover"
                            aria-hidden="true"
                        >
                    </span>
                </a>


                {{-- INDONESIA --}}
                <a
                    href="{{ $localeUrl('id') }}"
                    hreflang="id"
                    lang="id"
                    aria-label="Bahasa Indonesia"
                    @if ($currentLocale === 'id')
                        aria-current="page"
                    @endif
                    class="group inline-flex size-8
                           items-center justify-center
                           rounded-full
                           transition-all duration-200
                           {{ $currentLocale === 'id'
                                ? 'opacity-100'
                                : 'opacity-55 hover:opacity-100' }}"
                >
                    <span
                        class="block size-7
                               overflow-hidden
                               rounded-full
                               ring-1 ring-white/25
                               transition-all duration-200
                               group-hover:ring-white/60
                               sm:size-8
                               {{ $currentLocale === 'id'
                                    ? 'ring-2 ring-white'
                                    : '' }}"
                    >
                        <img
                            src="{{ asset('assets/images/flags/id.svg') }}"
                            alt=""
                            width="32"
                            height="32"
                            class="h-full w-full object-cover"
                            aria-hidden="true"
                        >
                    </span>
                </a>

            </nav>



            {{-- =====================================================
                 MOBILE MENU BUTTON
            ====================================================== --}}
            <button
                type="button"
                id="mobile-navbar-toggle"
                class="hs-collapse-toggle
                       inline-flex size-11
                       shrink-0
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
                aria-label="{{ __('navigation.open_navigation') }}"
            >

                {{-- HAMBURGER --}}
                <svg
                    aria-hidden="true"
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


                {{-- CLOSE --}}
                <svg
                    aria-hidden="true"
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



    {{-- =============================================================
         MOBILE NAVIGATION MENU

         LANGUAGE SWITCHER SUDAH TIDAK ADA DI SINI.
    ============================================================== --}}
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
                   {{ $variant === 'solid'
                        ? 'bg-brand-900/95'
                        : 'bg-neutral-950/95' }}
                   p-2
                   shadow-2xl
                   backdrop-blur-xl"
        >

            {{-- HOME --}}
            <a
                href="{{ $routeUrl('home') }}"
                class="block rounded-xl
                       px-4 py-3
                       text-sm font-medium
                       text-white
                       transition
                       hover:bg-white/10
                       {{ request()->routeIs('home')
                            ? 'bg-white/10'
                            : '' }}"
            >
                {{ __('navigation.home') }}
            </a>


            {{-- ABOUT --}}
            <a
                href="{{ $routeUrl('about') }}"
                class="block rounded-xl
                       px-4 py-3
                       text-sm font-medium
                       text-white
                       transition
                       hover:bg-white/10
                       {{ request()->routeIs('about')
                            ? 'bg-white/10'
                            : '' }}"
            >
                {{ __('navigation.about') }}
            </a>



            {{-- =====================================================
                 MOBILE EVENT ACCORDION
            ====================================================== --}}
            <div
                class="hs-accordion"
                id="mobile-event-accordion"
            >

                <button
                    type="button"
                    id="mobile-event-toggle"
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
                           {{ $eventActive
                                ? 'bg-white/10'
                                : '' }}"
                    aria-expanded="false"
                    aria-controls="mobile-event-menu"
                >
                    {{ __('navigation.event') }}

                    <svg
                        aria-hidden="true"
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
                    id="mobile-event-menu"
                    class="hs-accordion-content
                           hidden w-full
                           overflow-hidden
                           transition-[height]
                           duration-300"
                    aria-labelledby="mobile-event-toggle"
                >

                    <div class="pb-2 pl-3">

                        <a
                            href="{{ $routeUrl('race-info') }}"
                            class="block rounded-lg
                                   px-4 py-3
                                   text-sm
                                   text-white/65
                                   transition
                                   hover:bg-white/10
                                   hover:text-white"
                        >
                            {{ __('navigation.race_info') }}
                        </a>

                        <a
                            href="{{ $routeUrl('race-pack') }}"
                            class="block rounded-lg
                                   px-4 py-3
                                   text-sm
                                   text-white/65
                                   transition
                                   hover:bg-white/10
                                   hover:text-white"
                        >
                            {{ __('navigation.race_pack') }}
                        </a>

                        <a
                            href="{{ $routeUrl('prices') }}"
                            class="block rounded-lg
                                   px-4 py-3
                                   text-sm
                                   text-white/65
                                   transition
                                   hover:bg-white/10
                                   hover:text-white"
                        >
                            {{ __('navigation.prices') }}
                        </a>

                        <a
                            href="{{ $routeUrl('podium-prize') }}"
                            class="block rounded-lg
                                   px-4 py-3
                                   text-sm
                                   text-white/65
                                   transition
                                   hover:bg-white/10
                                   hover:text-white"
                        >
                            {{ __('navigation.podium_prize') }}
                        </a>

                        <a
                            href="{{ $routeUrl('faq') }}"
                            class="block rounded-lg
                                   px-4 py-3
                                   text-sm
                                   text-white/65
                                   transition
                                   hover:bg-white/10
                                   hover:text-white"
                        >
                            FAQ
                        </a>

                        <a
                            href="{{ $routeUrl('terms') }}"
                            class="block rounded-lg
                                   px-4 py-3
                                   text-sm
                                   text-white/65
                                   transition
                                   hover:bg-white/10
                                   hover:text-white"
                        >
                            {{ __('navigation.terms') }}
                        </a>

                    </div>

                </div>

            </div>



            {{-- ROUTE --}}
            <a
                href="{{ $routeUrl('route') }}"
                class="block rounded-xl
                       px-4 py-3
                       text-sm font-medium
                       text-white
                       transition
                       hover:bg-white/10
                       {{ request()->routeIs('route')
                            ? 'bg-white/10'
                            : '' }}"
            >
                {{ __('navigation.route') }}
            </a>


            {{-- CONTACT --}}
            <a
                href="{{ $routeUrl('contact') }}"
                class="block rounded-xl
                       px-4 py-3
                       text-sm font-medium
                       text-white
                       transition
                       hover:bg-white/10
                       {{ request()->routeIs('contact')
                            ? 'bg-white/10'
                            : '' }}"
            >
                {{ __('navigation.contact') }}
            </a>

        </div>

    </div>

</header>


@if ($variant === 'solid')
    <div
        class="public-navbar-offset"
        aria-hidden="true"
    ></div>
@endif