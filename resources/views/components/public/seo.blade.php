@props([
    'title',
    'description',
    'canonical',
    'image' => null,
    'robots' => null,
])

@php
    $titleText = html_entity_decode($title, ENT_QUOTES | ENT_HTML5, 'UTF-8');
    $descriptionText = html_entity_decode($description, ENT_QUOTES | ENT_HTML5, 'UTF-8');
    $imageUrl = $image ?: asset(config('seo.default_image'));
    $robotsContent = $robots ?: (config('seo.indexable')
        ? 'index, follow, max-image-preview:large'
        : 'noindex, nofollow');
@endphp

<title>{{ $titleText }}</title>
<meta name="description" content="{{ $descriptionText }}">
<meta name="robots" content="{{ $robotsContent }}">
<link rel="canonical" href="{{ $canonical }}">

<meta property="og:type" content="website">
<meta property="og:locale" content="id_ID">
<meta property="og:site_name" content="{{ config('seo.site_name') }}">
<meta property="og:title" content="{{ $titleText }}">
<meta property="og:description" content="{{ $descriptionText }}">
<meta property="og:url" content="{{ $canonical }}">
<meta property="og:image" content="{{ $imageUrl }}">
<meta property="og:image:alt" content="Ibnu Sina Batam Run 2027">

<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="{{ $titleText }}">
<meta name="twitter:description" content="{{ $descriptionText }}">
<meta name="twitter:image" content="{{ $imageUrl }}">
