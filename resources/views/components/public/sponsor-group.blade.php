@props([
    'title',
    'slots' => 1,
])

<section {{ $attributes }}>
    <div class="flex items-center justify-center gap-4">
        <span class="h-px w-full max-w-24 bg-line" aria-hidden="true"></span>
        <h3 class="shrink-0 text-center text-[10px] font-medium uppercase tracking-[0.18em] text-muted">
            {{ $title }}
        </h3>
        <span class="h-px w-full max-w-24 bg-line" aria-hidden="true"></span>
    </div>

    <div class="mt-7 grid grid-cols-2 justify-items-center gap-x-5 gap-y-6 sm:grid-cols-3 lg:grid-cols-4">
        @for ($slot = 0; $slot < $slots; $slot++)
            <x-public.sponsor-slot />
        @endfor
    </div>
</section>
