@extends('layouts.app')

@section('seo_title', 'Page Not Found | Ibnu Sina Batam Run 2027')
@section('seo_description', 'Halaman yang Anda cari tidak ditemukan di website resmi Ibnu Sina Batam Run 2027.')
@section('seo_canonical', url()->current())
@section('seo_robots', 'noindex, nofollow')

@section('content')
    <x-public.navbar variant="solid" />

    <main class="flex min-h-[55vh] items-center bg-white py-16 sm:py-20">
        <div class="mx-auto w-full max-w-[1180px] px-6 text-center sm:px-8 lg:px-10">
            <p class="font-race text-[72px] font-bold leading-none text-brand-700 sm:text-[96px]">404</p>
            <h1 class="mt-4 text-[34px] font-semibold tracking-[-0.04em] text-heading sm:text-[42px]">
                Page Not Found
            </h1>
            <p class="mx-auto mt-4 max-w-xl text-[15px] leading-7 text-body">
                Halaman yang Anda cari tidak tersedia atau mungkin telah dipindahkan.
            </p>
            <a
                href="{{ route('home') }}"
                class="mt-8 inline-flex min-h-12 items-center justify-center rounded-lg bg-brand-700 px-6 text-sm font-semibold text-white transition hover:bg-brand-800 active:bg-brand-900"
            >
                Back to Home
            </a>
        </div>
    </main>

    <x-public.footer />
@endsection
