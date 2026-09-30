@props([
    'logo' => null,
    'alt' => '',
    'width' => null,
    'height' => null,
])

<div {{ $attributes->class('flex h-24 w-full items-center justify-center sm:h-28') }}>
    @if ($logo)
        <img
            src="{{ $logo }}"
            alt="{{ $alt }}"
            @if ($width) width="{{ $width }}" @endif
            @if ($height) height="{{ $height }}" @endif
            loading="lazy"
            decoding="async"
            class="max-h-24 max-w-full object-contain sm:max-h-28"
        >
    @else
        <x-public.partner-placeholder />
    @endif
</div>
