@extends('layouts.app')

@section('title', 'Alur & Pendaftaran HKI')

@push('styles')
<style>
    /* CSS Khusus Halaman Landing Pendaftaran */
    .lead-text {
        font-size: 16px;
        color: #4b5563;
        line-height: 1.6;
        margin-bottom: 25px;
    }

    .section-title {
        font-size: 20px;
        font-weight: 700;
        color: #3B6B80;
        margin-top: 30px;
        margin-bottom: 15px;
        border-bottom: 2px solid #e2e8f0;
        padding-bottom: 8px;
    }

    /* Steps List Styling */
    .steps-list {
        margin-left: 20px;
        margin-bottom: 30px;
    }

    .steps-list li {
        margin-bottom: 12px;
        line-height: 1.6;
        color: #4b5563;
        font-size: 15px;
    }

    /* Grid Cards untuk Jenis Pendaftaran HKI */
    .hki-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 20px;
        margin: 20px 0 40px 0;
    }

    .hki-card {
        background-color: #ffffff;
        border: 1px solid #e2e8f0;
        border-radius: 8px;
        padding: 25px 20px;
        text-align: center;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
        transition: transform 0.2s ease, box-shadow 0.2s ease;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .hki-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
    }

    .hki-card-icon {
        font-size: 40px;
        color: #3B6B80;
        margin-bottom: 15px;
    }

    .hki-card-title {
        font-size: 18px;
        font-weight: 700;
        color: #1e293b;
        margin-bottom: 10px;
    }

    .hki-card-desc {
        font-size: 13px;
        color: #64748b;
        margin-bottom: 20px;
        line-height: 1.5;
    }

    .btn-card {
        display: inline-block;
        background-color: #3B6B80;
        color: #ffffff;
        text-decoration: none;
        padding: 10px 15px;
        border-radius: 5px;
        font-size: 14px;
        font-weight: 600;
        transition: background-color 0.2s;
    }

    .btn-card:hover {
        background-color: #2c5263;
    }

    /* Help Box Contact Info */
    .help-box {
        background-color: #f8fafc;
        border-left: 4px solid #3B6B80;
        padding: 20px 25px;
        border-radius: 0 8px 8px 0;
        margin-top: 15px;
    }

    .help-box p {
        margin-bottom: 10px;
        color: #475569;
        font-size: 14px;
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .help-box p:last-child {
        margin-bottom: 0;
    }

    .help-box i {
        color: #3B6B80;
        font-size: 16px;
        width: 20px;
    }
</style>
@endpush

@section('content')
    <h1 class="page-title">Alur & Formulir Pendaftaran HKI Daring</h1>
    
    <p class="lead-text">
        Selamat datang di layanan pendaftaran satu pintu Sentra Kekayaan Intelektual (Sentra HKI) Universitas Darussalam Gontor. Untuk mempermudah proses fasilitasi pelindungan karya Bapak/Ibu, silakan ikuti 3 langkah mudah di bawah ini.
    </p>

    <h2 class="section-title">3 Langkah Mudah Mendaftar</h2>
    <ol class="steps-list">
        <li><strong>Unduh & Isi Dokumen:</strong> Buka menu <a href="/pdftf" style="color: #3B6B80; text-decoration: underline;">Template Forms</a> untuk mengunduh template surat pernyataan dan dokumen teknis yang diperlukan. Cetak, isi, dan tandatangani di atas meterai Rp 10.000.</li>
        <li><strong>Siapkan File Karya:</strong> Siapkan KTP para pencipta/inventor beserta file asli karya atau draf deskripsi paten Anda dalam bentuk digital.</li>
        <li><strong>Isi Formulir Online:</strong> Pilih jenis Kekayaan Intelektual di bawah ini, lalu isi formulir yang tersedia secara lengkap.</li>
    </ol>

    <h2 class="section-title">Pilih Jenis Pendaftaran HKI</h2>
    <div class="hki-grid">
        <!-- Card Hak Cipta -->
        <div class="hki-card">
            <div>
                <div class="hki-card-icon">
                    <i class="fa-solid fa-copyright"></i>
                </div>
                <h3 class="hki-card-title">Hak Cipta</h3>
                <p class="hki-card-desc">Buku, modul, karya tulis, program komputer/source code, karya seni, audio, dan video.</p>
            </div>
            <a href="/formulir-hak-cipta" class="btn-card"><i class="fa-solid fa-pen-to-square"></i> Isi Formulir</a>
        </div>

        <!-- Card Merek -->
        <div class="hki-card">
            <div>
                <div class="hki-card-icon">
                    <i class="fa-solid fa-registered"></i>
                </div>
                <h3 class="hki-card-title">Merek</h3>
                <p class="hki-card-desc">Logo dagang, nama produk, etiket merek untuk produk barang maupun layanan jasa.</p>
            </div>
            <a href="/formulir-merek" class="btn-card"><i class="fa-solid fa-pen-to-square"></i> Isi Formulir</a>
        </div>

        <!-- Card Paten -->
        <div class="hki-card">
            <div>
                <div class="hki-card-icon">
                    <i class="fa-solid fa-lightbulb"></i>
                </div>
                <h3 class="hki-card-title">Paten</h3>
                <p class="hki-card-desc">Invensi teknologi, alat, formulasi, proses manufaktur, Paten Sederhana, dan PCT.</p>
            </div>
            <a href="/formulir-paten" class="btn-card"><i class="fa-solid fa-pen-to-square"></i> Isi Formulir</a>
        </div>
    </div>

    <h2 class="section-title">Butuh Bantuan atau Konsultasi?</h2>
    <p style="color: #64748b; font-size: 14px; margin-bottom: 10px;">
        Jika Bapak/Ibu mengalami kendala teknis dalam pengisian formulir atau ragu mengenai kategori HKI dari karya Anda, silakan hubungi Tim Admin Sentra HKI UNIDA Gontor melalui kontak berikut:
    </p>

    <div class="help-box">
        <p><i class="fa-solid fa-location-dot"></i> Gedung Zubair 207, Jl. Raya Siman No. Km. 5, Dusun I, Demangan, Kec. Siman, Kabupaten Ponorogo, Jawa Timur 63471</p>
        <p><i class="fa-solid fa-envelope"></i> hki@unida.gontor.ac.id</p>
        <p><i class="fa-solid fa-phone"></i> 0857-0858-3094</p>
    </div>
@endsection