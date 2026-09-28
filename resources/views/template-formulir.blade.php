@extends('layouts.app')

@section('title', 'Pusat Unduhan Berkas - Sentra HKI UNIDA Gontor')

@push('styles')
<style>
    /* Styling khusus Pusat Unduhan Berkas */
    .subtitle-text {
        font-size: 15px;
        color: #475569;
        font-weight: 400;
        line-height: 1.7;
        margin-bottom: 25px;
        word-wrap: break-word;
    }

    /* Container utama 3 kolom download */
    .download-container {
        display: flex;
        justify-content: space-between;
        gap: 20px;
        width: 100%;
        max-width: 1100px;
        margin: 30px auto 40px auto;
        padding: 0;
        box-sizing: border-box;
    }

    /* Kartu per elemen */
    .download-card {
        flex: 1;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: space-between;
        text-align: center;
        padding: 25px 18px;
        background-color: #ffffff;
        border: 1px solid #e2e8f0;
        border-radius: 8px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.04);
        transition: transform 0.2s ease, box-shadow 0.2s ease;
        box-sizing: border-box;
    }

    .download-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
        border-color: #cbd5e1;
    }

    /* Judul di atas ikon */
    .download-title {
        font-size: 17px;
        font-weight: 700;
        color: #1e293b;
        min-height: 48px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 15px;
        line-height: 1.4;
    }

    /* Bagian Ikon */
    .download-icon {
        font-size: 42px;
        color: #3B6B80;
        margin-bottom: 20px;
    }

    /* Styling Button */
    .btn-download {
        width: 100%;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
        background-color: #3B6B80;
        color: #ffffff;
        text-decoration: none;
        font-size: 14px;
        font-weight: 600;
        padding: 11px 0;
        border-radius: 6px;
        text-align: center;
        transition: background-color 0.2s ease, transform 0.1s ease;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.08);
        box-sizing: border-box;
    }

    .btn-download:hover {
        background-color: #2c5263;
        color: #ffffff;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.12);
    }

    .btn-download:active {
        transform: scale(0.98);
    }

    /* Responsif Layar HP & Tablet */
    @media (max-width: 768px) {
        .subtitle-text {
            font-size: 14px;
        }

        .download-container {
            flex-direction: column;
            gap: 15px;
            margin-top: 20px;
        }

        .download-card {
            padding: 20px 15px;
        }

        .download-title {
            min-height: auto;
            font-size: 16px;
            margin-bottom: 12px;
        }

        .download-icon {
            font-size: 36px;
            margin-bottom: 15px;
        }

        .btn-download {
            padding: 10px 0;
            font-size: 13.5px;
        }
    }
</style>
@endpush

@section('content')
    <h1 class="page-title">Pusat Unduhan Berkas</h1>
    
    <p class="subtitle-text">
        Selamat datang di Pusat Unduhan Sentra HKI UNIDA Gontor. Silakan unduh dokumen template (formulir/surat pernyataan) di bawah ini sesuai dengan jenis Kekayaan Intelektual yang akan Anda ajukan.
    </p>

    <div class="download-container">
        <!-- Kartu 1: Contoh Dokumen Persyaratan -->
        <div class="download-card">
            <h3 class="download-title">Contoh Dokumen Persyaratan</h3>
            <div class="download-icon">
                <i class="fa-solid fa-folder-open"></i>
            </div>
            <a href="https://drive.google.com/drive/folders/1SnaJ4_LmIZUvsgLH-P3L1lFF01epRBZn" target="_blank" rel="noopener noreferrer" class="btn-download">
                <span>Buka Folder Drive</span>
                <i class="fa-solid fa-arrow-up-right-from-square" style="font-size: 12px;"></i>
            </a>
        </div>

        <!-- Kartu 2: Download Template Dokumen -->
        <div class="download-card">
            <h3 class="download-title">Download Template Dokumen</h3>
            <div class="download-icon">
                <i class="fa-solid fa-file-word"></i>
            </div>
            <a href="https://drive.google.com/drive/folders/1HL-j-V00K6AgSrmm2Gd191fsG1Rq1swQ" target="_blank" rel="noopener noreferrer" class="btn-download">
                <span>Buka Folder Drive</span>
                <i class="fa-solid fa-arrow-up-right-from-square" style="font-size: 12px;"></i>
            </a>
        </div>

        <!-- Kartu 3: Download Alur Pendaftaran -->
        <div class="download-card">
            <h3 class="download-title">Download Alur Pendaftaran</h3>
            <div class="download-icon">
                <i class="fa-solid fa-diagram-project"></i>
            </div>
            <a href="https://drive.google.com/drive/folders/1pDh44PED2HKpFqiBCAJDhuX3KMhPtaXu" target="_blank" rel="noopener noreferrer" class="btn-download">
                <span>Buka Folder Drive</span>
                <i class="fa-solid fa-arrow-up-right-from-square" style="font-size: 12px;"></i>
            </a>
        </div>
    </div>
@endsection