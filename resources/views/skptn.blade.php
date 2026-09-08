@extends('layouts.app')

@section('title', 'Syarat & Ketentuan Paten')

@push('styles')
<style>
    /* CSS Khusus Halaman Syarat & Ketentuan Paten */
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
        line-height: 1.5;
    }
</style>
@endpush

@section('content')
    <h1 class="page-title">Syarat & Ketentuan Paten</h1>

    <div class="lead-description">
        Setiap pemohon (Pencipta/Inventor) yang mengajukan permohonan fasilitasi pendaftaran Paten melalui Sentra HKI Universitas Darussalam Gontor <strong>wajib memahami dan menyetujui ketentuan khusus di bawah ini:</strong>
    </div>

    <!-- Poin 1 -->
    <div class="terms-card">
        <h2 class="terms-title"><i class="fa-solid fa-lightbulb"></i> 1. Kriteria Invensi yang Dapat Dipatenkan</h2>
        <p class="sub-intro">Sentra HKI UNIDA Gontor hanya memproses invensi yang memenuhi syarat materiil perlindungan paten sesuai undang-undang yang berlaku, yaitu:</p>
        <ul class="custom-list">
            <li><strong>Paten Sederhana:</strong> Invensi berupa produk atau alat baru, varian baru, proses, atau pengembangan dari produk/proses yang sudah ada, yang memiliki kegunaan praktis (alat tepat guna) dan mengandung unsur kebaruan.</li>
            <li><strong>Paten Biasa:</strong> Invensi teknologi tingkat tinggi yang mengandung langkah inventif (tidak terduga oleh ahli di bidangnya), baru secara global, dan dapat diterapkan dalam industri.</li>
        </ul>
    </div>

    <!-- Poin 2 -->
    <div class="terms-card">
        <h2 class="terms-title"><i class="fa-solid fa-eye-slash"></i> 2. Syarat Mutlak Kebaruan (Novelty) & Larangan Publikasi Dini</h2>
        <ul class="custom-list">
            <li><strong>Belum Pernah Dipublikasikan:</strong> Invensi yang diajukan wajib belum pernah diumumkan, dipamerkan, dijual, atau dipublikasikan dalam bentuk apa pun (termasuk draf jurnal ilmiah, prosiding seminar, skripsi/tesis mahasiswa, media massa, atau unggahan media sosial) di mana pun secara global sebelum mendapatkan Tanggal Penerimaan (Filing Date) dari DJKI.</li>
            <li><strong>Risiko Penolakan:</strong> Segala bentuk publikasi ilmiah atau pengenalan produk ke publik sebelum pendaftaran resmi dilakukan dapat menggugurkan syarat kebaruan, sehingga paten berisiko tinggi ditolak oleh Pemeriksa Paten (Examiner). Sentra HKI UNIDA Gontor tidak bertanggung jawab atas penolakan paten akibat kelalaian publikasi dini oleh pihak Inventor.</li>
        </ul>
    </div>

    <!-- Poin 3 -->
    <div class="terms-card">
        <h2 class="terms-title"><i class="fa-solid fa-scale-balanced"></i> 3. Kepemilikan Paten & Pengalihan Hak</h2>
        <p class="sub-intro">Sesuai dengan regulasi internal universitas dan UU Paten yang berlaku:</p>
        <ul class="custom-list">
            <li><strong>Hak Inventor (Hak Moral):</strong> Nama para peneliti/dosen akan tetap tercantum selamanya di dalam sertifikat negara sebagai Inventor (Penemu) yang sah. Hak ini tidak dapat dialihkan atau dihapus.</li>
            <li><strong>Pemegang Paten (Hak Ekonomi):</strong> Seluruh invensi hasil riset yang menggunakan dana universitas, dana hibah eksternal atas nama institusi, atau menggunakan fasilitas laboratorium/sarana UNIDA Gontor, hak ekonominya wajib dialihkan kepada Universitas Darussalam Gontor sebagai institusi Pemegang Paten resmi demi kepentingan pemeringkatan dan akreditasi. Inventor wajib menandatangani Surat Pengalihan Hak atas Invensi bermeterai Rp 10.000.</li>
        </ul>
    </div>

    <!-- Poin 4 -->
    <div class="terms-card">
        <h2 class="terms-title"><i class="fa-solid fa-file-lines"></i> 4. Standarisasi Dokumen Deskripsi (Spesifikasi) Paten</h2>
        <ul class="custom-list">
            <li>Inventor bertanggung jawab penuh menyusun dokumen Deskripsi Paten secara mandiri menggunakan bahasa Indonesia yang baik, benar, dan teknis sesuai dengan template resmi yang disediakan di Pusat Unduhan.</li>
            <li>Dokumen Deskripsi Paten wajib memuat bagian: Judul Invensi, Bidang Teknik Invensi, Latar Belakang Invensi, Ringkasan Invensi, Uraian Singkat Gambar (jika ada), Uraian Lengkap Invensi, Klaim, dan Abstrak.</li>
            <li>Tim Sentra HKI berhak mengembalikan berkas pendaftaran ke pihak Inventor jika struktur penulisan deskripsi, batasan klaim hukum, atau gambar teknik belum memenuhi standar minimal yang ditetapkan oleh Direktorat Jenderal Kekayaan Intelektual (DJKI).</li>
        </ul>
    </div>

    <!-- Poin 5 -->
    <div class="terms-card">
        <h2 class="terms-title"><i class="fa-solid fa-hourglass-half"></i> 5. Durasi Proses, Pemeriksaan Substantif, dan Biaya Pemeliharaan</h2>
        <ul class="custom-list">
            <li><strong>Proses Jangka Panjang:</strong> Berbeda dengan Hak Cipta yang instan, proses pemeriksaan Paten oleh DJKI membutuhkan waktu berbulan-bulan (untuk Paten Sederhana) hingga bertahun-tahun (untuk Paten Biasa) melalui fase Pengumuman dan Pemeriksaan Substantif.</li>
            <li><strong>Kooperatif Menjawab Sanggahan:</strong> Selama masa pemeriksaan substantif, apabila terdapat Injunction (permintaan perbaikan/sanggahan) dari Examiner DJKI, Inventor wajib bersedia bekerja sama secara aktif dengan Sentra HKI untuk menyusun tanggapan substantif dalam batas waktu yang ditentukan negara.</li>
            <li><strong>Biaya Pemeliharaan Tahunan:</strong> Setelah Paten disetujui (Granted), pemilik Paten wajib membayar biaya tahunan pemeliharaan agar paten tetap aktif. Skema biaya akan dikoordinasikan lebih lanjut antara pihak Universitas (Pemegang Paten) dan Inventor sesuai dengan kontrak komersialisasi/kebijakan LPPM yang berlaku.</li>
        </ul>
    </div>
@endsection