@extends('layouts.app')

@section('content')

    {{-- NAVBAR --}}
    <x-public.navbar variant="solid" />


    <main class="bg-white">

        {{-- =====================================================
             TERMS CONTENT
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
                        Participant Agreement
                    </p>

                    <h1
                        class="mt-2
                               text-[36px]
                               font-semibold
                               tracking-[-0.04em]
                               text-heading
                               sm:text-[42px]"
                    >
                        Terms & Conditions
                    </h1>

                    <p
                        class="mt-3
                               max-w-xl
                               text-[15px]
                               leading-7
                               text-body"
                    >
                        Harap membaca seluruh syarat dan ketentuan sebelum
                        menyelesaikan pendaftaran dan mengikuti perlombaan.
                    </p>

                </div>

                <div class="max-w-[900px]">

                <div class="hs-accordion-group space-y-3">

                    {{-- 1 --}}
                    <x-public.terms-item
                        id="eligibility"
                        title="1. Persyaratan Peserta"
                    >
                        <ul class="list-disc space-y-3 pl-5">
                            <li>
                                Peserta wajib memenuhi persyaratan usia minimum
                                sesuai dengan kategori lomba yang dipilih.
                            </li>

                            <li>
                                Seluruh data yang diberikan pada saat registrasi
                                harus benar, lengkap, dan sesuai dengan identitas resmi.
                            </li>

                            <li>
                                Peserta bertanggung jawab memastikan kondisi fisik
                                dan kesehatan memadai untuk mengikuti perlombaan.
                            </li>

                            <li>
                                Panitia berhak meminta dokumen identitas atau
                                dokumen pendukung apabila diperlukan.
                            </li>
                        </ul>
                    </x-public.terms-item>


                    {{-- 2 --}}
                    <x-public.terms-item
                        id="registration"
                        title="2. Pendaftaran"
                    >
                        <ul class="list-disc space-y-3 pl-5">
                            <li>
                                Setiap registrasi hanya berlaku untuk satu peserta
                                dan satu kategori lomba.
                            </li>

                            <li>
                                Peserta wajib memilih kategori, ukuran jersey, dan
                                data lainnya dengan benar sebelum menyelesaikan pembayaran.
                            </li>

                            <li>
                                Pendaftaran dianggap berhasil setelah pembayaran
                                terverifikasi oleh sistem.
                            </li>

                            <li>
                                Kuota peserta dapat ditutup sewaktu-waktu setelah
                                kapasitas kategori terpenuhi.
                            </li>
                        </ul>
                    </x-public.terms-item>


                    {{-- 3 --}}
                    <x-public.terms-item
                        id="payment"
                        title="3. Pembayaran"
                    >
                        <ul class="list-disc space-y-3 pl-5">
                            <li>
                                Peserta wajib melakukan pembayaran sesuai nominal
                                yang tercantum pada halaman checkout.
                            </li>

                            <li>
                                Biaya administrasi atau biaya transaksi dapat berlaku
                                sesuai metode pembayaran yang dipilih.
                            </li>

                            <li>
                                Registrasi yang tidak dibayar hingga batas waktu
                                pembayaran dapat dibatalkan secara otomatis.
                            </li>

                            <li>
                                Bukti pembayaran wajib disimpan hingga proses registrasi
                                dinyatakan berhasil.
                            </li>
                        </ul>
                    </x-public.terms-item>


                    {{-- 4 --}}
                    <x-public.terms-item
                        id="changes"
                        title="4. Perubahan Data Peserta"
                    >
                        <ul class="list-disc space-y-3 pl-5">
                            <li>
                                Perubahan data hanya dapat dilakukan dalam periode
                                yang ditentukan oleh panitia.
                            </li>

                            <li>
                                Perubahan kategori lomba bergantung pada ketersediaan kuota.
                            </li>

                            <li>
                                Perubahan ukuran jersey tidak dapat dijamin setelah
                                batas waktu produksi race pack.
                            </li>

                            <li>
                                Pemindahan kepesertaan kepada orang lain hanya dapat
                                dilakukan apabila diperbolehkan oleh kebijakan event.
                            </li>
                        </ul>
                    </x-public.terms-item>


                    {{-- 5 --}}
                    <x-public.terms-item
                        id="refund"
                        title="5. Pembatalan & Refund"
                    >
                        <ul class="list-disc space-y-3 pl-5">
                            <li>
                                Biaya registrasi pada prinsipnya tidak dapat dikembalikan,
                                kecuali dinyatakan lain oleh panitia.
                            </li>

                            <li>
                                Ketidakhadiran peserta pada race day tidak memberikan
                                hak otomatis atas pengembalian dana.
                            </li>

                            <li>
                                Jika event dibatalkan atau dijadwal ulang, mekanisme
                                kompensasi akan mengikuti keputusan resmi penyelenggara.
                            </li>
                        </ul>
                    </x-public.terms-item>


                    {{-- 6 --}}
                    <x-public.terms-item
                        id="race-pack"
                        title="6. Race Pack Collection"
                    >
                        <ul class="list-disc space-y-3 pl-5">
                            <li>
                                Peserta wajib melakukan pengambilan race pack sesuai
                                jadwal dan lokasi yang ditentukan.
                            </li>

                            <li>
                                Peserta wajib membawa QR Code atau bukti registrasi
                                dan identitas resmi.
                            </li>

                            <li>
                                Pengambilan oleh perwakilan harus mengikuti ketentuan
                                surat kuasa yang berlaku.
                            </li>

                            <li>
                                Race pack yang tidak diambil tidak otomatis dikirimkan
                                kepada peserta.
                            </li>
                        </ul>
                    </x-public.terms-item>


                    {{-- 7 --}}
                    <x-public.terms-item
                        id="race-day"
                        title="7. Ketentuan Race Day"
                    >
                        <ul class="list-disc space-y-3 pl-5">
                            <li>
                                Peserta wajib hadir sebelum waktu start kategori masing-masing.
                            </li>

                            <li>
                                BIB harus digunakan secara jelas selama perlombaan.
                            </li>

                            <li>
                                Peserta wajib mengikuti instruksi race official,
                                marshal, security, dan medical team.
                            </li>

                            <li>
                                Peserta yang melewati Cut Off Time dapat diminta
                                menghentikan perlombaan.
                            </li>

                            <li>
                                Peserta wajib mematuhi rute resmi yang telah ditentukan.
                            </li>
                        </ul>
                    </x-public.terms-item>


                    {{-- 8 --}}
                    <x-public.terms-item
                        id="health"
                        title="8. Kesehatan & Keselamatan"
                    >
                        <ul class="list-disc space-y-3 pl-5">
                            <li>
                                Peserta mengikuti perlombaan atas kesadaran terhadap
                                kondisi kesehatan dan kemampuan pribadi.
                            </li>

                            <li>
                                Peserta disarankan melakukan pemeriksaan kesehatan
                                sebelum mengikuti lomba jarak jauh.
                            </li>

                            <li>
                                Panitia berhak menghentikan peserta apabila kondisi
                                peserta dinilai berisiko terhadap keselamatan.
                            </li>

                            <li>
                                Peserta wajib memberikan informasi kondisi medis penting
                                apabila diperlukan.
                            </li>
                        </ul>
                    </x-public.terms-item>


                    {{-- 9 --}}
                    <x-public.terms-item
                        id="results"
                        title="9. Hasil Perlombaan & Podium"
                    >
                        <ul class="list-disc space-y-3 pl-5">
                            <li>
                                Hasil resmi ditentukan berdasarkan sistem timing dan
                                validasi panitia.
                            </li>

                            <li>
                                Peserta yang melakukan pelanggaran dapat dikenakan
                                penalti atau diskualifikasi.
                            </li>

                            <li>
                                Penetapan podium dilakukan setelah proses verifikasi
                                hasil perlombaan.
                            </li>

                            <li>
                                Keputusan race director dan panitia bersifat final.
                            </li>
                        </ul>
                    </x-public.terms-item>


                    {{-- 10 --}}
                    <x-public.terms-item
                        id="media"
                        title="10. Dokumentasi & Penggunaan Media"
                    >
                        <ul class="list-disc space-y-3 pl-5">
                            <li>
                                Dengan mengikuti event, peserta memahami bahwa kegiatan
                                dapat didokumentasikan dalam bentuk foto maupun video.
                            </li>

                            <li>
                                Dokumentasi event dapat digunakan untuk kebutuhan
                                publikasi, promosi, dan komunikasi penyelenggara.
                            </li>
                        </ul>
                    </x-public.terms-item>


                    {{-- 11 --}}
                    <x-public.terms-item
                        id="force-majeure"
                        title="11. Force Majeure"
                    >
                        <p>
                            Panitia dapat melakukan perubahan jadwal, rute,
                            lokasi, atau pembatalan kegiatan apabila terjadi kondisi
                            di luar kendali penyelenggara, termasuk namun tidak terbatas
                            pada bencana alam, kondisi keamanan, kebijakan pemerintah,
                            cuaca ekstrem, atau keadaan darurat lainnya.
                        </p>
                    </x-public.terms-item>


                    {{-- 12 --}}
                    <x-public.terms-item
                        id="agreement"
                        title="12. Persetujuan Peserta"
                    >
                        <p>
                            Dengan menyelesaikan proses pendaftaran, peserta dianggap
                            telah membaca, memahami, dan menyetujui seluruh syarat dan
                            ketentuan yang berlaku pada event.
                        </p>
                    </x-public.terms-item>

                </div>



                {{-- LAST UPDATE --}}
                <div
                    class="mt-10
                           rounded-xl
                           bg-brand-50
                           px-5 py-4"
                >
                    <p
                        class="text-[13px]
                               leading-6
                               text-brand-900"
                    >
                        <strong>Terakhir diperbarui:</strong>
                        22 September 2026.
                        Ketentuan dapat diperbarui apabila terdapat perubahan
                        kebijakan penyelenggaraan.
                    </p>
                </div>


                {{-- CTA --}}
                <div
                    class="mt-14
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
                            Ada yang belum jelas?
                        </h2>

                        <p class="mt-2 text-sm leading-6 text-white/70">
                            Hubungi tim kami jika membutuhkan penjelasan lebih lanjut.
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
