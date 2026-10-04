@extends('layouts.app')

@section('title', 'Sejarah Sentra HKI UNIDA Gontor')

@push('styles')
<style>
    /* Hero Banner Full Width */
    .hero-banner {
        position: relative;
        height: 300px;
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
        background: linear-gradient(to bottom, rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.4));
        pointer-events: none;
    }

    .description {
        font-size: 15px;
        color: #475569;
        line-height: 1.7;
        text-align: justify;
        margin-bottom: 20px;
        word-wrap: break-word;
    }

    .highlight-card {
        background-color: #f8fafc;
        border-left: 5px solid #3B6B80;
        padding: 22px 25px;
        border-radius: 0 8px 8px 0;
        margin: 30px 0;
        box-shadow: 0 2px 6px rgba(0,0,0,0.03);
    }

    .highlight-card p {
        margin: 0;
        color: #1e293b;
        font-weight: 500;
        font-size: 15px;
        line-height: 1.6;
    }

    /* WADAH FOTO BERSAMA TIM (FULL TANPA TERPOTONG) */
    .team-photo-container {
        margin: 35px 0;
        background-color: #ffffff;
        border: 1px solid #e2e8f0;
        border-radius: 10px;
        padding: 15px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
        box-sizing: border-box;
    }

    .team-photo-wrap {
        width: 100%;
        border-radius: 8px;
        background-color: #f1f5f9;
        text-align: center;
        overflow: hidden;
    }

    .team-photo-wrap img {
        width: 100%;
        height: auto;
        max-height: 550px;
        object-fit: contain; /* Menampilkan foto utuh tanpa terpotong */
        display: block;
        border-radius: 6px;
        margin: 0 auto;
    }

    .team-photo-caption {
        text-align: center;
        margin-top: 12px;
        font-size: 14px;
        color: #64748b;
        font-style: italic;
        line-height: 1.4;
    }

    .team-photo-caption i {
        color: #3B6B80;
        margin-right: 5px;
    }

    /* MEDIA QUERY RESPONSIF UNTUK MOBILITY (HP/TABLET) */
    @media (max-width: 768px) {
        .hero-banner {
            height: 180px;
            margin-bottom: 25px;
        }

        .description {
            font-size: 14px;
            text-align: left; /* Perataan kiri agar rapi dibaca di HP */
            line-height: 1.6;
        }

        .highlight-card {
            padding: 15px 18px;
            margin: 20px 0;
        }

        .highlight-card p {
            font-size: 14px;
        }

        .team-photo-container {
            padding: 10px;
            margin: 25px 0;
        }

        .team-photo-wrap img {
            max-height: 280px;
        }

        .team-photo-caption {
            font-size: 13px;
        }
    }
</style>
@endpush

@section('content')
    <!-- Hero Banner Utama -->
    <div class="hero-banner">
        <img src="{{ asset('images/banner2fix.jpeg') }}" alt="Gedung UNIDA Gontor">
    </div>

    <h1 class="page-title">Sejarah Sentra HKI UNIDA Gontor</h1>

    <p class="description">
        Universitas Darussalam Gontor adalah perguruan tinggi pesantren yang berdiri di bawah naungan Pondok Modern Darussalam Gontor sejak tahun 2014. Sejalan dengan perkembangan hasil riset dan pengabdian kepada masyarakat yang dilakukan oleh sivitas akademika, baik dosen maupun mahasiswa, dirasa perlu untuk dilakukan perlindungan demi menjaga inovasi-inovasi tersebut dari plagiarisme dan ‘pencurian’ kekayaan intelektual oleh pihak-pihak yang tidak bertanggung jawab, sehingga universitas mendirikan lembaga untuk melindungi hasil riset dan pengabdian masyarakat tersebut.
    </p>

    <p class="description">
        Pada awalnya lembaga tersebut menyatu dengan lembaga penerbitan UNIDA Gontor dengan fokus pada pencatatan atas karya/ciptaan (Hak Cipta). Akan tetapi, seiring banyaknya inovasi hasil riset yang dilakukan oleh sivitas akademika UNIDA Gontor, lembaga tersebut dirasa perlu dikembangkan agar tidak hanya pada pencatatan atas karya/ciptaan (Hak Cipta), tetapi juga menjadi pengelola legalitas perlindungan inovasi, perantara dalam pemanfaatan hasil riset, dan konsultan pengembangannya agar tidak berhenti hanya pada konsep belaka.
    </p>

    <div class="highlight-card">
        <p>
            Universitas Darussalam Gontor secara resmi memutuskan untuk mendirikan dan mengembangkan lembaga tersebut menjadi <strong>Sentra Hak Kekayaan Intelektual (KI) pada tanggal 25 April 2018</strong> berdasarkan Surat Keputusan Rektor No. 1391 Tahun 2018.
        </p>
    </div>

    <!-- SHOWCASE FOTO BERSAMA TIM SENTRA HKI (FULL UTUH) -->
    <div class="team-photo-container">
        <div class="team-photo-wrap">
            <img src="{{ asset('images/foto-bareng.JPG') }}" alt="Foto Tim Pengurus Sentra HKI UNIDA Gontor">
        </div>
        <div class="team-photo-caption">
            <i class="fa-solid fa-users"></i> Tim Pengurus dan Pengelola Sentra Kekayaan Intelektual (HKI) Universitas Darussalam Gontor
        </div>
    </div>

    <p class="description">
        Secara struktur, Sentra HKI UNIDA Gontor terdiri dari Kepala Sentra HKI yang bertanggung jawab atas segala kegiatan HKI. Kepala Sentra HKI dalam menjalankan tugasnya dibantu oleh bagian keuangan, administrasi, percepatan KI, hilirisasi KI, dan edukasi KI. Selain itu, lembaga ini juga memiliki penasehat di bidang hukum, IT, dan bidang ekonomi.
    </p>

    <p class="description">
        Tujuan yang sangat mendasar pendirian Sentra HKI UNIDA Gontor adalah untuk memberikan edukasi terkait HKI, baik pendaftaran, perlindungan, dan pemanfaatannya kepada seluruh sivitas akademika. Selain itu, keberadaannya juga diharapkan dapat mengelola aset inovasi berupa kekayaan intelektual dan melakukan hilirisasi kepada masyarakat luas, sehingga lembaga ini dapat meningkatkan kerja sama kelembagaan baik dengan instansi swasta maupun pemerintah dalam rangka percepatan perolehan HKI dan hilirisasinya.
    </p>

    <p class="description">
        Sentra HKI UNIDA Gontor juga berupaya melakukan hilirisasi (komersialisasi) produk-produk hasil riset atau inovasi sivitas akademika dalam rangka meningkatkan kemandirian ekonomi, terutama menciptakan <em>start-up</em> di lingkungan Universitas Darussalam Gontor. Selain itu, Sentra HKI UNIDA Gontor melakukan alih teknologi atas kekayaan intelektual inovatif yang dimiliki oleh UNIDA Gontor dengan pihak-pihak eksternal melalui perjanjian kerja sama demi pemanfaatan dan komersialisasi.
    </p>

    <p class="description">
        Ruang lingkup kegiatan Sentra HKI UNIDA Gontor sebagai pendukung kemajuan lembaga meliputi identifikasi hasil riset dan inovasi, sosialisasi dan edukasi berkala, serta pelatihan bagi sivitas akademika dan masyarakat umum. Lembaga ini juga melakukan pendampingan pendaftaran HKI, komersialisasi, mengorganisir penggunaan lisensi HKI kepada pihak tertentu, serta menjalin kerja sama dengan instansi terkait.
    </p>

    <p class="description">
        Dalam rangka menumbuhkan kesadaran HKI untuk sivitas akademika UNIDA Gontor dan masyarakat umum, tim Sentra HKI UNIDA Gontor berupaya membangun Pusat Informasi Digital. Melalui platform berbasis digital ini, Sentra HKI UNIDA Gontor berhasil mengintegrasikan proses edukasi, verifikasi berkas permohonan, hingga pemantauan status pendaftaran secara <em>real-time</em>. Kini, Sentra HKI UNIDA Gontor tidak hanya berdiri sebagai unit administratif, melainkan penggerak utama dalam membangun budaya sadar HKI di lingkungan pesantren modern, mendongkrak klasterisasi riset universitas, serta mendukung komersialisasi produk inovasi demi kemaslahatan umat dan bangsa.
    </p>
@endsection