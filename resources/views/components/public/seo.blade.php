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
    $ogLocale = app()->getLocale() === 'en' ? 'en_US' : 'id_ID';
    $alternateOgLocale = app()->getLocale() === 'en' ? 'id_ID' : 'en_US';
    $routeName = request()->route()?->getName();
    $localizableRoutes = ['home', 'about', 'race-info', 'race-pack', 'prices', 'podium-prize', 'faq', 'terms', 'contact', 'route'];
    $alternateUrls = in_array($routeName, $localizableRoutes, true)
        ? [
            'id' => route($routeName, ['locale' => 'id']),
            'en' => route($routeName, ['locale' => 'en']),
        ]
        : [];
@endphp

<title>{{ $titleText }}</title>
<meta name="description" content="{{ $descriptionText }}">
<meta name="robots" content="{{ $robotsContent }}">
<link rel="canonical" href="{{ $canonical }}">
@if ($alternateUrls !== [])
    <link rel="alternate" hreflang="id" href="{{ $alternateUrls['id'] }}">
    <link rel="alternate" hreflang="en" href="{{ $alternateUrls['en'] }}">
    <link rel="alternate" hreflang="x-default" href="{{ $alternateUrls['id'] }}">
@endif

<meta property="og:type" content="website">
<meta property="og:locale" content="{{ $ogLocale }}">
<meta property="og:locale:alternate" content="{{ $alternateOgLocale }}">
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
