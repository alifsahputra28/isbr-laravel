<section class="min-h-screen bg-canvas p-1">

    <div
        class="relative
               h-[calc(100svh-8px)]
               min-h-[720px]
               overflow-hidden
               rounded-[20px]
               bg-neutral-950"
    >

        {{-- BACKGROUND IMAGE --}}
        <img
            src="{{ asset('assets/images/event/hero.webp') }}"
            alt="Ibnu Sina Batam Run 2027"
            width="6000"
            height="4000"
            loading="eager"
            fetchpriority="high"
            decoding="async"
            class="absolute inset-0
                   h-full w-full
                   object-cover
                   object-center"
        >


        {{-- GENERAL DARK OVERLAY --}}
        <div class="absolute inset-0 bg-black/20"></div>


        {{-- TOP GRADIENT --}}
        <div
            class="absolute inset-x-0 top-0
                   h-[210px]
                   bg-gradient-to-b
                   from-black/50
                   via-black/15
                   to-transparent"
        ></div>


        {{-- LEFT GRADIENT --}}
        <div
            class="absolute inset-y-0 left-0
                   w-full
                   bg-gradient-to-r
                   from-black/40
                   via-black/10
                   to-transparent
                   lg:w-[75%]"
        ></div>


        {{-- BOTTOM GRADIENT --}}
        <div
            class="absolute inset-x-0 bottom-0
                   h-[65%]
                   bg-gradient-to-t
                   from-black/70
                   via-black/20
                   to-transparent"
        ></div>


        {{-- NAVBAR --}}
        <x-public.navbar />


        {{-- HERO CONTENT --}}
        <div
            class="absolute inset-x-0 bottom-0
                   z-20"
        >

            <div
                class="mx-auto
                       max-w-[1440px]
                       px-6
                       pb-10
                       sm:px-8
                       sm:pb-12
                       lg:px-10
                       lg:pb-16
                       xl:px-12
                       xl:pb-[72px]"
            >

                <div class="max-w-[690px]">


                    {{-- SMALL LABEL --}}
                    <p
                        class="mb-4
                               font-race
                               text-[10px]
                               font-semibold
                               uppercase
                               tracking-[0.25em]
                               text-white/80
                               sm:text-[11px]"
                    >
                        -
                    </p>


                    {{-- MAIN HEADLINE --}}
                    <h1
                        class="max-w-[670px]
                               font-race
                               text-[47px]
                               font-semibold
                               leading-[0.90]
                               tracking-[-0.055em]
                               text-white
                               sm:text-[58px]
                               md:text-[68px]
                               lg:text-[76px]
                               xl:text-[82px]"
                    >
                        IBNU SINA
                        <br>

                        BATAM RUN 2027
                    </h1>


                    {{-- DESCRIPTION --}}
                    <p
                        class="mt-6
                               max-w-[590px]
                               text-[14px]
                               leading-6
                               text-white/85
                               sm:text-[15px]
                               sm:leading-7"
                    >
                        Discover race information, categories, and official updates
                        to help you prepare for race day.
                    </p>


                    {{-- CTA --}}
                    <div
                        class="mt-7
                               flex flex-wrap
                               items-center gap-3"
                    >

                        <a
                            href="{{ route('race-info') }}"
                            class="inline-flex
                                   h-[50px]
                                   items-center justify-center
                                   rounded-full
                                   bg-white
                                   px-7
                                   text-sm font-semibold
                                   text-brand-900
                                   transition
                                   hover:bg-surface-soft"
                        >
                            Race Information
                        </a>


                        <a
                            href="{{ route('about') }}"
                            class="inline-flex
                                   h-[50px]
                                   items-center justify-center
                                   rounded-full
                                   border border-white/35
                                   bg-white/5
                                   px-7
                                   text-sm font-semibold
                                   text-white
                                   backdrop-blur-sm
                                   transition
                                   hover:bg-white/10"
                        >
                            Learn More
                        </a>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>
