@extends('layouts.app')

@section('content')

    {{-- NAVBAR --}}
    <x-public.navbar variant="solid" />


    <main class="bg-white">

        <section
            class="py-14
                   sm:py-16
                   lg:py-20"
        >

            <div
                class="mx-auto
                       max-w-[1180px]
                       px-6
                       sm:px-8
                       lg:px-10"
            >

                {{-- =========================
                     PAGE TITLE
                ========================== --}}
                <div class="mb-10">

                    <p
                        class="text-[11px]
                               font-semibold
                               uppercase
                               tracking-[0.18em]
                               text-brand-700"
                    >
                        Race Day
                    </p>

                    <h1
                        class="mt-2
                               text-[36px]
                               font-semibold
                               tracking-[-0.04em]
                               text-heading
                               sm:text-[42px]"
                    >
                        Race Pack Collection
                    </h1>

                </div>



                {{-- =========================
                     SECTION TITLE
                ========================== --}}
                <div>

                    <h2
                        class="text-[22px]
                               font-semibold
                               tracking-[-0.03em]
                               text-heading
                               sm:text-[24px]"
                    >
                        Pengambilan Race Pack
                    </h2>

                </div>



                {{-- =========================
                     MAIN CARD
                ========================== --}}
                <div
                    class="mt-5
                           rounded-2xl
                           border border-line
                           bg-surface
                           p-6
                           sm:p-8"
                >

                    {{-- INTRO --}}
                    <div>

                        <h3
                            class="text-[16px]
                                   font-semibold
                                   text-heading"
                        >
                            Hi Runners,
                        </h3>

                        <p
                            class="mt-2
                                   text-[14px]
                                   leading-7
                                   text-body
                                   sm:text-[15px]"
                        >
                            Race Day sudah semakin dekat. Berikut informasi
                            mengenai jadwal dan lokasi pengambilan Race Pack
                            untuk seluruh peserta Batam Run.
                        </p>

                    </div>



                    {{-- =========================
                         EVENT DETAILS
                    ========================== --}}
                    <div
                        class="mt-7
                               grid gap-y-4
                               text-[14px]
                               sm:text-[15px]"
                    >

                        {{-- DATE --}}
                        <div
                            class="grid gap-1
                                   sm:grid-cols-[140px_16px_1fr]"
                        >

                            <span class="font-medium text-heading">
                                Tanggal
                            </span>

                            <span class="hidden text-muted sm:block">
                                :
                            </span>

                            <span class="text-body">
                                13–14 November 2026
                            </span>

                        </div>


                        {{-- TIME --}}
                        <div
                            class="grid gap-1
                                   sm:grid-cols-[140px_16px_1fr]"
                        >

                            <span class="font-medium text-heading">
                                Waktu
                            </span>

                            <span class="hidden text-muted sm:block">
                                :
                            </span>

                            <span class="text-body">
                                10.00 – 20.00 WIB
                            </span>

                        </div>


                        {{-- LOCATION --}}
                        <div
                            class="grid gap-1
                                   sm:grid-cols-[140px_16px_1fr]"
                        >

                            <span class="font-medium text-heading">
                                Lokasi
                            </span>

                            <span class="hidden text-muted sm:block">
                                :
                            </span>

                            <span class="text-body">
                                Lokasi Race Pack Collection
                            </span>

                        </div>


                        {{-- ADDRESS --}}
                        <div
                            class="grid gap-1
                                   sm:grid-cols-[140px_16px_1fr]"
                        >

                            <span class="font-medium text-heading">
                                Alamat
                            </span>

                            <span class="hidden text-muted sm:block">
                                :
                            </span>

                            <span
                                class="max-w-[650px]
                                       leading-6
                                       text-body"
                            >
                                Alamat lengkap lokasi Race Pack Collection
                                akan ditampilkan di sini.
                            </span>

                        </div>

                    </div>



                    {{-- =========================
                         MAP BUTTON
                    ========================== --}}
                    <div
                        class="mt-6
                               sm:ml-[156px]"
                    >

                        <a
                            href="#"
                            target="_blank"
                            rel="noopener noreferrer"
                            class="inline-flex
                                   h-11
                                   items-center
                                   justify-center
                                   gap-2
                                   rounded-lg
                                   bg-brand-700
                                   px-5
                                   text-[13px]
                                   font-semibold
                                   text-white
                                   transition
                                   hover:bg-brand-800"
                        >

                            <svg
                                class="size-4"
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke="currentColor"
                                stroke-width="2"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M12 21s7-4.35 7-11a7 7 0 1 0-14 0c0 6.65 7 11 7 11Z"
                                />

                                <circle
                                    cx="12"
                                    cy="10"
                                    r="2.5"
                                />
                            </svg>

                            Buka Google Maps

                        </a>

                    </div>



                    {{-- =========================
                         IMPORTANT INFORMATION
                    ========================== --}}
                    <div
                        class="mt-8
                               overflow-hidden
                               rounded-xl
                               bg-brand-800
                               p-6
                               text-white
                               sm:p-7"
                    >

                        <div
                            class="flex
                                   items-start
                                   gap-4"
                        >

                            {{-- ICON --}}
                            <div
                                class="hidden
                                       size-10
                                       shrink-0
                                       items-center
                                       justify-center
                                       rounded-full
                                       bg-white/10
                                       sm:flex"
                            >

                                <svg
                                    class="size-5"
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor"
                                    stroke-width="2"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        d="M12 9v4m0 4h.01M10.29 3.86 1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0Z"
                                    />
                                </svg>

                            </div>


                            {{-- CONTENT --}}
                            <div class="flex-1">

                                <h3
                                    class="text-[16px]
                                           font-semibold
                                           uppercase
                                           tracking-[-0.01em]"
                                >
                                    Informasi Penting
                                </h3>


                                <p
                                    class="mt-4
                                           text-[12px]
                                           font-bold
                                           uppercase
                                           tracking-[0.08em]
                                           text-accent-300"
                                >
                                    Peserta harus membawa:
                                </p>


                                <ul
                                    class="mt-4
                                           space-y-3
                                           pl-5
                                           text-[14px]
                                           leading-6
                                           text-white/90
                                           marker:text-accent-300
                                           list-disc"
                                >

                                    <li>
                                        Bukti konfirmasi pendaftaran,
                                        baik dalam bentuk digital maupun cetak.
                                    </li>

                                    <li>
                                        Kartu identitas resmi yang digunakan
                                        saat pendaftaran.
                                    </li>

                                    <li>
                                        QR Code / E-Ticket peserta yang tersedia
                                        pada halaman registrasi.
                                    </li>

                                    <li>
                                        Surat kuasa apabila Race Pack diambil
                                        oleh perwakilan peserta.
                                    </li>

                                </ul>


                                {{-- OPTIONAL AUTHORIZATION --}}
                                <a
                                    href="#"
                                    class="mt-5
                                           inline-flex
                                           items-center
                                           rounded-full
                                           bg-accent-500
                                           px-4 py-2
                                           text-[12px]
                                           font-semibold
                                           text-on-accent
                                           transition
                                           hover:bg-accent-400"
                                >
                                    Download Surat Kuasa
                                </a>

                            </div>

                        </div>

                    </div>



                    {{-- =========================
                         NOTE
                    ========================== --}}
                    <div
                        class="mt-6
                               rounded-xl
                               bg-brand-50
                               px-5 py-4"
                    >

                        <p
                            class="text-[13px]
                                   leading-6
                                   text-brand-900"
                        >
                            <strong>Catatan:</strong>
                            Peserta disarankan melakukan pengambilan Race Pack
                            lebih awal untuk menghindari antrean menjelang
                            penutupan lokasi.
                        </p>

                    </div>

                </div>

            </div>

        </section>

    </main>


    {{-- FOOTER --}}
    <x-public.footer />

@endsection
