@extends('layouts.app')

@section('title', 'Formulir Paten')

@push('styles')
<style>
    /* CSS Khusus Formulir Paten */
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
        resize: none;
        overflow-y: hidden;
        min-height: 45px;
        box-sizing: border-box;
    }

    input[type="date"].form-control {
        cursor: pointer;
    }

    #groupPemohon3 {
        border: 1px dashed #3B6B80;
        padding: 20px;
        border-radius: 6px;
        background-color: #f8fafc;
        margin-bottom: 25px;
    }

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

    @media (max-width: 600px) {
        .form-container {
            padding: 20px 15px;
        }

        .form-group.two-cols {
            flex-direction: column;
            gap: 20px;
        }
    }
</style>
@endpush

@section('content')
    <h1 class="page-title">Formulir Pendaftaran Paten</h1>

    <div class="form-container">
        <div class="form-header">
            <h2 class="form-title">Formulir Pendaftaran Paten</h2>
            <p class="form-subtitle">Isi data di bawah ini dengan benar untuk mengajukan permohonan pendaftaran HKI.</p>
        </div>

        <form action="#" method="POST" enctype="multipart/form-data">
            @csrf
            
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
                <textarea class="form-control" placeholder="Cantumkan jalan, desa/kelurahan, kecamatan, kab/kota, provinsi" required oninput="autoResize(this)"></textarea>
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
                    <textarea class="form-control input-pemohon-2" placeholder="Cantumkan jalan, desa/kelurahan, kecamatan, kab/kota, provinsi" oninput="autoResize(this)"></textarea>
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
                    <textarea class="form-control input-pemohon-3" placeholder="Cantumkan jalan, desa/kelurahan, kecamatan, kab/kota, provinsi" oninput="autoResize(this)"></textarea>
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
                    <textarea class="form-control input-pemohon-4" placeholder="Cantumkan jalan, desa/kelurahan, kecamatan, kab/kota, provinsi" oninput="autoResize(this)"></textarea>
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
                    <textarea class="form-control input-pemohon-5" placeholder="Cantumkan jalan, desa/kelurahan, kecamatan, kab/kota, provinsi" oninput="autoResize(this)"></textarea>
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
                <textarea class="form-control" placeholder="Masukkan Judul Anda" required oninput="autoResize(this)"></textarea>
            </div>

            <div class="form-group">
                <label class="form-label">Judul Invensi (Bahasa Inggris)<span class="required">*</span></label>
                <textarea class="form-control" placeholder="Masukkan Judul Anda" required oninput="autoResize(this)"></textarea>
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
                    <input type="file" accept=".pdf">
                    <div class="file-upload-text">
                        <i class="fa-solid fa-cloud-arrow-up"></i>
                        <span>Klik atau seret file PDF ke sini untuk mengunggah</span>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label class="form-label">Unggah Surat UMKM (PDF) (OPSIONAL)</label>
                <div class="file-upload-wrap">
                    <input type="file" accept=".pdf">
                    <div class="file-upload-text">
                        <i class="fa-solid fa-cloud-arrow-up"></i>
                        <span>Klik atau seret file PDF ke sini untuk mengunggah</span>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label class="form-label">Unggah Gambar Paten (OPSIONAL)</label>
                <div class="file-upload-wrap">
                    <input type="file" accept=".png, .jpg, .jpeg">
                    <div class="file-upload-text">
                        <i class="fa-solid fa-cloud-arrow-up"></i>
                        <span>Klik atau seret gambar ke sini untuk mengunggah</span>
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
@endsection

@push('scripts')
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

    function autoResize(textarea) {
        textarea.style.height = 'auto'; 
        textarea.style.height = textarea.scrollHeight + 'px';
    }

    document.addEventListener('DOMContentLoaded', function() {
        const inputTanggal = document.getElementById('tanggalSurat');
        if (inputTanggal) {
            const today = new Date().toISOString().split('T')[0];
            inputTanggal.value = today;
        }

        document.querySelectorAll('.file-upload-wrap input[type="file"]').forEach(input => {
            input.addEventListener('change', function() {
                const fileName = this.files[0] ? this.files[0].name : 'Klik atau seret file ke sini untuk mengunggah';
                const textSpan = this.parentElement.querySelector('.file-upload-text span');
                if (textSpan) {
                    textSpan.textContent = fileName;
                }
            });
        });
    });
</script>
@endpush