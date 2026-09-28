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
                    {{ __('site.about_home.heading') }}
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
                    {{ __('site.about_home.description') }}
                </p>


                {{-- RACE VISUAL --}}
                <div class="mt-7">

                    <div
                        class="aspect-video
                               w-full
                               overflow-hidden
                               bg-surface-soft"
                    >
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/2fOBYdaZUM8?si=7p4-YIxB0nG5Wxe7" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
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
                        {{ __('site.about_home.cta') }}
                    </a>

                </div>

            </div>

        </div>

    </div>
</section>
