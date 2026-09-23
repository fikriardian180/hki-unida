@extends('layouts.app')

@section('title', 'Pengertian Merek - Sentra HKI UNIDA Gontor')

@push('styles')
<style>
    /* CSS Khusus Halaman Merek */
    .section-title {
        font-size: 20px;
        font-weight: 700;
        color: #3B6B80;
        margin-top: 30px;
        margin-bottom: 12px;
        border-bottom: 2px solid #e2e8f0;
        padding-bottom: 6px;
    }

    .description {
        font-size: 15px;
        color: #475569;
        line-height: 1.7;
        text-align: justify;
        margin-bottom: 12px;
        word-wrap: break-word;
    }

    .custom-list {
        margin-left: 20px;
        padding-left: 5px;
        margin-bottom: 20px;
    }

    .custom-list li {
        margin-bottom: 8px;
        color: #475569;
        line-height: 1.6;
        font-size: 15px;
    }

    .custom-ol {
        margin-left: 20px;
        padding-left: 5px;
        margin-bottom: 20px;
    }

    .custom-ol li {
        margin-bottom: 10px;
        color: #475569;
        line-height: 1.6;
        font-size: 15px;
    }

    /* Tabel Responsive Container */
    .table-responsive {
        width: 100%;
        overflow-x: auto;
        -webkit-overflow-scrolling: touch; /* Scroll lancar di iOS */
        margin-top: 15px;
        margin-bottom: 30px;
        border-radius: 6px;
        border: 1px solid #e2e8f0;
        box-shadow: 0 1px 3px rgba(0,0,0,0.05);
    }

    .custom-table {
        width: 100%;
        border-collapse: collapse;
        font-size: 14px;
        text-align: left;
        background-color: #ffffff;
        white-space: normal;
    }

    .custom-table th {
        background-color: #3B6B80;
        color: #ffffff;
        padding: 12px 16px;
        font-weight: 600;
        white-space: nowrap; /* Menjaga header tabel tetap sejajar */
    }

    .custom-table td {
        padding: 12px 16px;
        border-bottom: 1px solid #e5e7eb;
        color: #4b5563;
        vertical-align: top;
        line-height: 1.5;
    }

    .custom-table tbody tr:last-child td {
        border-bottom: none;
    }

    .custom-table tbody tr:nth-child(even) {
        background-color: #f9fafb;
    }

    .custom-table tbody tr:hover {
        background-color: #f1f5f9;
    }

    /* MEDIA QUERY RESPONSIF UNTUK LAYAR HP/TABLET */
    @media (max-width: 768px) {
        .section-title {
            font-size: 18px;
            margin-top: 25px;
        }

        .description {
            font-size: 14px;
            text-align: left; /* Alignment kiri lebih rapi dibaca di HP */
            line-height: 1.6;
        }

        .custom-list, .custom-ol {
            margin-left: 15px;
            padding-left: 0;
        }

        .custom-list li, .custom-ol li {
            font-size: 14px;
        }

        .custom-table th, 
        .custom-table td {
            padding: 10px 12px;
            font-size: 13px;
        }
    }
</style>
@endpush

@section('content')
    <h1 class="page-title">Merek</h1>

    <h2 class="section-title">1. Definisi Merek</h2>
    <p class="description">
        Berdasarkan <strong>UU No. 20 Tahun 2016 tentang Merek dan Indikasi Geografis</strong>, Merek adalah tanda yang dapat ditampilkan secara grafis berupa gambar, logo, nama, kata, huruf, angka, susunan warna, dalam bentuk 2 dimensi dan/atau 3 dimensi, suara, hologram, atau kombinasi dari 2 atau lebih unsur tersebut untuk membedakan barang dan/atau jasa yang diproduksi oleh orang atau badan hukum dalam kegiatan perdagangan barang dan/atau jasa.
    </p>

    <h2 class="section-title">2. Landasan Hukum</h2>
    <p class="description">
        Perlindungan hukum dan tata cara pendaftaran merek di lingkungan Universitas Darussalam Gontor mengacu pada regulasi nasional berikut:
    </p>
    <ul class="custom-list">
        <li><strong>Undang-Undang Nomor 20 Tahun 2016</strong> tentang Merek dan Indikasi Geografis.</li>
        <li><strong>Undang-Undang Nomor 6 Tahun 2023</strong> tentang Penetapan Perpu Cipta Kerja Menjadi Undang-Undang (terkait kluster penyederhanaan proses dan waktu pengumuman merek).</li>
    </ul>

    <h2 class="section-title">3. Jangka Waktu & Perlindungan Merek</h2>
    <p class="description">
        Merek menggunakan sistem <strong>First-to-File</strong> (siapa yang mendaftar pertama kali, dia yang berhak atas merek tersebut).
    </p>
    <ul class="custom-list">
        <li><strong>Masa Perlindungan:</strong> Merek terdaftar mendapatkan perlindungan hukum selama <strong>10 tahun</strong> sejak Tanggal Penerimaan (Filing Date).</li>
        <li><strong>Dapat Diperpanjang:</strong> Berbeda dengan Paten dan Hak Cipta yang memiliki batas waktu mutlak, hak atas Merek <strong>dapat diperpanjang setiap 10 tahun sekali</strong> secara terus-menerus selama merek tersebut masih digunakan dalam perdagangan.</li>
    </ul>

    <h2 class="section-title">4. Jenis-Jenis Merek</h2>
    <p class="description">Berdasarkan penggunaannya, merek yang didaftarkan dibagi menjadi 3 jenis utama:</p>
    <ol class="custom-ol">
        <li><strong>Merek Dagang:</strong> Merek yang digunakan pada barang yang diperdagangkan oleh seseorang atau beberapa orang secara bersama-sama atau badan hukum untuk membedakan dengan barang sejenis lainnya (Contoh di kampus: Produk air mineral UNIDA, produk herbal, atau roti buatan laboratorium kampus).</li>
        <li><strong>Merek Jasa:</strong> Merek yang digunakan pada jasa yang diperdagangkan oleh seseorang atau badan hukum untuk membedakan dengan jasa sejenis lainnya (Contoh di kampus: Jasa pelatihan bahasa, jasa laboratorium pengujian, atau jasa konsultan bisnis).</li>
        <li><strong>Merek Kolektif:</strong> Merek yang digunakan pada barang dan/atau jasa dengan karakteristik yang sama mengenai sifat, ciri umum, dan mutu barang atau jasa serta pengawasannya yang akan diperdagangkan secara bersama-sama.</li>
    </ol>

    <h2 class="section-title">5. Kelas Merek (Klasifikasi Nice)</h2>
    <p class="description">
        Saat mendaftarkan merek, pemohon wajib memilih Kelas Merek yang sesuai dengan jenis bidang usaha atau produknya berdasarkan Klasifikasi Internasional (Nice Classification). Secara total terdapat 45 Kelas Merek:
    </p>
    <ul class="custom-list">
        <li><strong>Kelas 1 sampai 34:</strong> Digunakan untuk kategori Barang/Produk fisik (misalnya: Kelas 5 untuk obat-obatan/herbal, Kelas 30 untuk produk kopi/roti, Kelas 32 untuk minuman non-alkohol/air mineral).</li>
        <li><strong>Kelas 35 sampai 45:</strong> Digunakan untuk kategori Jasa/Layanan (misalnya: Kelas 41 untuk jasa pendidikan/pelatihan, Kelas 42 untuk jasa riset/pengembangan teknologi).</li>
    </ul>

    <h2 class="section-title">6. Manfaat Pendaftaran Merek bagi Civitas Academica</h2>
    <p class="description">
        Mengapa produk inovasi, inkubator bisnis, maupun unit usaha di bawah UNIDA Gontor wajib mendaftarkan mereknya?
    </p>
    <ul class="custom-list">
        <li><strong>Alat Bukti Kepemilikan Mutlak:</strong> Menjadi bukti sah satu-satunya bahwa universitas/penemu adalah pemilik sah merek tersebut di mata hukum.</li>
        <li><strong>Mencegah Plagiasi & Peniruan:</strong> Pemilik merek berhak melarang pihak lain menggunakan merek yang sama atau mirip untuk jenis barang/jasa yang sejenis di pasar.</li>
        <li><strong>Aset Komersial & Nilai Jual (Intangible Asset):</strong> Merek terdaftar meningkatkan kepercayaan konsumen (brand awareness) dan dapat dilisensikan atau diwariskan untuk menghasilkan royalti bagi kampus dan penemu.</li>
        <li><strong>Syarat Komersialisasi Hasil Riset:</strong> Memudahkan produk hasil hilirisasi riset dosen untuk masuk ke pasar industri, pengujian BPOM, maupun sertifikasi Halal secara resmi.</li>
    </ul>

    <h2 class="section-title">7. Biaya Percatatan Merek</h2>
    <div class="table-responsive">
        <table class="custom-table">
            <thead>
                <tr>
                    <th style="width: 50px; text-align: center;">No</th>
                    <th style="min-width: 240px;">Rincian</th>
                    <th style="min-width: 170px;">Lembaga Pendidikan, UMKM, dan Penelitian</th>
                    <th style="min-width: 120px;">Umum</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="text-align: center;">1</td>
                    <td>Pendaftaran & Pencatatan Merek</td>
                    <td>Rp 1.500.000</td>
                    <td>Rp 3.500.000</td>
                </tr>
            </tbody>
        </table>
    </div>
    <p class="description"><strong>*Update 1 Agustus 2026</strong></p>
    <ul class="custom-list">
        <li>Catatan: Biaya di atas <strong>dapat berubah sewaktu-waktu mengikuti ketentuan pemerintah.</strong></li>
        <li>Pembayaran dilakukan setelah melengkapi semua Persyaratan yang diperlukan dan Mengunggahnya di Formulir pendaftaran.</li>
        <li>Pembayaran dapat dilakukan melalui transfer bank atau tunai.</li>
        <li>Subsidi akan diberikan sesuai dengan syarat dan ketentuan yang berlaku.</li>
    </ul>
@endsection