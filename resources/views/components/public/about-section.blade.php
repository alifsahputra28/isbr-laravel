<section
    id="about"
    class="bg-white py-24 sm:py-28 lg:py-32"
>
    <div
        class="mx-auto max-w-[1240px]
               px-6 sm:px-8 lg:px-10"
    >

        <div
            class="grid items-start
                   gap-12
                   lg:grid-cols-[0.85fr_1.35fr]
                   lg:gap-24"
        >

            {{-- =========================
                 LEFT COLUMN
            ========================== --}}
            <div>

                <h2
                    class="max-w-[430px]
                           text-[34px]
                           font-semibold
                           leading-[1.18]
                           tracking-[-0.035em]
                           text-heading
                           sm:text-[40px]
                           lg:text-[46px]"
                >
                    This race isn't simply about running.
                </h2>

            </div>


            {{-- =========================
                 RIGHT COLUMN
            ========================== --}}
            <div>

                {{-- DESCRIPTION --}}
                <p
                    class="max-w-[650px]
                           text-[17px]
                           font-normal
                           leading-[1.8]
                           text-body
                           sm:text-[18px]
                           lg:text-[20px]"
                >
                    It's about bringing runners, communities, and the city
                    together in one race-day experience — creating moments,
                    energy, and stories that continue beyond the finish line.
                </p>


                {{-- RACE VISUAL --}}
                <div class="mt-7">

                    <div
                        class="aspect-video
                               w-full
                               overflow-hidden
                               bg-surface-soft"
                    >
                        <img
                            src="{{ asset('assets/images/event/tagline.webp') }}"
                            alt="Ibnu Sina Batam Run 2027 runners"
                            class="h-full w-full object-cover object-center"
                            loading="lazy"
                        >
                    </div>

                </div>


                {{-- CTA --}}
                <div class="mt-6">

                    <a
                        href="{{ route('race-info') }}"
                        class="inline-flex
                               min-h-[54px]
                               items-center justify-center
                               bg-brand-700
                               px-8
                               text-[14px]
                               font-semibold
                               text-white
                               transition-colors duration-200
                               hover:bg-brand-800"
                    >
                        More About The Race
                    </a>

                </div>

            </div>

        </div>

    </div>
</section>
