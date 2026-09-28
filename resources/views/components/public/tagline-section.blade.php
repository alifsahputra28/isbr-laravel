<section
    class="relative overflow-hidden bg-neutral-950"
>
    {{-- BACKGROUND --}}
    <img
        src="{{ asset('assets/images/event/tagline.webp') }}"
        alt="{{ __('site.about_home.image_alt') }}"
        width="1536"
        height="1024"
        loading="lazy"
        decoding="async"
        class="absolute inset-0 h-full w-full object-cover object-center"
    >

    {{-- OVERLAY --}}
    <div class="absolute inset-0 bg-black/45"></div>

    {{-- SOFT GRADIENT --}}
    <div
        class="absolute inset-0
               bg-gradient-to-b
               from-black/10
               via-black/20
               to-black/30"
    ></div>

    {{-- CONTENT --}}
    <div
        class="relative z-10
               flex min-h-[420px]
               items-center justify-center
               px-6 py-20
               sm:min-h-[500px]
               lg:min-h-[560px]"
    >

        <div class="mx-auto max-w-[1000px] text-center">

            <h2
                class="font-race
                       text-[48px]
                       font-semibold
                       uppercase
                       leading-[0.92]
                       tracking-[-0.05em]
                       text-white
                       sm:text-[64px]
                       md:text-[76px]
                       lg:text-[90px]"
            >
                #HealForWinning
            </h2>

        </div>

    </div>
</section>
