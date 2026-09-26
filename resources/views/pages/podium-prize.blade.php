@extends('layouts.app')

@section('seo_title', 'Podium Prize | Ibnu Sina Batam Run 2027')
@section('seo_description', 'Informasi kategori podium, hadiah, verifikasi identitas, kehadiran pemenang, dan penetapan hasil Ibnu Sina Batam Run 2027 sesuai ketentuan resmi lomba.')
@section('seo_canonical', route('podium-prize'))

@section('content')
    <x-public.navbar variant="solid" />

    <main class="bg-white">
        <section class="py-14 sm:py-16 lg:py-20">
            <div class="mx-auto max-w-[1180px] px-6 sm:px-8 lg:px-10">
                <div class="mb-10 max-w-3xl">
                    <p class="text-[11px] font-semibold uppercase tracking-[0.18em] text-brand-700">
                        Winner Recognition
                    </p>
                    <h1 class="mt-2 text-[36px] font-semibold tracking-[-0.04em] text-heading sm:text-[42px]">
                        Podium Prize
                    </h1>
                    <p class="mt-3 max-w-2xl text-[15px] leading-7 text-body">
                        Informasi kategori podium dan ketentuan verifikasi pemenang Race 10K.
                    </p>
                </div>

                <div class="overflow-hidden rounded-2xl border border-line bg-white">
                    <div class="overflow-x-auto">
                        <table class="min-w-[760px] w-full border-collapse text-left">
                            <thead class="bg-brand-50">
                                <tr class="border-b border-line">
                                    <th scope="col" class="w-[52%] px-6 py-4 text-xs font-semibold uppercase tracking-[0.12em] text-brand-800">
                                        Category
                                    </th>
                                    <th scope="col" class="px-5 py-4 text-center text-xs font-semibold uppercase tracking-[0.12em] text-brand-800">
                                        1st Place
                                    </th>
                                    <th scope="col" class="px-5 py-4 text-center text-xs font-semibold uppercase tracking-[0.12em] text-brand-800">
                                        2nd Place
                                    </th>
                                    <th scope="col" class="px-5 py-4 text-center text-xs font-semibold uppercase tracking-[0.12em] text-brand-800">
                                        3rd Place
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-line">
                                @foreach ([
                                    '10K National Men',
                                    '10K National Women',
                                    '10K Open International Men',
                                    '10K Open International Women',
                                    '10K National Master 40+ Men',
                                    '10K National Master 40+ Women',
                                ] as $category)
                                    <tr class="transition-colors hover:bg-surface-soft">
                                        <th scope="row" class="px-6 py-5 text-[14px] font-semibold text-heading">
                                            {{ $category }}
                                        </th>
                                        <td class="px-5 py-5 text-center text-[15px] font-medium text-body">-</td>
                                        <td class="px-5 py-5 text-center text-[15px] font-medium text-body">-</td>
                                        <td class="px-5 py-5 text-center text-[15px] font-medium text-body">-</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                <section class="mt-10 rounded-2xl border border-line bg-surface-soft p-6 sm:p-8">
                    <h2 class="text-[24px] font-semibold tracking-[-0.03em] text-heading">
                        Ketentuan Podium
                    </h2>
                    <ul class="mt-5 grid gap-3 text-[14px] leading-7 text-body md:grid-cols-2">
                        <li class="rounded-xl bg-white p-4">Calon pemenang podium wajib melalui verifikasi identitas, usia, kewarganegaraan, dan hasil perlombaan.</li>
                        <li class="rounded-xl bg-white p-4">Data identitas wajib sesuai dengan data pendaftaran dan kategori yang diikuti.</li>
                        <li class="rounded-xl bg-white p-4">Pemenang wajib hadir secara langsung dan tidak dapat diwakilkan.</li>
                        <li class="rounded-xl bg-white p-4">Pemenang yang tidak hadir atau diwakilkan dapat didiskualifikasi serta kehilangan status juara dan hadiah.</li>
                        <li class="rounded-xl bg-white p-4 md:col-span-2">Hasil resmi ditetapkan setelah seluruh proses verifikasi selesai.</li>
                    </ul>
                </section>
            </div>
        </section>
    </main>

    <x-public.footer />
@endsection
