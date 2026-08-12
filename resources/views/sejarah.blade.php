<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sejarah HKI</title>
    <!-- Google Font & FontAwesome untuk icon pencarian -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&family=Slabo+27px&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Roboto', sans-serif;
        }

        body {
            background-color: #ffffff;
            color: #333333;
        }

        /* --- NAVBAR --- */
        .navbar {
            background-color: #3B6B80; /* Warna biru-abu khas Sentra HKI UNIDA */
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 12px 40px;
            color: white;
            position: relative;
            z-index: 10;
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 12px;
            font-size: 20px;
            font-weight: 700;
            letter-spacing: 0.5px;
        }

        .brand img {
            height: 35px;
        }

        .nav-menu {
            display: flex;
            align-items: center;
            list-style: none;
            gap: 20px;
        }

        .nav-item {
            position: relative;
        }

        .nav-link {
            color: white;
            text-decoration: none;
            font-size: 14px;
            font-weight: 500;
            padding: 6px 10px;
            display: flex;
            align-items: center;
            gap: 5px;
            cursor: pointer;
            transition: opacity 0.2s;
        }

        .nav-link:hover {
            opacity: 0.8;
        }

        /* Dropdown Styling */
        .dropdown-menu {
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            background-color: #3B6B80;
            min-width: 180px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.15);
            list-style: none;
            padding: 8px 0;
            border-radius: 0 0 4px 4px;
        }

        .dropdown-menu li a {
            color: white;
            padding: 10px 16px;
            display: block;
            text-decoration: none;
            font-size: 13px;
        }

        .dropdown-menu li a:hover {
            background-color: #2e5566;
        }

        .nav-item:hover .dropdown-menu {
            display: block;
        }

        .search-icon {
            cursor: pointer;
            font-size: 15px;
            margin-left: 10px;
        }

        /* --- HERO BANNER SKew EFFECT --- */
        .hero-banner {
            position: relative;
            height: 260px;
            display: flex;
            overflow: hidden;
            background-color: #1a1a1a;
        }

        .banner-segment {
            height: 100%;
            position: relative;
            background-size: cover;
            background-position: center;
        }

        /* Segment Kiri (Gedung Utama + Logo HKI) */
        .segment-1 {
            width: 65%;
            background-image: url('https://unida.gontor.ac.id/wp-content/uploads/2021/01/Gedung-Utama-UNIDA.jpg');
            clip-path: polygon(0 0, 100% 0, 85% 100%, 0% 100%);
            z-index: 1;
        }

        /* Segment Kanan (Gedung Samping/Asrama) */
        .segment-2 {
            width: 45%;
            margin-left: -10%;
            background-image: url('https://unida.gontor.ac.id/wp-content/uploads/2020/09/UNIDA-Gontor-1.jpg');
            clip-path: polygon(15% 0, 100% 0, 100% 100%, 0% 100%);
        }

        /* Overlay Logo HKI di tengah Banner */
        .center-logo-overlay {
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            z-index: 4;
            height: 140px;
        }

        /* --- CONTENT SECTION --- */
        .main-content {
            max-width: 1100px;
            margin: 40px auto;
            padding: 0 20px;
        }

        .page-title {
            font-family: 'Slabo 27px', serif;
            font-size: 38px;
            color: #3B6B80;
            font-weight: 700;
            border-bottom: 2px solid #e0e0e0;
            padding-bottom: 15px;
            margin-bottom: 25px;
            line-height: 1.2;
        }

        /* --- FOOTER STYLING --- */
        .footer {
            background-color: #2c5263; /* Warna sedikit lebih gelap dari navbar agar elegan */
            color: #ffffff;
            padding: 40px 0 20px 0;
            margin-top: 60px;
            font-size: 14px;
        }

        .footer-container {
            max-width: 1100px;
            margin: 0 auto;
            padding: 0 20px;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            gap: 30px;
        }

        .footer-col {
            flex: 1;
            min-width: 220px;
        }

        .footer-col h3 {
            font-size: 18px;
            margin-bottom: 15px;
            color: #ffffff;
            border-bottom: 2px solid #528ba3;
            display: inline-block;
            padding-bottom: 5px;
        }

        .footer-col p {
            line-height: 1.6;
            color: #d1d5db;
            margin-bottom: 10px;
        }

        .footer-col ul {
            list-style: none;
            padding: 0;
        }

        .footer-col ul li {
            margin-bottom: 10px;
        }

        .footer-col ul li a {
            color: #d1d5db;
            text-decoration: none;
            transition: color 0.2s;
        }

        .footer-col ul li a:hover {
            color: #ffffff;
            text-decoration: underline;
        }

        .social-links {
            display: flex;
            gap: 15px;
            margin-top: 15px;
        }

        .social-links a {
            color: #ffffff;
            font-size: 18px;
            transition: opacity 0.2s;
        }

        .social-links a:hover {
            opacity: 0.8;
        }

        .footer-bottom {
            text-align: center;
            padding-top: 20px;
            margin-top: 30px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            color: #9ca3af;
            font-size: 13px;
        }

        .page-heading {
            font-family: 'Slabo 18px', serif;
            font-size: 28px;
            color: #000; /* Added missing semicolon here */
            border-bottom: 2px solid #e0e0e0;
            padding-bottom: 15px;
            margin-bottom: 25px;
            line-height: 1.2;
        }

        .description {
            font-size: 15px;
            color: #555555;
            line-height: 1.6;
            text-align: justify;
        }
    </style>
</head>
<body>

    <nav class="navbar">
        <div class="brand">
            <!-- Tempatkan Logo HKI UNIDA jika ada -->
            <span>SENTRA HKI UNIDA</span>
        </div>

        <!-- SEMUA MENU DIGABUNG DALAM 1 TAG UL -->
        <ul class="nav-menu">
            <li class="nav-item">
                <a href="/" class="nav-link">Home <i class="fa-solid font-size-xs fa-chevron-down"></i></a>
                <ul class="dropdown-menu">
                    <li><a href="/sejarah">Sejarah HKI UNIDA Gontor</a></li>
                </ul>
            </li>

            <li class="nav-item">
                <a href="/pengertian" class="nav-link">Pengertian <i class="fa-solid font-size-xs fa-chevron-down"></i></a>
                <ul class="dropdown-menu">
                    <li><a href="/phc">Hak Cipta</a></li>
                    <li><a href="/pptn">Paten</a></li>
                    <li><a href="/pmrk">Merek</a></li> 
                </ul>
            </li>

            <li class="nav-item">
                <a href="/pendaftaran" class="nav-link">Pendaftaran <i class="fa-solid fa-chevron-down"></i></a>
                <ul class="dropdown-menu">
                    <li><a href="/pdffm">Form Pendaftaran</a></li>
                    <li><a href="/pdftf">Template Forms</a></li>
                </ul>
            </li>

            <li class="nav-item">
                <a href="/sk" class="nav-link">Syarat & Ketentuan <i class="fa-solid fa-chevron-down"></i></a>
                <ul class="dropdown-menu">
                    <li><a href="/skhc">Hak Cipta</a></li>
                    <li><a href="/skptn">Paten</a></li>
                    <li><a href="/skmrk">Merek</a></li>
                </ul>
            </li>
        </ul>
    </nav>

    <main class="main-content">
        <h1 class="page-title">Sejarah HKI UNIDA</h1>

        <p class="description">Universitas Darussalam Gontor Adalah perguruan tinggi pesantren yang berdiri di bawah naugan Pondok Modern Darussalam Gontor sejak tahun 2014. Sejalan dengan perkembangan hasil riset dan pengabdian kepada Masyarakat yang dilakukan oleh sivitas Akademika, baik Dosen maupun Mahasiswa, dirasa perlu untuk dilakukan perlindungan demi menjaga inovasi-inovasi tersebut dari plagiarisme dan ‘pencurian’ kekayaan intlektual oleh pihak-pihak yang bertanggung jawab, sehingga universitas mendirikan Lembaga untuk melindungi hasil riset dan pengabdian kepada Masyarakat tersebut.</p>
        <br>
        <p class="description">Pada awalnya Lembaga tersebut menyatu dengan Lembaga penerbitan UNIDA Gontor dengan focus pada pencatatan atas karya/ciptaan (Hak Cipta). Akan tetapi, seiring banyaknya inovasi hasil riset yang dilakukan oleh sivitas akademika UNIDA Gontor, Lembaga tersebut dirasa perlu dikembangkan agar tidak hanya pada pencatatan atas karya/ciptaan (Hak Cipta), akan tetapi juga menjadi pengelola legalitas perlindungan inovasi, perantara dalam pemanfaatan hasil riset dan konsultan pengembangannya agar tidak berhenti hanya pada konsep belaka.</p>
        <br>
        <p class="description">Akhirnya Universitas Darussalam Gontor secara resmi memutuskan untuk mendirikan dan mengembangkan Lembaga tersebut menjadi Sentra Hak Kekayaan Intelektual (KI) pada tanggal 25 April 2018 dengan surat Keputusan rector No. 1391 tahun 2018.</p>
        <br>
        <p class="description">Secara struktur, Sentra HKI UNIDA Gontor terdiri dari kepala Sentra HKI yang bertanggung jawab atas segala kegiatan HKI. Kepala Sentra HKI dalam menjalankan tugasnya dibantu oleh bagian keuangan, administrasi, percepatan KI, hilirisasi KI, dan edukasi KI. Selain itu, Lembaga ini juga memiliki penasehat di bidang hukum, IT, dan bidang ekonomi.</p>
        <br>
        <p class="description">Tujuan yang sangat mendasar pendirian Sentra HKI UNIDA Gontor Adalah utuk memberikan edukasi terkait HKI, baik pendaftaran, perlindungan, dan pemanfaatannya keada seluruh sivitas akademika. Selain itu, keberadaannya juga diharapkan dapat mengelola aset inovasi berupa kekayaan intelektual dan melakukan hilirasi kepada Masyarakat luas. Sehingga Lembaga ini dapat meningkatkan Kerjasama kelembagaan baik instansi swasta maupun pemerintahan dalam rangka percepatan perolehan HKI dan hilirasinya.</p>
        <br>
        <p class="description">Sentra HKI UNIDA Gontor juga berupaya melakukan hilirisasi (komersialisasi) produk-produk hasil riset atau inovasi sivitas akademika dalam rangka meningkatkan kemandirian ekonomi, terutama menciptakan Start-up di lingkungan Univeraitas Darussalam Gontor. Selain itu, Sentra HKI UNIDA Gontor juga melakukan alih teknologi atas kekayaan intelektual inovatif yang dimiliki oleh UNIDA Gontor dengan pihak-pihak eksternal dengan melakukan perjanjian Kerjasama dalam rangka pemanfaatan dan komersialisasi.</p>
        <br>
        <p class="description">Ruang lingkup kegiatan Sentra HKI UNIDA Gontor sebagai pendukung kemajuan Lembaga Adalah melakukan identifikasi terhadap hasil riset dan inovasi, melakukan kegiatan sosialisasi dan edukasi secara berkala, melakukan kegiatan pelatihan untuk sivitas akademika dan Masyarakat umum. Selain itu, Lembaga ini juga melakukan pendampingan dalam pendaftaran HKI komersialisasi dan mengorganisir penggunaan lisensi HKI kepada pihak tertentu, dan menjalin Kerjasama dengan instansi terkait dalam meningkatkan HKI.</p>
        <br>
        <p class="description">Dalam rangka menumbuhkan kesadaran HKI untuk sivitas akademika UNIDA Gontor dan umum, dengan semangat itu tim Sentra HKI UNIDA Gontor berupaya membuat Pusat Informasi Digital. Melalui platform berbasis digital ini, Sentra HKI UNIDA Gontor berhasil mengintegrasikan proses edukasi, verifikasi berkas permohonan, hingga pemantauan status pendaftaran secara real-time. Kini, Sentra HKI UNIDA Gontor tidak hanya berdiri sebagai unit administratif, melainkan penggerak utama dalam membangun budaya sadar HKI di lingkungan pesantren modern, mendongkrak klasterisasi riset universitas, serta mendukung komersialisasi produk inovasi demi kemaslahatan umat dan bangsa.</p>
    </main>
    <footer class="footer">
        <div class="footer-container">
            
            <!-- Kolom 1: Profil / Deskripsi -->
            <div class="footer-col">
                <h3>Sentra HKI UNIDA</h3>
                <p>Lembaga Layanan Hak Kekayaan Intelektual Universitas Darussalam Gontor.</p>
                <div class="social-links">
                    <a href="#"><i class="fa-brands fa-facebook"></i></a>
                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#"><i class="fa-brands fa-youtube"></i></a>
                </div>
            </div>

            <!-- Kolom 2: Navigasi Cepat -->
            <div class="footer-col">
                <h3>Tautan Cepat</h3>
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="/pengertian">Pengertian HKI</a></li>
                    <li><a href="/pendaftaran">Pendaftaran HKI</a></li>
                    <li><a href="/sejarah">Sejarah UNIDA</a></li>
                </ul>
            </div>

            <!-- Kolom 3: Kontak & Alamat -->
            <div class="footer-col">
                <h3>Kontak Kami</h3>
                <p><i class="fa-solid fa-location-dot"></i> Jl. Raya Siman No. Km. 5, Dusun I, Demangan, Kec. Siman, Kabupaten Ponorogo, Jawa Timur 63471</p>
                <p><i class="fa-solid fa-envelope"></i> hki@unida.gontor.ac.id</p>
                <p><i class="fa-solid fa-phone"></i> 0857-0858-3094</p>
            </div>

        </div>

        <!-- Copyright -->
        <div class="footer-bottom">
            <p>&copy; 2026 Sentra HKI UNIDA Gontor. All Rights Reserved.</p>
        </div>
    </footer>


</body>
</html>