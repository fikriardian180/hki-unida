<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengertian Merek</title>
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
        <h1 class="page-title">Merek</h1>
        <p class="section-title">1. Definisi Merek</p>
        <p class="description">Berdasarkan <strong>UU No. 20 Tahun 2016 tentang Merek dan Indikasi Geografis,</strong> Merek adalah tanda yang dapat ditampilkan secara grafis berupa gambar, logo, nama, kata, huruf, angka, susunan warna, dalam bentuk 2 dimensi dan/atau 3 dimensi, suara, hologram, atau kombinasi dari 2 atau lebih unsur tersebut untuk membedakan barang dan/atau jasa yang diproduksi oleh orang atau badan hukum dalam kegiatan perdagangan barang dan/atau jasa. </p>
        <p class="section-title">2. Landasan Hukum</p>
        <p class="description">Perlindungan hukum dan tata cara pendaftaran merek di lingkungan Universitas Darussalam Gontor mengacu pada regulasi nasional berikut :</p>
        <ul>
            <li><strong>Undang-Undang Nomor 20 Tahun 2016</strong> tentang Merek dan Indikasi Geografis.</li>
        </ul>
        <ul>
            <li><strong>Undang-Undang Nomor 6 Tahun 2023</strong> tentang Penetapan Perpu Cipta Kerja Menjadi Undang-Undang (terkait kluster penyederhanaan proses dan waktu pengumuman merek).</li>
        </ul>   
        <p class="section-title">3. Jangka Waktu & Perlindungan Merek</p>
        <p class="description">Merek menggunakan sistem <strong>First-to-File</strong> (siapa yang mendaftar pertama kali, dia yang berhak atas merek tersebut).</p>
        <ul>
            <li><p class="description"><strong>Masa Perlindungan :</strong> Merek terdaftar mendapatkan perlindungan hukum selama <strong>10 tahun</strong> sejak Tanggal Penerimaan (Filing Date).</li></p>
        </ul>
        <ul>
            <li><P class="description"><strong>Dapat Diperpanjang :</strong> Berbeda dengan Paten dan Hak Cipta yang memiliki batas waktu mutlak, hak atas Merek <strong>dapat diperpanjang setiap 10 tahun sekali</strong> secara terus-menerus selama merek tersebut masih digunakan dalam perdagangan.</li></P>
        </ul>
        <p class="section-title">4. Jenis-Jenis Merek</p>
        <p class="description">Berdasarkan penggunaannya, merek yang didaftarkan dibagi menjadi 3 jenis utama :</p>
        <ol class="custom-ol">
            <li><strong>Merek Dagang :</strong> Merek yang digunakan pada barang yang diperdagangkan oleh seseorang atau beberapa orang secara bersama-sama atau badan hukum untuk membedakan dengan barang sejenis lainnya. (Contoh di kampus : Produk air mineral UNIDA, produk herbal, atau roti buatan laboratorium kampus).</li>
            <li><strong>Merek Jasa :</strong> Merek yang digunakan pada jasa yang diperdagangkan oleh seseorang atau badan hukum untuk membedakan dengan jasa sejenis lainnya. (Contoh di kampus: Jasa pelatihan bahasa, jasa laboratorium pengujian, atau jasa konsultan bisnis).</li>
            <li><strong>Merek Kolektif :</strong> Merek yang digunakan pada barang dan/atau jasa dengan karakteristik yang sama mengenai sifat, ciri umum, dan mutu barang atau jasa serta pengawasannya yang akan diperdagangkan secara bersama-sama.</li>
        </ol>
        <p class="section-title">5. Kelas Merek (Klasifikasi Nice)</p>
        <p class="description">Saat mendaftarkan merek, pemohon wajib memilih Kelas Merek yang sesuai dengan jenis bidang usaha atau produknya berdasarkan Klasifikasi Internasional (Nice Classification). Secara total terdapat 45 Kelas Merek :</p>
        <ul>
            <li><p class="description"><strong>Kelas 1 sampai 34 :</strong> Digunakan untuk kategori Barang/Produk fisik (misalnya: Kelas 5 untuk obat-obatan/herbal, Kelas 30 untuk produk kopi/roti, Kelas 32 untuk minuman non-alkohol/air mineral).</li></p>
        </ul>
        <ul>
            <li><p class="description"><strong>Kelas 35 sampai 45 :</strong> Digunakan untuk kategori Jasa/Layanan (misalnya: Kelas 41 untuk jasa pendidikan/pelatihan, Kelas 42 untuk jasa riset/pengembangan teknologi).</p></li>
        </ul>
        <p class="section-title">6. Manfaat Pendaftaran Merek bagi Civitas Academica</p>
        <p class="description">Mengapa produk inovasi, inkubator bisnis, maupun unit usaha di bawah UNIDA Gontor wajib mendaftarkan mereknya?</p>
        <ul>
            <li><p class="description"><strong>Alat Bukti Kepemilikan Mutlak :</strong> Menjadi bukti sah satu-satunya bahwa universitas/penemu adalah pemilik sah merek tersebut di mata hukum.</li></p>
        </ul>
        <ul>
            <li><p class="description"><strong>Mencegah Plagiasi & Peniruan :</strong> Pemilik merek berhak melarang pihak lain menggunakan merek yang sama atau mirip untuk jenis barang/jasa yang sejenis di pasar.</p></li>
        </ul>
        <ul>
            <li><p class="description"><strong>Aset Komersial & Nilai Jual (Intangible Asset) :</strong> Merek terdaftar meningkatkan kepercayaan konsumen (brand awareness) dan dapat dilisensikan atau diwariskan untuk menghasilkan royalti bagi kampus dan penemu.</p></li>
        </ul>
        <ul>
            <li><p class="description"><strong>Syarat Komersialisasi Hasil Riset :</strong> Memudahkan produk hasil hilirisasi riset dosen untuk masuk ke pasar industri, pengujian BPOM, maupun sertifikasi Halal secara resmi.</p></li>
        </ul>
        <p class="section-title">7. Biaya Pendaftaran dan Perpanjangan</p>
        <div class="table-responsive">
            <table class="custom-table">
                <thead>
                    <tr>
                        <th style="width: 5%;">No</th>
                        <th style="width: 45%;">Rincian</th>
                        <th style="width: 25%;"> Lembaga Pendidikan, UMKM, dan Penelitian</th>
                        <th style="width: 25%;">Umum</th>
                    </tr>
                    <tr>
                        <td>1.</td>
                        <td>Pendaftaran Etiket Merek</td>
                        <td> Rp                    650,000 </td>
                        <td> Rp     1,950,000 </td>
                    </tr>
                    <tr>
                        <td>2.</td>
                        <td>Penelusuran Kelas Merek</td>
                        <td> Rp                    250,000 </td>
                        <td> Rp                    250,000 </td>
                    </tr>
                    <tr>
                        <td>3.</td>
                        <td>Administrasi kepengurusan (Pendaftaran) awal</td>
                        <td> Rp                    500,000 </td>
                        <td> Rp        750,000 </td>
                    </tr>
                    <tr>
                        <td>4.</td>
                        <td>Perpanjangan sebelum berakhir masa perlindungan merek</td>
                        <td> Rp                 1,000,000 </td>
                        <td> Rp     2,250,000 </td>
                    </tr>
                    <tr>
                        <td>5.</td>
                        <td>Perpanjangan merek setelah berakhir masa perlindungan merek</td>
                        <td> Rp                 2,000,000 </td>
                        <td> Rp     4,500,000 </td>
                    </tr>
                    <tr>
                        <td>6.</td>
                        <td>Permohonan banding Merek</td>
                        <td> Rp                 3,000,000 </td>
                        <td> Rp                 3,000,000 </td>
                    </tr>
                    <tr>
                        <td>7.</td>
                        <td>Pengalihan hak atas Merek</td>
                        <td> Rp                    700,000 </td>
                        <td> Rp                    700,000 </td>
                    </tr>
                    <tr>
                        <td>8.</td>
                        <td>Penghapusan pendaftaran merek</td>
                        <td> Rp                    200,000 </td>
                        <td> Rp                    200,000 </td>
                    </tr>
                    <tr>
                        <td>9.</td>
                        <td>Pengajuan keberatan atas merek</td>
                        <td> Rp                 1,000,000 </td>
                        <td> Rp                 1,000,000 </td>
                    </tr>
                    <tr>
                        <td>10.</td>
                        <td>Administrasi kepengurusan lanjutan</td>
                        <td> Rp                    250,000 </td>
                        <td> Rp                    250,000 </td>
                    </tr>
                </thead>
            </table>
        </div>
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