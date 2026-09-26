@extends('layouts.app')

@section('seo_title', 'Ibnu Sina Batam Run 2027 (ISBR) | Official Event Website')
@section('seo_description', 'Informasi Ibnu Sina Batam Run 2027 (ISBR), mulai dari kategori lomba, race information, race pack, podium prize, FAQ, dan pembaruan resmi event.')
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
