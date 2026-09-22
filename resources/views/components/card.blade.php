@props(['padding' => true])

<div {{ $attributes->class(['rounded-2xl border border-line bg-white', 'p-5 sm:p-6' => $padding]) }}>
    {{ $slot }}
</div>
