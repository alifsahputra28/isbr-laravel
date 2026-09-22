@extends('layouts.app')

@section('content')

    {{-- NAVBAR --}}
    <x-public.navbar variant="solid" />


    {{-- ABOUT CONTENT --}}
    <main class="bg-white">

        <section class="py-14 sm:py-16 lg:py-20">

            <div
                class="mx-auto max-w-[1180px]
                       px-6 sm:px-8 lg:px-10"
            >

                <div
                    class="grid items-start
                           gap-10
                           lg:grid-cols-2
                           lg:gap-16"
                >

                    {{-- IMAGE --}}
                    <div>

                        <div
                            class="overflow-hidden
                                   bg-surface-soft"
                        >

                            <img
                                src="{{ asset('assets/images/about/about.jpg') }}"
                                alt="About Batam Run"
                                class="aspect-[4/3]
                                       h-full w-full
                                       object-cover
                                       object-center"
                            >

                        </div>

                    </div>


                    {{-- CONTENT --}}
                    <div class="lg:pt-10">

                        <p class="text-[11px] font-semibold uppercase tracking-[0.18em] text-brand-700">
                            About The Race
                        </p>

                        <h1
                            class="mt-2 text-[36px]
                                   font-semibold
                                   leading-tight
                                   tracking-[-0.04em]
                                   text-heading
                                   sm:text-[42px]"
                        >
                            About Us
                        </h1>


                        <div
                            class="mt-6 max-w-[580px]
                                   space-y-6
                                   text-[15px]
                                   leading-7
                                   text-body"
                        >

                            <p>
                                Batam Run menghadirkan pengalaman lari yang
                                mempertemukan pelari, komunitas, dan semangat
                                kota dalam satu momentum race day.
                            </p>

                            <p>
                                Lebih dari sekadar mencapai garis finis,
                                event ini dirancang untuk menciptakan pengalaman
                                yang berkesan sejak proses registrasi,
                                race preparation, hingga hari perlombaan.
                            </p>

                            <p>
                                Melalui penyelenggaraan yang terstruktur dan
                                pengalaman peserta yang nyaman, Batam Run
                                ingin menjadi ruang bagi para pelari untuk
                                bergerak, bertemu, dan menikmati perjalanan
                                mereka bersama komunitas.
                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </section>

    </main>


    {{-- FOOTER --}}
    <x-public.footer />

@endsection
