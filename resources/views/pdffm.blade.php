@extends('layouts.app')

@section('title', 'Formulir Pendaftaran HKI')

@push('styles')
<style>
    /* CSS Khusus Halaman Pendaftaran Utama */
    .description {
        font-size: 15px;
        color: #555555;
        line-height: 1.6;
        text-align: justify;
        margin-bottom: 10px;
    }

    /* Penomoran & List */
    .custom-ol {
        margin-left: 20px;
        margin-bottom: 20px;
    }

    .custom-ol li {
        margin-bottom: 8px;
        line-height: 1.6;
        color: #555555;
    }

    .main-content ul {
        margin-left: 20px;
        margin-bottom: 15px;
    }

    .main-content li {
        margin-bottom: 8px;
    }

    /* Download Cards Container (3 Kolom) */
    .download-container {
        display: flex;
        justify-content: space-between;
        gap: 25px;
        max-width: 1100px;
        margin: 40px auto 10px auto;
    }

    .download-card {
        flex: 1;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: space-between;
        text-align: center;
        padding: 25px 15px;
        background-color: #ffffff;
        border-radius: 8px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.06);
        border: 1px solid #e2e8f0;
        transition: transform 0.2s ease, box-shadow 0.2s ease;
    }

    .download-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
    }

    .download-title {
        font-size: 18px;
        font-weight: 600;
        color: #2c3e50;
        min-height: 40px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 15px;
    }

    .download-icon {
        font-size: 42px;
        color: #3B6B80;
        margin-bottom: 20px;
    }

    .btn-download {
        width: 100%;
        display: inline-block;
        background-color: #3B6B80;
        color: #ffffff;
        text-decoration: none;
        font-size: 14px;
        font-weight: 500;
        padding: 10px 0;
        border-radius: 5px;
        text-align: center;
        transition: background-color 0.2s ease, transform 0.1s ease;
    }

    .btn-download:hover {
        background-color: #2c5263;
    }

    .btn-download:active {
        transform: scale(0.98);
    }

    @media (max-width: 768px) {
        .download-container {
            flex-direction: column;
            gap: 20px;
        }

        .download-title {
            min-height: auto;
        }
    }
</style>
@endpush

@section('content')
    <h1 class="page-title">Formulir Pendaftaran</h1>
    
    <p class="description">Silakan isi formulir daring (online) di bawah ini dengan data yang sebenar-benarnya. Sebelum mengisi, pastikan Bapak/Ibu sudah mengunduh berkas template surat pernyataan di menu Pusat Unduhan dan telah menandatanganinya di atas meterai Rp 10.000.</p>
    
    <p class="description" style="margin-top: 20px;"><strong>Struktur Data yang Perlu Disiapkan (Panduan Pengisian Form)</strong></p>
    <p class="description">Formulir pendaftaran di bawah ini akan meminta Anda untuk mengisi dan mengunggah beberapa informasi penting berikut:</p>
    
    <ol class="custom-ol">
        <li><strong>Data Pemohon (Koordinator):</strong></li>
        <ul>
            <li>Nama Lengkap (beserta gelar).</li>
            <li>NIDN / NIU (Nomor Induk Utama).</li>
            <li>Fakultas / Program Studi di UNIDA Gontor.</li>
            <li>Nomor WhatsApp aktif (untuk koordinasi revisi berkas).</li>
            <li>Email institusi (@unida.gontor.ac.id).</li>
        </ul>
        
        <li><strong>Data Karya / Invensi:</strong></li>
        <ul>
            <li>Jenis HKI: (Pilih: Hak Cipta, Paten, atau Merek).</li>
            <li>Judul Karya/Invensi: Ditulis lengkap sesuai dengan yang tertera pada dokumen asli (Gunakan Sentence case / Huruf kapital di awal kata saja).</li>
            <li>Nama Anggota/Inventor Lain: Tuliskan nama seluruh tim yang terlibat (jika karya kelompok) secara berurutan sesuai prioritas kontribusi.</li>
        </ul>
        
        <li><strong>Unggah Berkas (Upload Files):</strong></li>
        <ul>
            <li>Scan KTP seluruh tim (digabung menjadi 1 file PDF).</li>
            <li>Surat Pernyataan Kepemilikan Karya (Format PDF, bertanda tangan meterai Rp 10.000).</li>
            <li>Surat Pengalihan Hak ke Universitas (Format PDF, bertanda tangan meterai Rp 10.000).</li>
            <li><strong>File Dokumen Utama:</strong></li>
            <ul>
                <li>Untuk Hak Cipta: File utuh buku/modul/naskah atau source code aplikasi (PDF).</li>
                <li>Untuk Paten: Dokumen Deskripsi Paten lengkap sesuai draf Word (PDF).</li>
                <li>Untuk Merek: File logo/etiket merek dengan resolusi tinggi (JPG/PNG/PDF).</li>
            </ul>
        </ul>
    </ol>

    <!-- Kartu Navigasi ke Form Masing-Masing Jenis HKI -->
    <div class="download-container">
        <div class="download-card">
            <h3 class="download-title">Hak Cipta</h3>
            <div class="download-icon">
                <i class="fa-solid fa-file-pen"></i>
            </div>
            <a href="/formulir-hak-cipta" class="btn-download"><i class="fa-solid fa-paper-plane"></i> Isi Formulir</a>
        </div>

        <div class="download-card">
            <h3 class="download-title">Merek</h3>
            <div class="download-icon">
                <i class="fa-solid fa-file-pen"></i>
            </div>
            <a href="/formulir-merek" class="btn-download"><i class="fa-solid fa-paper-plane"></i> Isi Formulir</a>
        </div>

        <div class="download-card">
            <h3 class="download-title">Paten</h3>
            <div class="download-icon">
                <i class="fa-solid fa-file-pen"></i>
            </div>
            <a href="/formulir-paten" class="btn-download"><i class="fa-solid fa-paper-plane"></i> Isi Formulir</a>
        </div>
    </div>
@endsection