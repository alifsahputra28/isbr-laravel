<section id="prices" class="bg-white py-16 sm:py-20 lg:py-24">
    <div class="mx-auto max-w-[1180px] px-6 sm:px-8 lg:px-10">
        <div class="max-w-3xl">
            <p class="text-[11px] font-semibold uppercase tracking-[0.18em] text-brand-700">
                {{ __('site.categories.label') }}
            </p>
            <h2 class="mt-2 text-[32px] font-semibold tracking-[-0.04em] text-heading sm:text-[38px]">
                {{ __('site.categories.title') }}
            </h2>
            <p class="mt-3 text-[15px] leading-7 text-body">
                {{ __('site.categories.description') }}
            </p>
        </div>

        <div class="mt-10 grid gap-5 lg:grid-cols-2">
            <article class="rounded-2xl border border-line bg-white p-6 transition hover:border-brand-300 sm:p-8">
                <p class="text-[11px] font-semibold uppercase tracking-[0.18em] text-brand-700">
                    {{ __('site.categories.non_competitive') }}
                </p>
                <h3 class="mt-3 font-race text-[38px] font-bold leading-none text-heading">
                    Fun Run 5K
                </h3>
                <ul class="mt-6 space-y-3 text-[14px] leading-6 text-body">
                    @foreach (__('site.categories.fun_run_rules') as $rule)
                        <li class="flex gap-3"><span class="mt-2 size-1.5 shrink-0 rounded-full bg-brand-600"></span>{{ $rule }}</li>
                    @endforeach
                </ul>
            </article>

            <article class="rounded-2xl border border-line bg-white p-6 transition hover:border-brand-300 sm:p-8">
                <p class="text-[11px] font-semibold uppercase tracking-[0.18em] text-brand-700">
                    {{ __('site.categories.competitive') }}
                </p>
                <h3 class="mt-3 font-race text-[38px] font-bold leading-none text-heading">
                    Race 10K
                </h3>
                <div class="mt-6 grid gap-3 sm:grid-cols-2">
                    @foreach (__('site.categories.race_10k') as $category)
                        <div class="rounded-xl bg-surface-soft p-4">
                            <p class="font-race text-xl font-semibold leading-tight text-heading">{{ $category['name'] }}</p>
                            <p class="mt-2 text-xs leading-5 text-muted">{{ $category['requirements'] }}</p>
                        </div>
                    @endforeach
                </div>
            </article>
        </div>

        <p class="mt-5 text-[13px] leading-6 text-muted">
            {{ __('site.categories.age_note') }}
        </p>
    </div>
</section>
