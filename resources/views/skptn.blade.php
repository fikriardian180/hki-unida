<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paten</title>
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

        /* Penomoran */
        .custom-ol {
        margin-left: 20px;
        margin-bottom: 20px;
        }
    
        .custom-ol li {
        margin-bottom: 8px; /* Jarak antar nomor */
        line-height: 1.6;
        color: #555555;
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
        <h1 class="page-title">Syarat & Ketentuan Pendaftaran Paten</h1>
        <h2 class="description">Setiap pemohon (Pencipta) yang mengajukan permohonan fasilitasi pendaftaran Paten melalui Sentra HKI Universitas Darussalam Gontor wajib memahami dan menyetujui ketentuan khusus di bawah ini : </h2>
        <ol class="costum-ol">
            <li class="description"><strong>Kriteria Invensi yang Dapat Dipatenkan</strong></li>
            <p class="description">Sentra HKI UNIDA Gontor hanya memproses invensi yang memenuhi syarat materil perlindungan paten sesuai undang-undang yang berlaku, yaitu:</p>
            <ul>
                <li class="description"><strong>Paten Sederhana :</strong> Invensi berupa produk atau alat baru, varian baru, proses, atau pengembangan dari produk/proses yang sudah ada, yang memiliki kegunaan praktis (alat tepat guna) dan mengandung unsur kebaruan.</li>
                <li class="description"><strong>Paten Biasa :</strong> Invensi teknologi tingkat tinggi yang mengandung langkah inventif (tidak terduga oleh ahli di bidangnya), baru secara global, dan dapat diterapkan dalam industri.</li></li>
            </ul>
            <li class="description"> <strong>Syarat Mutlak Kebaruan (Novelty) & Larangan Publikasi Dini</strong></li>
            <ul>
                <li class="description"><strong>Belum Pernah Dipublikasikan :</strong> Invensi yang diajukan wajib belum pernah diumumkan, dipamerkan, dijual, atau dipublikasikan dalam bentuk apa pun (termasuk draf jurnal ilmiah, prosiding seminar, skripsi/tesis mahasiswa, media massa, atau unggahan media sosial) di mana pun secara global sebelum mendapatkan Tanggal Penerimaan (Filing Date) dari DJKI.</li>
                <li class="description"><strong>Risiko Penolakan :</strong> Segala bentuk publikasi ilmiah atau pengenalan produk ke publik sebelum pendaftaran resmi dilakukan dapat menggugurkan syarat kebaruan, sehingga paten berisiko tinggi ditolak oleh Pemeriksa Paten (Examiner). Sentra HKI UNIDA Gontor tidak bertanggung jawab atas penolakan paten akibat kelalaian publikasi dini oleh pihak Inventor.</strong></li>
            </ul>
            <li class="description"><strong> Kepemilikan Paten & Pengalihan Hak</strong></li>
            <p class="description">Sesuai dengan regulasi internal universitas dan UU Paten yang berlaku :</p>
            <ul>
                <li class="description"><strong>Hak Inventor (Hak Moral) :</strong> Nama para peneliti/dosen akan tetap tercantum selamanya di dalam sertifikat negara sebagai Inventor (Penemu) yang sah. Hak ini tidak dapat dialihkan atau dihapus.</li>
                <li class="description"><strong>Pemegang Paten (Hak Ekonomi) :</strong> Seluruh invensi hasil riset yang menggunakan dana universitas, dana hibah eksternal atas nama institusi, atau menggunakan fasilitas laboratorium/sarana UNIDA Gontor, hak ekonominya wajib dialihkan kepada Universitas Darussalam Gontor sebagai institusi Pemegang Paten resmi demi kepentingan pemeringkatan dan akreditasi. Inventor wajib menandatangani Surat Pengalihan Hak atas Invensi bermaterei Rp 10.000.</li>
            </ul>
            <li class="description"><strong>Standarisasi Dokumen Deskripsi (Spesifikasi) Paten</strong></li>
            <ul>
                <li class="description">Inventor bertanggung jawab penuh menyusun dokumen Deskripsi Paten secara mandiri menggunakan bahasa Indonesia yang baik, benar, dan teknis sesuai dengan template resmi yang disediakan di Pusat Unduhan.</li>
                <li class="description">Dokumen Deskripsi Paten wajib memuat bagian: Judul Invensi, Bidang Teknik Invensi, Latar Belakang Invensi, Ringkasan Invensi, Uraian Singkat Gambar (jika ada), Uraian Lengkap Invensi, Klaim, dan Abstrak.</li>
                <li class="description">Tim Sentra HKI berhak mengembalikan berkas pendaftaran ke pihak Inventor jika struktur penulisan deskripsi, batasan klaim hukum, atau gambar teknik belum memenuhi standar minimal yang ditetapkan oleh Direktorat Jenderal Kekayaan Intelektual (DJKI).</li>
            </ul>
            <li class="description"><strong>  Durasi Proses, Pemeriksaan Substantif, dan Biaya Pemeliharaan</strong></li>
            <ul>
                <li class="description">Proses Jangka Panjang : Berbeda dengan Hak Cipta yang instan, proses pemeriksaan Paten oleh DJKI membutuhkan waktu berbulan-bulan (untuk Paten Sederhana) hingga bertahun-tahun (untuk Paten Biasa) melalui fase Pengumuman dan Pemeriksaan Substantif.</li>
                <li class="description">Kooperatif Menjawab Sanggahan : Selama masa pemeriksaan substantif, apabila terdapat Injunction (permintaan perbaikan/sanggahan) dari Examiner DJKI, Inventor wajib bersedia bekerja sama secara aktif dengan Sentra HKI untuk menyusun tanggapan substantif dalam batas waktu yang ditentukan negara.</li>
                <li class="description">Biaya Pemeliharaan Tahunan : Setelah Paten disetujui (Granted), pemilik Paten wajib membayar biaya tahunan pemeliharaan agar paten tetap aktif. Skema biaya akan dikoordinasikan lebih lanjut antara pihak Universitas (Pemegang Paten) dan Inventor sesuai dengan kontrak komersialisasi/kebijakan LPPM yang berlaku.</li>
            </ul>
        </ol>
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