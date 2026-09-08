@extends('layouts.app')

@section('title', 'Sejarah HKI UNIDA Gontor')

@push('styles')
<style>
    /* Hero Banner Skew Effect */
    .hero-banner {
        position: relative;
        height: 260px;
        display: flex;
        overflow: hidden;
        background-color: #1a1a1a;
        border-radius: 8px;
        margin-bottom: 30px;
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

    .center-logo-overlay {
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        z-index: 4;
        height: 140px;
    }

    .description {
        font-size: 15px;
        color: #475569;
        line-height: 1.7;
        text-align: justify;
        margin-bottom: 20px;
    }

    .highlight-card {
        background-color: #f8fafc;
        border-left: 4px solid #3B6B80;
        padding: 20px;
        border-radius: 0 8px 8px 0;
        margin: 25px 0;
    }

    .highlight-card p {
        margin: 0;
        color: #334155;
        font-weight: 500;
        line-height: 1.6;
    }
</style>
@endpush

@section('content')
    <!-- Hero Banner -->
    <div class="hero-banner">
        <div class="banner-segment segment-1"></div>
        <div class="banner-segment segment-2"></div>
    </div>

    <h1 class="page-title">Sejarah HKI UNIDA Gontor</h1>

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