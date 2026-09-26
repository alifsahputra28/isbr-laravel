<section id="partners" class="bg-white py-20 sm:py-24 lg:py-28">
    <div class="mx-auto max-w-[1180px] px-6 sm:px-8 lg:px-10">
        <div class="mx-auto max-w-2xl text-center">
            <p class="text-[11px] font-semibold uppercase tracking-[0.18em] text-brand-700">
                Partners &amp; Sponsors
            </p>
            <h2 class="mt-2 text-[32px] font-semibold tracking-[-0.04em] text-heading sm:text-[38px]">
                Support The Race
            </h2>
        </div>

        <div class="mx-auto mt-14 max-w-[920px] space-y-16 sm:mt-16 sm:space-y-20">
            <x-public.sponsor-group title="Main Partners" :slots="4" />
            <x-public.sponsor-group title="Official Partners" :slots="5" />
            <x-public.sponsor-group title="Co-Sponsor" :slots="12" />
            <x-public.sponsor-group title="Travel Partners" :slots="3" />
            <x-public.sponsor-group title="Community Partners" :slots="4" />
        </div>
    </div>
</section>
