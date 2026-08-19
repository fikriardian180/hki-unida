<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Hak Cipta</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&family=Slabo+27px&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* --- CONTAINER FORMULIR --- */
        .form-container {
            max-width: 800px;
            margin: 40px auto;
            padding: 30px 40px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
            border-top: 5px solid #3B6B80; /* Garis aksen atas */
        }

        .form-header {
            margin-bottom: 30px;
            text-align: center;
        }

        .form-title {
            font-size: 24px;
            font-weight: 700;
            color: #3B6B80;
            margin-bottom: 8px;
        }

        .form-subtitle {
            font-size: 14px;
            color: #666666;
            line-height: 1.5;
        }

        /* --- GROUPING ELEMEN FORM --- */
        .form-group {
            margin-bottom: 20px;
            display: flex;
            flex-direction: column;
        }

        .form-group.two-cols {
            display: flex;
            gap: 20px;
        }

        .form-group.two-cols .form-control-wrap {
            flex: 1;
        }

        /* --- LABEL --- */
        .form-label {
            font-size: 14px;
            font-weight: 600;
            color: #1a1a1a;
            margin-bottom: 8px;
        }

        .form-label .required {
            color: #e74c3c; /* Tanda bintang merah untuk wajib diisi */
        }

        /* --- INPUT, SELECT, & TEXTAREA --- */
        .form-control {
            width: 100%;
            padding: 12px 15px;
            font-size: 14px;
            color: #333333;
            background-color: #f9fafb;
            border: 1px solid #d1d5db;
            border-radius: 5px;
            transition: all 0.2s ease-in-out;
            outline: none;
        }

        .form-control:focus {
            background-color: #ffffff;
            border-color: #3B6B80;
            box-shadow: 0 0 0 3px rgba(59, 107, 128, 0.15);
        }

        textarea.form-control {
            resize: vertical;
            min-height: 100px;
        }

        /* --- FILE UPLOAD CUSTOM --- */
        .file-upload-wrap {
            position: relative;
            border: 2px dashed #cbd5e1;
            padding: 20px;
            text-align: center;
            border-radius: 6px;
            background-color: #f8fafc;
            cursor: pointer;
            transition: border-color 0.2s;
        }

        .file-upload-wrap:hover {
            border-color: #3B6B80;
            background-color: #f1f5f9;
        }

        .file-upload-wrap input[type="file"] {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 0;
            cursor: pointer;
        }

        .file-upload-text {
            font-size: 13px;
            color: #64748b;
        }

        .file-upload-text i {
            font-size: 24px;
            color: #3B6B80;
            margin-bottom: 8px;
            display: block;
        }

        /* --- TOMBOL SUBMIT --- */
        .btn-submit {
            width: 100%;
            background-color: #3B6B80;
            color: #ffffff;
            font-size: 16px;
            font-weight: 600;
            padding: 14px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.2s, transform 0.1s;
            margin-top: 10px;
        }

        .btn-submit:hover {
            background-color: #2c5263;
        }

        .btn-submit:active {
            transform: scale(0.99);
        }

        /* Teks penanda bidang opsional */
        .form-label .optional {
            font-size: 12px;
            font-weight: normal;
            color: #888888;
            margin-left: 4px;
        }

        /* --- RESPONSIF UNTUK HP --- */
        @media (max-width: 600px) {
            .form-container {
                padding: 20px 15px;
                margin: 20px 10px;
            }

            .form-group.two-cols {
                flex-direction: column;
                gap: 20px;
            }
        }
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
    <h1 class="page-title">Formulir Pendaftaran Hak Cipta</h1>
    <div class="form-container">
    <div class="form-header">
        <h2 class="form-title">Formulir Pendaftaran Hak Cipta</h2>
        <p class="form-subtitle">Isi data di bawah ini dengan benar untuk mengajukan permohonan pendaftaran HKI.</p>
    </div>

    <form action="#" method="POST" enctype="multipart/form-data">
        
        <!-- Input Nama & NIDN dalam 2 Kolom -->
        <div class="form-group two-cols">
            <div class="form-control-wrap">
                <label class="form-label">Email <span class="required">*</span></label>
                <input type="text" class="form-control" placeholder="Masukan alamat email anda" required>
            </div>
        </div>
         <div class="form-group">
            <label class="form-label">Kategori Pemohon <span class="required">*</span></label>
            <select class="form-control" required>
                <option value="" disabled selected>-- Pilih Jenis Kategori --</option>
                <option value="umum">Umum</option>
                <option value="umkm">UMKM</option>
                <option value="lpd">Lembaga Pendidikan</option>
                <option value="lpi">Lembaga Penelitian</option>
            </select>
        </div>
        

        <!-- Select Dropdown Kategori -->
        <div class="form-group">
            <label class="form-label">Hasil Program <span class="required">*</span></label>
            <select class="form-control" required>
                <option value="" disabled selected>-- Pilih Jenis Hasil Program --</option>
                <option value="kkn">KKN</option>
                <option value="pkm">PKM</option>
                <option value="pengabdian">Pengabdian</option>
                <option value="ta">Tugas Akhir (Skripsi/Thesis/Sidang)</option>
                <option value="km">Karya Mandiri</option>
                <option value="pl">Penelitian Lainnya</option>
            </select>
        </div>

        <!-- Input Judul Ciptaan -->
        <div class="form-group">
            <label class="form-label">Pemohon 1 <span class="optional">(Opsional)</span></label>
            <input type="text" class="form-control" placeholder="Masukan Nama Pemohon" required>
        </div>

        <!-- Textarea Deskripsi Ringkas -->
        <div class="form-group">
            <label class="form-label">NIK Pemohon<span class="required">*</span></label>
            <textarea class="form-control" placeholder="Masukan NIK Pemohon"></textarea>
        </div>

        <div class="form-group">
            <label class="form-label">Nama Lengkap Pemohon<span class="required">*</span></label>
            <textarea class="form-control" placeholder="Masukan Nama Lengkap Pemohon"></textarea>
        </div>

        <div class="form-group">
            <label class="form-label">Alamat pemohon (cantumkan jalan, desa/kelurahan, Kecamatan, Kab/kota, Provinsi)<span class="required">*</span></label>
            <textarea class="form-control" placeholder="Masukan Alamat Lengkap"></textarea>
        </div>

        <div class="form-group">
            <label class="form-label">Kode pos<span class="required">*</span></label>
            <textarea class="form-control" placeholder="Masukan Kode Pos"></textarea>
        </div>

        <div class="form-group">
            <label class="form-label">Email Pemohon<span class="required">*</span></label>
            <textarea class="form-control" placeholder="Masukan Email Yang Aktif"></textarea>
        </div>

        <div class="form-group">
            <label class="form-label">Nomor Telepon / HP<spam class="required">*</spam></label>
            <textarea class="form-control" placeholder="Masukan No HP"></textarea>
        </div>

        <div class="form-group">
            <label class="form-label">Nomor NPWP Pemohon<spam class="required">*</spam></label>
            <textarea class="form-control" placeholder="gunakan tanda - jika belum mempunyai NPWP"></textarea>
        </div>

    <div class="form-group">
        <label class="form-label">Prodi/Instansi <span class="required">*</span></label>
        
        <!-- Dropdown Utama -->
        <select class="form-control" id="prodi" onchange="toggleOtherInput()" required>
            <option value="" disabled selected>-- Pilih Jenis Prodi/Instansi --</option>
            <option value="PAI">S1 PAI</option>
            <option value="PBA">S1 PBA</option>
            <option value="TBI">SI TBI</option>
            <option value="MJN">S1 MNJ</option>
            <option value="EI">S1 EI</option>
            <option value="AGRO">S1 AGRO</option>
            <option value="TIP">S1 TIP</option>
            <option value="TI">S1 TI</option>
            <option value="KKK">S1 KKK</option>
            <option value="GZ">S1 GIZI</option>
            <option value="FARM">S1 FARMASI</option>
            <option value="HI">S1 HI</option>
            <option value="IKOM">S1 ILKOM</option>
            <option value="HES">S1 HES</option>
            <option value="PM">S1 PM</option>
            <option value="IQT">S1 IQT</option>
            <option value="AFI">S1 AFI</option>
            <option value="SAA">SI SAA</option>
            <option value="KDR">S1 KEDOKTERAN</option>
            <option value="2AFI">S2 AFI</option>
            <option value="2PBA">S2 PBA</option>
            <option value="2HES">S2 HES</option>
            <option value="3AFI">S3 AFI</option>
            <option value="IU">Instansi Umum</option>
            <option value="other">Lainnya...</option>
        </select>
    </div>

    <!-- Kolom Input Teks Tambahan (Sembunyi secara default) -->
    <div class="form-group" id="otherInputGroup" style="display: none;">
        <label class="form-label">Masukan Prodi/Instansi Anda <span class="required">*</span></label>
        <input type="text" class="form-control" id="otherInput" placeholder="Masukkan Prodi/instansi">
    </div>
        

        <!-- Custom Upload File -->
        <div class="form-group">
            <label class="form-label">Unggah Draf Karya (PDF) <span class="required">*</span></label>
            <div class="file-upload-wrap">
                <input type="file" accept=".pdf" required>
                <div class="file-upload-text">
                    <i class="fa-solid fa-cloud-arrow-up"></i>
                    <span>Klik atau seret file PDF ke sini untuk mengunggah</span>
                </div>
            </div>
        </div>

        <!-- Tombol Kirim -->
        <button type="submit" class="btn-submit">
            <i class="fa-solid fa-paper-plane"></i> Kirim Permohonan
        </button>

    </form>
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

<script>
function toggleOtherInput() {
    const selectElement = document.getElementById('prodi');
    const otherGroup = document.getElementById('otherInputGroup');
    const otherInput = document.getElementById('otherInput');

    // Jika pengguna memilih "other" (Lainnya...)
    if (selectElement.value === 'other') {
        otherGroup.style.display = 'flex'; // Tampilkan input teks
        otherInput.setAttribute('required', 'required'); // Buat wajib diisi
    } else {
        otherGroup.style.display = 'none'; // Sembunyikan input teks
        otherInput.removeAttribute('required'); // Hapus status wajib diisi
        otherInput.value = ''; // Kosongkan nilainya kembali
    }
}
</script>

</html>