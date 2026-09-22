@extends('layouts.app')

@section('content')

    {{-- NAVBAR --}}
    <x-public.navbar variant="solid" />


    <main class="bg-white">

        {{-- =====================================================
             PRIZE CONTENT
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
                        Winner Recognition
                    </p>

                    <h1
                        class="mt-2
                               text-[36px]
                               font-semibold
                               tracking-[-0.04em]
                               text-heading
                               sm:text-[42px]"
                    >
                        Podium Prize
                    </h1>

                    <p
                        class="mt-3
                               max-w-xl
                               text-[15px]
                               leading-7
                               text-body"
                    >
                        Penghargaan untuk para pelari terbaik di setiap
                        kategori lomba.
                    </p>

                </div>

                {{-- =================================================
                     CATEGORY TABS
                ================================================== --}}
                <div class="overflow-x-auto">

                    <nav
                        class="flex min-w-max border-b border-line"
                        role="tablist"
                        aria-label="Podium Categories"
                    >

                        <button
                            type="button"
                            class="active
                                   hs-tab-active:border-brand-600
                                   hs-tab-active:text-brand-700
                                   -mb-px
                                   border-b-2
                                   border-transparent
                                   px-5 py-4
                                   text-sm font-medium
                                   text-muted
                                   transition
                                   hover:text-heading"
                            id="prize-tab-marathon"
                            data-hs-tab="#prize-panel-marathon"
                            aria-controls="prize-panel-marathon"
                            role="tab"
                        >
                            Marathon
                        </button>


                        <button
                            type="button"
                            class="hs-tab-active:border-brand-600
                                   hs-tab-active:text-brand-700
                                   -mb-px
                                   border-b-2
                                   border-transparent
                                   px-5 py-4
                                   text-sm font-medium
                                   text-muted
                                   transition
                                   hover:text-heading"
                            id="prize-tab-half"
                            data-hs-tab="#prize-panel-half"
                            aria-controls="prize-panel-half"
                            role="tab"
                        >
                            Half Marathon
                        </button>


                        <button
                            type="button"
                            class="hs-tab-active:border-brand-600
                                   hs-tab-active:text-brand-700
                                   -mb-px
                                   border-b-2
                                   border-transparent
                                   px-5 py-4
                                   text-sm font-medium
                                   text-muted
                                   transition
                                   hover:text-heading"
                            id="prize-tab-10k"
                            data-hs-tab="#prize-panel-10k"
                            aria-controls="prize-panel-10k"
                            role="tab"
                        >
                            10K
                        </button>


                        <button
                            type="button"
                            class="hs-tab-active:border-brand-600
                                   hs-tab-active:text-brand-700
                                   -mb-px
                                   border-b-2
                                   border-transparent
                                   px-5 py-4
                                   text-sm font-medium
                                   text-muted
                                   transition
                                   hover:text-heading"
                            id="prize-tab-5k"
                            data-hs-tab="#prize-panel-5k"
                            aria-controls="prize-panel-5k"
                            role="tab"
                        >
                            5K Fun Run
                        </button>

                    </nav>

                </div>



                {{-- =================================================
                     MARATHON
                ================================================== --}}
                <div
                    id="prize-panel-marathon"
                    class="pt-10"
                    role="tabpanel"
                    aria-labelledby="prize-tab-marathon"
                >

                    <x-public.podium-group
                        category="Marathon Open"
                        first="Rp 15.000.000"
                        second="Rp 10.000.000"
                        third="Rp 7.500.000"
                    />

                </div>



                {{-- =================================================
                     HALF MARATHON
                ================================================== --}}
                <div
                    id="prize-panel-half"
                    class="hidden pt-10"
                    role="tabpanel"
                    aria-labelledby="prize-tab-half"
                >

                    <x-public.podium-group
                        category="Half Marathon Open"
                        first="Rp 10.000.000"
                        second="Rp 7.500.000"
                        third="Rp 5.000.000"
                    />

                </div>



                {{-- =================================================
                     10K
                ================================================== --}}
                <div
                    id="prize-panel-10k"
                    class="hidden pt-10"
                    role="tabpanel"
                    aria-labelledby="prize-tab-10k"
                >

                    <x-public.podium-group
                        category="10K Open"
                        first="Rp 7.500.000"
                        second="Rp 5.000.000"
                        third="Rp 3.000.000"
                    />

                </div>



                {{-- =================================================
                     5K
                ================================================== --}}
                <div
                    id="prize-panel-5k"
                    class="hidden pt-10"
                    role="tabpanel"
                    aria-labelledby="prize-tab-5k"
                >

                    <x-public.podium-group
                        category="5K Fun Run"
                        first="Rp 5.000.000"
                        second="Rp 3.000.000"
                        third="Rp 2.000.000"
                    />

                </div>



                {{-- =================================================
                     NOTE
                ================================================== --}}
                <div
                    class="mt-12
                           rounded-2xl
                           border border-line
                           bg-brand-50
                           p-6
                           sm:p-7"
                >

                    <h3 class="text-base font-semibold text-heading">
                        Informasi Hadiah
                    </h3>

                    <ul
                        class="mt-4
                               list-disc
                               space-y-2
                               pl-5
                               text-sm
                               leading-7
                               text-body"
                    >
                        <li>
                            Nilai hadiah yang tercantum merupakan hadiah untuk
                            masing-masing posisi podium.
                        </li>

                        <li>
                            Pemenang wajib memenuhi seluruh ketentuan kategori
                            dan hasil verifikasi panitia.
                        </li>

                        <li>
                            Hadiah dapat dikenakan pajak sesuai ketentuan yang berlaku.
                        </li>

                        <li>
                            Keputusan panitia mengenai hasil perlombaan bersifat final.
                        </li>
                    </ul>

                </div>

            </div>

        </section>

    </main>


    <x-public.footer />

@endsection
