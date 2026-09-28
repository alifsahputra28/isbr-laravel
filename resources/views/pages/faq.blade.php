@extends('layouts.app')

@section('seo_title', __('site.seo.faq.title'))
@section('seo_description', __('site.seo.faq.description'))
@section('seo_canonical', route('faq'))

@section('content')
    <x-public.navbar variant="solid" />

    <main class="bg-white">
        <section class="py-14 sm:py-16 lg:py-20">
            <div class="mx-auto max-w-[1180px] px-6 sm:px-8 lg:px-10">
                <div class="mb-10 max-w-3xl">
                    <p class="text-[11px] font-semibold uppercase tracking-[0.18em] text-brand-700">
                        {{ __('faq.label') }}
                    </p>
                    <h1 class="mt-2 text-[36px] font-semibold tracking-[-0.04em] text-heading sm:text-[42px]">
                        {{ __('faq.title') }}
                    </h1>
                    <p class="mt-3 max-w-2xl text-[15px] leading-7 text-body">
                        {{ __('faq.description') }}
                    </p>
                </div>

                <div class="max-w-[900px] space-y-10">
                    @foreach (__('faq.groups') as $group)
                        <section>
                            <h2 class="text-[24px] font-semibold tracking-[-0.03em] text-heading">
                                {{ $group['title'] }}
                            </h2>
                            <div class="hs-accordion-group mt-5 space-y-3" data-hs-accordion-always-open>
                                @foreach ($group['items'] as [$id, $question, $answer])
                                    <x-public.faq-item :id="$id" :question="$question">
                                        {{ $answer }}
                                    </x-public.faq-item>
                                @endforeach
                            </div>
                        </section>
                    @endforeach
                </div>
            </div>
        </section>
    </main>

    <x-public.footer />
@endsection
