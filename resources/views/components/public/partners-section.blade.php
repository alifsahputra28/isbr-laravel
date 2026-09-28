<section id="partners" class="bg-white py-20 sm:py-24 lg:py-28">
    <div class="mx-auto max-w-[1180px] px-6 sm:px-8 lg:px-10">
        <div class="mx-auto max-w-2xl text-center">
            <p class="text-[11px] font-semibold uppercase tracking-[0.18em] text-brand-700">
                {{ __('site.partners.label') }}
            </p>
            <h2 class="mt-2 text-[32px] font-semibold tracking-[-0.04em] text-heading sm:text-[38px]">
                {{ __('site.partners.title') }}
            </h2>
        </div>

        <div class="mx-auto mt-14 max-w-[920px] space-y-16 sm:mt-16 sm:space-y-20">
            @foreach (__('site.partners.groups') as $group)
                <x-public.sponsor-group :title="$group['title']" :slots="$group['slots']" />
            @endforeach
        </div>
    </div>
</section>
