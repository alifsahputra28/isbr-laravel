<?php

return [
    'label' => 'Pusat Bantuan',
    'title' => 'Pertanyaan yang Sering Diajukan',
    'description' => 'Jawaban ringkas berdasarkan Syarat, Ketentuan Pendaftaran & Race Rules Ibnu Sina Batam Run 2027.',
    'groups' => [
        [
            'title' => '1. Kategori & Persyaratan',
            'items' => [
                ['categories', 'Apa saja kategori ISBR 2027?', 'Kategori yang tersedia adalah Fun Run 5K serta Race 10K yang terdiri dari 10K National Men, 10K National Women, 10K Open International Men, 10K Open International Women, 10K National Master 40+ Men, dan 10K National Master 40+ Women.'],
                ['fun-run-age', 'Berapa usia minimum Fun Run 5K?', 'Usia minimum Fun Run 5K adalah 13 tahun dan tidak ada batas usia maksimal. Kategori ini bersifat non-competitive dan tidak diperlombakan.'],
                ['national', 'Siapa yang dapat mengikuti 10K National?', '10K National terbuka untuk WNI. Kategori Men diperuntukkan bagi pria usia 13–39 tahun dan kategori Women bagi wanita usia 13–39 tahun.'],
                ['international', 'Siapa yang dapat mengikuti 10K Open International?', '10K Open International terbuka untuk peserta dari seluruh negara, termasuk WNI dan WNA. Peserta pria maupun wanita harus berusia minimal 17 tahun, tidak memiliki batas usia maksimal, dan wajib menunjukkan identitas resmi yang masih berlaku.'],
                ['master', 'Siapa yang dapat mengikuti National Master 40+?', '10K National Master 40+ terbuka untuk WNI pria dan wanita berusia 40 tahun ke atas.'],
                ['age-calculation', 'Bagaimana usia peserta dihitung?', 'Usia dihitung pada hari pelaksanaan lomba berdasarkan tanggal lahir yang tercantum pada identitas resmi peserta.'],
                ['under-seventeen', 'Apakah peserta di bawah 17 tahun diperbolehkan?', 'WNI berusia 13–16 tahun dapat mengikuti 10K National dengan persetujuan orang tua atau wali. Surat Izin Orang Tua/Wali wajib diserahkan pada saat Race Pack Collection atau melalui mekanisme yang ditetapkan panitia.'],
            ],
        ],
        [
            'title' => '2. Pendaftaran & Data Peserta',
            'items' => [
                ['official-registration', 'Kapan peserta dinyatakan resmi terdaftar?', 'Peserta dinyatakan resmi terdaftar setelah data dan pembayaran dinyatakan valid oleh sistem atau panitia.'],
                ['identity', 'Apakah boleh memakai identitas orang lain?', 'Tidak. Peserta wajib menggunakan identitas milik sendiri dan dilarang menggunakan identitas orang lain.'],
                ['data-change', 'Apakah data dapat diubah?', 'Setelah batas waktu yang ditentukan, perubahan data hanya dapat dilakukan sesuai kebijakan panitia.'],
                ['entry-transfer', 'Apakah race entry dapat dialihkan?', 'Pengalihan peserta hanya dapat dilakukan apabila panitia secara resmi membuka mekanisme transfer. Pengalihan tanpa mekanisme resmi dapat menyebabkan diskualifikasi.'],
            ],
        ],
        [
            'title' => '3. Race Day, BIB & COT',
            'items' => [
                ['cot', 'Berapa COT 5K dan 10K?', 'Cut Off Time Fun Run 5K adalah 90 menit atau 1 jam 30 menit. Cut Off Time Race 10K adalah 120 menit atau 2 jam.'],
                ['over-cot', 'Apa yang terjadi jika melewati COT?', 'Peserta akan diarahkan oleh marshal atau dapat dijemput menggunakan Bus Sweeper maupun mobil evakuasi. Peserta tetap dapat memperoleh medali apabila menggunakan BIB resmi dan masuk ke area refreshment zone.'],
                ['bib-required', 'Apakah BIB wajib?', 'Ya. BIB resmi wajib dipasang di bagian depan dada dan terlihat jelas. Peserta tanpa BIB tidak diperbolehkan melakukan start. NO BIB, NO START, NO MEDAL.'],
                ['bib-transfer', 'Apakah BIB boleh dipindahtangankan?', 'Tidak. BIB tidak dapat dipindahtangankan. Penggunaan BIB palsu atau BIB pinjaman merupakan pelanggaran dan dapat menyebabkan diskualifikasi.'],
            ],
        ],
        [
            'title' => '4. Race Pack & Medal',
            'items' => [
                ['rpc', 'Apa ketentuan Race Pack Collection?', 'Race Pack wajib diambil pada waktu dan lokasi yang ditentukan panitia. Peserta wajib menunjukkan identitas yang dipersyaratkan, memeriksa kesesuaian data dan perlengkapan, serta segera melaporkan ketidaksesuaian.'],
                ['rpc-representative', 'Apakah RPC dapat diwakilkan?', 'Dapat, hanya sesuai mekanisme dan persyaratan yang ditetapkan oleh panitia.'],
                ['medal', 'Siapa yang berhak mendapatkan medal?', 'Peserta yang menggunakan BIB resmi selama perlombaan dan menyelesaikan lomba sesuai ketentuan berhak memperoleh finisher medal. Peserta yang melewati COT tetap dapat memperoleh medali selama menggunakan BIB resmi dan masuk ke area refreshment zone.'],
            ],
        ],
        [
            'title' => '5. Podium & Hasil Lomba',
            'items' => [
                ['winner', 'Bagaimana winner ditentukan?', 'Hasil lomba ditentukan berdasarkan sistem pencatatan waktu, penjurian resmi oleh wasit dari PASI Kota Batam, serta verifikasi Race Committee.'],
                ['winner-id', 'Apakah calon winner harus menunjukkan identitas?', 'Ya. Calon pemenang podium wajib menunjukkan identitas resmi yang masih berlaku sesuai kewarganegaraan dan sesuai dengan data pendaftaran.'],
                ['winner-attendance', 'Apakah podium winner wajib hadir?', 'Ya. Pemenang wajib hadir secara langsung dan tidak dapat diwakilkan. Ketidakhadiran atau perwakilan dapat menyebabkan diskualifikasi serta hilangnya status juara dan hadiah.'],
                ['protest', 'Apakah hasil dapat diprotes?', 'Protes dapat diajukan dalam batas waktu yang ditentukan setelah hasil sementara diumumkan, dengan alasan dan bukti yang jelas. Race Committee akan memproses dan memverifikasi protes, dan keputusannya bersifat final.'],
            ],
        ],
        [
            'title' => '6. Keselamatan, Diskualifikasi & Pengembalian Biaya',
            'items' => [
                ['medical', 'Apa fasilitas medis yang tersedia?', 'Panitia menyediakan dukungan keselamatan, medis, hidrasi, dan evakuasi selama perlombaan sesuai dengan kebutuhan operasional acara.'],
                ['disqualification', 'Apa penyebab diskualifikasi?', 'Diskualifikasi dapat dikenakan karena tidak menggunakan BIB resmi, memakai BIB palsu atau pinjaman, memotong rute, melewatkan checkpoint, false start, data atau identitas palsu, bantuan pacing yang melanggar fair play, tindakan tidak sportif atau membahayakan, tidak mematuhi petugas, membawa benda berbahaya, atau pelanggaran Race Rules lainnya.'],
                ['refund', 'Apakah biaya registrasi dapat dikembalikan?', 'Biaya registrasi pada prinsipnya tidak dapat dikembalikan, kecuali terdapat kebijakan khusus dari panitia. Ketidakhadiran karena alasan pribadi tidak menjadi dasar pengembalian biaya.'],
                ['force-majeure', 'Bagaimana force majeure ditangani?', 'Jika terjadi force majeure, penundaan, atau pembatalan acara, mekanisme pengembalian biaya atau pengalihan keikutsertaan akan ditentukan dan diumumkan oleh panitia.'],
            ],
        ],
    ],
];
