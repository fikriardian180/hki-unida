@extends('layouts.app')

@section('title', 'Pengertian Hak Cipta')

@push('styles')
<style>
    /* CSS Khusus Halaman Hak Cipta */
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
        line-height: 1.6;
        text-align: justify;
        margin-bottom: 12px;
    }

    .custom-list {
        margin-left: 20px;
        margin-bottom: 20px;
    }

    .custom-list li {
        margin-bottom: 8px;
        color: #475569;
        line-height: 1.6;
        font-size: 15px;
    }

    /* Tabel Responsive */
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
        box-shadow: 0 1px 3px rgba(0,0,0,0.08);
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
</style>
@endpush

@section('content')
    <h1 class="page-title">Hak Cipta</h1>
    
    <h2 class="section-title">1. Definisi Hak Cipta</h2>
    <p class="description">
        Berdasarkan <strong>UU No. 28 Tahun 2014</strong> tentang Hak Cipta, <strong>Hak Cipta</strong> adalah hak eksklusif pencipta yang timbul secara otomatis berdasarkan prinsip deklaratif setelah suatu ciptaan diwujudkan dalam bentuk nyata tanpa mengurangi pembatasan sesuai dengan ketentuan peraturan perundang-undangan.
    </p>
    <p class="description">
        Hak eksklusif ini terdiri atas <strong>Hak Moral</strong> (hak yang melekat abadi pada diri Pencipta untuk mencantumkan namanya) dan <strong>Hak Ekonomi</strong> (hak untuk mendapatkan manfaat ekonomi atas ciptaan tersebut).
    </p>

    <h2 class="section-title">2. Landasan Hukum</h2>
    <p class="description">
        Penyelenggaraan dan perlindungan hukum Kekayaan Intelektual di lingkungan Universitas Darussalam Gontor mengacu pada regulasi nasional sebagai berikut:
    </p>
    <ul class="custom-list">
        <li><strong>Undang-Undang Nomor 28 Tahun 2014</strong> tentang Hak Cipta.</li>
        <li><strong>Peraturan Pemerintah Nomor 56 Tahun 2021</strong> tentang Pengelolaan Royalti Hak Cipta Lagu dan/atau Musik (serta peraturan turunan terkait pendaftaran digital).</li>
        <li><strong>Undang-Undang Nomor 11 Tahun 2019</strong> tentang Sistem Nasional Ilmu Pengetahuan dan Teknologi (terkait kewajiban pelindungan KI hasil riset perguruan tinggi).</li>
    </ul>

    <h2 class="section-title">3. Jangka Waktu Pencatatan & Perlindungan</h2>
    <p class="description">
        Berbeda dengan Paten atau Merek yang harus menunggu pemeriksaan substantif berbulan-bulan, pencatatan Hak Cipta di era digital saat ini menggunakan sistem <strong>e-HakCipta</strong> yang prosesnya instan (langsung terbit surat pencatatan dalam hitungan hari setelah divalidasi).
    </p>
    <p class="description">Masa berlaku pelindungan Hak Cipta sangat panjang, dibagi berdasarkan jenis ciptaannya:</p>
    <ul class="custom-list">
        <li><strong>Seumur Hidup Pencipta + 70 Tahun Setelah Meninggal Dunia:</strong> Berlaku untuk ciptaan utama seperti buku, pamflet, artikel ilmiah, tafsir, ceramah, kuliah, lagu/musik, drama, arsitektur, peta, dan karya seni rupa.</li>
        <li><strong>50 Tahun Sejak Pertama Kali Diumumkan/Diterbitkan:</strong> Berlaku untuk karya program komputer (aplikasi/software), database, sinematografi (video/film), fotografi, dan karya modifikasi/saduran.</li>
    </ul>

    <h2 class="section-title">4. Kategori & Jenis Karya Hak Cipta</h2>
    <p class="description">Berikut adalah jenis-jenis ciptaan hasil karya dosen dan mahasiswa yang dapat didaftarkan perlindungannya melalui Sentra HKI UNIDA Gontor:</p>
    
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
                    <td>Aransemen, Karya Rekaman Suara, Lagu (Musik Dengan Teks), Berbagai Jenis Musik, Musik Tanpa Teks, Musik Tradisional.</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td><strong>Karya Fotografi</strong></td>
                    <td>Karya Fotografi, Potret.</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td><strong>Karya Drama & Koreografi</strong></td>
                    <td>Drama/pertunjukan, Drama Musikal, Ketoprak, Pentas Musik, Pewayangan, Seni Pertunjukan, Sulap, Tari.</td>
                </tr>
                <tr>
                    <td>7</td>
                    <td><strong>Karya Rekaman / Cetak</strong></td>
                    <td>Komik, Koreografi, Booklet, Khutbah, Banner, Brosur, Buku, Modul, Diktat, Cerita Bergambar, Pantomim, Karya Siaran, Naskah Film, Novel.</td>
                </tr>
                <tr>
                    <td>8</td>
                    <td><strong>Karya Lainnya</strong></td>
                    <td>Kompilasi Ciptaan, Permainan Video, Program Komputer.</td>
                </tr>
            </tbody>
        </table>
    </div>

    <h2 class="section-title">5. Persyaratan Pencatatan</h2>
    <p class="description">Adapun persyaratan yang harus disiapkan oleh pemohon dalam pencatatan Hak Cipta adalah sebagai berikut:</p>
    <ul class="custom-list">
        <li>Scan KTP Seluruh Pencipta / Pemohon</li>
        <li>NPWP Pemohon / Lembaga</li>
        <li>File Contoh Karya Ciptaan (PDF/MP4/PNG/ZIP)</li>
        <li>Deskripsi Singkat Ciptaan</li>
        <li>Surat Pernyataan Kepemilikan (Bermeterai Rp 10.000)</li>
        <li>Surat Keterangan UMKM atau Akta Pendirian Lembaga (jika diperlukan)</li>
        <li>Surat Pengalihan Hak (jika pemohon adalah lembaga/universitas)</li>
        <li>Surat Kuasa (jika menggunakan konsultan HKI)</li>
        <li>Alamat email aktif & Nomor HP/WhatsApp</li>
    </ul>

    <h2 class="section-title">6. Biaya Pencatatan</h2>
    <div class="table-responsive">
        <table class="custom-table">
            <thead>
                <tr>
                    <th style="width: 5%;">No</th>
                    <th style="width: 45%;">Rincian</th>
                    <th style="width: 25%;">Lembaga Pendidikan, Penelitian, UMKM</th>
                    <th style="width: 25%;">Umum</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Pendaftaran Hak Cipta (Karya Seni, Karya Tulis, Audio Visual, Musik, Fotografi, Drama, Rekaman)</td>
                    <td>Rp 300.000</td>
                    <td>Rp 500.000</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Pendaftaran Hak Cipta berupa Aplikasi / Program Komputer</td>
                    <td>Rp 400.000</td>
                    <td>Rp 700.000</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Administrasi Layanan</td>
                    <td>Rp 300.000</td>
                    <td>Rp 300.000</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Pengalihan Hak</td>
                    <td>Rp 200.000</td>
                    <td>Rp 200.000</td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection