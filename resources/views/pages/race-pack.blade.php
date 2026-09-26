@extends('layouts.app')

@section('seo_title', 'Race Pack Collection | Ibnu Sina Batam Run 2027')
@section('seo_description', 'Informasi Race Pack Collection Ibnu Sina Batam Run 2027, termasuk ketentuan pengambilan, verifikasi identitas, perwakilan, dan pemeriksaan perlengkapan.')
@section('seo_canonical', route('race-pack'))

@section('content')
    <x-public.navbar variant="solid" />

    <main class="bg-white">
        <section class="py-14 sm:py-16 lg:py-20">
            <div class="mx-auto max-w-[1180px] px-6 sm:px-8 lg:px-10">
                <div class="mb-10 max-w-2xl">
                    <p class="text-[11px] font-semibold uppercase tracking-[0.18em] text-brand-700">
                        Race Day
                    </p>
                    <h1 class="mt-2 text-[36px] font-semibold tracking-[-0.04em] text-heading sm:text-[42px]">
                        Race Pack Collection
                    </h1>
                    <p class="mt-3 text-[15px] leading-7 text-body">
                        Ketentuan pengambilan Race Pack Ibnu Sina Batam Run 2027.
                    </p>
                </div>

                <div class="grid gap-6 lg:grid-cols-[1.05fr_0.95fr]">
                    <section class="rounded-2xl border border-line bg-white p-6 sm:p-8">
                        <h2 class="text-[24px] font-semibold tracking-[-0.03em] text-heading">
                            Informasi Pengambilan
                        </h2>

                        <dl class="mt-7 grid gap-5 sm:grid-cols-2">
                            @foreach ([
                                ['Tanggal', '-'],
                                ['Waktu', '-'],
                                ['Lokasi', '-'],
                                ['Alamat', '-'],
                                ['Google Maps', '-'],
                                ['Mekanisme Perwakilan', '-'],
                            ] as [$label, $value])
                                <div class="rounded-xl bg-surface-soft p-4">
                                    <dt class="text-xs font-semibold uppercase tracking-[0.12em] text-muted">{{ $label }}</dt>
                                    <dd class="mt-2 text-[15px] font-semibold text-heading">{{ $value }}</dd>
                                </div>
                            @endforeach
                        </dl>
                    </section>

                    <aside class="rounded-2xl bg-brand-800 p-6 text-white sm:p-8">
                        <p class="text-[11px] font-semibold uppercase tracking-[0.18em] text-brand-200">
                            Informasi Penting
                        </p>
                        <h2 class="mt-3 text-[24px] font-semibold tracking-[-0.03em]">
                            Ketentuan Race Pack Collection
                        </h2>

                        <ul class="mt-6 space-y-4 text-[14px] leading-7 text-white/85">
                            <li class="flex gap-3">
                                <span class="mt-2.5 size-1.5 shrink-0 rounded-full bg-accent-500"></span>
                                Race Pack wajib diambil pada waktu dan lokasi yang ditentukan panitia.
                            </li>
                            <li class="flex gap-3">
                                <span class="mt-2.5 size-1.5 shrink-0 rounded-full bg-accent-500"></span>
                                Peserta wajib menunjukkan identitas yang dipersyaratkan.
                            </li>
                            <li class="flex gap-3">
                                <span class="mt-2.5 size-1.5 shrink-0 rounded-full bg-accent-500"></span>
                                Pengambilan oleh perwakilan hanya diperbolehkan sesuai mekanisme dan persyaratan panitia.
                            </li>
                            <li class="flex gap-3">
                                <span class="mt-2.5 size-1.5 shrink-0 rounded-full bg-accent-500"></span>
                                Peserta wajib memastikan data dan perlengkapan yang diterima telah sesuai.
                            </li>
                            <li class="flex gap-3">
                                <span class="mt-2.5 size-1.5 shrink-0 rounded-full bg-accent-500"></span>
                                Ketidaksesuaian wajib segera dilaporkan kepada panitia.
                            </li>
                        </ul>
                    </aside>
                </div>
            </div>
        </section>
    </main>

    <x-public.footer />
@endsection
