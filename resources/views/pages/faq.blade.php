@extends('layouts.app')

@section('content')

    {{-- NAVBAR --}}
    <x-public.navbar variant="solid" />


    <main class="bg-white">

        {{-- =====================================================
             FAQ CONTENT
        ====================================================== --}}
        <section class="py-14 sm:py-16 lg:py-20">

            <div
                class="mx-auto max-w-[1180px]
                       px-6 sm:px-8
                       lg:px-10"
            >

                <div class="mb-10 max-w-[900px]">

                    <p
                        class="text-[11px]
                               font-semibold
                               uppercase
                               tracking-[0.18em]
                               text-brand-700"
                    >
                        Help Center
                    </p>

                    <h1
                        class="mt-2
                               text-[36px]
                               font-semibold
                               tracking-[-0.04em]
                               text-heading
                               sm:text-[42px]"
                    >
                        Frequently Asked Questions
                    </h1>

                    <p
                        class="mt-3
                               max-w-xl
                               text-[15px]
                               leading-7
                               text-body"
                    >
                        Temukan jawaban untuk pertanyaan yang paling sering
                        ditanyakan mengenai registrasi, pembayaran, race pack,
                        dan race day.
                    </p>

                </div>

                <div class="max-w-[900px]">


                {{-- =================================================
                     REGISTRATION
                ================================================== --}}
                <div>

                    <div class="mb-6">

                        <p
                            class="text-[11px]
                                   font-semibold
                                   uppercase
                                   tracking-[0.16em]
                                   text-brand-700"
                        >
                            Registration
                        </p>

                        <h2
                            class="mt-2
                                   text-[24px]
                                   font-semibold
                                   tracking-[-0.03em]
                                   text-heading"
                        >
                            Pendaftaran
                        </h2>

                    </div>


                    <div class="hs-accordion-group space-y-3">

                        {{-- FAQ 1 --}}
                        <div
                            class="hs-accordion
                                   overflow-hidden
                                   rounded-xl
                                   border border-line
                                   bg-white
                                   transition
                                   hover:border-brand-200"
                            id="faq-registration-1"
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
                                    Bagaimana cara melakukan pendaftaran?
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
                                       hidden w-full
                                       overflow-hidden
                                       transition-[height]
                                       duration-300"
                            >

                                <div
                                    class="border-t border-line
                                           px-5 py-5
                                           sm:px-6"
                                >

                                    <p
                                        class="text-[14px]
                                               leading-7
                                               text-body"
                                    >
                                        Peserta dapat melakukan pendaftaran melalui
                                        halaman registrasi resmi. Pilih kategori lomba,
                                        lengkapi data peserta, tentukan ukuran jersey,
                                        kemudian lanjutkan ke proses pembayaran.
                                    </p>

                                </div>

                            </div>

                        </div>



                        {{-- FAQ 2 --}}
                        <div
                            class="hs-accordion
                                   overflow-hidden
                                   rounded-xl
                                   border border-line
                                   bg-white
                                   transition
                                   hover:border-brand-200"
                            id="faq-registration-2"
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

                                <span class="text-[14px] font-semibold leading-6 text-heading sm:text-[15px]">
                                    Apakah satu email dapat digunakan untuk beberapa peserta?
                                </span>

                                <span
                                    class="flex size-8 shrink-0
                                           items-center justify-center
                                           rounded-full bg-brand-50
                                           text-brand-700"
                                >
                                    <svg
                                        class="size-4 transition-transform duration-300
                                               hs-accordion-active:rotate-45"
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke="currentColor"
                                        stroke-width="2"
                                    >
                                        <path stroke-linecap="round" d="M12 5v14M5 12h14"/>
                                    </svg>
                                </span>

                            </button>

                            <div
                                class="hs-accordion-content hidden
                                       w-full overflow-hidden
                                       transition-[height] duration-300"
                            >
                                <div class="border-t border-line px-5 py-5 sm:px-6">
                                    <p class="text-[14px] leading-7 text-body">
                                        Sebaiknya setiap peserta menggunakan alamat email
                                        yang aktif dan dapat diakses sendiri karena seluruh
                                        konfirmasi registrasi dan informasi penting akan
                                        dikirim melalui email tersebut.
                                    </p>
                                </div>
                            </div>

                        </div>



                        {{-- FAQ 3 --}}
                        <div
                            class="hs-accordion
                                   overflow-hidden rounded-xl
                                   border border-line bg-white
                                   transition hover:border-brand-200"
                            id="faq-registration-3"
                        >

                            <button
                                type="button"
                                class="hs-accordion-toggle
                                       flex w-full items-center justify-between
                                       gap-5 px-5 py-5 text-left sm:px-6"
                            >

                                <span class="text-[14px] font-semibold leading-6 text-heading sm:text-[15px]">
                                    Apakah kategori lomba dapat diubah setelah registrasi?
                                </span>

                                <span
                                    class="flex size-8 shrink-0
                                           items-center justify-center
                                           rounded-full bg-brand-50
                                           text-brand-700"
                                >
                                    <svg
                                        class="size-4 transition-transform duration-300
                                               hs-accordion-active:rotate-45"
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke="currentColor"
                                        stroke-width="2"
                                    >
                                        <path stroke-linecap="round" d="M12 5v14M5 12h14"/>
                                    </svg>
                                </span>

                            </button>

                            <div
                                class="hs-accordion-content hidden
                                       w-full overflow-hidden
                                       transition-[height] duration-300"
                            >
                                <div class="border-t border-line px-5 py-5 sm:px-6">
                                    <p class="text-[14px] leading-7 text-body">
                                        Perubahan kategori bergantung pada ketersediaan
                                        slot dan kebijakan panitia. Setelah periode perubahan
                                        ditutup, kategori peserta tidak dapat diubah.
                                    </p>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>



                {{-- =================================================
                     PAYMENT
                ================================================== --}}
                <div class="mt-14">

                    <div class="mb-6">

                        <p
                            class="text-[11px]
                                   font-semibold uppercase
                                   tracking-[0.16em]
                                   text-brand-700"
                        >
                            Payment
                        </p>

                        <h2
                            class="mt-2 text-[24px]
                                   font-semibold
                                   tracking-[-0.03em]
                                   text-heading"
                        >
                            Pembayaran
                        </h2>

                    </div>


                    <div class="hs-accordion-group space-y-3">

                        <x-public.faq-item
                            id="payment-1"
                            question="Metode pembayaran apa saja yang tersedia?"
                        >
                            Sistem pembayaran dapat mendukung beberapa metode seperti
                            virtual account, transfer bank, QRIS, dan metode lain yang
                            tersedia pada payment gateway saat checkout.
                        </x-public.faq-item>


                        <x-public.faq-item
                            id="payment-2"
                            question="Bagaimana mengetahui pembayaran sudah berhasil?"
                        >
                            Setelah pembayaran berhasil diverifikasi, status registrasi
                            akan berubah menjadi Paid atau Confirmed dan peserta akan
                            menerima konfirmasi melalui sistem.
                        </x-public.faq-item>


                        <x-public.faq-item
                            id="payment-3"
                            question="Apakah biaya registrasi dapat dikembalikan?"
                        >
                            Biaya registrasi yang sudah dibayarkan mengikuti kebijakan
                            refund event. Ketentuan lengkap dapat dilihat pada halaman
                            Terms & Conditions.
                        </x-public.faq-item>

                    </div>

                </div>



                {{-- =================================================
                     RACE PACK
                ================================================== --}}
                <div class="mt-14">

                    <div class="mb-6">

                        <p
                            class="text-[11px]
                                   font-semibold uppercase
                                   tracking-[0.16em]
                                   text-brand-700"
                        >
                            Race Pack
                        </p>

                        <h2
                            class="mt-2 text-[24px]
                                   font-semibold
                                   tracking-[-0.03em]
                                   text-heading"
                        >
                            Race Pack Collection
                        </h2>

                    </div>


                    <div class="hs-accordion-group space-y-3">

                        <x-public.faq-item
                            id="race-pack-1"
                            question="Apa saja yang perlu dibawa saat Race Pack Collection?"
                        >
                            Peserta wajib membawa bukti registrasi atau QR Code,
                            kartu identitas resmi, serta dokumen tambahan jika
                            pengambilan dilakukan oleh perwakilan.
                        </x-public.faq-item>


                        <x-public.faq-item
                            id="race-pack-2"
                            question="Apakah Race Pack dapat diambil oleh orang lain?"
                        >
                            Ya, selama memenuhi ketentuan pengambilan oleh perwakilan
                            dan membawa surat kuasa serta dokumen yang dipersyaratkan.
                        </x-public.faq-item>


                        <x-public.faq-item
                            id="race-pack-3"
                            question="Apakah Race Pack dapat diambil pada race day?"
                        >
                            Race Pack sebaiknya diambil pada jadwal Race Pack Collection
                            yang sudah ditentukan. Pengambilan pada race day hanya tersedia
                            apabila secara resmi diumumkan oleh panitia.
                        </x-public.faq-item>

                    </div>

                </div>



                {{-- =================================================
                     RACE DAY
                ================================================== --}}
                <div class="mt-14">

                    <div class="mb-6">

                        <p
                            class="text-[11px]
                                   font-semibold uppercase
                                   tracking-[0.16em]
                                   text-brand-700"
                        >
                            Race Day
                        </p>

                        <h2
                            class="mt-2 text-[24px]
                                   font-semibold
                                   tracking-[-0.03em]
                                   text-heading"
                        >
                            Hari Perlombaan
                        </h2>

                    </div>


                    <div class="hs-accordion-group space-y-3">

                        <x-public.faq-item
                            id="race-day-1"
                            question="Berapa lama sebelum start peserta harus berada di lokasi?"
                        >
                            Peserta disarankan sudah berada di race village minimal
                            60 menit sebelum waktu start kategori masing-masing.
                        </x-public.faq-item>


                        <x-public.faq-item
                            id="race-day-2"
                            question="Apa yang terjadi jika peserta melewati Cut Off Time?"
                        >
                            Peserta yang melewati Cut Off Time dapat diminta menghentikan
                            perlombaan demi keselamatan dan kelancaran operasional race.
                        </x-public.faq-item>


                        <x-public.faq-item
                            id="race-day-3"
                            question="Apakah tersedia layanan medis selama perlombaan?"
                        >
                            Ya. Medical team dan fasilitas pertolongan pertama akan
                            disiapkan pada titik-titik tertentu sesuai race operation plan.
                        </x-public.faq-item>

                    </div>

                </div>



                {{-- =================================================
                     CONTACT CTA
                ================================================== --}}
                <div
                    class="mt-16
                           rounded-2xl
                           bg-brand-800
                           px-6 py-8
                           text-white
                           sm:flex
                           sm:items-center
                           sm:justify-between
                           sm:px-8"
                >

                    <div>

                        <h2
                            class="text-[22px]
                                   font-semibold
                                   tracking-[-0.03em]"
                        >
                            Masih punya pertanyaan?
                        </h2>

                        <p
                            class="mt-2
                                   text-sm leading-6
                                   text-white/70"
                        >
                            Hubungi tim kami untuk informasi lebih lanjut
                            mengenai event dan registrasi.
                        </p>

                    </div>


                    <a
                        href="{{ route('contact') }}"
                        class="mt-6
                               inline-flex h-11
                               items-center justify-center
                               rounded-lg
                               bg-white
                               px-5
                               text-sm font-semibold
                               text-brand-900
                               transition
                               hover:bg-brand-50
                               sm:mt-0"
                    >
                        Contact Us
                    </a>

                </div>

                </div>

            </div>

        </section>

    </main>


    <x-public.footer />

@endsection
