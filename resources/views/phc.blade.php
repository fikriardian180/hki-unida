<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengertian Hak Cipta</title>
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

        .section-title {
            font-size: 18px;
            font-weight: 700;
            color: #1a1a1a;
            margin-top: 25px;
            margin-bottom: 12px;
        }

        .description {
            font-size: 15px;
            color: #555555;
            line-height: 1.6;
            text-align: justify;
            margin-bottom: 12px;
        }

        /* List Styling */
        .main-content ul {
            margin-left: 20px;
            margin-bottom: 20px;
        }

        .main-content li {
            margin-bottom: 8px;
        }

        /* --- TABEL STYLING --- */
        .table-responsive {
            overflow-x: auto;
            margin-top: 15px;
            margin-bottom: 30px;
        }

        .custom-table {
            width: 100%;
            border-collapse: collapse;
            font-size: 14px;
            text-align: left;
            background-color: #ffffff;
            box-shadow: 0 1px 3px rgba(0,0,0,0.1);
            border-radius: 6px;
            overflow: hidden;
        }

        .custom-table th {
            background-color: #3B6B80;
            color: #ffffff;
            padding: 12px 16px;
            font-weight: 600;
        }

        .custom-table td {
            padding: 12px 16px;
            border-bottom: 1px solid #e5e7eb;
            color: #4b5563;
            vertical-align: top;
        }

        .custom-table tbody tr:nth-child(even) {
            background-color: #f9fafb;
        }

        .custom-table tbody tr:hover {
            background-color: #f1f5f9;
        }

        /* --- FOOTER STYLING --- */
        .footer {
            background-color: #2c5263;
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
    </style>
</head>
<body>

    <nav class="navbar">
        <div class="brand">
            <span>SENTRA HKI UNIDA</span>
        </div>

        <ul class="nav-menu">
            <li class="nav-item">
                <a href="/" class="nav-link">Home <i class="fa-solid fa-chevron-down"></i></a>
                <ul class="dropdown-menu">
                    <li><a href="/sejarah">Sejarah HKI UNIDA Gontor</a></li>
                </ul>
            </li>

            <li class="nav-item">
                <a href="/pengertian" class="nav-link">Pengertian <i class="fa-solid fa-chevron-down"></i></a>
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
        <h1 class="page-title">Hak Cipta</h1>
        
        <p class="section-title">1. Definisi Hak Cipta</p>
        <p class="description">Berdasarkan <strong>UU No. 28 Tahun 2014</strong> tentang Hak Cipta, <strong>Hak Cipta</strong> adalah hak eksklusif pencipta yang timbul secara otomatis berdasarkan prinsip deklaratif setelah suatu ciptaan diwujudkan dalam bentuk nyata tanpa mengurangi pembatasan sesuai dengan ketentuan peraturan perundang-undangan.</p>
        <p class="description">Hak eksklusif ini terdiri atas <strong>Hak Moral</strong> (hak yang melekat abadi pada diri Pencipta untuk mencantumkan namanya) dan <strong>Hak Ekonomi</strong> (hak untuk mendapatkan manfaat ekonomi atas ciptaan tersebut).</p>

        <p class="section-title">2. Landasan Hukum</p>
        <p class="description">Penyelenggaraan dan perlindungan hukum Kekayaan Intelektual di lingkungan Universitas Darussalam Gontor mengacu pada regulasi nasional sebagai berikut :</p>
        <ul>
            <li><p class="description"><strong>Undang-Undang Nomor 28 Tahun 2014</strong> tentang Hak Cipta.</p></li>
            <li><p class="description"><strong>Peraturan Pemerintah Nomor 56 Tahun 2021</strong> tentang Pengelolaan Royalti Hak Cipta Lagu dan/atau Musik (serta peraturan turunan terkait pendaftaran digital).</p></li>
            <li><p class="description"><strong>Undang-Undang Nomor 11 Tahun 2019</strong> tentang Sistem Nasional Ilmu Pengetahuan dan Teknologi (terkait kewajiban pelindungan KI hasil riset perguruan tinggi).</p></li>
        </ul>

        <p class="section-title">3. Jangka Waktu Pencatatan & Perlindungan</p>
        <p class="description">Berbeda dengan Paten atau Merek yang harus menunggu pemeriksaan substantif berbulan-bulan, pencatatan Hak Cipta di era digital saat ini menggunakan sistem <strong>e-HakCipta</strong> yang prosesnya instan (langsung terbit surat pencatatan dalam hitungan hari setelah divalidasi).</p>
        <p class="description">Masa berlaku pelindungan Hak Cipta sangat panjang, dibagi berdasarkan jenis ciptaannya :</p>
        <ul>
            <li><p class="description"><strong>Seumur Hidup Pencipta + 70 Tahun Setelah Meninggal Dunia :</strong> Berlaku untuk ciptaan utama seperti buku, pamflet, artikel ilmiah, tafsir, ceramah, kuliah, lagu/musik, drama, arsitektur, peta, dan karya seni rupa.</p></li>
            <li><p class="description"><strong>50 Tahun Sejak Pertama Kali Diumumkan/Diterbitkan :</strong> Berlaku untuk karya program komputer (aplikasi/software), database, sinematografi (video/film), fotografi, dan karya modifikasi/saduran.</p></li>
        </ul>

        <p class="section-title">4. Kategori & Jenis Karya Hak Cipta</p>
        <p class="description">Berikut adalah jenis-jenis ciptaan hasil karya dosen dan mahasiswa yang dapat didaftarkan perlindungannya melalui Sentra HKI UNIDA Gontor :</p>
        
        <!-- TABEL KATEGORI HAK CIPTA -->
        <div class="table-responsive">
            <table class="custom-table">
                <thead>
                    <tr>
                        <th style="width: 5%;">No</th>
                        <th style="width: 25%;">Kategori Ciptaan</th>
                        <th style="width: 70%;">Jenis Ciptaan Yang Dapat Didaftarkan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td><strong>Karya Tulis</strong></td>
                        <td>Buku, Monograf, Buku Panduan, Modul Ajar, Ringkasan/Resume, Artikel Ilmiah, Jurnal, Modul Praktikum, Karya Tulis Terjemahan.</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td><strong>Karya Seni</strong></td>
                        <td>Alat Peraga Pendidikan, Peta, Desain Motif Batik, Kaligrafi, Lukisan, Ilustrasi, Karya Arsitektur.</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td><strong>Karya Audio Visual</strong></td>
                        <td>Video Pembelajaran, Film Pendek Dokumenter, Rekaman Kuliah, Podcast Edukasi, Aransemen Musik/Lagu Kampus.</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td><strong>Komposisi Musik</strong></td>
                        <td>Aransemen, Karya Rekaman Suara, Lagu(Musik Dengan Teks), Berbagai Jenis Musik, Musik Tanpan Teks, Musik Tradisional.</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td><strong>Karya Fotografi</strong></td>
                        <td>Karya Fotografi, Potret</td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td><strong>Karya Drama & Koreografi</strong></td>
                        <td>Drama/pertunjukan, Drama Musikal, Ketoprak, Pentas Musik, Pewayangan, Seni Pertunjukan, Sulap, Tari</td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td><strong>Karya Rekaman</strong></td>
                        <td>Komik, Koreografi, Booklet, Khutbah, Banner, Brosur, Buku, Modul, Diktat, Cerita Bergambar, Pantomim, Karya Siaran, Nakah Film, Novel.</td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td><strong>Karya Lainnya</strong></td>
                        <td>Komplikasi Ciptaan, Permainan Vidio, Program Komputer</td>
                    </tr>
                </tbody>
            </table>
            <p class="section-title">5. Persyaratan Pencatatan</p>
            <p class="description">Adapun persyaratan yang harus disiapkan oleh pemohon dalam pencatatan Hak Cipta adalah sebagai berikut :</p>
        </div>
    </main>

    <footer class="footer">
        <div class="footer-container">
            <div class="footer-col">
                <h3>Sentra HKI UNIDA</h3>
                <p>Lembaga Layanan Hak Kekayaan Intelektual Universitas Darussalam Gontor.</p>
                <div class="social-links">
                    <a href="#"><i class="fa-brands fa-facebook"></i></a>
                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#"><i class="fa-brands fa-youtube"></i></a>
                </div>
            </div>

            <div class="footer-col">
                <h3>Tautan Cepat</h3>
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="/pengertian">Pengertian HKI</a></li>
                    <li><a href="/pendaftaran">Pendaftaran HKI</a></li>
                    <li><a href="/sejarah">Sejarah UNIDA</a></li>
                </ul>
            </div>

            <div class="footer-col">
                <h3>Kontak Kami</h3>
                <p><i class="fa-solid fa-location-dot"></i> Jl. Raya Siman No. Km. 5, Dusun I, Demangan, Kec. Siman, Kabupaten Ponorogo, Jawa Timur 63471</p>
                <p><i class="fa-solid fa-envelope"></i> hki@unida.gontor.ac.id</p>
                <p><i class="fa-solid fa-phone"></i> 0857-0858-3094</p>
            </div>
        </div>

        <div class="footer-bottom">
            <p>&copy; 2026 Sentra HKI UNIDA Gontor. All Rights Reserved.</p>
        </div>
    </footer>

</body>
</html>