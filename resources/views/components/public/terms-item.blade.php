@props([
    'id',
    'title',
])

<div
    class="hs-accordion
           overflow-hidden
           rounded-xl
           border border-line
           bg-white
           transition
           hover:border-brand-200"
    id="terms-{{ $id }}"
>

    <button
        type="button"
        class="hs-accordion-toggle
               flex w-full
               items-center
               justify-between
               gap-5
               px-5 py-5
               text-left
               sm:px-6"
    >

        <span
            class="text-[14px]
                   font-semibold
                   leading-6
                   text-heading
                   sm:text-[15px]"
        >
            {{ $title }}
        </span>


        <span
            class="flex size-8
                   shrink-0
                   items-center
                   justify-center
                   rounded-full
                   bg-brand-50
                   text-brand-700"
        >

            <svg
                class="size-4
                       transition-transform
                       duration-300
                       hs-accordion-active:rotate-45"
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
                stroke-width="2"
            >
                <path
                    stroke-linecap="round"
                    d="M12 5v14M5 12h14"
                />
            </svg>

        </span>

    </button>


    <div
        class="hs-accordion-content
               hidden
               w-full
               overflow-hidden
               transition-[height]
               duration-300"
    >

        <div
            class="border-t border-line
                   px-5 py-5
                   sm:px-6"
        >

            <div
                class="text-[14px]
                       leading-7
                       text-body"
            >
                {{ $slot }}
            </div>

        </div>

    </div>

</div>