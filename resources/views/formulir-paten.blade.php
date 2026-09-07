<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Paten</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&family=Slabo+27px&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* --- CONTAINER FORMULIR --- */
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
            background-color: #3B6B80;
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

        /* --- MAIN CONTENT & FORM CONTAINER --- */
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

        .form-container {
            max-width: 800px;
            margin: 0 auto;
            padding: 30px 40px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
            border-top: 5px solid #3B6B80;
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

        /* --- FORM ELEMENTS --- */
        .form-group {
            margin-bottom: 20px;
            display: flex;
            flex-direction: column;
        }

        .form-group.two-cols {
            display: flex;
            flex-direction: row;
            gap: 20px;
        }

        .form-group.two-cols .form-control-wrap {
            flex: 1;
        }

        .form-label {
            font-size: 14px;
            font-weight: 600;
            color: #1a1a1a;
            margin-bottom: 8px;
        }

        .form-label .required {
            color: #e74c3c;
        }

        .form-label .optional {
            font-size: 12px;
            font-weight: normal;
            color: #888888;
            margin-left: 4px;
        }

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
            min-height: 80px;
        }

        /* Styling Container Pemohon 3 saat ditampilkan */
        #groupPemohon3 {
            border: 1px dashed #3B6B80;
            padding: 20px;
            border-radius: 6px;
            background-color: #f8fafc;
            margin-bottom: 25px;
        }

        /* --- FILE UPLOAD --- */
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

        /* --- SUBMIT BUTTON --- */
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

        /* --- FOOTER --- */
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

        /* RESPONSIF MOBILE */
        @media (max-width: 600px) {
            .form-container {
                padding: 20px 15px;
            }

            .form-group.two-cols {
                flex-direction: column;
                gap: 20px;
            }
        }

        /* TEXTAREA */
        textarea.form-control {
        resize: none; /* Menghilangkan handle resize manual di pojok kanan bawah */
        overflow-y: hidden; /* Menghilangkan scrollbar vertikal */
        min-height: 45px; /* Tinggi awal textarea */
        box-sizing: border-box;
    }
        /* TANGGAL */
        input[type="date"].form-control {
        cursor: pointer;
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
    <h1 class="page-title">Formulir Pendaftaran Paten</h1>
    <div class="form-container">
    <div class="form-header">
        <h2 class="form-title">Formulir Pendaftaran Paten</h2>
        <p class="form-subtitle">Isi data di bawah ini dengan benar untuk mengajukan permohonan pendaftaran HKI.</p>
    </div>

    <form action="#" method="POST" enctype="multipart/form-data">
        
        <form action="#" method="POST" enctype="multipart/form-data">
                
                <!-- Email Pemohon -->
                <div class="form-group">
                    <label class="form-label">Email Penanggung Jawab <span class="required">*</span></label>
                    <input type="email" class="form-control" placeholder="Masukkan alamat email anda" required>
                </div>

                <!-- Kategori Pemohon -->
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

                <!-- DATA PEMOHON 1 -->
                <h3 style="color: #3B6B80; margin-top: 25px; margin-bottom: 15px; font-size: 18px; border-bottom: 1px solid #ddd; padding-bottom: 5px;">Data Pemohon 1</h3>

                <div class="form-group">
                    <label class="form-label">Nama Pemohon 1 <span class="required">*</span></label>
                    <input type="text" class="form-control" placeholder="Masukkan Nama Pemohon 1" required>
                </div>

                <div class="form-group">
                    <label class="form-label">NIK Pemohon 1 <span class="required">*</span></label>
                    <input type="text" class="form-control" placeholder="Masukkan NIK Pemohon 1" required>
                </div>

                <div class="form-group">
                    <label class="form-label">Alamat Pemohon 1 <span class="required">*</span></label>
                    <textarea class="form-control" placeholder="Cantumkan jalan, desa/kelurahan, kecamatan, kab/kota, provinsi" required></textarea>
                </div>

                <div class="form-group two-cols">
                    <div class="form-control-wrap">
                        <label class="form-label">Kode Pos <span class="required">*</span></label>
                        <input type="text" class="form-control" placeholder="Masukkan Kode Pos" required>
                    </div>
                    <div class="form-control-wrap">
                        <label class="form-label">Nomor Telepon / HP <span class="required">*</span></label>
                        <input type="tel" class="form-control" placeholder="Masukkan No HP" required>
                    </div>
                </div>

                <div class="form-group">
                    <label class="form-label">Email Pemohon 1 <span class="required">*</span></label>
                    <input type="email" class="form-control" placeholder="Masukkan Email Yang Aktif" required>
                </div>

                <div class="form-group">
                    <label class="form-label">Nomor NPWP Pemohon 1 <span class="required">*</span></label>
                    <input type="text" class="form-control" placeholder="Gunakan tanda - jika belum mempunyai NPWP" required>
                </div>

                <div class="form-group">
                    <label class="form-label">Prodi / Instansi Pemohon 1 <span class="required">*</span></label>
                    <select class="form-control" id="prodi1" onchange="toggleOtherInput('prodi1', 'otherInputGroup1', 'otherInput1')" required>
                        <option value="" disabled selected>-- Pilih Jenis Prodi/Instansi --</option>
                        <option value="PAI">S1 PAI</option>
                        <option value="PBA">S1 PBA</option>
                        <option value="TBI">S1 TBI</option>
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
                        <option value="SAA">S1 SAA</option>
                        <option value="KDR">S1 KEDOKTERAN</option>
                        <option value="2AFI">S2 AFI</option>
                        <option value="2PBA">S2 PBA</option>
                        <option value="2HES">S2 HES</option>
                        <option value="3AFI">S3 AFI</option>
                        <option value="IU">Instansi Umum</option>
                        <option value="other">Lainnya...</option>
                    </select>
                </div>

                <div class="form-group" id="otherInputGroup1" style="display: none;">
                    <label class="form-label">Sebutkan Prodi/Instansi Pemohon 1 <span class="required">*</span></label>
                    <input type="text" class="form-control" id="otherInput1" placeholder="Masukkan Prodi/instansi">
                </div>

                <!-- CHECKBOX PEMOHON KEDUA -->
                <div class="form-group" style="margin-top: 30px; margin-bottom: 20px;">
                    <label style="font-weight: 600; cursor: pointer; display: flex; align-items: center; gap: 8px; font-size: 15px;">
                        <input type="checkbox" id="checkPemohon2" onchange="togglePemohon2()" style="width: 18px; height: 18px; cursor: pointer;">
                        Tambah Pemohon Kedua
                    </label>
                </div>

                <!-- WADAH DATA PEMOHON 2 -->
                <div id="groupPemohon2" style="display: none;">
                    <h3 style="color: #3B6B80; margin-bottom: 15px; font-size: 18px; border-bottom: 1px solid #cbd5e1; padding-bottom: 5px;">Data Pemohon 2</h3>

                    <div class="form-group">
                        <label class="form-label">Nama Pemohon 2 <span class="required">*</span></label>
                        <input type="text" class="form-control input-pemohon-2" placeholder="Masukkan Nama Pemohon 2">
                    </div>

                    <div class="form-group">
                        <label class="form-label">NIK Pemohon 2 <span class="required">*</span></label>
                        <input type="text" class="form-control input-pemohon-2" placeholder="Masukkan NIK Pemohon 2">
                    </div>

                    <div class="form-group">
                        <label class="form-label">Alamat Pemohon 2 <span class="required">*</span></label>
                        <textarea class="form-control input-pemohon-2" placeholder="Cantumkan jalan, desa/kelurahan, kecamatan, kab/kota, provinsi"></textarea>
                    </div>

                    <div class="form-group two-cols">
                        <div class="form-control-wrap">
                            <label class="form-label">Kode Pos <span class="required">*</span></label>
                            <input type="text" class="form-control input-pemohon-2" placeholder="Masukkan Kode Pos">
                        </div>
                        <div class="form-control-wrap">
                            <label class="form-label">Nomor Telepon / HP <span class="required">*</span></label>
                            <input type="tel" class="form-control input-pemohon-2" placeholder="Masukkan No HP">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Email Pemohon 2 <span class="required">*</span></label>
                        <input type="email" class="form-control input-pemohon-2" placeholder="Masukkan Email Yang Aktif">
                    </div>

                    <div class="form-group">
                        <label class="form-label">Nomor NPWP Pemohon 2 <span class="required">*</span></label>
                        <input type="text" class="form-control input-pemohon-2" placeholder="Gunakan tanda - jika belum mempunyai NPWP">
                    </div>

                    <div class="form-group">
                        <label class="form-label">Prodi / Instansi Pemohon 2 <span class="required">*</span></label>
                        <select class="form-control input-pemohon-2" id="prodi2" onchange="toggleOtherInput('prodi2', 'otherInputGroup2', 'otherInput2')">
                            <option value="" disabled selected>-- Pilih Jenis Prodi/Instansi --</option>
                            <option value="PAI">S1 PAI</option>
                            <option value="PBA">S1 PBA</option>
                            <option value="TBI">S1 TBI</option>
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
                            <option value="SAA">S1 SAA</option>
                            <option value="KDR">S1 KEDOKTERAN</option>
                            <option value="2AFI">S2 AFI</option>
                            <option value="2PBA">S2 PBA</option>
                            <option value="2HES">S2 HES</option>
                            <option value="3AFI">S3 AFI</option>
                            <option value="IU">Instansi Umum</option>
                            <option value="other">Lainnya...</option>
                        </select>
                    </div>

                    <div class="form-group" id="otherInputGroup2" style="display: none;">
                        <label class="form-label">Sebutkan Prodi/Instansi Pemohon 2 <span class="required">*</span></label>
                        <input type="text" class="form-control" id="otherInput2" placeholder="Masukkan Prodi/instansi">
                    </div>
                </div>

                <!-- CHECKBOX PEMOHON KETIGA -->
                <div class="form-group" style="margin-top: 30px; margin-bottom: 20px;">
                    <label style="font-weight: 600; cursor: pointer; display: flex; align-items: center; gap: 8px; font-size: 15px;">
                        <input type="checkbox" id="checkPemohon3" onchange="togglePemohon3()" style="width: 18px; height: 18px; cursor: pointer;">
                        Tambah Pemohon Ketiga
                    </label>
                </div>

                <!-- WADAH DATA PEMOHON 3 -->
                <div id="groupPemohon3" style="display: none;">
                    <h3 style="color: #3B6B80; margin-bottom: 15px; font-size: 18px; border-bottom: 1px solid #cbd5e1; padding-bottom: 5px;">Data Pemohon 3</h3>

                    <div class="form-group">
                        <label class="form-label">Nama Pemohon 3 <span class="required">*</span></label>
                        <input type="text" class="form-control input-pemohon-3" placeholder="Masukkan Nama Pemohon 3">
                    </div>

                    <div class="form-group">
                        <label class="form-label">NIK Pemohon 3 <span class="required">*</span></label>
                        <input type="text" class="form-control input-pemohon-3" placeholder="Masukkan NIK Pemohon 3">
                    </div>

                    <div class="form-group">
                        <label class="form-label">Alamat Pemohon 3 <span class="required">*</span></label>
                        <textarea class="form-control input-pemohon-3" placeholder="Cantumkan jalan, desa/kelurahan, kecamatan, kab/kota, provinsi"></textarea>
                    </div>

                    <div class="form-group two-cols">
                        <div class="form-control-wrap">
                            <label class="form-label">Kode Pos <span class="required">*</span></label>
                            <input type="text" class="form-control input-pemohon-3" placeholder="Masukkan Kode Pos">
                        </div>
                        <div class="form-control-wrap">
                            <label class="form-label">Nomor Telepon / HP <span class="required">*</span></label>
                            <input type="tel" class="form-control input-pemohon-3" placeholder="Masukkan No HP">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Email Pemohon 3 <span class="required">*</span></label>
                        <input type="email" class="form-control input-pemohon-3" placeholder="Masukkan Email Yang Aktif">
                    </div>

                    <div class="form-group">
                        <label class="form-label">Nomor NPWP Pemohon 3 <span class="required">*</span></label>
                        <input type="text" class="form-control input-pemohon-3" placeholder="Gunakan tanda - jika belum mempunyai NPWP">
                    </div>

                    <div class="form-group">
                        <label class="form-label">Prodi / Instansi Pemohon 3 <span class="required">*</span></label>
                        <select class="form-control input-pemohon-3" id="prodi3" onchange="toggleOtherInput('prodi3', 'otherInputGroup3', 'otherInput3')">
                            <option value="" disabled selected>-- Pilih Jenis Prodi/Instansi --</option>
                            <option value="PAI">S1 PAI</option>
                            <option value="PBA">S1 PBA</option>
                            <option value="TBI">S1 TBI</option>
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
                            <option value="SAA">S1 SAA</option>
                            <option value="KDR">S1 KEDOKTERAN</option>
                            <option value="2AFI">S2 AFI</option>
                            <option value="2PBA">S2 PBA</option>
                            <option value="2HES">S2 HES</option>
                            <option value="3AFI">S3 AFI</option>
                            <option value="IU">Instansi Umum</option>
                            <option value="other">Lainnya...</option>
                        </select>
                    </div>

                    <div class="form-group" id="otherInputGroup3" style="display: none;">
                        <label class="form-label">Sebutkan Prodi/Instansi Pemohon 3 <span class="required">*</span></label>
                        <input type="text" class="form-control" id="otherInput3" placeholder="Masukkan Prodi/instansi">
                    </div>
                </div>

                <!-- CHECKBOX PEMOHON KEEMPAT -->
                <div class="form-group" style="margin-top: 30px; margin-bottom: 20px;">
                    <label style="font-weight: 600; cursor: pointer; display: flex; align-items: center; gap: 8px; font-size: 15px;">
                        <input type="checkbox" id="checkPemohon4" onchange="togglePemohon4()" style="width: 18px; height: 18px; cursor: pointer;">
                        Tambah Pemohon Keempat
                    </label>
                </div>

                <!-- WADAH DATA PEMOHON 4 -->
                <div id="groupPemohon4" style="display: none;">
                    <h3 style="color: #3B6B80; margin-bottom: 15px; font-size: 18px; border-bottom: 1px solid #cbd5e1; padding-bottom: 5px;">Data Pemohon 4</h3>

                    <div class="form-group">
                        <label class="form-label">Nama Pemohon 4 <span class="required">*</span></label>
                        <input type="text" class="form-control input-pemohon-4" placeholder="Masukkan Nama Pemohon 4">
                    </div>

                    <div class="form-group">
                        <label class="form-label">NIK Pemohon 4 <span class="required">*</span></label>
                        <input type="text" class="form-control input-pemohon-4" placeholder="Masukkan NIK Pemohon 4">
                    </div>

                    <div class="form-group">
                        <label class="form-label">Alamat Pemohon 4 <span class="required">*</span></label>
                        <textarea class="form-control input-pemohon-4" placeholder="Cantumkan jalan, desa/kelurahan, kecamatan, kab/kota, provinsi"></textarea>
                    </div>

                    <div class="form-group two-cols">
                        <div class="form-control-wrap">
                            <label class="form-label">Kode Pos <span class="required">*</span></label>
                            <input type="text" class="form-control input-pemohon-4" placeholder="Masukkan Kode Pos">
                        </div>
                        <div class="form-control-wrap">
                            <label class="form-label">Nomor Telepon / HP <span class="required">*</span></label>
                            <input type="tel" class="form-control input-pemohon-4" placeholder="Masukkan No HP">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Email Pemohon 4 <span class="required">*</span></label>
                        <input type="email" class="form-control input-pemohon-4" placeholder="Masukkan Email Yang Aktif">
                    </div>

                    <div class="form-group">
                        <label class="form-label">Nomor NPWP Pemohon 4 <span class="required">*</span></label>
                        <input type="text" class="form-control input-pemohon-4" placeholder="Gunakan tanda - jika belum mempunyai NPWP">
                    </div>

                    <div class="form-group">
                        <label class="form-label">Prodi / Instansi Pemohon 4 <span class="required">*</span></label>
                        <select class="form-control input-pemohon-4" id="prodi4" onchange="toggleOtherInput('prodi4', 'otherInputGroup4', 'otherInput4')">
                            <option value="" disabled selected>-- Pilih Jenis Prodi/Instansi --</option>
                            <option value="PAI">S1 PAI</option>
                            <option value="PBA">S1 PBA</option>
                            <option value="TBI">S1 TBI</option>
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
                            <option value="SAA">S1 SAA</option>
                            <option value="KDR">S1 KEDOKTERAN</option>
                            <option value="2AFI">S2 AFI</option>
                            <option value="2PBA">S2 PBA</option>
                            <option value="2HES">S2 HES</option>
                            <option value="3AFI">S3 AFI</option>
                            <option value="IU">Instansi Umum</option>
                            <option value="other">Lainnya...</option>
                        </select>
                    </div>
    
                    <div class="form-group" id="otherInputGroup4" style="display: none;">
                        <label class="form-label">Sebutkan Prodi/Instansi Pemohon 4 <span class="required">*</span></label>
                        <input type="text" class="form-control" id="otherInput4" placeholder="Masukkan Prodi/instansi">
                    </div>
                </div>

                <!-- CHECKBOX PEMOHON KELIMA -->
                <div class="form-group" style="margin-top: 30px; margin-bottom: 20px;">
                    <label style="font-weight: 600; cursor: pointer; display: flex; align-items: center; gap: 8px; font-size: 15px;">
                        <input type="checkbox" id="checkPemohon5" onchange="togglePemohon5()" style="width: 18px; height: 18px; cursor: pointer;">
                        Tambah Pemohon Kelima
                    </label>
                </div>

                <!-- WADAH DATA PEMOHON 5 -->
                <div id="groupPemohon5" style="display: none;">
                    <h3 style="color: #3B6B80; margin-bottom: 15px; font-size: 18px; border-bottom: 1px solid #cbd5e1; padding-bottom: 5px;">Data Pemohon 5</h3>

                    <div class="form-group">
                        <label class="form-label">Nama Pemohon 5 <span class="required">*</span></label>
                        <input type="text" class="form-control input-pemohon-5" placeholder="Masukkan Nama Pemohon 5">
                    </div>

                    <div class="form-group">
                        <label class="form-label">NIK Pemohon 5 <span class="required">*</span></label>
                        <input type="text" class="form-control input-pemohon-5" placeholder="Masukkan NIK Pemohon 5">
                    </div>

                    <div class="form-group">
                        <label class="form-label">Alamat Pemohon 5 <span class="required">*</span></label>
                        <textarea class="form-control input-pemohon-5" placeholder="Cantumkan jalan, desa/kelurahan, kecamatan, kab/kota, provinsi"></textarea>
                    </div>

                    <div class="form-group two-cols">
                        <div class="form-control-wrap">
                            <label class="form-label">Kode Pos <span class="required">*</span></label>
                            <input type="text" class="form-control input-pemohon-5" placeholder="Masukkan Kode Pos">
                        </div>
                        <div class="form-control-wrap">
                            <label class="form-label">Nomor Telepon / HP <span class="required">*</span></label>
                            <input type="tel" class="form-control input-pemohon-5" placeholder="Masukkan No HP">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Email Pemohon 5 <span class="required">*</span></label>
                        <input type="email" class="form-control input-pemohon-5" placeholder="Masukkan Email Yang Aktif">
                    </div>

                    <div class="form-group">
                        <label class="form-label">Nomor NPWP Pemohon 5 <span class="required">*</span></label>
                        <input type="text" class="form-control input-pemohon-5" placeholder="Gunakan tanda - jika belum mempunyai NPWP">
                    </div>

                    <div class="form-group">
                        <label class="form-label">Prodi / Instansi Pemohon 5 <span class="required">*</span></label>
                        <select class="form-control input-pemohon-5" id="prodi5" onchange="toggleOtherInput('prodi5', 'otherInputGroup5', 'otherInput5')">
                            <option value="" disabled selected>-- Pilih Jenis Prodi/Instansi --</option>
                            <option value="PAI">S1 PAI</option>
                            <option value="PBA">S1 PBA</option>
                            <option value="TBI">S1 TBI</option>
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
                            <option value="SAA">S1 SAA</option>
                            <option value="KDR">S1 KEDOKTERAN</option>
                            <option value="2AFI">S2 AFI</option>
                            <option value="2PBA">S2 PBA</option>
                            <option value="2HES">S2 HES</option>
                            <option value="3AFI">S3 AFI</option>
                            <option value="IU">Instansi Umum</option>
                            <option value="other">Lainnya...</option>
                        </select>
                    </div>

                    <div class="form-group" id="otherInputGroup5" style="display: none;">
                        <label class="form-label">Sebutkan Prodi/Instansi Pemohon 5 <span class="required">*</span></label>
                        <input type="text" class="form-control" id="otherInput5" placeholder="Masukkan Prodi/instansi">
                    </div>
                </div>

                <div class="form-group">
                    <label class="form-label">Judul Invensi (Bahasa Indonesia)<span class="required">*</span></label>
                    <textarea class="form-control" placeholder="Masukan Judul Anda" required oninput="autoResize(this)"></textarea>
                </div>

                <div class="form-group">
                    <label class="form-label">Judul Invensi (Bahasa Inggris)<span class="required">*</span></label>
                    <textarea class="form-control" placeholder="Masukan Judul Anda" required oninput="autoResize(this)"></textarea>
                </div>

                <div class="form-group">
                    <label class="form-label">Jenis Paten <span class="required">*</span></label>
                    <select class="form-control" required>
                        <option value="" disabled selected>-- Pilih Jenis Paten --</option>
                        <option value="paten">Paten</option>
                        <option value="paten-sederhana">Paten Sederhana</option>
                        <option value="paten-pct">Paten PCT</option>                       
                    </select>
                </div>

        <!-- Custom Upload File -->
        <div class="form-group">
            <label class="form-label">Unggah KTP Pemohon (PDF) <span class="required">*</span></label>
            <div class="file-upload-wrap">
                <input type="file" accept=".pdf" required>
                <div class="file-upload-text">
                    <i class="fa-solid fa-cloud-arrow-up"></i>
                    <span>Klik atau seret file PDF ke sini untuk mengunggah</span>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label class="form-label">Unggah Surat Pernyataan Kepemilikan Invensi (PDF) <span class="required">*</span></label>
            <div class="file-upload-wrap">
                <input type="file" accept=".pdf" required>
                <div class="file-upload-text">
                    <i class="fa-solid fa-cloud-arrow-up"></i>
                    <span>Klik atau seret file PDF ke sini untuk mengunggah</span>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label class="form-label">Unggah Surat Pengalihan Hak (PDF) (OPSIONAL)</label>
            <div class="file-upload-wrap">
                <input type="file" accept=".pdf" required>
                <div class="file-upload-text">
                    <i class="fa-solid fa-cloud-arrow-up"></i>
                    <span>Klik atau seret file PDF ke sini untuk mengunggah</span>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label class="form-label">Unggah Surat UMKM (PDF) (OPSIONAL)</label>
            <div class="file-upload-wrap">
                <input type="file" accept=".pdf" required>
                <div class="file-upload-text">
                    <i class="fa-solid fa-cloud-arrow-up"></i>
                    <span>Klik atau seret file PDF ke sini untuk mengunggah</span>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label class="form-label">Unggah Gambar Paten (OPSIONAL) </label>
            <div class="file-upload-wrap">
                <input type="file" accept=".png, .jpg, .jpeg" required>
                <div class="file-upload-text">
                    <i class="fa-solid fa-cloud-arrow-up"></i>
                    <span>Klik atau seret file PDF ke sini untuk mengunggah</span>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label class="form-label">Unggah Klaim Paten (PDF) <span class="required">*</span></label>
            <div class="file-upload-wrap">
                <input type="file" accept=".pdf" required>
                <div class="file-upload-text">
                    <i class="fa-solid fa-cloud-arrow-up"></i>
                    <span>Klik atau seret file PDF ke sini untuk mengunggah</span>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label class="form-label">Unggah Abstrak (Indonesia) (PDF) <span class="required">*</span></label>
            <div class="file-upload-wrap">
                <input type="file" accept=".pdf" required>
                <div class="file-upload-text">
                    <i class="fa-solid fa-cloud-arrow-up"></i>
                    <span>Klik atau seret file PDF ke sini untuk mengunggah</span>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label class="form-label">Unggah Abstrak (Inggris) (PDF) <span class="required">*</span></label>
            <div class="file-upload-wrap">
                <input type="file" accept=".pdf" required>
                <div class="file-upload-text">
                    <i class="fa-solid fa-cloud-arrow-up"></i>
                    <span>Klik atau seret file PDF ke sini untuk mengunggah</span>
                </div>
            </div>
        </div>

        <div class="form-group">
            <label class="form-label">Unggah Deskripsi Paten (PDF) <span class="required">*</span></label>
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
    <script>
        function toggleOtherInput(selectId, groupContainerId, inputId) {
            const selectElement = document.getElementById(selectId);
            const otherGroup = document.getElementById(groupContainerId);
            const otherInput = document.getElementById(inputId);

            if (selectElement && selectElement.value === 'other') {
                otherGroup.style.display = 'flex';
                otherInput.setAttribute('required', 'required');
            } else if (otherGroup && otherInput) {
                otherGroup.style.display = 'none';
                otherInput.removeAttribute('required');
                otherInput.value = '';
            }
        }

        function togglePemohon2() {
            const checkBox = document.getElementById('checkPemohon2');
            const groupPemohon2 = document.getElementById('groupPemohon2');
            const inputsPemohon2 = document.querySelectorAll('.input-pemohon-2');

            if (checkBox.checked) {
                groupPemohon2.style.display = 'block';
                inputsPemohon2.forEach(input => input.setAttribute('required', 'required'));
            } else {
                groupPemohon2.style.display = 'none';
                inputsPemohon2.forEach(input => {
                    input.removeAttribute('required');
                    input.value = '';
                });
                const otherGroup2 = document.getElementById('otherInputGroup2');
                const otherInput2 = document.getElementById('otherInput2');
                if (otherGroup2 && otherInput2) {
                    otherGroup2.style.display = 'none';
                    otherInput2.removeAttribute('required');
                    otherInput2.value = '';
                }
            }
        }

        function togglePemohon3() {
            const checkBox = document.getElementById('checkPemohon3');
            const groupPemohon3 = document.getElementById('groupPemohon3');
            const inputsPemohon3 = document.querySelectorAll('.input-pemohon-3');

            if (checkBox.checked) {
                groupPemohon3.style.display = 'block';
                inputsPemohon3.forEach(input => input.setAttribute('required', 'required'));
            } else {
                groupPemohon3.style.display = 'none';
                inputsPemohon3.forEach(input => {
                    input.removeAttribute('required');
                    input.value = '';
                });
                const otherGroup3 = document.getElementById('otherInputGroup3');
                const otherInput3 = document.getElementById('otherInput3');
                if (otherGroup3 && otherInput3) {
                    otherGroup3.style.display = 'none';
                    otherInput3.removeAttribute('required');
                    otherInput3.value = '';
                }
            }
        }

        function togglePemohon4() {
            const checkBox = document.getElementById('checkPemohon4');
            const groupPemohon4 = document.getElementById('groupPemohon4');
            const inputsPemohon4 = document.querySelectorAll('.input-pemohon-4');

            if (checkBox.checked) {
                groupPemohon4.style.display = 'block';
                inputsPemohon4.forEach(input => input.setAttribute('required', 'required'));
            } else {
                groupPemohon4.style.display = 'none';
                inputsPemohon4.forEach(input => {
                    input.removeAttribute('required');
                    input.value = '';
                });
                const otherGroup4 = document.getElementById('otherInputGroup4');
                const otherInput4 = document.getElementById('otherInput4');
                if (otherGroup4 && otherInput4) {
                    otherGroup4.style.display = 'none';
                    otherInput4.removeAttribute('required');
                    otherInput4.value = '';
                }
            }
        }

        function togglePemohon5() {
            const checkBox = document.getElementById('checkPemohon5');
            const groupPemohon5 = document.getElementById('groupPemohon5');
            const inputsPemohon5 = document.querySelectorAll('.input-pemohon-5');

            if (checkBox.checked) {
                groupPemohon5.style.display = 'block';
                inputsPemohon5.forEach(input => input.setAttribute('required', 'required'));
            } else {
                groupPemohon5.style.display = 'none';
                inputsPemohon5.forEach(input => {
                    input.removeAttribute('required');
                    input.value = '';
                });
                const otherGroup5 = document.getElementById('otherInputGroup5');
                const otherInput5 = document.getElementById('otherInput5');
                if (otherGroup5 && otherInput5) {
                    otherGroup5.style.display = 'none';
                    otherInput5.removeAttribute('required');
                    otherInput5.value = '';
                }
            }
        }

        // TEXTAREA
        function autoResize(textarea) {
        // Kembalikan tinggi ke 'auto' terlebih dahulu agar tinggi berkurang saat teks dihapus
        textarea.style.height = 'auto'; 
        // Setel tinggi sesuai dengan scrollHeight (tinggi isi konten sebenarnya)
        textarea.style.height = textarea.scrollHeight + 'px';
    }

    // Mengisi input tanggal dengan hari ini secara otomatis
    document.addEventListener('DOMContentLoaded', function() {
        const inputTanggal = document.getElementById('tanggalSurat');
        if (inputTanggal) {
            const today = new Date().toISOString().split('T')[0];
            inputTanggal.value = today;
        }
    });

    // LIAT NAMA FILE
    document.querySelectorAll('.file-upload-wrap input[type="file"]').forEach(input => {
    input.addEventListener('change', function() {
        const fileName = this.files[0] ? this.files[0].name : 'Klik atau seret gambar ke sini untuk mengunggah';
        const textSpan = this.parentElement.querySelector('.file-upload-text span');
        if (textSpan) {
            textSpan.textContent = fileName;
        }
        });
    });
    </script>
</body>
</html>