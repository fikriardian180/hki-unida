<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengertian Paten</title>
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
            margin-bottom: 10px;
        }

        .description {
            font-size: 15px;
            color: #555555;
            line-height: 1.6;
            text-align: justify;
            margin-bottom: 10px;
        }

        /* Styling List agar Rapi */
        .main-content ul {
            margin-left: 20px;
            margin-bottom: 15px;
        }

        .main-content li {
            margin-bottom: 8px;
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
        <h1 class="page-title">Paten</h1>
        
        <p class="section-title">1. Definisi Paten</p>
        <p class="description">Berdasarkan <strong>UU No. 13 Tahun 2016</strong> tentang Paten, <strong>Paten adalah</strong> hak eksklusif yang diberikan oleh negara kepada penemu (Inventor) atas hasil invensinya di bidang teknologi untuk jangka waktu tertentu dalam melaksanakan sendiri invensinya tersebut atau memberikan persetujuan kepada pihak lain untuk melaksanakannya.</p>
        <p class="description"><strong>Invensi</strong> sendiri adalah ide inventor yang dituangkan ke dalam suatu kegiatan pemecahan masalah yang spesifik di bidang teknologi, dapat berupa produk atau proses, atau penyempurnaan dan pengembangan produk atau proses.</p>

        <p class="section-title">2. Landasan Hukum</p>
        <p class="description">Penyelenggaraan, pendaftaran, dan pelindungan hukum invensi teknologi dosen di lingkungan Universitas Darussalam Gontor mengacu pada regulasi nasional berikut :</p>
        <ul>
            <li><p class="description"><strong>Undang-Undang Nomor 13 Tahun 2016</strong> tentang Paten.</p></li>
            <li><p class="description"><strong>Undang-Undang Nomor 6 Tahun 2023</strong> tentang Penetapan Peraturan Pemerintah Pengganti Undang-Undang Nomor 2 Tahun 2022 tentang Cipta Kerja Menjadi Undang-Undang (yang merevisi beberapa pasal dalam UU Paten terkait kemudahan substantif dan royalti).</p></li>
            <li><p class="description"><strong>Undang-Undang Nomor 11 Tahun 2019</strong> tentang Sistem Nasional Ilmu Pengetahuan dan Teknologi.</p></li>
        </ul>

        <p class="section-title">3. Jangka Waktu & Perlindungan Paten</p>
        <p class="description">Berbeda dengan Hak Cipta yang bersifat deklaratif (otomatis), Paten menganut sistem <strong>First-to-File (siapa yang mendaftar pertama kali dan lolos pemeriksaan substantif, dia yang mendapat hak).</strong> Jangka waktu pelindungannya dihitung sejak <strong>Tanggal Penerimaan (Filing Date) dokumen</strong> :</p>
        <ul>
            <li><p class="description"><strong>Paten Biasa :</strong> Diberikan untuk jangka waktu <strong>20 tahun dan tidak dapat diperpanjang.</strong> Biasanya untuk invensi besar yang melibatkan kebaruan mendasar dan langkah inventif yang tinggi.</p></li>
            <li><p class="description"><strong>Paten Sederhana :</strong> Diberikan untuk jangka waktu <strong>10 tahun dan tidak dapat diperpanjang.</strong> Ditujukan untuk invensi berupa produk, alat, jalannya proses, atau komponen yang memiliki kegunaan praktis baru dan pengembangan teknologi yang sudah ada.</p></li>
        </ul>

        <p class="section-title">4. Jenis Paten</p>
        <p class="description">Di Indonesia, berdasarkan UU No. 13 Tahun 2016, Paten dibagi menjadi 2 jenis, yaitu <strong>Paten (Biasa)</strong> dan <strong>Paten Sederhana.</strong></p>

        <!-- 4.A PATEN BIASA -->
        <p class="description"><strong>A. Paten</strong></p>
        <p class="description">Paten jenis ini diberikan untuk invensi yang benar-benar baru, memiliki lompatan teknologi yang besar, dan melalui proses pemeriksaan yang sangat ketat di tingkat nasional maupun internasional.</p>
        <ul>
            <li>
                <p class="description"><strong>Syarat :</strong></p>
                <ul>
                    <li><p class="description"><strong>Baru (Novelty) :</strong> Belum pernah diumumkan di media mana pun di dunia sebelum tanggal pengajuan.</p></li>
                    <li><p class="description"><strong>Langkah Inventif (Inventive Step) :</strong> Invensi tersebut tidak terduga bagi orang yang ahli di bidangnya (bukan hal yang remeh).</p></li>
                    <li><p class="description"><strong>Dapat Diterapkan dalam Industri :</strong> Bisa diproduksi massal secara konsisten.</p></li>
                </ul>
            </li>
            <li><p class="description"><strong>Karakteristik Dokumen :</strong> Dapat memuat banyak klaim (fitur teknologi yang dilindungi bisa sangat kompleks dan bercabang).</p></li>
            <li><p class="description"><strong>Masa Perlindungan :</strong> 20 Tahun sejak tanggal penerimaan (tidak dapat diperpanjang).</p></li>
            <li><p class="description"><strong>Contoh Akademik :</strong> Penemuan formula vaksin baru, penemuan cip semi-konduktor generasi terbaru, atau penemuan metode pengolahan sinyal digital mutakhir.</p></li>
        </ul>

        <!-- 4.B PATEN SEDERHANA -->
        <p class="description"><strong>B. Paten Sederhana</strong></p>
        <p class="description">Paten Sederhana ditujukan untuk invensi yang berupa produk, alat, komponen, atau jalannya proses yang mengalami pengembangan atau modifikasi dari teknologi yang sudah ada. Jenis ini sangat cocok untuk riset terapan praktis atau proyek teknologi tepat guna di kampus.</p>
        <ul>
            <li>
                <p class="description"><strong>Syarat :</strong></p>
                <ul>
                    <li><p class="description"><strong>Baru (Novelty).</strong></p></li>
                    <li><p class="description"><strong>Memiliki Kegunaan Praktis :</strong> Memiliki pengembangan yang memberikan fungsi, kemudahan, atau efisiensi baru dari alat terdahulu.</p></li>
                    <li><p class="description"><strong>Pemeriksaan Lebih Cepat :</strong> Tidak membutuhkan "langkah inventif" yang terlalu rumit, sehingga proses kelulusannya jauh lebih cepat daripada Paten Biasa.</p></li>
                </ul>
            </li>
            <li><p class="description"><strong>Karakteristik Dokumen :</strong> Hanya boleh memuat <strong>1 klaim mandiri</strong> (fokus melindungi satu alat/produk/proses yang dimodifikasi tersebut).</p></li>
            <li><p class="description"><strong>Masa Perlindungan : 10 Tahun</strong> sejak tanggal penerimaan (tidak dapat diperpanjang).</p></li>
            <li><p class="description"><strong>Contoh Akademik :</strong> Modifikasi alat pengering padi tradisional menjadi bertenaga surya portabel, penyempurnaan desain mata pisau mesin pencacah plastik agar lebih hemat energi, atau formulasi biskuit herbal penguat imun dengan teknik pencampuran baru.</p></li>
        </ul>

        <p class="section-title">5. Jangka Waktu Proses Pendaftaran & Perlindungan HKI</p>
        <p class="description"><strong>A. Estimasi Jangka Waktu Proses Pendaftaran</strong></p>
        <p class="description">Lama proses pengajuan berkas di Sentra HKI UNIDA Gontor berkisar antara <strong>7 hingga 30 hari kerja</strong>, yang sepenuhnya bergantung pada <strong>kelengkapan dokumen persyaratan dan kecepatan respons dari kontributor/dosen.</strong></p>
        <p class="description">Berikut adalah tahapan alur waktunya :</p>
        
        <ul>
            <li>
                <p class="description"><strong>Tahap 1 : Verifikasi Administratif</strong> (3–5 Hari Kerja) Tim staf Sentra HKI akan memeriksa kelengkapan berkas fisik/digital yang Anda unggah melalui Google Form (seperti Surat Pernyataan Kepemilikan, Surat Pengalihan Hak, KTP, dan draf karya).</p>
            </li>
            <li>
                <p class="description"><strong>Tahap 2 : Revisi & Kelengkapan Berkas</strong> (Tergantung Pemohon) Jika ada dokumen yang belum sesuai format atau kurang lengkap, admin akan menghubungi dosen. Kecepatan dosen dalam memperbaiki dokumen akan sangat menentukan kelanjutan proses.</p>
            </li>
            <li>
                <p class="description"><strong>Tahap 3 : Pendaftaran ke Sistem DJKI Kemenkumham</strong> (2–3 Hari Kerja) Setelah berkas dinyatakan 100% lengkap dan valid, Sentra HKI akan melakukan pembayaran PNBP dan mendaftarkan karya tersebut ke sistem resmi Direktorat Jenderal Kekayaan Intelektual (DJKI).</p>
            </li>
            <li>
                <p class="description"><strong>Tahap 4 : Penerbitan Sertifikat/Sertifikasi</strong></p>
                <ul>
                    <li>
                        <p class="description"><strong>Hak Cipta : Terbit otomatis secara instan</strong> (dalam waktu 1–2 hari setelah didaftarkan ke sistem e-HakCipta DJKI).</p>
                    </li>
                </ul>
            </li>
        </ul>
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