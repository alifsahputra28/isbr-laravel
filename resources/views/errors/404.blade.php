@extends('layouts.app')

@php
    $errorLocale = in_array(request()->segment(1), ['id', 'en'], true)
        ? request()->segment(1)
        : config('app.locale', 'id');

    app()->setLocale($errorLocale);
    Illuminate\Support\Facades\URL::defaults(['locale' => $errorLocale]);
@endphp

@section('seo_title', __('site.seo.not_found.title'))
@section('seo_description', __('site.seo.not_found.description'))
@section('seo_canonical', url()->current())
@section('seo_robots', 'noindex, nofollow')

@section('content')
    <x-public.navbar variant="solid" />

    <main class="flex min-h-[55vh] items-center bg-white py-16 sm:py-20">
        <div class="mx-auto w-full max-w-[1180px] px-6 text-center sm:px-8 lg:px-10">
            <p class="font-race text-[72px] font-bold leading-none text-brand-700 sm:text-[96px]">404</p>
            <h1 class="mt-4 text-[34px] font-semibold tracking-[-0.04em] text-heading sm:text-[42px]">
                {{ __('site.not_found.title') }}
            </h1>
            <p class="mx-auto mt-4 max-w-xl text-[15px] leading-7 text-body">
                {{ __('site.not_found.description') }}
            </p>
            <a
                href="{{ route('home') }}"
                class="mt-8 inline-flex min-h-12 items-center justify-center rounded-lg bg-brand-700 px-6 text-sm font-semibold text-white transition hover:bg-brand-800 active:bg-brand-900"
            >
                {{ __('site.not_found.back_home') }}
            </a>
        </div>
    </main>

    <x-public.footer />
@endsection
