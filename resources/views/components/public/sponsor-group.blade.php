@props([
    'title',
    'logo' => null,
    'alt' => '',
    'width' => null,
    'height' => null,
])

<section {{ $attributes->class('min-w-0') }}>
    <div class="flex min-h-8 items-start gap-3">
        <h4 class="min-w-0 text-[10px] font-semibold uppercase leading-4 tracking-[0.2em] text-muted">
            {{ $title }}
        </h4>
        <span class="mt-2 h-px min-w-4 flex-1 bg-line" aria-hidden="true"></span>
    </div>

    <x-public.sponsor-slot
        class="mt-5"
        :$logo
        :$alt
        :$width
        :$height
    />
</section>
