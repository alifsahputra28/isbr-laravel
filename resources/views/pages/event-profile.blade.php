@extends('layouts.app')

@section('seo_title', __('site.seo.home.title'))
@section('seo_description', __('site.seo.home.description'))
@section('seo_canonical', route('home'))
@section('seo_image', asset(config('seo.default_image')))

@section('structured_data')
    <script type="application/ld+json">{!! json_encode([
        '@context' => 'https://schema.org',
        '@type' => 'WebSite',
        'name' => 'Ibnu Sina Batam Run 2027',
        'alternateName' => 'ISBR 2027',
        'url' => rtrim(config('app.url'), '/').'/',
    ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}</script>
@endsection

@section('content')

    <x-public.hero />

    <x-public.about-section />

    <x-public.race-categories />

    <x-public.partners-section />

    <x-public.tagline-section />

    <x-public.footer />

@endsection
