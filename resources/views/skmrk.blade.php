@extends('layouts.app')

@section('title', 'Syarat & Ketentuan Merek')

@push('styles')
<style>
    /* CSS Khusus Halaman Syarat & Ketentuan Merek */
    .lead-description {
        font-size: 15px;
        color: #475569;
        line-height: 1.7;
        text-align: justify;
        margin-bottom: 25px;
        background-color: #f8fafc;
        border-left: 4px solid #3B6B80;
        padding: 15px 20px;
        border-radius: 0 8px 8px 0;
    }

    .terms-card {
        background-color: #ffffff;
        border: 1px solid #e2e8f0;
        border-radius: 8px;
        padding: 20px 25px;
        margin-bottom: 20px;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.03);
    }

    .terms-title {
        font-size: 17px;
        font-weight: 700;
        color: #1e293b;
        margin-bottom: 12px;
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .terms-title i {
        color: #3B6B80;
        font-size: 18px;
    }

    .custom-list {
        margin-left: 20px;
        margin-bottom: 0;
    }

    .custom-list li {
        margin-bottom: 8px;
        color: #475569;
        line-height: 1.6;
        font-size: 14px;
    }

    .custom-list li:last-child {
        margin-bottom: 0;
    }

    .sub-intro {
        font-size: 14px;
        color: #475569;
        margin-bottom: 10px;
        line-height: 1.6;
        text-align: justify;
    }
</style>
@endpush

@section('content')
    <h1 class="page-title">Syarat & Ketentuan Merek</h1>

    <div class="lead-description">
        Setiap pemohon (Pemilik Merek/Dosen/Unit Usaha) yang mengajukan permohonan fasilitasi pendaftaran Merek melalui Sentra HKI Universitas Darussalam Gontor <strong>wajib memahami dan menyetujui ketentuan khusus di bawah ini:</strong>
    </div>

    <!-- Poin 1 -->
    <div class="terms-card">
        <h2 class="terms-title"><i class="fa-solid fa-registered"></i> 1. Kriteria Merek yang Dapat Didaftarkan</h2>
        <p class="sub-intro">
            Sentra HKI UNIDA Gontor hanya memproses pengajuan merek yang memiliki daya pembeda yang cukup serta wujud visual berupa logo, nama, kata, huruf, angka, susunan warna, atau kombinasinya sesuai dengan undang-undang yang berlaku. Merek yang diajukan wajib digunakan untuk mengidentifikasi barang dan/atau jasa yang dihasilkan oleh unit usaha, riset terapan, atau produk kewirausahaan di lingkungan Universitas Darussalam Gontor.
        </p>
    </div>

    <!-- Poin 2 -->
    <div class="terms-card">
        <h2 class="terms-title"><i class="fa-solid fa-magnifying-glass-chart"></i> 2. Syarat Daya Pembeda & Larangan Kemiripan (Penelusuran Awal)</h2>
        <ul class="custom-list">
            <li><strong>Kewajiban Penelusuran (Pangkalan Data DJKI):</strong> Sebelum berkas didaftarkan, Pemohon wajib melakukan penelusuran mandiri atau bersama tim Sentra HKI pada pangkalan data DJKI untuk memastikan nama/logo Merek belum pernah terdaftar atau diajukan oleh pihak lain dalam kelas barang/jasa yang sama.</li>
            <li><strong>Risiko Penolakan:</strong> Merek yang memiliki persamaan pada pokoknya atau keseluruhannya dengan Merek milik pihak lain yang sudah terdaftar, menggunakan kata-kata umum/keterangan produk (misal: kata "Kopi Enak" untuk produk kopi), atau bertentangan dengan ideologi negara, moralitas, dan agama akan ditolak oleh DJKI. Sentra HKI UNIDA Gontor tidak bertanggung jawab atas penolakan pendaftaran akibat kelalaian Pemohon dalam melakukan penelusuran Merek awal.</li>
        </ul>
    </div>

    <!-- Poin 3 -->
    <div class="terms-card">
        <h2 class="terms-title"><i class="fa-solid fa-building-user"></i> 3. Kepemilikan Merek & Pengalihan Hak</h2>
        <p class="sub-intro">Sesuai dengan regulasi internal universitas dan UU Merek yang berlaku:</p>
        <ul class="custom-list">
            <li><strong>Pemegang Merek (Hak Ekonomi Institusi):</strong> Merek komersial produk hasil riset, unit usaha kampus, atau inkubasi bisnis berbasis institusi wajib didaftarkan atas nama Universitas Darussalam Gontor sebagai Pemegang Hak atas Merek resmi demi kepentingan pemeringkatan dan akreditasi institusi.</li>
            <li><strong>Pengalihan & Perjanjian:</strong> Pemohon/Inkubator bisnis wajib menandatangani Surat Perjanjian Pengalihan Hak atau Kesepakatan Bagi Hasil Komersialisasi bermeterai Rp 10.000 dengan pihak universitas sesuai ketentuan Lembaga Pengembangan Kewirausahaan/LPPM yang berlaku.</li>
        </ul>
    </div>

    <!-- Poin 4 -->
    <div class="terms-card">
        <h2 class="terms-title"><i class="fa-solid fa-file-invoice"></i> 4. Standarisasi Berkas & Etiket Logo Merek</h2>
        <p class="sub-intro">
            Pemohon bertanggung jawab penuh menyediakan dan melengkapi dokumen pendaftaran secara mandiri sesuai dengan template resmi yang disediakan di Pusat Unduhan.
        </p>
        <p class="sub-intro" style="margin-bottom: 0;">
            Dokumen wajib memuat: Contoh Etiket/Logo Merek berformat HD (resolusi tinggi), Deskripsi Arti/Makna Merek, Penentuan Kelas Barang/Jasa (Sistem Klasifikasi Nice), Tanda Tangan Pemohon, dan Surat Pernyataan Kepemilikan Merek di atas meterai Rp 10.000 yang menyatakan bahwa Merek tersebut adalah murni buatan sendiri dan tidak meniru karya orang lain.
        </p>
    </div>

    <!-- Poin 5 -->
    <div class="terms-card">
        <h2 class="terms-title"><i class="fa-solid fa-clock-rotate-left"></i> 5. Durasi Proses, Masa Pengumuman, dan Perlindungan 10 Tahun</h2>
        <ul class="custom-list">
            <li><strong>Fase Pemeriksaan Substantif:</strong> Proses pendaftaran Merek oleh DJKI membutuhkan waktu kurang lebih 5 hingga 12 bulan, yang meliputi fase Pemeriksaan Formalitas, Masa Pengumuman Publik (Masa Sanggahan Masyarakat selama 2 bulan), dan Pemeriksaan Substantif.</li>
            <li><strong>Kooperatif Menjawab Sanggahan/Oposisi:</strong> Apabila selama masa pengumuman atau pemeriksaan terdapat keberatan/sanggahan dari pihak luar atau Surat Usulan Penolakan dari Examiner DJKI, Pemohon wajib bersedia bekerja sama secara aktif dengan Sentra HKI untuk menyusun Tanggapan/Surat Keberatan (Sanggahan) dalam batas waktu yang ditentukan negara.</li>
            <li><strong>Masa Perlindungan & Perpanjangan:</strong> Sertifikat Merek berlaku selama 10 (sepuluh) tahun sejak Tanggal Penerimaan dan dapat diperpanjang untuk jangka waktu yang sama. Perpanjangan merek wajib diajukan paling cepat 6 bulan sebelum masa berlaku sertifikat berakhir.</li>
        </ul>
    </div>
@endsection