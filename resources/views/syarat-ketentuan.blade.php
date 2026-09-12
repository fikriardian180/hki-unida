@extends('layouts.app')

@section('title', 'Syarat & Ketentuan Umum - Sentra HKI UNIDA Gontor')

@push('styles')
<style>
    /* CSS Khusus Halaman Syarat & Ketentuan */
    .lead-description {
        font-size: 15px;
        color: #334155;
        line-height: 1.7;
        text-align: justify;
        margin-bottom: 25px;
        background-color: #f8fafc;
        border-left: 5px solid #3B6B80;
        padding: 18px 22px;
        border-radius: 0 8px 8px 0;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.03);
        word-wrap: break-word;
    }

    .terms-card {
        background-color: #ffffff;
        border: 1px solid #e2e8f0;
        border-radius: 8px;
        padding: 22px 25px;
        margin-bottom: 20px;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.03);
        transition: box-shadow 0.2s ease, transform 0.2s ease;
        box-sizing: border-box;
    }

    .terms-card:hover {
        box-shadow: 0 6px 14px rgba(0, 0, 0, 0.06);
        transform: translateY(-2px);
    }

    .terms-title {
        font-size: 18px;
        font-weight: 700;
        color: #1e293b;
        margin-bottom: 12px;
        display: flex;
        align-items: center;
        gap: 12px;
        line-height: 1.4;
    }

    .terms-title i {
        color: #3B6B80;
        font-size: 20px;
        flex-shrink: 0;
    }

    .sub-intro {
        font-size: 14.5px;
        color: #475569;
        margin-bottom: 10px;
        line-height: 1.6;
    }

    .custom-list {
        margin-left: 20px;
        padding-left: 5px;
        margin-bottom: 0;
    }

    .custom-list li {
        margin-bottom: 10px;
        color: #475569;
        line-height: 1.6;
        font-size: 14.5px;
    }

    .custom-list li:last-child {
        margin-bottom: 0;
    }

    .custom-list strong {
        color: #1e293b;
    }

    .custom-ol {
        margin-left: 20px;
        padding-left: 5px;
        margin-top: 8px;
        margin-bottom: 0;
    }

    .custom-ol li {
        margin-bottom: 8px;
        color: #475569;
        line-height: 1.6;
        font-size: 14.5px;
    }

    .custom-ol li:last-child {
        margin-bottom: 0;
    }

    /* MEDIA QUERY RESPONSIF UNTUK MOBILITY (HP/TABLET) */
    @media (max-width: 768px) {
        .lead-description {
            font-size: 14px;
            text-align: left;
            padding: 15px;
        }

        .terms-card {
            padding: 18px 15px;
            margin-bottom: 15px;
        }

        .terms-title {
            font-size: 16px;
            gap: 10px;
        }

        .terms-title i {
            font-size: 18px;
        }

        .sub-intro {
            font-size: 13.5px;
        }

        .custom-list, .custom-ol {
            margin-left: 15px;
            padding-left: 0;
        }

        .custom-list li, .custom-ol li {
            font-size: 13.5px;
            margin-bottom: 8px;
        }
    }
</style>
@endpush

@section('content')
    <h1 class="page-title">Syarat & Ketentuan</h1>

    <div class="lead-description">
        Selamat datang di platform Pusat Informasi Digital Sentra Kekayaan Intelektual (Sentra HKI) Universitas Darussalam Gontor. Seluruh civitas akademika (Dosen, Tenaga Kependidikan, Mahasiswa) maupun pengguna umum yang menggunakan layanan fasilitasi pendaftaran HKI di unit kami <strong>wajib mematuhi ketentuan di bawah ini:</strong>
    </div>

    <!-- Poin 1 -->
    <div class="terms-card">
        <h2 class="terms-title"><i class="fa-solid fa-shield-halved"></i> 1. Status Kepemilikan & Orisinalitas Karya</h2>
        <ul class="custom-list">
            <li><strong>Penjaminan Keaslian:</strong> Pemohon (Inventor/Pencipta) menjamin penuh bahwa karya, invensi, desain, atau merek yang diajukan merupakan hasil karya orisinal, tidak mengandung unsur plagiasi, dan tidak melanggar hak kekayaan intelektual milik pihak lain.</li>
            <li><strong>Tanggung Jawab Hukum:</strong> Sentra HKI UNIDA Gontor bertindak murni sebagai fasilitator administratif dan teknis pendaftaran. Segala bentuk tuntutan hukum, gugatan, atau sengketa dari pihak ketiga di kemudian hari terkait keaslian karya sepenuhnya menjadi tanggung jawab mutlak pemohon.</li>
        </ul>
    </div>

    <!-- Poin 2 -->
    <div class="terms-card">
        <h2 class="terms-title"><i class="fa-solid fa-building-columns"></i> 2. Aturan Afiliasi & Kepemilikan Hak (Khusus Civitas UNIDA)</h2>
        <ul class="custom-list">
            <li><strong>Pencantuman Institusi:</strong> Untuk kepentingan klasterisasi riset, pemeringkatan, dan akreditasi universitas, setiap pendaftaran HKI yang didanai oleh kampus atau menggunakan fasilitas laboratorium/sarana UNIDA Gontor wajib mencantumkan Universitas Darussalam Gontor sebagai Pemegang Hak / Pemilik Paten.</li>
            <li><strong>Hak Moral:</strong> Nama dosen, mahasiswa, atau peneliti yang terlibat akan tetap tercantum selamanya sebagai Pencipta / Inventor yang sah di dalam sertifikat resmi negara (Hak Moral tidak dapat dihilangkan).</li>
        </ul>
    </div>

    <!-- Poin 3 -->
    <div class="terms-card">
        <h2 class="terms-title"><i class="fa-solid fa-file-circle-check"></i> 3. Validasi & Kelayakan Berkas</h2>
        <p class="sub-intro">Sentra HKI berhak menolak atau mengembalikan berkas permohonan pendaftaran jika:</p>
        <ol class="custom-ol">
            <li>Dokumen administrasi tidak lengkap atau tidak menggunakan template resmi bermeterai yang disediakan di Pusat Unduhan.</li>
            <li>Draf deskripsi paten tidak sesuai dengan standar penulisan teknis DJKI.</li>
            <li>Karya dinilai mengandung unsur yang bertentangan dengan norma agama, susila, ketertiban umum, atau nilai-nilai kepesantrenan UNIDA Gontor.</li>
        </ol>
    </div>

    <!-- Poin 4 -->
    <div class="terms-card">
        <h2 class="terms-title"><i class="fa-solid fa-clock-rotate-left"></i> 4. Batasan Waktu & Komunikasi</h2>
        <ul class="custom-list">
            <li><strong>Estimasi Proses:</strong> Jangka waktu pemrosesan berkas di tingkat internal berkisar antara 1 hingga 3 hari kerja sejak berkas dinyatakan lengkap oleh admin.</li>
            <li><strong>Kecepatan Revisi:</strong> Jika admin memberikan catatan perbaikan/revisi pada berkas, pemohon wajib merespons dan melengkapinya dalam kurun waktu maksimal 3 hari kerja. Keterlambatan respons akan membuat antrean berkas digeser ke urutan paling belakang.</li>
        </ul>
    </div>

    <!-- Poin 5 -->
    <div class="terms-card">
        <h2 class="terms-title"><i class="fa-solid fa-gavel"></i> 5. Keputusan Final dari DJKI Kemenkumham</h2>
        <ul class="custom-list">
            <li>Pemohon memahami bahwa Sentra HKI UNIDA Gontor <strong>tidak memiliki wewenang</strong> untuk menerbitkan atau meluluskan sebuah hak kekayaan intelektual.</li>
            <li>Keputusan akhir mengenai dikabulkannya pendaftaran Hak Cipta, Merek, maupun pemberian Paten (Granted) merupakan <strong>wewenang mutlak dan penuh</strong> dari Direktorat Jenderal Kekayaan Intelektual (DJKI) Kementerian Hukum dan HAM RI.</li>
        </ul>
    </div>
@endsection