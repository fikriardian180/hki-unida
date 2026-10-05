@extends('layouts.app')

@section('title', 'Formulir Hak Cipta')

@push('styles')
<style>
    /* CSS Utama Responsive Form */
    .form-container {
        width: 100%;
        max-width: 800px;
        margin: 0 auto;
        padding: 30px 40px;
        background-color: #ffffff;
        border-radius: 8px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
        border-top: 5px solid #3B6B80;
        box-sizing: border-box; /* Memastikan padding tidak membuat lebar meluber */
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
        line-height: 1.4;
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
        box-sizing: border-box; /* PENTING agar input tidak melebar dari wadah */
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

    #groupPemohon2, #groupPemohon3, #groupPemohon4, #groupPemohon5 {
        border: 1px dashed #3B6B80;
        padding: 20px;
        border-radius: 6px;
        background-color: #f8fafc;
        margin-bottom: 25px;
        box-sizing: border-box;
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
        box-sizing: border-box;
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
        word-break: break-word; /* Mengantisipasi nama file panjang meluber */
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

    .btn-submit:disabled {
        background-color: #94a3b8;
        cursor: not-allowed;
        transform: none;
    }

    .alert-success {
        background-color: #d1e7dd;
        color: #0f5132;
        padding: 15px;
        border-radius: 5px;
        margin-bottom: 20px;
        border: 1px solid #badbcc;
    }

    .alert-danger {
        background-color: #f8d7da;
        color: #842029;
        padding: 15px;
        border-radius: 5px;
        margin-bottom: 20px;
        border: 1px solid #f5c2c7;
    }

    /* MEDIA QUERY RESPONSIVE UNTUK LAYAR MOBILE */
    @media (max-width: 768px) {
        .form-container {
            padding: 20px 15px; /* Kurangi padding agar area ketik lebih luas */
            border-radius: 6px;
        }

        .form-title {
            font-size: 20px;
        }

        .form-subtitle {
            font-size: 13px;
        }

        .form-group.two-cols {
            flex-direction: column; /* Ubah kolom 2 sejajar menjadi tumpuk atas-bawah */
            gap: 15px;
        }

        #groupPemohon2, #groupPemohon3, #groupPemohon4, #groupPemohon5 {
            padding: 15px 10px; /* Kurangi padding di dalam kotak tumpuk pemohon */
        }

        .file-upload-wrap {
            padding: 15px 10px;
        }

        .btn-submit {
            padding: 12px;
            font-size: 15px;
        }
    }
</style>
@endpush

@section('content')
    <h1 class="page-title">Formulir Pendaftaran Hak Cipta</h1>
    
    <div class="form-container">
        <div class="form-header">
            <h2 class="form-title">Formulir Pendaftaran Hak Cipta</h2>
            <p class="form-subtitle">Isi data di bawah ini dengan benar untuk mengajukan permohonan pendaftaran HKI.</p>
        </div>

        @if(session('success'))
            <div class="alert-success">
                <i class="fa-solid fa-circle-check"></i> {{ session('success') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="alert-danger">
                <strong><i class="fa-solid fa-triangle-exclamation"></i> Terdapat kesalahan input:</strong>
                <ul style="margin-top: 8px; margin-left: 20px;">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

    @if ($errors->has('r2_error'))
    <div style="background-color: #f8d7da; color: #721c24; padding: 12px; border-radius: 5px; margin-bottom: 20px;">
        <strong>Sistem Error:</strong> {{ $errors->first('r2_error') }}
    </div>
    @endif

        <form id="formHakCipta" action="{{ route('hakcipta.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            
            <!-- Email Pemohon -->
            <div class="form-group">
                <label class="form-label">Email Penanggung Jawab <span class="required">*</span></label>
                <input type="email" name="email_pj" class="form-control" placeholder="Masukkan alamat email anda" required value="{{ old('email_pj') }}">
            </div>

            <!-- Kategori Pemohon -->
            <div class="form-group">
                <label class="form-label">Kategori Pemohon <span class="required">*</span></label>
                <select name="kategori_pemohon" class="form-control" required>
                    <option value="" disabled selected>-- Pilih Jenis Kategori --</option>
                    <option value="umum" {{ old('kategori_pemohon') == 'umum' ? 'selected' : '' }}>Umum</option>
                    <option value="umkm" {{ old('kategori_pemohon') == 'umkm' ? 'selected' : '' }}>UMKM</option>
                    <option value="lpd" {{ old('kategori_pemohon') == 'lpd' ? 'selected' : '' }}>Lembaga Pendidikan</option>
                    <option value="lpi" {{ old('kategori_pemohon') == 'lpi' ? 'selected' : '' }}>Lembaga Penelitian</option>
                </select>
            </div>

            <!-- Hasil Program -->
            <div class="form-group">
                <label class="form-label">Hasil Program <span class="required">*</span></label>
                <select name="hasil_program" class="form-control" required>
                    <option value="" disabled selected>-- Pilih Jenis Hasil Program --</option>
                    <option value="kkn" {{ old('hasil_program') == 'kkn' ? 'selected' : '' }}>KKN</option>
                    <option value="pkm" {{ old('hasil_program') == 'pkm' ? 'selected' : '' }}>PKM</option>
                    <option value="pengabdian" {{ old('hasil_program') == 'pengabdian' ? 'selected' : '' }}>Pengabdian</option>
                    <option value="ta" {{ old('hasil_program') == 'ta' ? 'selected' : '' }}>Tugas Akhir (Skripsi/Thesis/Sidang)</option>
                    <option value="km" {{ old('hasil_program') == 'km' ? 'selected' : '' }}>Karya Mandiri</option>
                    <option value="pl" {{ old('hasil_program') == 'pl' ? 'selected' : '' }}>Penelitian Lainnya</option>
                </select>
            </div>

            <!-- DATA PEMOHON 1 -->
            <h3 style="color: #3B6B80; margin-top: 25px; margin-bottom: 15px; font-size: 18px; border-bottom: 1px solid #ddd; padding-bottom: 5px;">Data Pemohon 1</h3>

            <div class="form-group">
                <label class="form-label">Nama Pemohon 1 <span class="required">*</span></label>
                <input type="text" name="nama_pemohon_1" class="form-control" placeholder="Masukkan Nama Pemohon 1" required value="{{ old('nama_pemohon_1') }}">
            </div>

            <div class="form-group">
                <label class="form-label">NIK Pemohon 1 <span class="required">*</span></label>
                <input type="text" name="nik_pemohon_1" class="form-control" placeholder="Masukkan NIK Pemohon 1" required value="{{ old('nik_pemohon_1') }}">
            </div>

            <div class="form-group">
                <label class="form-label">Alamat Pemohon 1 <span class="required">*</span></label>
                <textarea name="alamat_pemohon_1" class="form-control" placeholder="Cantumkan jalan, desa/kelurahan, kecamatan, kab/kota, provinsi" required oninput="autoResize(this)">{{ old('alamat_pemohon_1') }}</textarea>
            </div>

            <div class="form-group two-cols">
                <div class="form-control-wrap">
                    <label class="form-label">Kode Pos <span class="required">*</span></label>
                    <input type="text" name="kode_pos_1" class="form-control" placeholder="Masukkan Kode Pos" required value="{{ old('kode_pos_1') }}">
                </div>
                <div class="form-control-wrap">
                    <label class="form-label">Nomor Telepon / HP <span class="required">*</span></label>
                    <input type="tel" name="no_hp_1" class="form-control" placeholder="Masukkan No HP" required value="{{ old('no_hp_1') }}">
                </div>
            </div>

            <div class="form-group">
                <label class="form-label">Email Pemohon 1 <span class="required">*</span></label>
                <input type="email" name="email_pemohon_1" class="form-control" placeholder="Masukkan Email Yang Aktif" required value="{{ old('email_pemohon_1') }}">
            </div>

            <div class="form-group">
                <label class="form-label">Nomor NPWP Pemohon 1 <span class="required">*</span></label>
                <input type="text" name="npwp_pemohon_1" class="form-control" placeholder="Gunakan tanda - jika belum mempunyai NPWP" required value="{{ old('npwp_pemohon_1') }}">
            </div>

            <div class="form-group">
                <label class="form-label">Prodi / Instansi Pemohon 1 <span class="required">*</span></label>
                <select name="prodi_pemohon_1" class="form-control" id="prodi1" onchange="toggleOtherInput('prodi1', 'otherInputGroup1', 'otherInput1')" required>
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
                <input type="text" name="prodi_lainnya_1" class="form-control" id="otherInput1" placeholder="Masukkan Prodi/instansi" value="{{ old('prodi_lainnya_1') }}">
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
                    <input type="text" name="nama_pemohon_2" class="form-control input-pemohon-2" placeholder="Masukkan Nama Pemohon 2">
                </div>

                <div class="form-group">
                    <label class="form-label">NIK Pemohon 2 <span class="required">*</span></label>
                    <input type="text" name="nik_pemohon_2" class="form-control input-pemohon-2" placeholder="Masukkan NIK Pemohon 2">
                </div>

                <div class="form-group">
                    <label class="form-label">Alamat Pemohon 2 <span class="required">*</span></label>
                    <textarea name="alamat_pemohon_2" class="form-control input-pemohon-2" placeholder="Cantumkan jalan, desa/kelurahan, kecamatan, kab/kota, provinsi" oninput="autoResize(this)"></textarea>
                </div>

                <div class="form-group two-cols">
                    <div class="form-control-wrap">
                        <label class="form-label">Kode Pos <span class="required">*</span></label>
                        <input type="text" name="kode_pos_2" class="form-control input-pemohon-2" placeholder="Masukkan Kode Pos">
                    </div>
                    <div class="form-control-wrap">
                        <label class="form-label">Nomor Telepon / HP <span class="required">*</span></label>
                        <input type="tel" name="no_hp_2" class="form-control input-pemohon-2" placeholder="Masukkan No HP">
                    </div>
                </div>

                <div class="form-group">
                    <label class="form-label">Email Pemohon 2 <span class="required">*</span></label>
                    <input type="email" name="email_pemohon_2" class="form-control input-pemohon-2" placeholder="Masukkan Email Yang Aktif">
                </div>

                <div class="form-group">
                    <label class="form-label">Nomor NPWP Pemohon 2 <span class="required">*</span></label>
                    <input type="text" name="npwp_pemohon_2" class="form-control input-pemohon-2" placeholder="Gunakan tanda - jika belum mempunyai NPWP">
                </div>

                <div class="form-group">
                    <label class="form-label">Prodi / Instansi Pemohon 2 <span class="required">*</span></label>
                    <select name="prodi_pemohon_2" class="form-control input-pemohon-2" id="prodi2" onchange="toggleOtherInput('prodi2', 'otherInputGroup2', 'otherInput2')">
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
                    <input type="text" name="prodi_lainnya_2" class="form-control" id="otherInput2" placeholder="Masukkan Prodi/instansi">
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
                    <input type="text" name="nama_pemohon_3" class="form-control input-pemohon-3" placeholder="Masukkan Nama Pemohon 3">
                </div>

                <div class="form-group">
                    <label class="form-label">NIK Pemohon 3 <span class="required">*</span></label>
                    <input type="text" name="nik_pemohon_3" class="form-control input-pemohon-3" placeholder="Masukkan NIK Pemohon 3">
                </div>

                <div class="form-group">
                    <label class="form-label">Alamat Pemohon 3 <span class="required">*</span></label>
                    <textarea name="alamat_pemohon_3" class="form-control input-pemohon-3" placeholder="Cantumkan jalan, desa/kelurahan, kecamatan, kab/kota, provinsi" oninput="autoResize(this)"></textarea>
                </div>

                <div class="form-group two-cols">
                    <div class="form-control-wrap">
                        <label class="form-label">Kode Pos <span class="required">*</span></label>
                        <input type="text" name="kode_pos_3" class="form-control input-pemohon-3" placeholder="Masukkan Kode Pos">
                    </div>
                    <div class="form-control-wrap">
                        <label class="form-label">Nomor Telepon / HP <span class="required">*</span></label>
                        <input type="tel" name="no_hp_3" class="form-control input-pemohon-3" placeholder="Masukkan No HP">
                    </div>
                </div>

                <div class="form-group">
                    <label class="form-label">Email Pemohon 3 <span class="required">*</span></label>
                    <input type="email" name="email_pemohon_3" class="form-control input-pemohon-3" placeholder="Masukkan Email Yang Aktif">
                </div>

                <div class="form-group">
                    <label class="form-label">Nomor NPWP Pemohon 3 <span class="required">*</span></label>
                    <input type="text" name="npwp_pemohon_3" class="form-control input-pemohon-3" placeholder="Gunakan tanda - jika belum mempunyai NPWP">
                </div>

                <div class="form-group">
                    <label class="form-label">Prodi / Instansi Pemohon 3 <span class="required">*</span></label>
                    <select name="prodi_pemohon_3" class="form-control input-pemohon-3" id="prodi3" onchange="toggleOtherInput('prodi3', 'otherInputGroup3', 'otherInput3')">
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
                    <input type="text" name="prodi_lainnya_3" class="form-control" id="otherInput3" placeholder="Masukkan Prodi/instansi">
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
                    <input type="text" name="nama_pemohon_4" class="form-control input-pemohon-4" placeholder="Masukkan Nama Pemohon 4">
                </div>

                <div class="form-group">
                    <label class="form-label">NIK Pemohon 4 <span class="required">*</span></label>
                    <input type="text" name="nik_pemohon_4" class="form-control input-pemohon-4" placeholder="Masukkan NIK Pemohon 4">
                </div>

                <div class="form-group">
                    <label class="form-label">Alamat Pemohon 4 <span class="required">*</span></label>
                    <textarea name="alamat_pemohon_4" class="form-control input-pemohon-4" placeholder="Cantumkan jalan, desa/kelurahan, kecamatan, kab/kota, provinsi" oninput="autoResize(this)"></textarea>
                </div>

                <div class="form-group two-cols">
                    <div class="form-control-wrap">
                        <label class="form-label">Kode Pos <span class="required">*</span></label>
                        <input type="text" name="kode_pos_4" class="form-control input-pemohon-4" placeholder="Masukkan Kode Pos">
                    </div>
                    <div class="form-control-wrap">
                        <label class="form-label">Nomor Telepon / HP <span class="required">*</span></label>
                        <input type="tel" name="no_hp_4" class="form-control input-pemohon-4" placeholder="Masukkan No HP">
                    </div>
                </div>

                <div class="form-group">
                    <label class="form-label">Email Pemohon 4 <span class="required">*</span></label>
                    <input type="email" name="email_pemohon_4" class="form-control input-pemohon-4" placeholder="Masukkan Email Yang Aktif">
                </div>

                <div class="form-group">
                    <label class="form-label">Nomor NPWP Pemohon 4 <span class="required">*</span></label>
                    <input type="text" name="npwp_pemohon_4" class="form-control input-pemohon-4" placeholder="Gunakan tanda - jika belum mempunyai NPWP">
                </div>

                <div class="form-group">
                    <label class="form-label">Prodi / Instansi Pemohon 4 <span class="required">*</span></label>
                    <select name="prodi_pemohon_4" class="form-control input-pemohon-4" id="prodi4" onchange="toggleOtherInput('prodi4', 'otherInputGroup4', 'otherInput4')">
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
                    <input type="text" name="prodi_lainnya_4" class="form-control" id="otherInput4" placeholder="Masukkan Prodi/instansi">
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
                    <input type="text" name="nama_pemohon_5" class="form-control input-pemohon-5" placeholder="Masukkan Nama Pemohon 5">
                </div>

                <div class="form-group">
                    <label class="form-label">NIK Pemohon 5 <span class="required">*</span></label>
                    <input type="text" name="nik_pemohon_5" class="form-control input-pemohon-5" placeholder="Masukkan NIK Pemohon 5">
                </div>

                <div class="form-group">
                    <label class="form-label">Alamat Pemohon 5 <span class="required">*</span></label>
                    <textarea name="alamat_pemohon_5" class="form-control input-pemohon-5" placeholder="Cantumkan jalan, desa/kelurahan, kecamatan, kab/kota, provinsi" oninput="autoResize(this)"></textarea>
                </div>

                <div class="form-group two-cols">
                    <div class="form-control-wrap">
                        <label class="form-label">Kode Pos <span class="required">*</span></label>
                        <input type="text" name="kode_pos_5" class="form-control input-pemohon-5" placeholder="Masukkan Kode Pos">
                    </div>
                    <div class="form-control-wrap">
                        <label class="form-label">Nomor Telepon / HP <span class="required">*</span></label>
                        <input type="tel" name="no_hp_5" class="form-control input-pemohon-5" placeholder="Masukkan No HP">
                    </div>
                </div>

                <div class="form-group">
                    <label class="form-label">Email Pemohon 5 <span class="required">*</span></label>
                    <input type="email" name="email_pemohon_5" class="form-control input-pemohon-5" placeholder="Masukkan Email Yang Aktif">
                </div>

                <div class="form-group">
                    <label class="form-label">Nomor NPWP Pemohon 5 <span class="required">*</span></label>
                    <input type="text" name="npwp_pemohon_5" class="form-control input-pemohon-5" placeholder="Gunakan tanda - jika belum mempunyai NPWP">
                </div>

                <div class="form-group">
                    <label class="form-label">Prodi / Instansi Pemohon 5 <span class="required">*</span></label>
                    <select name="prodi_pemohon_5" class="form-control input-pemohon-5" id="prodi5" onchange="toggleOtherInput('prodi5', 'otherInputGroup5', 'otherInput5')">
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
                    <input type="text" name="prodi_lainnya_5" class="form-control" id="otherInput5" placeholder="Masukkan Prodi/instansi">
                </div>
            </div>

            <!-- DATA PENCIPTA LENGKAP -->
            <div class="form-group" style="margin-top: 20px;">
                <label class="form-label">Data Pencipta Lengkap (jika pencipta lebih dari 5 pemohon, harap mengirimkan data email, no HP, alamat, dan kode pos dalam bentuk .doc / format : Data Pencipta-Nama Pemohon)</label>
                <div class="file-upload-wrap">
                    <input type="file" name="file_data_pencipta_lengkap" accept=".doc,.docx">
                    <div class="file-upload-text">
                        <i class="fa-solid fa-cloud-arrow-up"></i>
                        <span>Klik atau seret file Docs ke sini untuk mengunggah</span>
                    </div>
                </div>
            </div>

            <!-- DATA KARYA -->
            <div class="form-group">
                <label class="form-label">Data Karya <span class="required">*</span></label>
                <textarea name="deskripsi_karya" class="form-control" placeholder="Masukkan deskripsi tentang karya anda" required oninput="autoResize(this)">{{ old('deskripsi_karya') }}</textarea>
            </div>

            <div class="form-group">
                <label class="form-label">Judul Karya <span class="required">*</span></label>
                <textarea name="judul_karya" class="form-control" placeholder="Masukkan Judul Karya Anda" required oninput="autoResize(this)">{{ old('judul_karya') }}</textarea>
            </div>

            <div class="form-group">
                <label class="form-label">Jenis Hak Cipta <span class="required">*</span></label>
                <textarea name="jenis_hak_cipta" class="form-control" placeholder="Masukkan jenis Hak Cipta anda (contoh: Buku Ajar, Poster, Video, Program Komputer, Alat Peraga, Modul, Buku Panduan, Dll)" required oninput="autoResize(this)">{{ old('jenis_hak_cipta') }}</textarea>
            </div>

            <div class="form-group">
                <label class="form-label">Tanggal Ciptaan Pertama Kali Diumumkan <span class="required">*</span></label>
                <input type="date" name="tanggal_diumumkan" class="form-control" id="tanggalSurat" required value="{{ old('tanggal_diumumkan') }}">
            </div>

            <!-- KTP -->
            <div class="form-group" style="margin-top: 20px;">
                <label class="form-label">Unggah KTP Pencipta (Jika pemohon lebih dari satu orang dijadikan dalam satu file PDF) <span class="required">*</span></label>
                <div class="file-upload-wrap">
                    <input type="file" name="file_ktp" accept=".pdf" required>
                    <div class="file-upload-text">
                        <i class="fa-solid fa-cloud-arrow-up"></i>
                        <span>Klik atau seret file PDF ke sini untuk mengunggah</span>
                    </div>
                </div>
            </div>

            <!-- NPWP -->
            <div class="form-group" style="margin-top: 20px;">
                <label class="form-label">Unggah NPWP Pencipta/Pemohon <span class="required">*</span></label>
                <div class="file-upload-wrap">
                    <input type="file" name="file_npwp" accept=".pdf" required>
                    <div class="file-upload-text">
                        <i class="fa-solid fa-cloud-arrow-up"></i>
                        <span>Klik atau seret file PDF ke sini untuk mengunggah</span>
                    </div>
                </div>
            </div>

            <!-- Deskripsi Karya PDF -->
            <div class="form-group" style="margin-top: 20px;">
                <label class="form-label">Unggah Deskripsi Karya Anda (Minimal 1 Paragraf) <span class="required">*</span></label>
                <div class="file-upload-wrap">
                    <input type="file" name="file_deskripsi_karya" accept=".pdf" required>
                    <div class="file-upload-text">
                        <i class="fa-solid fa-cloud-arrow-up"></i>
                        <span>Klik atau seret file PDF ke sini untuk mengunggah</span>
                    </div>
                </div>
            </div>

            <!-- Karya Ciptaan -->
            <div class="form-group" style="margin-top: 20px;">
                <label class="form-label">Unggah Karya Ciptaan <span class="required">*</span></label>
                <div class="file-upload-wrap">
                    <input type="file" name="file_karya_ciptaan" accept=".pdf,.zip,.rar" required>
                    <div class="file-upload-text">
                        <i class="fa-solid fa-cloud-arrow-up"></i>
                        <span>Klik atau seret file ke sini untuk mengunggah</span>
                    </div>
                </div>
            </div>

            <!-- Surat Pernyataan -->
            <div class="form-group" style="margin-top: 20px;">
                <label class="form-label">Unggah Surat Pernyataan (Dengan Materai) <span class="required">*</span></label>
                <div class="file-upload-wrap">
                    <input type="file" name="file_surat_pernyataan" accept=".pdf" required>
                    <div class="file-upload-text">
                        <i class="fa-solid fa-cloud-arrow-up"></i>
                        <span>Klik atau seret file PDF ke sini untuk mengunggah</span>
                    </div>
                </div>
            </div>

            <!-- Surat Pengalihan Hak Cipta -->
            <div class="form-group" style="margin-top: 20px;">
                <label class="form-label">Unggah Surat Pengalihan Hak Cipta (Bermaterai) <span class="required">*</span></label>
                <div class="file-upload-wrap">
                    <input type="file" name="file_pengalihan_hak" accept=".pdf" required>
                    <div class="file-upload-text">
                        <i class="fa-solid fa-cloud-arrow-up"></i>
                        <span>Klik atau seret file PDF ke sini untuk mengunggah</span>
                    </div>
                </div>
            </div>

            <!-- Akte Pendirian -->
            <div class="form-group" style="margin-top: 20px;">
                <label class="form-label">Unggah Akte Pendirian Berbadan Hukum (Opsional)</label>
                <div class="file-upload-wrap">
                    <input type="file" name="file_akte_pendirian" accept=".pdf">
                    <div class="file-upload-text">
                        <i class="fa-solid fa-cloud-arrow-up"></i>
                        <span>Klik atau seret file PDF ke sini untuk mengunggah</span>
                    </div>
                </div>
            </div>

            <!-- Tombol Kirim -->
            <button type="submit" id="btnSubmit" class="btn-submit">
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
        if (inputTanggal && !inputTanggal.value) {
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

        // Script Disabling Button saat Submit Form
        const formHakCipta = document.getElementById('formHakCipta');
        if (formHakCipta) {
            formHakCipta.addEventListener('submit', function() {
                const btnSubmit = document.getElementById('btnSubmit');
                if (btnSubmit) {
                    btnSubmit.disabled = true;
                    btnSubmit.innerHTML = '<i class="fa-solid fa-spinner fa-spin"></i> Mengirim Permohonan...';
                }
            });
        }
    });
</script>
@endpush