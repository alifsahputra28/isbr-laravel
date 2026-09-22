@props(['variant' => 'neutral'])

@php
    $variants = [
        'success' => 'bg-success-soft text-success',
        'warning' => 'bg-warning-soft text-warning',
        'danger' => 'bg-danger-soft text-danger',
        'info' => 'bg-info-soft text-info',
        'neutral' => 'bg-surface-muted text-body',
    ];
@endphp

<span {{ $attributes->class(['inline-flex items-center rounded-full px-2.5 py-1 text-xs font-semibold', $variants[$variant] ?? $variants['neutral']]) }}>{{ $slot }}</span>
