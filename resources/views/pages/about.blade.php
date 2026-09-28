@extends('layouts.app')

@section('seo_title', __('site.seo.about.title'))
@section('seo_description', __('site.seo.about.description'))
@section('seo_canonical', route('about'))

@section('content')

    {{-- NAVBAR --}}
    <x-public.navbar variant="solid" />


    {{-- ABOUT CONTENT --}}
    <main class="bg-white">

        <section class="py-14 sm:py-16 lg:py-20">

            <div
                class="mx-auto max-w-[1180px]
                       px-6 sm:px-8 lg:px-10"
            >

                <div
                    class="grid items-start
                           gap-10
                           lg:grid-cols-2
                           lg:gap-16"
                >

                    {{-- IMAGE --}}
                    <div>

                        <div
                            class="overflow-hidden
                                   bg-surface-soft"
                        >

                            <img
                                src="{{ asset('assets/images/event/tagline.webp') }}"
                                alt="{{ __('site.about.image_alt') }}"
                                width="1536"
                                height="1024"
                                decoding="async"
                                class="aspect-[4/3]
                                       h-full w-full
                                       object-cover
                                       object-center"
                            >

                        </div>

                    </div>


                    {{-- CONTENT --}}
                    <div class="lg:pt-10">

                        <p class="text-[11px] font-semibold uppercase tracking-[0.18em] text-brand-700">
                            {{ __('site.about.label') }}
                        </p>

                        <h1
                            class="mt-2 text-[36px]
                                   font-semibold
                                   leading-tight
                                   tracking-[-0.04em]
                                   text-heading
                                   sm:text-[42px]"
                        >
                            {{ __('site.about.title') }}
                        </h1>


                        <div
                            class="mt-6 max-w-[580px]
                                   space-y-6
                                   text-[15px]
                                   leading-7
                                   text-body"
                        >

                            @foreach (__('site.about.paragraphs') as $paragraph)
                                <p>{{ $paragraph }}</p>
                            @endforeach

                        </div>

                    </div>

                </div>

            </div>

        </section>

    </main>


    {{-- FOOTER --}}
    <x-public.footer />

@endsection
