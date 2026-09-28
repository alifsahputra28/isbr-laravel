@extends('layouts.app')

@section('seo_title', __('site.seo.race_info.title'))
@section('seo_description', __('site.seo.race_info.description'))
@section('seo_canonical', route('race-info'))

@section('content')
    <x-public.navbar variant="solid" />

    <main class="bg-white">
        <section class="py-14 sm:py-16 lg:py-20">
            <div class="mx-auto max-w-[1180px] px-6 sm:px-8 lg:px-10">
                <div class="mb-10 max-w-3xl">
                    <p class="text-[11px] font-semibold uppercase tracking-[0.18em] text-brand-700">
                        {{ __('site.race_info.label') }}
                    </p>
                    <h1 class="mt-2 text-[36px] font-semibold tracking-[-0.04em] text-heading sm:text-[42px]">
                        {{ __('site.race_info.title') }}
                    </h1>
                    <p class="mt-3 max-w-2xl text-[15px] leading-7 text-body">
                        {{ __('site.race_info.description') }}
                    </p>
                </div>

                <div class="overflow-x-auto">
                    <nav class="flex min-w-max border-b border-line" role="tablist" aria-label="{{ __('site.race_info.title') }}">
                        <button
                            type="button"
                            class="active -mb-px inline-flex items-center border-b-2 border-transparent px-5 py-4 text-sm font-medium text-muted transition hover:text-ink hs-tab-active:border-brand-600 hs-tab-active:text-brand-700"
                            id="race-tab-overview"
                            data-hs-tab="#race-panel-overview"
                            aria-controls="race-panel-overview"
                            role="tab"
                        >
                            {{ __('site.race_info.tabs.overview') }}
                        </button>
                        <button
                            type="button"
                            class="-mb-px inline-flex items-center border-b-2 border-transparent px-5 py-4 text-sm font-medium text-muted transition hover:text-ink hs-tab-active:border-brand-600 hs-tab-active:text-brand-700"
                            id="race-tab-schedule"
                            data-hs-tab="#race-panel-schedule"
                            aria-controls="race-panel-schedule"
                            role="tab"
                        >
                            {{ __('site.race_info.tabs.schedule') }}
                        </button>
                        <button
                            type="button"
                            class="-mb-px inline-flex items-center border-b-2 border-transparent px-5 py-4 text-sm font-medium text-muted transition hover:text-ink hs-tab-active:border-brand-600 hs-tab-active:text-brand-700"
                            id="race-tab-rules"
                            data-hs-tab="#race-panel-rules"
                            aria-controls="race-panel-rules"
                            role="tab"
                        >
                            {{ __('site.race_info.tabs.rules') }}
                        </button>
                        <button
                            type="button"
                            class="-mb-px inline-flex items-center border-b-2 border-transparent px-5 py-4 text-sm font-medium text-muted transition hover:text-ink hs-tab-active:border-brand-600 hs-tab-active:text-brand-700"
                            id="race-tab-size"
                            data-hs-tab="#race-panel-size"
                            aria-controls="race-panel-size"
                            role="tab"
                        >
                            {{ __('site.race_info.tabs.size_chart') }}
                        </button>
                    </nav>
                </div>

                <div id="race-panel-overview" role="tabpanel" aria-labelledby="race-tab-overview" class="pt-10">
                    <div class="grid gap-px overflow-hidden rounded-2xl border border-line bg-line sm:grid-cols-2 lg:grid-cols-4">
                        @foreach (__('site.race_info.summary') as $item)
                            <div class="bg-white p-6">
                                <p class="text-xs font-semibold uppercase tracking-[0.12em] text-muted">{{ $item['label'] }}</p>
                                <p class="mt-3 font-race text-[28px] font-semibold leading-none text-heading">{{ $item['value'] }}</p>
                            </div>
                        @endforeach
                    </div>

                    <section class="mt-12">
                        <div class="max-w-2xl">
                            <p class="text-[11px] font-semibold uppercase tracking-[0.18em] text-brand-700">{{ __('site.race_info.category_label') }}</p>
                            <h2 class="mt-2 text-[26px] font-semibold tracking-[-0.03em] text-heading">{{ __('site.race_info.category_title') }}</h2>
                        </div>

                        <div class="mt-6 grid gap-5 lg:grid-cols-2">
                            <article class="rounded-2xl border border-line bg-white p-6">
                                <p class="text-[11px] font-semibold uppercase tracking-[0.15em] text-brand-700">{{ __('site.categories.non_competitive') }}</p>
                                <h3 class="mt-3 font-race text-[34px] font-bold leading-none text-heading">Fun Run 5K</h3>
                                <ul class="mt-5 space-y-2 text-[14px] leading-6 text-body">
                                    @foreach (__('site.categories.fun_run_rules') as $rule)
                                        <li>{{ $rule }}</li>
                                    @endforeach
                                </ul>
                            </article>

                            <article class="rounded-2xl border border-line bg-white p-6">
                                <p class="text-[11px] font-semibold uppercase tracking-[0.15em] text-brand-700">{{ __('site.categories.competitive') }}</p>
                                <h3 class="mt-3 font-race text-[34px] font-bold leading-none text-heading">Race 10K</h3>
                                <div class="mt-5 grid gap-3 sm:grid-cols-2">
                                    @foreach (__('site.categories.race_10k') as $category)
                                        <div class="rounded-xl bg-surface-soft p-4">
                                            <p class="font-race text-xl font-semibold leading-tight text-heading">{{ $category['name'] }}</p>
                                            <p class="mt-2 text-xs leading-5 text-muted">{{ $category['requirements'] }}</p>
                                        </div>
                                    @endforeach
                                </div>
                                <p class="mt-4 text-[13px] leading-6 text-muted">
                                    {{ __('site.categories.open_note') }}
                                </p>
                            </article>
                        </div>

                        <div class="mt-5 rounded-xl border border-brand-200 bg-brand-50 p-5 text-[14px] leading-7 text-body">
                            {{ __('site.categories.age_note') }}
                            {{ __('site.categories.under_seventeen_note') }}
                        </div>
                    </section>
                </div>

                <div id="race-panel-schedule" class="hidden pt-10" role="tabpanel" aria-labelledby="race-tab-schedule">
                    <x-public.coming-soon />
                </div>

                <div id="race-panel-rules" class="hidden pt-10" role="tabpanel" aria-labelledby="race-tab-rules">
                    <div class="grid gap-6 lg:grid-cols-2">
                        <section class="rounded-2xl border border-line bg-white p-6 sm:p-7">
                            <p class="text-[11px] font-semibold uppercase tracking-[0.18em] text-brand-700">Cut Off Time (COT)</p>
                            <div class="mt-5 grid gap-4 sm:grid-cols-2">
                                <div class="rounded-xl bg-surface-soft p-5">
                                    <p class="font-race text-2xl font-semibold text-heading">Fun Run 5K</p>
                                    <p class="mt-2 font-race text-[34px] font-bold leading-none text-brand-700">90 menit</p>
                                    <p class="mt-2 text-xs text-muted">{{ __('site.race_info.cot_5k_note') }}</p>
                                </div>
                                <div class="rounded-xl bg-surface-soft p-5">
                                    <p class="font-race text-2xl font-semibold text-heading">Race 10K</p>
                                    <p class="mt-2 font-race text-[34px] font-bold leading-none text-brand-700">120 menit</p>
                                    <p class="mt-2 text-xs text-muted">{{ __('site.race_info.cot_10k_note') }}</p>
                                </div>
                            </div>
                            <p class="mt-5 text-[14px] leading-7 text-body">
                                {{ __('site.race_info.cot_description') }}
                            </p>
                        </section>

                        <section class="rounded-2xl bg-brand-800 p-6 text-white sm:p-7">
                            <p class="text-[11px] font-semibold uppercase tracking-[0.18em] text-brand-200">{{ __('site.race_info.bib_title') }}</p>
                            <h2 class="mt-3 font-race text-[34px] font-bold leading-none">{{ __('site.race_info.bib_heading') }}</h2>
                            <ul class="mt-6 space-y-3 text-[14px] leading-7 text-white/85">
                                @foreach (__('site.race_info.bib_rules') as $rule)
                                    <li>{{ $rule }}</li>
                                @endforeach
                            </ul>
                        </section>

                        <section class="rounded-2xl border border-line bg-white p-6 sm:p-7">
                            <p class="text-[11px] font-semibold uppercase tracking-[0.18em] text-brand-700">{{ __('site.race_info.medal_title') }}</p>
                            <p class="mt-4 text-[14px] leading-7 text-body">
                                {{ __('site.race_info.medal_description') }}
                            </p>
                        </section>

                        <section class="rounded-2xl border border-line bg-white p-6 sm:p-7">
                            <p class="text-[11px] font-semibold uppercase tracking-[0.18em] text-brand-700">{{ __('site.race_info.safety_title') }}</p>
                            <p class="mt-5 text-[14px] leading-7 text-body">
                                {{ __('site.race_info.safety_description') }}
                            </p>
                        </section>
                    </div>
                </div>

                <div id="race-panel-size" class="hidden pt-10" role="tabpanel" aria-labelledby="race-tab-size">
                    <x-public.coming-soon />
                </div>
            </div>
        </section>
    </main>

    <x-public.footer />
@endsection
