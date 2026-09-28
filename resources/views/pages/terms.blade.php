@extends('layouts.app')

@section('seo_title', __('site.seo.terms.title'))
@section('seo_description', __('site.seo.terms.description'))
@section('seo_canonical', route('terms'))

@section('content')
    <x-public.navbar variant="solid" />

    <main class="bg-white">
        <section class="py-14 sm:py-16 lg:py-20">
            <div class="mx-auto max-w-[1180px] px-6 sm:px-8 lg:px-10">
                <div class="mb-10 max-w-3xl">
                    <p class="text-[11px] font-semibold uppercase tracking-[0.18em] text-brand-700">
                        {{ __('terms.label') }}
                    </p>
                    <h1 class="mt-2 text-[36px] font-semibold tracking-[-0.04em] text-heading sm:text-[42px]">
                        {{ __('terms.title') }}
                    </h1>
                    <p class="mt-3 max-w-2xl text-[15px] leading-7 text-body">
                        {{ __('terms.description') }}
                    </p>
                </div>

                <div class="max-w-[900px]">
                    <div class="hs-accordion-group space-y-3" data-hs-accordion-always-open>
                        @foreach (__('terms.sections') as $section)
                            <x-public.terms-item :id="$section['id']" :title="$section['title']">
                                <ul class="space-y-2">
                                    @foreach ($section['items'] as $item)
                                        <li class="flex gap-3">
                                            <span class="mt-2.5 size-1.5 shrink-0 rounded-full bg-brand-600"></span>
                                            <span>{{ $item }}</span>
                                        </li>
                                    @endforeach
                                </ul>
                            </x-public.terms-item>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    </main>

    <x-public.footer />
@endsection
