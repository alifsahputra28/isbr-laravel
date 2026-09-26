@props([
    'category',
    'first',
    'second',
    'third',
])

<div>

    {{-- HEADER --}}
    <div>
        <p
            class="text-[11px]
                   font-semibold
                   uppercase
                   tracking-[0.15em]
                   text-brand-700"
        >
            Race Category
        </p>

        <h2
            class="mt-2
                   text-[28px]
                   font-semibold
                   tracking-[-0.035em]
                   text-heading
                   sm:text-[32px]"
        >
            {{ $category }}
        </h2>
    </div>


    {{-- PODIUM --}}
    <div
        class="mt-10
               grid
               items-end
               gap-5
               md:grid-cols-3"
    >

        {{-- SECOND PLACE --}}
        <article
            class="order-2
                   rounded-2xl
                   border border-line
                   bg-white
                   p-7
                   text-center
                   md:order-1"
        >

            <div
                class="mx-auto flex
                       size-12
                       items-center justify-center
                       rounded-full
                       bg-surface-muted
                       font-race text-lg font-bold
                       text-heading"
            >
                2
            </div>

            <p
                class="mt-5
                       text-xs font-semibold
                       uppercase
                       tracking-[0.14em]
                       text-muted"
            >
                Second Place
            </p>

            <p
                class="mt-3
                       font-race
                       text-[24px]
                       font-semibold
                       tracking-[-0.03em]
                       text-heading"
            >
                {{ $second }}
            </p>

        </article>



        {{-- FIRST PLACE --}}
        <article
            class="order-1
                   relative
                   overflow-hidden
                   rounded-2xl
                   border border-brand-300
                   bg-brand-800
                   p-8
                   text-center
                   text-white
                   md:order-2
                   md:min-h-[310px]"
        >

            {{-- decorative glow --}}
            <div
                class="absolute -right-16 -top-16
                       size-44
                       rounded-full
                       bg-brand-600/40
                       blur-3xl"
            ></div>

            <div class="relative">

                <div
                    class="mx-auto flex
                           size-14
                           items-center justify-center
                           rounded-full
                           bg-accent-500
                           font-race text-xl font-bold
                           text-on-accent"
                >
                    1
                </div>

                <p
                    class="mt-6
                           text-xs
                           font-semibold
                           uppercase
                           tracking-[0.16em]
                           text-white/65"
                >
                    Champion
                </p>

                <p
                    class="mt-3
                           font-race
                           text-[32px]
                           font-semibold
                           tracking-[-0.04em]
                           text-white"
                >
                    {{ $first }}
                </p>

                <div
                    class="mx-auto mt-7
                           h-px
                           w-16
                           bg-white/20"
                ></div>

                <p
                    class="mt-5
                           text-sm
                           leading-6
                           text-white/70"
                >
                    Official podium winner for {{ $category }}
                </p>

            </div>

        </article>



        {{-- THIRD PLACE --}}
        <article
            class="order-3
                   rounded-2xl
                   border border-line
                   bg-white
                   p-7
                   text-center"
        >

            <div
                class="mx-auto flex
                       size-12
                       items-center justify-center
                       rounded-full
                       bg-surface-muted
                       font-race text-lg font-bold
                       text-heading"
            >
                3
            </div>

            <p
                class="mt-5
                       text-xs font-semibold
                       uppercase
                       tracking-[0.14em]
                       text-muted"
            >
                Third Place
            </p>

            <p
                class="mt-3
                       font-race
                       text-[24px]
                       font-semibold
                       tracking-[-0.03em]
                       text-heading"
            >
                {{ $third }}
            </p>

        </article>

    </div>

</div>
