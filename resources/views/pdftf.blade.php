@extends('layouts.app')

@section('title', 'Pusat Unduhan Berkas')

@push('styles')
<style>
    /* Styling khusus Pusat Unduhan Berkas */
    .section-title {
        font-size: 18px;
        font-weight: 700;
        color: #1a1a1a;
        margin-top: 25px;
        margin-bottom: 10px;
    }

    .description {
        font-size: 15px;
        color: #555555;
        line-height: 1.6;
        text-align: justify;
        margin-bottom: 10px;
    }

    .subtitle-text {
        font-size: 16px;
        color: #555;
        font-weight: 400;
        line-height: 1.6;
        margin-bottom: 20px;
    }

    /* Container utama 3 kolom download */
    .download-container {
        display: flex;
        justify-content: space-between;
        gap: 25px;
        max-width: 1100px;
        margin: 30px auto 40px auto;
        padding: 0;
    }

    /* Kartu per elemen */
    .download-card {
        flex: 1;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: space-between;
        text-align: center;
        padding: 25px 15px;
        background-color: #ffffff;
        border: 1px solid #e5e7eb;
        border-radius: 8px;
        box-shadow: 0 2px 8px rgba(0,0,0,0.05);
        transition: transform 0.2s ease, box-shadow 0.2s ease;
    }

    .download-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 6px 15px rgba(0,0,0,0.1);
    }

    /* Judul di atas ikon */
    .download-title {
        font-size: 18px;
        font-weight: 600;
        color: #2c3e50;
        min-height: 50px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 15px;
    }

    /* Bagian Ikon */
    .download-icon {
        font-size: 42px;
        color: #3B6B80;
        margin-bottom: 20px;
    }

    /* Styling Button "Click Here" */
    .btn-download {
        width: 100%;
        display: inline-block;
        background-color: #3B6B80;
        color: #ffffff;
        text-decoration: none;
        font-size: 14px;
        font-weight: 500;
        padding: 10px 0;
        border-radius: 4px;
        text-align: center;
        transition: background-color 0.2s ease, transform 0.1s ease;
        box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    }

    .btn-download:hover {
        background-color: #2c5263;
        color: #ffffff;
        box-shadow: 0 4px 6px rgba(0,0,0,0.15);
    }

    .btn-download:active {
        transform: scale(0.98);
    }

    /* Responsif Layar HP */
    @media (max-width: 768px) {
        .download-container {
            flex-direction: column;
            gap: 20px;
        }

        .download-title {
            min-height: auto;
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
        <!-- Kartu 1 -->
        <div class="download-card">
            <h3 class="download-title">Contoh Dokumen Persyaratan</h3>
            <div class="download-icon">
                <i class="fa-solid fa-file-arrow-down"></i>
            </div>
            <a href="https://drive.google.com/drive/folders/1SnaJ4_LmIZUvsgLH-P3L1lFF01epRBZn" target="_blank" class="btn-download">Click Here</a>
        </div>

        <!-- Kartu 2 -->
        <div class="download-card">
            <h3 class="download-title">Download Template Dokumen</h3>
            <div class="download-icon">
                <i class="fa-solid fa-file-arrow-down"></i>
            </div>
            <a href="https://drive.google.com/drive/folders/1HL-j-V00K6AgSrmm2Gd191fsG1Rq1swQ" target="_blank" class="btn-download">Click Here</a>
        </div>

        <!-- Kartu 3 -->
        <div class="download-card">
            <h3 class="download-title">Download Alur Pendaftaran</h3>
            <div class="download-icon">
                <i class="fa-solid fa-file-arrow-down"></i>
            </div>
            <a href="https://drive.google.com/drive/folders/1pDh44PED2HKpFqiBCAJDhuX3KMhPtaXu" target="_blank" class="btn-download">Click Here</a>
        </div>
    </div>
@endsection