@extends('layouts.app')

@section('content')

    {{-- NAVBAR --}}
    <x-public.navbar variant="solid" />


    <main class="bg-white">

        <section class="py-14 sm:py-16 lg:py-20">

            <div class="mx-auto max-w-[1180px] px-6 sm:px-8 lg:px-10">

                {{-- =========================
                     PAGE HEADER
                ========================== --}}
                <div class="max-w-3xl">

                    <p
                        class="text-[11px]
                               font-semibold
                               uppercase
                               tracking-[0.18em]
                               text-brand-700"
                    >
                        Registration
                    </p>

                    <h1
                        class="mt-2
                               text-[36px]
                               font-semibold
                               tracking-[-0.04em]
                               text-heading
                               sm:text-[42px]"
                    >
                        Harga Tiket
                    </h1>

                    <p
                        class="mt-3
                               text-[15px]
                               leading-7
                               text-body"
                    >
                        Pilih kategori lomba yang sesuai dengan target dan pengalaman lari kamu.
                        Seluruh tiket sudah mencakup race entitlement sesuai kategori masing-masing.
                    </p>

                </div>



                {{-- =========================
                     SUMMARY CARDS
                ========================== --}}
                <div class="mt-10 grid gap-4 sm:grid-cols-2 lg:grid-cols-3">

                    <div class="rounded-2xl border border-line bg-brand-50 p-5">
                        <p class="text-xs font-medium uppercase tracking-[0.12em] text-brand-700">
                            Total Kategori
                        </p>
                        <p class="mt-2 text-2xl font-semibold text-heading">
                            4 Kategori
                        </p>
                    </div>

                    <div class="rounded-2xl border border-line bg-white p-5">
                        <p class="text-xs font-medium uppercase tracking-[0.12em] text-brand-700">
                            Harga Mulai
                        </p>
                        <p class="mt-2 text-2xl font-semibold text-heading">
                            Rp 450.000
                        </p>
                    </div>

                    <div class="rounded-2xl border border-line bg-white p-5">
                        <p class="text-xs font-medium uppercase tracking-[0.12em] text-brand-700">
                            Benefit Utama
                        </p>
                        <p class="mt-2 text-sm leading-6 text-body">
                            BIB, jersey, medali finisher, dan benefit tambahan sesuai kategori.
                        </p>
                    </div>

                </div>



                {{-- =========================
                     PRICING GRID
                ========================== --}}
                @php
                    $categories = [
                        [
                            'distance' => '42K',
                            'title' => 'Marathon',
                            'items' => [
                                [
                                    'label' => 'Open',
                                    'price' => 'Rp 1.200.000',
                                    'benefit' => 'Slot, bib, jersey, medali finisher, finisher tee',
                                ],
                                [
                                    'label' => 'Closed',
                                    'price' => 'Rp 1.000.000',
                                    'benefit' => 'Slot, bib, jersey, medali finisher, finisher tee',
                                ],
                            ],
                        ],
                        [
                            'distance' => '21K',
                            'title' => 'Half Marathon',
                            'items' => [
                                [
                                    'label' => 'Open',
                                    'price' => 'Rp 900.000',
                                    'benefit' => 'Slot, bib, jersey, medali finisher, finisher tee',
                                ],
                                [
                                    'label' => 'Closed',
                                    'price' => 'Rp 800.000',
                                    'benefit' => 'Slot, bib, jersey, medali finisher, finisher tee',
                                ],
                            ],
                        ],
                        [
                            'distance' => '10K',
                            'title' => '10K',
                            'items' => [
                                [
                                    'label' => 'Open',
                                    'price' => 'Rp 800.000',
                                    'benefit' => 'Slot, bib, jersey, medali finisher',
                                ],
                                [
                                    'label' => 'Closed',
                                    'price' => 'Rp 650.000',
                                    'benefit' => 'Slot, bib, jersey, medali finisher',
                                ],
                            ],
                        ],
                        [
                            'distance' => '5K',
                            'title' => 'Fun Run',
                            'items' => [
                                [
                                    'label' => 'Regular',
                                    'price' => 'Rp 450.000',
                                    'benefit' => 'Slot, bib, jersey, medali finisher',
                                ],
                            ],
                        ],
                    ];
                @endphp

                <div class="mt-12 grid gap-5 md:grid-cols-2">

                    @foreach ($categories as $category)
                        <article
                            class="rounded-2xl
                                   border border-line
                                   bg-white
                                   p-6
                                   transition
                                   hover:border-brand-300"
                        >

                            {{-- HEADER --}}
                            <div class="flex items-start justify-between gap-4">

                                <div>
                                    <p
                                        class="inline-flex items-center rounded-full
                                               bg-brand-100 px-3 py-1
                                               text-[11px] font-semibold uppercase
                                               tracking-[0.14em] text-brand-800"
                                    >
                                        {{ $category['distance'] }}
                                    </p>

                                    <h2
                                        class="mt-3
                                               text-[24px]
                                               font-semibold
                                               tracking-[-0.03em]
                                               text-heading"
                                    >
                                        {{ $category['title'] }}
                                    </h2>
                                </div>

                            </div>


                            {{-- ITEM LIST --}}
                            <div class="mt-6 space-y-4">

                                @foreach ($category['items'] as $item)
                                    <div class="rounded-xl border border-line bg-surface-soft p-4">

                                        <div class="flex items-start justify-between gap-4">

                                            <div>
                                                <p class="text-sm font-semibold text-heading">
                                                    {{ $category['title'] }} {{ $item['label'] }}
                                                </p>

                                                <p class="mt-2 text-sm leading-6 text-muted">
                                                    {{ $item['benefit'] }}
                                                </p>
                                            </div>

                                            <div class="text-right">
                                                <p class="text-lg font-semibold tracking-[-0.02em] text-brand-700">
                                                    {{ $item['price'] }}
                                                </p>
                                            </div>

                                        </div>

                                    </div>
                                @endforeach

                            </div>

                        </article>
                    @endforeach

                </div>



                {{-- =========================
                     NOTES
                ========================== --}}
                <div class="mt-10 rounded-2xl border border-line bg-surface-soft p-6 sm:p-7">

                    <h3 class="text-lg font-semibold text-heading">
                        Catatan Penting
                    </h3>

                    <ol class="mt-4 space-y-3 pl-5 text-sm leading-7 text-body list-decimal">
                        <li>Harga tiket sudah termasuk <em>insurance</em> dan pajak.</li>
                        <li>Harga belum termasuk biaya admin pembayaran.</li>
                        <li>Jenis kategori <strong>Closed</strong> hanya diperuntukkan bagi Warga Negara Indonesia (WNI).</li>
                        <li>Jenis kategori <strong>Open</strong> dapat diikuti oleh WNI maupun WNA.</li>
                    </ol>

                </div>



                {{-- =========================
                     CTA
                ========================== --}}
                <div class="mt-10 flex flex-wrap items-center gap-3">

                    <a
                        href="{{ route('register') }}"
                        class="inline-flex h-12 items-center justify-center rounded-xl
                               bg-brand-700 px-6 text-sm font-semibold text-white
                               transition hover:bg-brand-800"
                    >
                        Daftar Sekarang
                    </a>

                    <a
                        href="{{ route('race-info') }}"
                        class="inline-flex h-12 items-center justify-center rounded-xl
                               border border-line-strong px-6 text-sm font-semibold text-heading
                               transition hover:bg-brand-50"
                    >
                        Lihat Race Info
                    </a>

                </div>

            </div>

        </section>

    </main>


    {{-- FOOTER --}}
    <x-public.footer />

@endsection
