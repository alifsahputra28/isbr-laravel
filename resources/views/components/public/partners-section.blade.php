@php
    $primaryPartners = [
        [
            'title' => __('site.partners.primary.initiator'),
            'logo' => asset('assets/images/supports/Logo YAPISTA.webp'),
            'alt' => 'Yayasan Pendidikan Ibnu Sina Batam',
            'width' => 3606,
            'height' => 3544,
        ],
        [
            'title' => __('site.partners.primary.organized_by'),
            'logo' => asset('assets/images/supports/Logo The DOTS.webp'),
            'alt' => 'The DOTS',
            'width' => 1258,
            'height' => 1292,
        ],
        [
            'title' => __('site.partners.primary.powered_by'),
            'logo' => null,
        ],
        [
            'title' => __('site.partners.primary.institutional_partner'),
            'logo' => null,
        ],
    ];

    $officialPartners = [
        __('site.partners.official.hydration'),
        __('site.partners.official.recovery'),
        __('site.partners.official.insurance'),
        __('site.partners.official.isotonic'),
        __('site.partners.official.apparel'),
    ];
@endphp

<section id="partners" class="bg-white py-20 sm:py-24 lg:py-32">
    <div class="mx-auto max-w-[1180px] px-6 sm:px-8 lg:px-10">
        <div class="mx-auto max-w-2xl text-center">
            <p class="text-[11px] font-semibold uppercase tracking-[0.2em] text-brand-700">
                {{ __('site.partners.eyebrow') }}
            </p>
            <h2 class="mt-3 text-[32px] font-semibold tracking-[-0.04em] text-heading sm:text-[38px]">
                {{ __('site.partners.title') }}
            </h2>
            <p class="mx-auto mt-4 max-w-xl text-[15px] leading-7 text-body">
                {{ __('site.partners.description') }}
            </p>
        </div>

        <div class="mt-14 grid grid-cols-2 gap-x-5 gap-y-12 sm:mt-16 sm:gap-x-8 sm:gap-y-14 lg:grid-cols-4 lg:gap-x-10">
            @foreach ($primaryPartners as $partner)
                <x-public.sponsor-group
                    :title="$partner['title']"
                    :logo="$partner['logo']"
                    :alt="$partner['alt'] ?? ''"
                    :width="$partner['width'] ?? null"
                    :height="$partner['height'] ?? null"
                />
            @endforeach
        </div>

        <div class="mt-20 sm:mt-24 lg:mt-28">
            <div class="flex items-center justify-center gap-5 sm:gap-7">
                <span class="h-px flex-1 bg-line" aria-hidden="true"></span>
                <h3 class="shrink-0 text-center text-[11px] font-semibold uppercase tracking-[0.2em] text-heading">
                    {{ __('site.partners.official_heading') }}
                </h3>
                <span class="h-px flex-1 bg-line" aria-hidden="true"></span>
            </div>

            <div class="mt-12 grid grid-cols-2 gap-x-5 gap-y-12 sm:gap-x-8 sm:gap-y-14 md:grid-cols-3 lg:grid-cols-5 lg:gap-x-7">
                @foreach ($officialPartners as $title)
                    <x-public.sponsor-group :$title />
                @endforeach
            </div>
        </div>

        <div class="mt-20 sm:mt-24 lg:mt-28">
            <div class="flex items-center justify-center gap-5 sm:gap-7">
                <span class="h-px flex-1 bg-line" aria-hidden="true"></span>
                <h3 class="shrink-0 text-center text-[11px] font-semibold uppercase tracking-[0.2em] text-heading">
                    {{ __('site.partners.supporting_heading') }}
                </h3>
                <span class="h-px flex-1 bg-line" aria-hidden="true"></span>
            </div>

            <div class="mx-auto mt-12 grid max-w-[920px] grid-cols-2 justify-items-center gap-x-5 gap-y-7 sm:gap-x-8 sm:gap-y-9 md:grid-cols-3 lg:grid-cols-4">
                @for ($slot = 0; $slot < 8; $slot++)
                    <x-public.sponsor-slot />
                @endfor
            </div>
        </div>
    </div>
</section>
