<section id="partners" class="bg-white py-20 sm:py-24 lg:py-28">
    <div class="mx-auto max-w-[1380px] px-6 sm:px-8 lg:px-10">
        <div class="mx-auto max-w-2xl text-center">
            <p class="text-[11px] font-semibold uppercase tracking-[0.18em] text-brand-700">
                Partners &amp; Sponsors
            </p>
            <h2 class="mt-2 text-[32px] font-semibold tracking-[-0.04em] text-heading sm:text-[38px]">
                Support The Race
            </h2>
        </div>

        <div class="mt-12">
            <div class="flex items-center justify-center gap-4">
                <span class="h-px w-16 bg-line"></span>
                <p class="text-[10px] font-medium uppercase tracking-[0.18em] text-muted">Main Partners</p>
                <span class="h-px w-16 bg-line"></span>
            </div>

            <div class="mt-8 grid grid-cols-2 gap-5 md:grid-cols-4">
                @for ($slot = 0; $slot < 4; $slot++)
                    <div class="flex min-h-28 items-center justify-center rounded-2xl border border-line bg-surface-soft px-5 py-6 text-center">
                        <p class="text-[13px] font-medium leading-6 text-muted">
                            Interested?
                            <br>
                            <span class="font-semibold text-heading">Place Your Logo</span>
                        </p>
                    </div>
                @endfor
            </div>
        </div>

        <div class="mt-16">
            <div class="flex items-center justify-center gap-4">
                <span class="h-px w-16 bg-line"></span>
                <p class="text-[10px] font-medium uppercase tracking-[0.18em] text-muted">Official Partners</p>
                <span class="h-px w-16 bg-line"></span>
            </div>

            <div class="mt-8 grid grid-cols-2 gap-5 md:grid-cols-3 lg:grid-cols-5">
                @for ($slot = 0; $slot < 5; $slot++)
                    <div class="flex min-h-28 items-center justify-center rounded-2xl border border-line bg-surface-soft px-5 py-6 text-center">
                        <p class="text-[13px] font-medium leading-6 text-muted">
                            Interested?
                            <br>
                            <span class="font-semibold text-heading">Place Your Logo</span>
                        </p>
                    </div>
                @endfor
            </div>
        </div>

        <div class="mt-16">
            <div class="flex items-center justify-center gap-4">
                <span class="h-px w-16 bg-line"></span>
                <p class="text-[10px] font-medium uppercase tracking-[0.18em] text-muted">Co-Sponsor</p>
                <span class="h-px w-16 bg-line"></span>
            </div>

            <div class="mx-auto mt-8 grid max-w-[1120px] grid-cols-2 gap-5 sm:grid-cols-3 md:grid-cols-4">
                @for ($slot = 0; $slot < 12; $slot++)
                    <div class="flex min-h-24 items-center justify-center rounded-xl border border-line bg-surface-soft px-4 py-5 text-center">
                        <p class="text-[12px] font-medium leading-5 text-muted">
                            Interested?
                            <br>
                            <span class="font-semibold text-heading">Place Your Logo</span>
                        </p>
                    </div>
                @endfor
            </div>
        </div>

        <div class="mt-16 grid gap-14 lg:grid-cols-2">
            <div>
                <div class="flex items-center justify-center gap-4">
                    <span class="h-px w-12 bg-line"></span>
                    <p class="text-[10px] font-medium uppercase tracking-[0.18em] text-muted">Travel Partners</p>
                    <span class="h-px w-12 bg-line"></span>
                </div>
                <div class="mt-8 grid gap-5 sm:grid-cols-3">
                    @for ($slot = 0; $slot < 3; $slot++)
                        <div class="flex min-h-24 items-center justify-center rounded-xl border border-line bg-surface-soft px-4 py-5 text-center">
                            <p class="text-[12px] font-medium leading-5 text-muted">
                                Interested?
                                <br>
                                <span class="font-semibold text-heading">Place Your Logo</span>
                            </p>
                        </div>
                    @endfor
                </div>
            </div>

            <div>
                <div class="flex items-center justify-center gap-4">
                    <span class="h-px w-12 bg-line"></span>
                    <p class="text-[10px] font-medium uppercase tracking-[0.18em] text-muted">Community Partners</p>
                    <span class="h-px w-12 bg-line"></span>
                </div>
                <div class="mt-8 grid grid-cols-2 gap-5 md:grid-cols-4 lg:grid-cols-2 xl:grid-cols-4">
                    @for ($slot = 0; $slot < 4; $slot++)
                        <div class="flex min-h-24 items-center justify-center rounded-xl border border-line bg-surface-soft px-4 py-5 text-center">
                            <p class="text-[12px] font-medium leading-5 text-muted">
                                Interested?
                                <br>
                                <span class="font-semibold text-heading">Place Your Logo</span>
                            </p>
                        </div>
                    @endfor
                </div>
            </div>
        </div>
    </div>
</section>
