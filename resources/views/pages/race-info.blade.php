@extends('layouts.app')

@section('content')
    <x-public.navbar variant="solid" />

    <main class="bg-white">
        <section class="py-14 sm:py-16 lg:py-20">
            <div class="mx-auto max-w-[1180px] px-6 sm:px-8 lg:px-10">
                <div class="mb-10 max-w-3xl">
                    <p class="text-[11px] font-semibold uppercase tracking-[0.18em] text-brand-700">
                        Event Information
                    </p>
                    <h1 class="mt-2 text-[36px] font-semibold tracking-[-0.04em] text-heading sm:text-[42px]">
                        Race Info
                    </h1>
                    <p class="mt-3 max-w-2xl text-[15px] leading-7 text-body">
                        Informasi kategori, Cut Off Time, BIB, medali, serta dukungan keselamatan Ibnu Sina Batam Run 2027.
                    </p>
                </div>

                <div class="overflow-x-auto">
                    <nav class="flex min-w-max border-b border-line" role="tablist" aria-label="Race Information">
                        <button
                            type="button"
                            class="active -mb-px inline-flex items-center border-b-2 border-transparent px-5 py-4 text-sm font-medium text-muted transition hover:text-ink hs-tab-active:border-brand-600 hs-tab-active:text-brand-700"
                            id="race-tab-overview"
                            data-hs-tab="#race-panel-overview"
                            aria-controls="race-panel-overview"
                            role="tab"
                        >
                            Overview
                        </button>
                        <button
                            type="button"
                            class="-mb-px inline-flex items-center border-b-2 border-transparent px-5 py-4 text-sm font-medium text-muted transition hover:text-ink hs-tab-active:border-brand-600 hs-tab-active:text-brand-700"
                            id="race-tab-schedule"
                            data-hs-tab="#race-panel-schedule"
                            aria-controls="race-panel-schedule"
                            role="tab"
                        >
                            Schedule
                        </button>
                        <button
                            type="button"
                            class="-mb-px inline-flex items-center border-b-2 border-transparent px-5 py-4 text-sm font-medium text-muted transition hover:text-ink hs-tab-active:border-brand-600 hs-tab-active:text-brand-700"
                            id="race-tab-rules"
                            data-hs-tab="#race-panel-rules"
                            aria-controls="race-panel-rules"
                            role="tab"
                        >
                            Rules &amp; Regulations
                        </button>
                        <button
                            type="button"
                            class="-mb-px inline-flex items-center border-b-2 border-transparent px-5 py-4 text-sm font-medium text-muted transition hover:text-ink hs-tab-active:border-brand-600 hs-tab-active:text-brand-700"
                            id="race-tab-size"
                            data-hs-tab="#race-panel-size"
                            aria-controls="race-panel-size"
                            role="tab"
                        >
                            Size Chart
                        </button>
                    </nav>
                </div>

                <div id="race-panel-overview" role="tabpanel" aria-labelledby="race-tab-overview" class="pt-10">
                    <div class="grid gap-px overflow-hidden rounded-2xl border border-line bg-line sm:grid-cols-2 lg:grid-cols-4">
                        @foreach ([
                            ['Race Date', '-'],
                            ['Venue', '-'],
                            ['Start Time', '-'],
                            ['Flag Off', '-'],
                        ] as [$label, $value])
                            <div class="bg-white p-6">
                                <p class="text-xs font-semibold uppercase tracking-[0.12em] text-muted">{{ $label }}</p>
                                <p class="mt-3 font-race text-[28px] font-semibold leading-none text-heading">{{ $value }}</p>
                            </div>
                        @endforeach
                    </div>

                    <section class="mt-12">
                        <div class="max-w-2xl">
                            <p class="text-[11px] font-semibold uppercase tracking-[0.18em] text-brand-700">Race Categories</p>
                            <h2 class="mt-2 text-[26px] font-semibold tracking-[-0.03em] text-heading">Kategori Lomba</h2>
                        </div>

                        <div class="mt-6 grid gap-5 lg:grid-cols-2">
                            <article class="rounded-2xl border border-line bg-white p-6">
                                <p class="text-[11px] font-semibold uppercase tracking-[0.15em] text-brand-700">Non-competitive</p>
                                <h3 class="mt-3 font-race text-[34px] font-bold leading-none text-heading">Fun Run 5K</h3>
                                <ul class="mt-5 space-y-2 text-[14px] leading-6 text-body">
                                    <li>Usia minimal 13 tahun.</li>
                                    <li>Tidak ada batas usia maksimal.</li>
                                    <li>Wajib mengikuti ketentuan keselamatan dan Race Rules.</li>
                                </ul>
                            </article>

                            <article class="rounded-2xl border border-line bg-white p-6">
                                <p class="text-[11px] font-semibold uppercase tracking-[0.15em] text-brand-700">Competitive</p>
                                <h3 class="mt-3 font-race text-[34px] font-bold leading-none text-heading">Race 10K</h3>
                                <div class="mt-5 grid gap-3 sm:grid-cols-2">
                                    @foreach ([
                                        ['10K National Men', 'WNI · Pria · 13–39 tahun'],
                                        ['10K National Women', 'WNI · Wanita · 13–39 tahun'],
                                        ['10K Open International Men', 'WNA · Pria · minimal 17 tahun'],
                                        ['10K Open International Women', 'WNA · Wanita · minimal 17 tahun'],
                                        ['10K National Master 40+ Men', 'WNI · Pria · usia 40+'],
                                        ['10K National Master 40+ Women', 'WNI · Wanita · usia 40+'],
                                    ] as [$name, $requirements])
                                        <div class="rounded-xl bg-surface-soft p-4">
                                            <p class="font-race text-xl font-semibold leading-tight text-heading">{{ $name }}</p>
                                            <p class="mt-2 text-xs leading-5 text-muted">{{ $requirements }}</p>
                                        </div>
                                    @endforeach
                                </div>
                            </article>
                        </div>

                        <div class="mt-5 rounded-xl border border-brand-200 bg-brand-50 p-5 text-[14px] leading-7 text-body">
                            Usia dihitung pada hari pelaksanaan lomba berdasarkan tanggal lahir pada identitas resmi.
                            Peserta WNI berusia 13–16 tahun dapat mengikuti 10K National dengan persetujuan orang tua atau wali
                            dan wajib menyerahkan Surat Izin Orang Tua/Wali pada saat Race Pack Collection.
                        </div>
                    </section>
                </div>

                <div id="race-panel-schedule" class="hidden pt-10" role="tabpanel" aria-labelledby="race-tab-schedule">
                    <x-public.coming-soon />
                </div>

                <div id="race-panel-rules" class="hidden pt-10" role="tabpanel" aria-labelledby="race-tab-rules">
                    <div class="grid gap-6 lg:grid-cols-2">
                        <section class="rounded-2xl border border-line bg-white p-6 sm:p-7">
                            <p class="text-[11px] font-semibold uppercase tracking-[0.18em] text-brand-700">Cut Off Time (COT)</p>
                            <div class="mt-5 grid gap-4 sm:grid-cols-2">
                                <div class="rounded-xl bg-surface-soft p-5">
                                    <p class="font-race text-2xl font-semibold text-heading">Fun Run 5K</p>
                                    <p class="mt-2 font-race text-[34px] font-bold leading-none text-brand-700">90 menit</p>
                                    <p class="mt-2 text-xs text-muted">1 jam 30 menit</p>
                                </div>
                                <div class="rounded-xl bg-surface-soft p-5">
                                    <p class="font-race text-2xl font-semibold text-heading">Race 10K</p>
                                    <p class="mt-2 font-race text-[34px] font-bold leading-none text-brand-700">120 menit</p>
                                    <p class="mt-2 text-xs text-muted">2 jam</p>
                                </div>
                            </div>
                            <p class="mt-5 text-[14px] leading-7 text-body">
                                Peserta yang melewati COT akan diarahkan oleh marshal atau dapat dijemput menggunakan
                                Bus Sweeper maupun mobil evakuasi.
                            </p>
                        </section>

                        <section class="rounded-2xl bg-brand-800 p-6 text-white sm:p-7">
                            <p class="text-[11px] font-semibold uppercase tracking-[0.18em] text-brand-200">Nomor BIB</p>
                            <h2 class="mt-3 font-race text-[34px] font-bold leading-none">NO BIB, NO START, NO MEDAL.</h2>
                            <ul class="mt-6 space-y-3 text-[14px] leading-7 text-white/85">
                                <li>BIB resmi wajib digunakan dan dipasang di bagian depan dada agar terlihat jelas.</li>
                                <li>Peserta tanpa BIB tidak diperbolehkan melakukan start.</li>
                                <li>BIB tidak dapat dipindahtangankan.</li>
                                <li>BIB palsu atau pinjaman dapat menyebabkan diskualifikasi.</li>
                            </ul>
                        </section>

                        <section class="rounded-2xl border border-line bg-white p-6 sm:p-7">
                            <p class="text-[11px] font-semibold uppercase tracking-[0.18em] text-brand-700">Finisher Medal</p>
                            <p class="mt-4 text-[14px] leading-7 text-body">
                                Peserta yang menggunakan BIB resmi selama perlombaan dan menyelesaikan lomba sesuai ketentuan
                                berhak memperoleh finisher medal. Peserta yang melewati COT tetap dapat memperoleh medali
                                selama menggunakan BIB resmi dan masuk ke area refreshment zone.
                            </p>
                        </section>

                        <section class="rounded-2xl border border-line bg-white p-6 sm:p-7">
                            <p class="text-[11px] font-semibold uppercase tracking-[0.18em] text-brand-700">Safety &amp; Medical</p>
                            <div class="mt-5 grid grid-cols-2 gap-3">
                                @foreach ([
                                    ['4', 'Water Station'],
                                    ['3', 'Unit Ambulans'],
                                    ['2', 'Mobil Evakuasi'],
                                    ['1', 'Bus Sweeper'],
                                ] as [$number, $label])
                                    <div class="rounded-xl bg-surface-soft p-4">
                                        <p class="font-race text-[30px] font-bold leading-none text-brand-700">{{ $number }}</p>
                                        <p class="mt-2 text-xs font-medium text-body">{{ $label }}</p>
                                    </div>
                                @endforeach
                            </div>
                            <p class="mt-5 text-[14px] leading-7 text-body">
                                Dukungan medis disiapkan bersama Klinik Ibnu Sina dan Puskesmas Kota Batam.
                            </p>
                        </section>
                    </div>
                </div>

                <div id="race-panel-size" class="hidden pt-10" role="tabpanel" aria-labelledby="race-tab-size">
                    <x-public.coming-soon />
                </div>
            </div>
        </section>
    </main>

    <x-public.footer />
@endsection
