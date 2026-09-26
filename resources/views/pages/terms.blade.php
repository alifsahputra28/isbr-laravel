@extends('layouts.app')

@section('content')
    <x-public.navbar variant="solid" />

    <main class="bg-white">
        <section class="py-14 sm:py-16 lg:py-20">
            <div class="mx-auto max-w-[1180px] px-6 sm:px-8 lg:px-10">
                <div class="mb-10 max-w-3xl">
                    <p class="text-[11px] font-semibold uppercase tracking-[0.18em] text-brand-700">
                        Participant Agreement
                    </p>
                    <h1 class="mt-2 text-[36px] font-semibold tracking-[-0.04em] text-heading sm:text-[42px]">
                        Terms &amp; Conditions
                    </h1>
                    <p class="mt-3 max-w-2xl text-[15px] leading-7 text-body">
                        Syarat, ketentuan pendaftaran, dan Race Rules Ibnu Sina Batam Run 2027.
                    </p>
                </div>

                @php
                    $termsSections = [
                        [
                            'id' => 'categories',
                            'title' => '01. Kategori Lomba & Persyaratan Usia',
                            'items' => [
                                'Fun Run 5K bersifat non-competitive dan tidak diperlombakan, terbuka bagi peserta berusia minimal 13 tahun tanpa batas usia maksimal.',
                                '10K National Men terbuka untuk WNI pria berusia 13–39 tahun.',
                                '10K National Women terbuka untuk WNI wanita berusia 13–39 tahun.',
                                '10K Open International Men dan Women terbuka untuk WNA berusia minimal 17 tahun tanpa batas usia maksimal, dengan paspor atau identitas resmi yang masih berlaku.',
                                '10K National Master 40+ Men dan Women terbuka untuk WNI berusia 40 tahun ke atas.',
                                'Usia dihitung pada hari pelaksanaan lomba berdasarkan tanggal lahir pada identitas resmi. Pemalsuan usia atau tanggal lahir dapat menyebabkan diskualifikasi.',
                            ],
                        ],
                        [
                            'id' => 'registration',
                            'title' => '02. Syarat Pendaftaran',
                            'items' => [
                                'Peserta wajib mengisi data secara lengkap, benar, dan sesuai identitas resmi.',
                                'Peserta wajib menggunakan identitas milik sendiri dan dilarang menggunakan identitas orang lain.',
                                'Peserta wajib menyelesaikan pembayaran sesuai ketentuan panitia.',
                                'Peserta wajib membaca, memahami, dan menyetujui seluruh syarat, ketentuan pendaftaran, serta Race Rules.',
                                'Peserta dinyatakan resmi terdaftar setelah data dan pembayaran dinyatakan valid oleh sistem atau panitia.',
                            ],
                        ],
                        [
                            'id' => 'under-seventeen',
                            'title' => '03. Peserta di Bawah 17 Tahun',
                            'items' => [
                                'Peserta WNI berusia 13–16 tahun dapat mengikuti kategori 10K National.',
                                'Peserta wajib memperoleh persetujuan orang tua atau wali.',
                                'Surat Izin Orang Tua/Wali wajib diserahkan pada saat Race Pack Collection atau melalui mekanisme yang ditetapkan panitia.',
                                'Panitia berhak menolak peserta yang tidak memenuhi ketentuan ini.',
                            ],
                        ],
                        [
                            'id' => 'cot',
                            'title' => '04. Cut Off Time (COT)',
                            'items' => [
                                'Cut Off Time Fun Run 5K adalah 90 menit atau 1 jam 30 menit.',
                                'Cut Off Time Race 10K adalah 120 menit atau 2 jam.',
                                'Peserta yang melewati COT akan diarahkan oleh marshal atau dapat dijemput menggunakan Bus Sweeper maupun mobil evakuasi.',
                                'Peserta yang melewati COT tetap berhak memperoleh medali apabila menggunakan BIB resmi dan masuk ke area refreshment zone.',
                            ],
                        ],
                        [
                            'id' => 'judging',
                            'title' => '05. Wasit & Penjurian',
                            'items' => [
                                'Perlombaan diawasi oleh wasit resmi dari PASI Kota Batam.',
                                'Hasil lomba ditentukan berdasarkan sistem pencatatan waktu.',
                                'Panitia atau Race Committee berhak melakukan verifikasi terhadap hasil perlombaan.',
                                'Keputusan wasit dan Race Committee bersifat final sesuai kewenangannya.',
                            ],
                        ],
                        [
                            'id' => 'bib',
                            'title' => '06. Nomor BIB',
                            'items' => [
                                'Peserta wajib menggunakan BIB resmi.',
                                'BIB wajib dipasang di bagian depan dada dan terlihat jelas.',
                                'Peserta tanpa BIB tidak diperbolehkan melakukan start.',
                                'BIB tidak dapat dipindahtangankan.',
                                'Penggunaan BIB palsu atau BIB pinjaman merupakan pelanggaran dan dapat menyebabkan diskualifikasi.',
                                'NO BIB, NO START, NO MEDAL.',
                            ],
                        ],
                        [
                            'id' => 'conduct',
                            'title' => '07. Kostum & Ketentuan Peserta',
                            'items' => [
                                'Peserta wajib mengenakan pakaian olahraga lari yang pantas, sopan, dan nyaman.',
                                'Peserta wajib menjaga sportivitas, ketertiban, dan keselamatan selama perlombaan.',
                                'Peserta wajib mematuhi arahan panitia, marshal, petugas keamanan, dan petugas medis.',
                                'Peserta dilarang melakukan tindakan yang mengganggu atau membahayakan peserta lain.',
                            ],
                        ],
                        [
                            'id' => 'winner-verification',
                            'title' => '08. Identitas & Verifikasi Pemenang',
                            'items' => [
                                'Calon pemenang podium wajib membawa identitas resmi.',
                                'WNI dapat menunjukkan KTP, kartu pelajar, atau identitas resmi lain yang diterima panitia.',
                                'WNA wajib menunjukkan paspor atau dokumen resmi yang diterima panitia.',
                                'Data identitas wajib sesuai dengan data pendaftaran.',
                                'Peserta yang tidak dapat menunjukkan identitas valid atau datanya tidak sesuai kategori dapat didiskualifikasi sebagai pemenang.',
                            ],
                        ],
                        [
                            'id' => 'podium',
                            'title' => '09. Podium & Hadiah',
                            'items' => [
                                'Pemenang wajib hadir secara langsung untuk proses pengumuman, konfirmasi, dan penerimaan hadiah.',
                                'Pemenang tidak dapat diwakilkan.',
                                'Pemenang yang tidak hadir atau diwakilkan dapat didiskualifikasi sebagai pemenang serta kehilangan status juara dan hadiah.',
                                'Verifikasi mencakup identitas, usia, kewarganegaraan, dan hasil perlombaan.',
                                'Hasil resmi ditetapkan setelah seluruh proses verifikasi selesai.',
                            ],
                        ],
                        [
                            'id' => 'medal',
                            'title' => '10. Medali & Penyelesaian Lomba',
                            'items' => [
                                'Peserta wajib menggunakan BIB resmi selama perlombaan.',
                                'Peserta yang menyelesaikan lomba sesuai ketentuan berhak memperoleh finisher medal.',
                                'Peserta yang melewati COT tetap dapat memperoleh medali apabila menggunakan BIB resmi dan masuk ke area refreshment zone.',
                                'NO BIB, NO MEDAL.',
                            ],
                        ],
                        [
                            'id' => 'safety',
                            'title' => '11. Keamanan & Medis',
                            'items' => [
                                'Dukungan keselamatan meliputi 4 Water Station, 3 unit ambulans, 2 mobil evakuasi, dan 1 Bus Sweeper.',
                                'Dukungan medis tersedia dari Klinik Ibnu Sina dan Puskesmas Kota Batam.',
                                'Pertolongan pertama disediakan di lokasi perlombaan.',
                                'Peserta bertanggung jawab atas kondisi kesehatan dan kesiapan fisiknya.',
                                'Biaya perawatan lanjutan di rumah sakit menjadi tanggung jawab peserta.',
                            ],
                        ],
                        [
                            'id' => 'disqualification',
                            'title' => '12. Diskualifikasi',
                            'items' => [
                                'Tidak menggunakan BIB resmi atau menggunakan BIB palsu maupun pinjaman.',
                                'Memotong rute atau melewatkan checkpoint.',
                                'Menerima bantuan pacing yang melanggar prinsip fair play.',
                                'Bertindak tidak sportif atau membahayakan peserta lain.',
                                'Melakukan false start.',
                                'Tidak mematuhi arahan panitia, marshal, petugas keamanan, atau petugas medis.',
                                'Membawa benda berbahaya.',
                                'Memberikan data atau identitas palsu.',
                                'Melakukan tindakan lain yang bertentangan dengan Race Rules atau ketentuan penyelenggara.',
                            ],
                        ],
                        [
                            'id' => 'data-transfer',
                            'title' => '13. Perubahan Data & Pengalihan Peserta',
                            'items' => [
                                'Peserta wajib memastikan seluruh data yang diberikan telah benar.',
                                'Setelah batas waktu yang ditentukan, perubahan data hanya dapat dilakukan sesuai kebijakan panitia.',
                                'Pengalihan peserta hanya dapat dilakukan apabila panitia secara resmi membuka mekanisme transfer.',
                                'Pengalihan tanpa mekanisme resmi dapat menyebabkan diskualifikasi.',
                                'Peserta dilarang menggunakan identitas orang lain.',
                            ],
                        ],
                        [
                            'id' => 'rpc',
                            'title' => '14. Race Pack Collection',
                            'items' => [
                                'Race Pack wajib diambil pada waktu dan lokasi yang ditentukan panitia.',
                                'Peserta wajib menunjukkan identitas yang dipersyaratkan.',
                                'Pengambilan oleh perwakilan hanya diperbolehkan sesuai mekanisme dan persyaratan panitia.',
                                'Peserta wajib memastikan data dan perlengkapan yang diterima telah sesuai.',
                                'Ketidaksesuaian wajib segera dilaporkan kepada panitia.',
                            ],
                        ],
                        [
                            'id' => 'refund',
                            'title' => '15. Pembatalan & Pengembalian Biaya',
                            'items' => [
                                'Biaya registrasi pada prinsipnya tidak dapat dikembalikan, kecuali terdapat kebijakan khusus dari panitia.',
                                'Dalam kondisi force majeure, penundaan, atau pembatalan acara, mekanisme pengembalian biaya atau pengalihan keikutsertaan akan ditentukan dan diumumkan oleh panitia.',
                                'Ketidakhadiran peserta karena alasan pribadi tidak menjadi dasar pengembalian biaya.',
                            ],
                        ],
                        [
                            'id' => 'protest',
                            'title' => '16. Protes & Keberatan',
                            'items' => [
                                'Protes dapat diajukan dalam batas waktu yang ditentukan setelah hasil sementara diumumkan.',
                                'Protes wajib disertai alasan dan bukti yang jelas.',
                                'Race Committee akan memproses dan melakukan verifikasi.',
                                'Keputusan Race Committee bersifat final.',
                            ],
                        ],
                        [
                            'id' => 'release',
                            'title' => '17. Pernyataan & Pelepasan Tuntutan',
                            'items' => [
                                'Peserta menyadari dan bertanggung jawab atas risiko keikutsertaan dalam lomba lari.',
                                'Peserta memahami adanya risiko cedera dan gangguan kesehatan.',
                                'Peserta bertanggung jawab atas kesiapan fisiknya.',
                                'Peserta melepaskan panitia, penyelenggara, sponsor, dan pihak terkait dari tuntutan atas kejadian yang tidak diinginkan selama kegiatan.',
                                'Peserta wajib mengikuti seluruh instruksi keselamatan.',
                            ],
                        ],
                        [
                            'id' => 'consent',
                            'title' => '18. Persetujuan Peserta',
                            'items' => [
                                'Peserta menyatakan seluruh data yang diberikan benar dan dapat dipertanggungjawabkan.',
                                'Peserta telah membaca dan memahami seluruh syarat, ketentuan pendaftaran, serta Race Rules.',
                                'Peserta bersedia mematuhi seluruh peraturan yang berlaku.',
                                'Peserta bersedia menjalani verifikasi apabila menjadi calon pemenang.',
                                'Pelanggaran dapat menyebabkan diskualifikasi serta pencabutan status podium dan hadiah.',
                                'Peserta menerima keputusan Race Committee.',
                            ],
                        ],
                    ];
                @endphp

                <div class="max-w-[900px]">
                    <div class="hs-accordion-group space-y-3" data-hs-accordion-always-open>
                        @foreach ($termsSections as $section)
                            <x-public.terms-item :id="$section['id']" :title="$section['title']">
                                <ul class="space-y-2">
                                    @foreach ($section['items'] as $item)
                                        <li class="flex gap-3">
                                            <span class="mt-2.5 size-1.5 shrink-0 rounded-full bg-brand-600"></span>
                                            <span>{{ $item }}</span>
                                        </li>
                                    @endforeach
                                </ul>
                            </x-public.terms-item>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    </main>

    <x-public.footer />
@endsection
