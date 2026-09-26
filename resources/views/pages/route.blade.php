@extends('layouts.app')

@section('content')
    <x-public.navbar variant="solid" />

    <main class="bg-white">
        <section class="py-14 sm:py-16 lg:py-20">
            <div class="mx-auto max-w-[1180px] px-6 sm:px-8 lg:px-10">
                <div class="mb-10 max-w-2xl">
                    <p class="text-[11px] font-semibold uppercase tracking-[0.18em] text-brand-700">
                        Course Information
                    </p>
                    <h1 class="mt-2 text-[36px] font-semibold tracking-[-0.04em] text-heading sm:text-[42px]">
                        Race Route
                    </h1>
                </div>

                <x-public.coming-soon description="Informasi rute resmi Ibnu Sina Batam Run 2027 sedang dipersiapkan." />
            </div>
        </section>
    </main>

    <x-public.footer />
@endsection
