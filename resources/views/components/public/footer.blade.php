<footer
    id="contact"
    class="overflow-hidden bg-footer text-white"
>

    {{-- ======================================================
         SUBSCRIBE SECTION
    ======================================================= --}}
    <section class="bg-footer-dark">

        <div
            class="mx-auto grid max-w-[1440px]
                   gap-10
                   px-6 py-12
                   sm:px-8
                   lg:grid-cols-[0.85fr_1.65fr]
                   lg:items-center
                   lg:px-10
                   lg:py-14
                   xl:px-12"
        >

            {{-- LEFT --}}
            <div>

                <h2
                    class="text-[28px]
                           font-bold
                           uppercase
                           tracking-[-0.025em]
                           text-brand-300
                           sm:text-[32px]"
                >
                    {{ __('site.footer.subscribe') }}
                </h2>

                <p
                    class="mt-2 max-w-[390px]
                           text-[15px]
                           leading-7
                           text-white/90"
                >
                    {{ __('site.footer.subscribe_description') }}
                </p>

            </div>


            {{-- RIGHT: FORM --}}
            <form
                class="grid gap-3
                       sm:grid-cols-2
                       xl:grid-cols-[1fr_1fr_auto]"
                aria-label="{{ __('site.footer.newsletter_label') }}"
            >

                {{-- NAME --}}
                <div>
                    <label
                        for="subscribe-name"
                        class="sr-only"
                    >
                        {{ __('site.footer.name') }}
                    </label>

                    <input
                        type="text"
                        id="subscribe-name"
                        name="name"
                        placeholder="{{ __('site.footer.name') }}"
                        class="block h-[54px]
                               w-full
                               rounded-[4px]
                               border-0
                               bg-white
                               px-5
                               text-[15px]
                               text-ink
                               placeholder:text-subtle
                               focus:ring-2
                               focus:ring-brand-500"
                    >
                </div>


                {{-- EMAIL --}}
                <div>
                    <label
                        for="subscribe-email"
                        class="sr-only"
                    >
                        Email
                    </label>

                    <input
                        type="email"
                        id="subscribe-email"
                        name="email"
                        placeholder="Email"
                        class="block h-[54px]
                               w-full
                               rounded-[4px]
                               border-0
                               bg-white
                               px-5
                               text-[15px]
                               text-ink
                               placeholder:text-subtle
                               focus:ring-2
                               focus:ring-brand-500"
                    >
                </div>


                {{-- BUTTON --}}
                <button
                    type="button"
                    class="h-[54px]
                           rounded-[4px]
                           bg-accent-500
                           px-8
                           text-[15px]
                           font-bold
                           text-on-accent
                           transition-colors
                           hover:bg-accent-400
                           sm:col-span-2
                           xl:col-span-1"
                >
                    {{ __('site.footer.subscribe') }}
                </button>

            </form>

        </div>

    </section>



    {{-- ======================================================
         MAIN FOOTER
    ======================================================= --}}
    <section>

        <div
            class="mx-auto grid max-w-[1440px]
                   gap-12
                   px-6 py-12
                   sm:grid-cols-2
                   sm:px-8
                   lg:grid-cols-[1fr_0.9fr_1.25fr_1fr]
                   lg:px-10
                   lg:py-14
                   xl:px-12"
        >

            {{-- QUICK LINK --}}
            <div>

                <h3
                    class="text-[16px]
                           font-bold
                           uppercase
                           text-white"
                >
                    {{ __('site.footer.quick_links') }}
                </h3>

                <nav
                    class="mt-6 flex flex-col gap-3"
                    aria-label="{{ __('site.footer.quick_links') }}"
                >

                    <a
                        href="{{ route('race-info') }}"
                        class="w-fit
                               text-[14px]
                               text-white/90
                               transition-colors
                               hover:text-white"
                    >
                        {{ __('site.footer.race_categories') }}
                    </a>

                    <a
                        href="{{ route('faq') }}"
                        class="w-fit
                               text-[14px]
                               text-white/90
                               transition-colors
                               hover:text-white"
                    >
                        FAQ
                    </a>

                    <a
                        href="{{ route('terms') }}"
                        class="w-fit
                               text-[14px]
                               text-white/90
                               transition-colors
                               hover:text-white"
                    >
                        {{ __('navigation.terms') }}
                    </a>

                    <a
                        href="{{ route('prices') }}"
                        class="w-fit
                               text-[14px]
                               text-white/90
                               transition-colors
                               hover:text-white"
                    >
                        {{ __('site.footer.prices') }}
                    </a>

                </nav>

            </div>



            {{-- RACE INFORMATION --}}
            <div>

                <h3
                    class="text-[16px]
                           font-bold
                           uppercase
                           leading-tight
                           text-white"
                >
                    {{ __('site.footer.race_information') }}
                </h3>

                <nav
                    class="mt-6 flex flex-col gap-3"
                    aria-label="{{ __('site.footer.race_information') }}"
                >

                    <a
                        href="{{ route('race-info') }}"
                        class="w-fit
                               text-[14px]
                               text-white/90
                               transition-colors
                               hover:text-white"
                    >
                        {{ __('site.footer.race_info') }}
                    </a>

                    <a
                        href="{{ route('race-pack') }}"
                        class="w-fit
                               text-[14px]
                               text-white/90
                               transition-colors
                               hover:text-white"
                    >
                        {{ __('site.footer.race_pack') }}
                    </a>

                    <a
                        href="{{ route('podium-prize') }}"
                        class="w-fit
                               text-[14px]
                               text-white/90
                               transition-colors
                               hover:text-white"
                    >
                        {{ __('site.footer.podium_prize') }}
                    </a>

                    <a
                        href="{{ route('route') }}"
                        class="w-fit
                               text-[14px]
                               text-white/90
                               transition-colors
                               hover:text-white"
                    >
                        {{ __('site.footer.race_route') }}
                    </a>

                </nav>

            </div>



            {{-- CONTACT --}}
            <div>

                <h3
                    class="text-[16px]
                           font-bold
                           uppercase
                           text-white"
                >
                    <a href="{{ route('contact') }}" class="hover:text-white/80">{{ __('site.footer.contact') }}</a>
                </h3>


                <div class="mt-6 space-y-4">
                    <a
                        href="https://www.instagram.com/ibnusinabatamrun/"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="flex max-w-full items-center gap-3 text-[14px] text-white/90 transition-colors hover:text-white"
                    >
                        <span class="flex size-7 shrink-0 items-center justify-center rounded-full bg-white text-brand-900">
                            <svg class="size-4" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <rect x="3" y="3" width="18" height="18" rx="5" stroke="currentColor" stroke-width="2" />
                                <circle cx="12" cy="12" r="4" stroke="currentColor" stroke-width="2" />
                                <circle cx="17.5" cy="6.5" r="1" fill="currentColor" />
                            </svg>
                        </span>
                        <span class="min-w-0 break-all">@ibnusinabatamrun</span>
                    </a>

                    <a
                        href="mailto:ibsirun@yapista.org"
                        class="flex max-w-full items-center gap-3 text-[14px] text-white/90 transition-colors hover:text-white"
                    >
                        <span class="flex size-7 shrink-0 items-center justify-center rounded-full bg-white text-brand-900">
                            <svg class="size-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 6.75A2.75 2.75 0 0 1 5.75 4h12.5A2.75 2.75 0 0 1 21 6.75v10.5A2.75 2.75 0 0 1 18.25 20H5.75A2.75 2.75 0 0 1 3 17.25V6.75Z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="m4 7 8 6 8-6" />
                            </svg>
                        </span>
                        <span class="min-w-0 break-all">ibsirun@yapista.org</span>
                    </a>
                </div>

            </div>



            {{-- LOGO --}}
            <div
                class="flex items-center
                       sm:items-start
                       lg:justify-end"
            >

                <a
                    href="{{ route('home') }}"
                    aria-label="Ibnu Sina Batam Run 2027"
                >

                    <img
                        src="{{ asset('assets/images/logo/logo_ibsirun_2026_white.webp') }}"
                        alt="Ibnu Sina Batam Run 2027"
                        width="1384"
                        height="460"
                        loading="lazy"
                        decoding="async"
                        class="h-auto
                               w-[180px]
                               object-contain
                               sm:w-[200px]
                               lg:w-[220px]"
                    >

                </a>

            </div>

        </div>

    </section>



    {{-- ======================================================
         COPYRIGHT
    ======================================================= --}}
    <div class="border-t border-white/15 bg-footer-dark">

        <div
            class="mx-auto max-w-[1440px]
                   px-6 py-8
                   text-center
                   sm:px-8
                   lg:px-10"
        >

            <p
                class="text-[13px]
                       font-semibold
                       text-white"
            >
                {{ __('site.footer.copyright', ['year' => date('Y')]) }}
            </p>

        </div>

    </div>

</footer>
