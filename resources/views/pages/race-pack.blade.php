@extends('layouts.app')

@section('seo_title', __('site.seo.race_pack.title'))
@section('seo_description', __('site.seo.race_pack.description'))
@section('seo_canonical', route('race-pack'))

@section('content')
    <x-public.navbar variant="solid" />

    <main class="bg-white">
        <section class="py-14 sm:py-16 lg:py-20">
            <div class="mx-auto max-w-[1180px] px-6 sm:px-8 lg:px-10">
                <div class="mb-10 max-w-2xl">
                    <p class="text-[11px] font-semibold uppercase tracking-[0.18em] text-brand-700">
                        {{ __('site.race_pack.label') }}
                    </p>
                    <h1 class="mt-2 text-[36px] font-semibold tracking-[-0.04em] text-heading sm:text-[42px]">
                        {{ __('site.race_pack.title') }}
                    </h1>
                    <p class="mt-3 text-[15px] leading-7 text-body">
                        {{ __('site.race_pack.description') }}
                    </p>
                </div>

                <div class="grid gap-6 lg:grid-cols-[1.05fr_0.95fr]">
                    <section class="rounded-2xl border border-line bg-white p-6 sm:p-8">
                        <h2 class="text-[24px] font-semibold tracking-[-0.03em] text-heading">
                            {{ __('site.race_pack.information_title') }}
                        </h2>

                        <dl class="mt-7 grid gap-5 sm:grid-cols-2">
                            @foreach (__('site.race_pack.fields') as $label)
                                <div class="rounded-xl bg-surface-soft p-4">
                                    <dt class="text-xs font-semibold uppercase tracking-[0.12em] text-muted">{{ $label }}</dt>
                                    <dd class="mt-2 text-[15px] font-semibold text-heading">-</dd>
                                </div>
                            @endforeach
                        </dl>
                    </section>

                    <aside class="rounded-2xl bg-brand-800 p-6 text-white sm:p-8">
                        <p class="text-[11px] font-semibold uppercase tracking-[0.18em] text-brand-200">
                            {{ __('site.race_pack.important') }}
                        </p>
                        <h2 class="mt-3 text-[24px] font-semibold tracking-[-0.03em]">
                            {{ __('site.race_pack.rules_title') }}
                        </h2>

                        <ul class="mt-6 space-y-4 text-[14px] leading-7 text-white/85">
                            @foreach (__('site.race_pack.rules') as $rule)
                                <li class="flex gap-3">
                                    <span class="mt-2.5 size-1.5 shrink-0 rounded-full bg-accent-500"></span>
                                    {{ $rule }}
                                </li>
                            @endforeach
                        </ul>
                    </aside>
                </div>
            </div>
        </section>
    </main>

    <x-public.footer />
@endsection
