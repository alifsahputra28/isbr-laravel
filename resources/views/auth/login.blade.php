@extends('layouts.auth')

@section('title', 'Sign In — Batam City Run')

@section('content')
    <main class="grid min-h-screen lg:grid-cols-[minmax(0,1fr)_minmax(520px,0.8fr)]">
        <section class="relative hidden overflow-hidden bg-brand p-12 text-white lg:flex lg:flex-col lg:justify-between xl:p-16" aria-label="Batam City Run introduction">
            <div class="absolute -end-28 -top-24 size-96 rounded-full border-[64px] border-white/5"></div>
            <div class="absolute -bottom-40 -start-32 size-[30rem] rounded-full border-[72px] border-accent/20"></div>

            <a href="{{ route('home') }}" class="relative inline-flex items-center gap-2.5">
                <span class="flex size-9 items-center justify-center rounded-lg bg-white text-brand"><x-icon name="flag" class="size-5" /></span>
                <span class="text-lg font-bold tracking-tight">BATAM CITY RUN</span>
            </a>

            <div class="relative max-w-xl">
                <p class="text-sm font-semibold uppercase tracking-[0.18em] text-brand-300">Batam City Run 2026</p>
                <h1 class="mt-5 text-4xl font-bold tracking-tight xl:text-5xl">Race Management System</h1>
                <p class="mt-5 max-w-lg text-base leading-7 text-white/80">Manage registrations, payments, and race operations in one place.</p>
            </div>

            <p class="relative text-xs text-white/50">&copy; 2026 Batam City Run. All rights reserved.</p>
        </section>

        <section class="flex min-h-screen items-center bg-white px-4 py-10 sm:px-8 lg:px-12 xl:px-20">
            <div class="mx-auto w-full max-w-md">
                <a href="{{ route('home') }}" class="mb-12 inline-flex items-center gap-2.5 lg:hidden">
                    <span class="flex size-9 items-center justify-center rounded-lg bg-brand text-white"><x-icon name="flag" class="size-5" /></span>
                    <span class="font-bold tracking-tight text-ink">BATAM CITY RUN</span>
                </a>

                <div>
                    <h1 class="text-2xl font-bold tracking-tight text-ink sm:text-3xl">Welcome back</h1>
                    <p class="mt-2 text-sm text-muted">Sign in to manage Batam City Run 2026 operations.</p>
                </div>

                <form class="mt-8 space-y-5" action="#" method="post">
                    @csrf
                    <div>
                        <label for="email" class="mb-2 block text-sm font-medium text-ink">Email</label>
                        <input id="email" name="email" type="email" autocomplete="email" placeholder="admin@runops.com" class="block w-full rounded-lg border-line px-3.5 py-3 text-sm text-ink placeholder:text-subtle focus:border-brand-500 focus:ring-brand-500" required>
                    </div>

                    <div>
                        <div class="mb-2 flex items-center justify-between gap-4">
                            <label for="password" class="block text-sm font-medium text-ink">Password</label>
                            <a href="#" class="text-xs font-semibold text-brand-700 hover:text-brand-800">Forgot Password?</a>
                        </div>
                        <input id="password" name="password" type="password" autocomplete="current-password" placeholder="Enter your password" class="block w-full rounded-lg border-line px-3.5 py-3 text-sm text-ink placeholder:text-subtle focus:border-brand-500 focus:ring-brand-500" required>
                    </div>

                    <label for="remember" class="flex w-fit items-center gap-2.5 text-sm text-body">
                        <input id="remember" name="remember" type="checkbox" class="size-4 rounded border-line-strong text-brand-700 focus:ring-brand-500">
                        Remember me
                    </label>

                    <x-button type="submit" variant="primary" size="lg" class="w-full">
                        Sign In
                        <x-icon name="arrow-right" class="size-4" />
                    </x-button>
                </form>

                <p class="mt-8 text-center text-xs leading-5 text-subtle">This login form is a UI preview. Authentication will be connected in a later development phase.</p>
            </div>
        </section>
    </main>
@endsection
