<section id="prices" class="bg-white py-16 sm:py-20 lg:py-24">
    <div class="mx-auto max-w-[1180px] px-6 sm:px-8 lg:px-10">
        <div class="max-w-3xl">
            <p class="text-[11px] font-semibold uppercase tracking-[0.18em] text-brand-700">
                Race Categories
            </p>
            <h2 class="mt-2 text-[32px] font-semibold tracking-[-0.04em] text-heading sm:text-[38px]">
                Pilih Kategori Lomba
            </h2>
            <p class="mt-3 text-[15px] leading-7 text-body">
                Kategori lomba Ibnu Sina Batam Run 2027 berdasarkan ketentuan resmi peserta.
            </p>
        </div>

        <div class="mt-10 grid gap-5 lg:grid-cols-2">
            <article class="rounded-2xl border border-line bg-white p-6 transition hover:border-brand-300 sm:p-8">
                <p class="text-[11px] font-semibold uppercase tracking-[0.18em] text-brand-700">
                    Non-competitive
                </p>
                <h3 class="mt-3 font-race text-[38px] font-bold leading-none text-heading">
                    Fun Run 5K
                </h3>
                <ul class="mt-6 space-y-3 text-[14px] leading-6 text-body">
                    <li class="flex gap-3"><span class="mt-2 size-1.5 shrink-0 rounded-full bg-brand-600"></span>Usia minimal 13 tahun.</li>
                    <li class="flex gap-3"><span class="mt-2 size-1.5 shrink-0 rounded-full bg-brand-600"></span>Tidak ada batas usia maksimal.</li>
                    <li class="flex gap-3"><span class="mt-2 size-1.5 shrink-0 rounded-full bg-brand-600"></span>Wajib mengikuti ketentuan keselamatan dan Race Rules.</li>
                </ul>
            </article>

            <article class="rounded-2xl border border-line bg-white p-6 transition hover:border-brand-300 sm:p-8">
                <p class="text-[11px] font-semibold uppercase tracking-[0.18em] text-brand-700">
                    Competitive
                </p>
                <h3 class="mt-3 font-race text-[38px] font-bold leading-none text-heading">
                    Race 10K
                </h3>
                <div class="mt-6 grid gap-3 sm:grid-cols-2">
                    @foreach ([
                        ['10K National Men', 'WNI · Pria · 13–39 tahun'],
                        ['10K National Women', 'WNI · Wanita · 13–39 tahun'],
                        ['10K Open International Men', 'WNA · Pria · 17+'],
                        ['10K Open International Women', 'WNA · Wanita · 17+'],
                        ['10K National Master 40+ Men', 'WNI · Pria · 40+'],
                        ['10K National Master 40+ Women', 'WNI · Wanita · 40+'],
                    ] as [$name, $requirements])
                        <div class="rounded-xl bg-surface-soft p-4">
                            <p class="font-race text-xl font-semibold leading-tight text-heading">{{ $name }}</p>
                            <p class="mt-2 text-xs leading-5 text-muted">{{ $requirements }}</p>
                        </div>
                    @endforeach
                </div>
            </article>
        </div>

        <p class="mt-5 text-[13px] leading-6 text-muted">
            Usia peserta dihitung pada hari pelaksanaan lomba berdasarkan tanggal lahir pada identitas resmi.
        </p>
    </div>
</section>
