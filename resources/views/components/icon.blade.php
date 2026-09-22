@props(['name'])

<svg {{ $attributes->merge(['class' => 'size-5']) }} xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
    @switch($name)
        @case('arrow-right')
            <path d="M5 12h14m-6-6 6 6-6 6" />
            @break
        @case('calendar')
            <rect x="3" y="5" width="18" height="16" rx="2" />
            <path d="M7 3v4m10-4v4M3 10h18" />
            @break
        @case('check')
            <path d="m5 12 4 4L19 6" />
            @break
        @case('download')
            <path d="M12 3v12m-4-4 4 4 4-4M4 17v3h16v-3" />
            @break
        @case('flag')
            <path d="M5 21V4m0 1c3-2 5 2 8 0s5 2 6 0v11c-3 2-5-2-8 0s-4-1-6 0" />
            @break
        @case('map-pin')
            <path d="M20 10c0 5-8 11-8 11S4 15 4 10a8 8 0 1 1 16 0Z" />
            <circle cx="12" cy="10" r="2.5" />
            @break
    @endswitch
</svg>
