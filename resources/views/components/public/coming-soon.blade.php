@props([
    'title' => null,
    'description' => null,
])

@php
    $title ??= __('site.coming_soon.title');
    $description ??= __('site.coming_soon.description');
@endphp

<div {{ $attributes->class(['rounded-2xl border border-line bg-white px-6 py-12 text-center sm:px-10 sm:py-16']) }}>
    <div class="mx-auto h-1 w-12 rounded-full bg-brand-600"></div>

    <h2 class="mt-6 font-race text-[38px] font-bold leading-none tracking-[-0.02em] text-heading sm:text-[46px]">
        {{ $title }}
    </h2>

    <p class="mx-auto mt-4 max-w-xl text-[15px] leading-7 text-body">
        {{ $description }}
        <br>
        {{ __('site.coming_soon.follow_updates') }}
    </p>
</div>
