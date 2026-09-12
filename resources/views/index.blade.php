@extends('layouts.app')

@section('title', 'Sentra HKI UNIDA Gontor - Beranda')

@push('styles')
<style>
    /* CSS Khusus Halaman Utama / Home */
    .hero-banner {
        position: relative;
        height: 320px;
        width: 100%;
        overflow: hidden;
        background-color: #0f172a;
        border-radius: 8px;
        margin-bottom: 35px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.08);
    }

    .hero-banner img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center;
        display: block;
    }

    .hero-banner::after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(to bottom, rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.3));
        pointer-events: none;
    }

    /* Welcome Card Flexbox */
    .welcome-card {
        background-color: #f8fafc;
        border-left: 5px solid #3B6B80;
        padding: 25px;
        border-radius: 0 8px 8px 0;
        margin-bottom: 30px;
        display: flex;
        align-items: center;
        gap: 25px;
        box-shadow: 0 2px 8px rgba(0,0,0,0.03);
    }

    /* WADAH LOGO HKI (Diperbaiki agar proporsional untuk Logo) */
    .welcome-logo-wrap {
        flex-shrink: 0;
        width: 140px; /* Ukuran pas untuk logo vertikal/persegi */
        text-align: center;
    }

    .welcome-logo-wrap img {
        width: 100%;
        height: auto;
        max-height: 130px;   /* Tinggi maksimal logo */
        object-fit: contain; /* Menjaga bentuk asli logo */
        display: block;
        margin: 0 auto;
    }

    .welcome-content-wrap {
        flex: 1;
    }

    .page-heading {
        font-family: 'Slabo 27px', serif;
        font-size: 24px;
        color: #1e293b;
        margin-bottom: 12px;
        line-height: 1.3;
    }

    .description {
        font-size: 15px;
        color: #475569;
        line-height: 1.7;
        text-align: justify;
        margin-bottom: 18px;
        word-wrap: break-word;
    }

    .welcome-card .description {
        margin-bottom: 0;
    }

    /* Grid Kartu Layanan */
    .feature-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 20px;
        margin-top: 30px;
    }

    .feature-card {
        background-color: #ffffff;
        border: 1px solid #e2e8f0;
        border-radius: 8px;
        padding: 20px;
        box-shadow: 0 2px 6px rgba(0,0,0,0.03);
        transition: transform 0.2s ease, box-shadow 0.2s ease;
    }

    .feature-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 6px 12px rgba(0,0,0,0.08);
    }

    .feature-icon {
        font-size: 28px;
        color: #3B6B80;
        margin-bottom: 12px;
    }

    .feature-title {
        font-size: 18px;
        font-weight: 700;
        color: #1e293b;
        margin-bottom: 8px;
    }

    .feature-text {
        font-size: 14px;
        color: #64748b;
        line-height: 1.5;
    }

    /* Responsif untuk Tampilan HP/Tablet */
    @media (max-width: 768px) {
        .hero-banner {
            height: 180px; /* Banner menyesuaikan lebih pendek di HP */
            margin-bottom: 25px;
        }

        .welcome-card {
            flex-direction: column;
            text-align: center;
            padding: 20px 15px;
        }

        .welcome-logo-wrap {
            width: 100px; /* Ukuran logo di HP */
        }

        .page-heading {
            font-size: 20px;
        }

        .description {
            font-size: 14px;
            text-align: left; /* Alignment kiri lebih rapi dibaca di HP */
            line-height: 1.6;
        }

        .feature-grid {
            grid-template-columns: 1fr; /* 1 Kolom penuh di HP */
            gap: 15px;
        }
    }
</style>
@endpush

@section('content')
    <!-- Hero Banner Full Width -->
    <div class="hero-banner">
        <img src="{{ asset('images/banner-1.png') }}" alt="Gedung UNIDA Gontor">
    </div>

    <h1 class="page-title">Sentra HKI UNIDA Gontor</h1>

    <!-- Welcome Card Berisi Logo HKI & Teks Sambutan -->
    <div class="welcome-card">
        <div class="welcome-logo-wrap">
            <img src="{{ asset('images/logo-hki.png') }}" alt="Logo Sentra HKI UNIDA">
        </div>
        <div class="welcome-content-wrap">
            <h2 class="page-heading">Selamat Datang di Sistem Informasi Resmi Sentra HKI Universitas Darussalam Gontor</h2>
            <p class="description">
                Sentra Kekayaan Intelektual (HKI) Universitas Darussalam Gontor merupakan unit strategis yang berkomitmen penuh dalam memfasilitasi, melindungi, serta mengelola seluruh aset intelektual hasil kreativitas, riset, dan inovasi dari segenap civitas akademika. Kami percaya bahwa setiap karya ilmiah, buku, jurnal, aplikasi, hingga invensi teknologi yang dilahirkan oleh para dosen dan peneliti merupakan aset berharga yang wajib mendapatkan kepastian hukum serta pelindungan hak cipta yang kuat.
            </p>
        </div>
    </div>

    <p class="description">
        Sebagai bentuk perwujudan Tri Dharma Perguruan Tinggi yang adaptif terhadap era digital, platform ini hadir untuk memangkas birokrasi dan menyederhanakan proses administratif. Melalui Sistem Informasi Satu Pintu ini, para dosen kini dapat melakukan pengajuan berkas HKI, mengunduh dokumen persyaratan, hingga memantau perkembangan status validasi secara mandiri dan real-time dari mana saja tanpa harus mengabaikan aktivitas pembelajaran.
    </p>

    <p class="description">
        Mari bersama-sama kita catatkan dan amankan karya-karya terbaik kita. Pelindungan HKI yang solid tidak hanya menjaga hak moral dan ekonomi pencipta, namun juga menjadi pilar penting dalam mendongkrak klasterisasi riset, reputasi akademik, serta mengukuhkan kontribusi nyata UNIDA Gontor bagi kemajuan sains dan teknologi di tingkat nasional maupun internasional.
    </p>

    <!-- Kartu Layanan Unggulan -->
    <div class="feature-grid">
        <div class="feature-card">
            <i class="fa-solid fa-copyright feature-icon"></i>
            <h3 class="feature-title">Hak Cipta</h3>
            <p class="feature-text">Perlindungan instan untuk karya tulis, buku, modul perkuliahan, karya seni, audio visual, hingga program komputer.</p>
        </div>

        <div class="feature-card">
            <i class="fa-solid fa-lightbulb feature-icon"></i>
            <h3 class="feature-title">Paten</h3>
            <p class="feature-text">Fasilitasi pendaftaran invensi teknologi, alat tepat guna, serta formula riset terapan unggulan kampus.</p>
        </div>

        <div class="feature-card">
            <i class="fa-solid fa-registered feature-icon"></i>
            <h3 class="feature-title">Merek</h3>
            <p class="feature-text">Perlindungan identitas visual dan brand untuk produk unit usaha, laboratorium, dan inkubator bisnis UNIDA.</p>
        </div>
    </div>
@endsection