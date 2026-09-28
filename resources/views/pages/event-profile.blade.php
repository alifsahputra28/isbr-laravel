@extends('layouts.app')

@section('seo_title', __('site.seo.home.title'))
@section('seo_description', __('site.seo.home.description'))
@section('seo_canonical', route('home'))
@section('seo_image', asset('assets/images/event/hero.webp'))

@section('content')

    <x-public.hero />

    <x-public.about-section />

    <x-public.race-categories />

    <x-public.partners-section />

    <x-public.tagline-section />

    <x-public.footer />

@endsection
