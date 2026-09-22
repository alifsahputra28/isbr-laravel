@props(['href' => null, 'variant' => 'primary', 'size' => 'md', 'type' => 'button'])

@php
    $base = 'inline-flex items-center justify-center gap-2 rounded-lg text-sm font-semibold transition-colors focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-brand-600';
    $variants = [
        'primary' => 'bg-brand-700 text-white hover:bg-brand-800 active:bg-brand-900',
        'accent' => 'bg-accent-500 text-on-accent hover:bg-accent-400',
        'outline' => 'border border-line-strong text-heading hover:bg-brand-50',
    ];
    $sizes = ['md' => 'px-4 py-2.5', 'lg' => 'px-5 py-3'];
    $classes = [$base, $variants[$variant] ?? $variants['primary'], $sizes[$size] ?? $sizes['md']];
@endphp

@if ($href)
    <a href="{{ $href }}" {{ $attributes->class($classes) }}>{{ $slot }}</a>
@else
    <button type="{{ $type }}" {{ $attributes->class($classes) }}>{{ $slot }}</button>
@endif
