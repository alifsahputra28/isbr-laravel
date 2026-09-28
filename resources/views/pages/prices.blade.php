@extends('layouts.app')

@section('seo_title', __('site.seo.prices.title'))
@section('seo_description', __('site.seo.prices.description'))
@section('seo_canonical', route('prices'))

@section('content')
    <x-public.navbar variant="solid" />

    <main class="bg-white">
        <section class="py-14 sm:py-16 lg:py-20">
            <div class="mx-auto max-w-[1180px] px-6 sm:px-8 lg:px-10">
                <div class="mb-10 max-w-2xl">
                    <p class="text-[11px] font-semibold uppercase tracking-[0.18em] text-brand-700">
                        {{ __('site.prices.label') }}
                    </p>
                    <h1 class="mt-2 text-[36px] font-semibold tracking-[-0.04em] text-heading sm:text-[42px]">
                        {{ __('site.prices.title') }}
                    </h1>
                </div>

                <x-public.coming-soon />
            </div>
        </section>
    </main>

    <x-public.footer />
@endsection
