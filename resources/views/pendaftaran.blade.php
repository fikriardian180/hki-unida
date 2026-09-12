@extends('layouts.app')

@section('title', 'Alur & Pendaftaran HKI - Sentra HKI UNIDA Gontor')

@push('styles')
<style>
    /* CSS Khusus Halaman Landing Pendaftaran */
    .lead-text {
        font-size: 16px;
        color: #475569;
        line-height: 1.7;
        margin-bottom: 25px;
        word-wrap: break-word;
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
        padding-left: 5px;
        margin-bottom: 30px;
    }

    .steps-list li {
        margin-bottom: 12px;
        line-height: 1.6;
        color: #334155;
        font-size: 15px;
    }

    .steps-list a {
        color: #3B6B80;
        text-decoration: underline;
        font-weight: 600;
    }

    /* Grid Cards untuk Jenis Pendaftaran HKI */
    .hki-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
        gap: 20px;
        margin: 20px 0 40px 0;
        width: 100%;
        box-sizing: border-box;
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
        box-sizing: border-box;
    }

    .hki-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
        border-color: #cbd5e1;
    }

    .hki-card-icon {
        font-size: 42px;
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
        font-size: 14px;
        color: #64748b;
        margin-bottom: 20px;
        line-height: 1.5;
    }

    .btn-card {
        display: inline-block;
        background-color: #3B6B80;
        color: #ffffff;
        text-decoration: none;
        padding: 11px 15px;
        border-radius: 6px;
        font-size: 14px;
        font-weight: 600;
        transition: background-color 0.2s ease, transform 0.1s ease;
        text-align: center;
        box-sizing: border-box;
    }

    .btn-card:hover {
        background-color: #2c5263;
        color: #ffffff;
    }

    .btn-card:active {
        transform: scale(0.98);
    }

    /* Help Box Contact Info */
    .help-box {
        background-color: #f8fafc;
        border-left: 5px solid #3B6B80;
        padding: 20px 25px;
        border-radius: 0 8px 8px 0;
        margin-top: 15px;
        box-shadow: 0 2px 6px rgba(0,0,0,0.03);
    }

    .help-box p {
        margin-bottom: 12px;
        color: #475569;
        font-size: 14px;
        display: flex;
        align-items: flex-start;
        gap: 12px;
        line-height: 1.5;
        word-break: break-word;
    }

    .help-box p:last-child {
        margin-bottom: 0;
    }

    .help-box i {
        color: #3B6B80;
        font-size: 16px;
        margin-top: 3px;
        flex-shrink: 0;
    }

    /* MEDIA QUERY RESPONSIF UNTUK LAYAR HP / TABLET */
    @media (max-width: 768px) {
        .lead-text {
            font-size: 14px;
        }

        .section-title {
            font-size: 18px;
        }

        .steps-list {
            margin-left: 15px;
            padding-left: 0;
        }

        .steps-list li {
            font-size: 14px;
        }

        .hki-grid {
            grid-template-columns: 1fr; /* Card menumpuk 1 kolom di HP */
            gap: 15px;
        }

        .hki-card {
            padding: 20px 15px;
        }

        .help-box {
            padding: 15px;
        }
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
        <li><strong>Unduh & Isi Dokumen:</strong> Buka menu <a href="{{ url('/template-formulir') }}">Template Forms</a> untuk mengunduh template surat pernyataan dan dokumen teknis yang diperlukan. Cetak, isi, dan tandatangani di atas meterai Rp 10.000.</li>
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
            <a href="{{ url('/formulir-hak-cipta') }}" class="btn-card">
                <i class="fa-solid fa-pen-to-square"></i> Isi Formulir
            </a>
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
            <a href="{{ url('/formulir-merek') }}" class="btn-card">
                <i class="fa-solid fa-pen-to-square"></i> Isi Formulir
            </a>
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
            <a href="{{ url('/formulir-paten') }}" class="btn-card">
                <i class="fa-solid fa-pen-to-square"></i> Isi Formulir
            </a>
        </div>
    </div>

    <h2 class="section-title">Butuh Bantuan atau Konsultasi?</h2>
    <p style="color: #64748b; font-size: 14px; margin-bottom: 10px;">
        Jika Bapak/Ibu mengalami kendala teknis dalam pengisian formulir atau ragu mengenai kategori HKI dari karya Anda, silakan hubungi Tim Admin Sentra HKI UNIDA Gontor melalui kontak berikut:
    </p>

    <div class="help-box">
        <p><i class="fa-solid fa-location-dot"></i> <span>Gedung Zubair 207, Jl. Raya Siman No. Km. 5, Dusun I, Demangan, Kec. Siman, Kabupaten Ponorogo, Jawa Timur 63471</span></p>
        <p><i class="fa-solid fa-envelope"></i> <span>hki@unida.gontor.ac.id</span></p>
        <p><i class="fa-solid fa-phone"></i> <span>0857-0858-3094</span></p>
    </div>
@endsection