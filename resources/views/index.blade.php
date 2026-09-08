@extends('layouts.app')

@section('title', 'Sentra HKI UNIDA Gontor - Beranda')

@push('styles')
<style>
    /* CSS Khusus Halaman Utama / Home */
    .hero-banner {
        position: relative;
        height: 260px;
        display: flex;
        overflow: hidden;
        background-color: #1a1a1a;
        border-radius: 8px;
        margin-bottom: 35px;
    }

    .banner-segment {
        height: 100%;
        position: relative;
        background-size: cover;
        background-position: center;
    }

    .segment-1 {
        width: 65%;
        background-image: url('https://unida.gontor.ac.id/wp-content/uploads/2021/01/Gedung-Utama-UNIDA.jpg');
        clip-path: polygon(0 0, 100% 0, 85% 100%, 0% 100%);
        z-index: 1;
    }

    .segment-2 {
        width: 45%;
        margin-left: -10%;
        background-image: url('https://unida.gontor.ac.id/wp-content/uploads/2020/09/UNIDA-Gontor-1.jpg');
        clip-path: polygon(15% 0, 100% 0, 100% 100%, 0% 100%);
    }

    .welcome-card {
        background-color: #f8fafc;
        border-left: 4px solid #3B6B80;
        padding: 25px;
        border-radius: 0 8px 8px 0;
        margin-bottom: 30px;
    }

    .page-heading {
        font-family: 'Slabo 27px', serif;
        font-size: 26px;
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
    }

    .description:last-child {
        margin-bottom: 0;
    }

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
</style>
@endpush

@section('content')
    <!-- Hero Banner Segment -->
    <div class="hero-banner">
        <div class="banner-segment segment-1"></div>
        <div class="banner-segment segment-2"></div>
    </div>

    <h1 class="page-title">Sentra HKI UNIDA Gontor</h1>

    <div class="welcome-card">
        <h2 class="page-heading">Selamat Datang di Sistem Informasi Resmi Sentra HKI Universitas Darussalam Gontor</h2>
        <p class="description">
            Sentra Kekayaan Intelektual (HKI) Universitas Darussalam Gontor merupakan unit strategis yang berkomitmen penuh dalam memfasilitasi, melindungi, serta mengelola seluruh aset intelektual hasil kreativitas, riset, dan inovasi dari segenap civitas akademika. Kami percaya bahwa setiap karya ilmiah, buku, jurnal, aplikasi, hingga invensi teknologi yang dilahirkan oleh para dosen dan peneliti merupakan aset berharga yang wajib mendapatkan kepastian hukum serta pelindungan hak cipta yang kuat.
        </p>
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