@extends('layouts.app')

@section('title', 'Pengertian Paten')

@push('styles')
<style>
    /* CSS Khusus Halaman Paten */
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

    .patent-sub-card {
        background-color: #f8fafc;
        border: 1px solid #e2e8f0;
        border-radius: 8px;
        padding: 20px;
        margin-bottom: 20px;
    }

    .patent-sub-title {
        font-size: 17px;
        font-weight: 700;
        color: #1e293b;
        margin-bottom: 10px;
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
    <h1 class="page-title">Paten</h1>

    <h2 class="section-title">1. Definisi Paten</h2>
    <p class="description">
        Berdasarkan <strong>UU No. 13 Tahun 2016</strong> tentang Paten, <strong>Paten adalah</strong> hak eksklusif yang diberikan oleh negara kepada penemu (Inventor) atas hasil invensinya di bidang teknologi untuk jangka waktu tertentu dalam melaksanakan sendiri invensinya tersebut atau memberikan persetujuan kepada pihak lain untuk melaksanakannya.
    </p>
    <p class="description">
        <strong>Invensi</strong> adalah ide inventor yang dituangkan ke dalam suatu kegiatan pemecahan masalah yang spesifik di bidang teknologi, dapat berupa produk atau proses, atau penyempurnaan dan pengembangan produk atau proses.
    </p>

    <h2 class="section-title">2. Landasan Hukum</h2>
    <p class="description">
        Penyelenggaraan, pendaftaran, dan pelindungan hukum invensi teknologi dosen di lingkungan Universitas Darussalam Gontor mengacu pada regulasi nasional berikut:
    </p>
    <ul class="custom-list">
        <li><strong>Undang-Undang Nomor 13 Tahun 2016</strong> tentang Paten.</li>
        <li><strong>Undang-Undang Nomor 6 Tahun 2023</strong> tentang Penetapan Peraturan Pemerintah Pengganti Undang-Undang Nomor 2 Tahun 2022 tentang Cipta Kerja Menjadi Undang-Undang.</li>
        <li><strong>Undang-Undang Nomor 11 Tahun 2019</strong> tentang Sistem Nasional Ilmu Pengetahuan dan Teknologi.</li>
    </ul>

    <h2 class="section-title">3. Jangka Waktu & Perlindungan Paten</h2>
    <p class="description">
        Berbeda dengan Hak Cipta yang bersifat deklaratif, Paten menganut sistem <strong>First-to-File</strong> (siapa yang mendaftar pertama kali dan lolos pemeriksaan substantif, dia yang mendapat hak). Jangka waktu pelindungannya dihitung sejak <strong>Tanggal Penerimaan (Filing Date)</strong> dokumen:
    </p>
    <ul class="custom-list">
        <li><strong>Paten Biasa:</strong> Diberikan untuk jangka waktu <strong>20 tahun dan tidak dapat diperpanjang.</strong> Biasanya untuk invensi besar yang melibatkan kebaruan mendasar dan langkah inventif tinggi.</li>
        <li><strong>Paten Sederhana:</strong> Diberikan untuk jangka waktu <strong>10 tahun dan tidak dapat diperpanjang.</strong> Ditujukan untuk invensi berupa produk, alat, jalannya proses, atau komponen yang memiliki kegunaan praktis baru dari teknologi yang sudah ada.</li>
    </ul>

    <h2 class="section-title">4. Jenis Paten</h2>
    <p class="description">Di Indonesia, berdasarkan UU No. 13 Tahun 2016, Paten dibagi menjadi 2 jenis:</p>

    <div class="patent-sub-card">
        <h3 class="patent-sub-title">A. Paten (Biasa)</h3>
        <p class="description">
            Diberikan untuk invensi yang benar-benar baru, memiliki lompatan teknologi besar, dan melalui proses pemeriksaan yang sangat ketat di tingkat nasional maupun internasional.
        </p>
        <ul class="custom-list">
            <li>
                <strong>Syarat Utama:</strong>
                <ul style="margin-top: 5px;">
                    <li><strong>Baru (Novelty):</strong> Belum pernah diumumkan di media mana pun di dunia sebelum tanggal pengajuan.</li>
                    <li><strong>Langkah Inventif (Inventive Step):</strong> Tidak terduga bagi orang yang ahli di bidangnya.</li>
                    <li><strong>Dapat Diterapkan dalam Industri:</strong> Dapat diproduksi massal secara konsisten.</li>
                </ul>
            </li>
            <li><strong>Karakteristik Dokumen:</strong> Dapat memuat banyak klaim (fitur teknologi yang dilindungi bisa sangat kompleks).</li>
            <li><strong>Masa Perlindungan:</strong> 20 Tahun sejak filing date (tidak dapat diperpanjang).</li>
            <li><strong>Contoh Akademik:</strong> Penemuan formula vaksin baru, penemuan cip semi-konduktor generasi terbaru, atau algoritma pengolahan sinyal digital mutakhir.</li>
        </ul>
    </div>

    <div class="patent-sub-card">
        <h3 class="patent-sub-title">B. Paten Sederhana</h3>
        <p class="description">
            Ditujukan untuk invensi berupa produk, alat, komponen, atau jalannya proses yang mengalami pengembangan atau modifikasi dari teknologi yang sudah ada. Cocok untuk proyek teknologi tepat guna di kampus.
        </p>
        <ul class="custom-list">
            <li>
                <strong>Syarat Utama:</strong>
                <ul style="margin-top: 5px;">
                    <li><strong>Baru (Novelty).</strong></li>
                    <li><strong>Memiliki Kegunaan Praktis:</strong> Memiliki efisiensi atau fungsi baru dari alat terdahulu.</li>
                    <li><strong>Pemeriksaan Lebih Cepat:</strong> Tidak membutuhkan langkah inventif yang terlalu rumit.</li>
                </ul>
            </li>
            <li><strong>Karakteristik Dokumen:</strong> Hanya boleh memuat <strong>1 klaim mandiri</strong>.</li>
            <li><strong>Masa Perlindungan:</strong> 10 Tahun sejak filing date (tidak dapat diperpanjang).</li>
            <li><strong>Contoh Akademik:</strong> Modifikasi alat pengering padi menjadi bertenaga surya portabel, penyempurnaan desain mata pisau pencacah plastik hemat energi.</li>
        </ul>
    </div>

    <h2 class="section-title">5. Alur & Estimasi Waktu Pendaftaran</h2>
    <p class="description">
        Lama proses pengajuan berkas awal di Sentra HKI UNIDA Gontor berkisar antara <strong>7 hingga 30 hari kerja</strong>, bergantung pada kelengkapan dokumen persyaratan:
    </p>
    <ul class="custom-list">
        <li><strong>Tahap 1: Verifikasi Administratif (3–5 Hari Kerja):</strong> Pemeriksaan kelengkapan berkas fisik/digital oleh tim staf Sentra HKI.</li>
        <li><strong>Tahap 2: Revisi & Kelengkapan Berkas:</strong> Perbaikan dokumen oleh pemohon/dosen jika terdapat kekurangan.</li>
        <li><strong>Tahap 3: Pendaftaran ke DJKI (2–3 Hari Kerja):</strong> Pembayaran PNBP dan submit berkas resmi ke sistem DJKI Kemenkumham.</li>
        <li><strong>Tahap 4: Pemeriksaan Substantif DJKI:</strong> Memasuki fase pengumuman dan pemeriksaan substantif teknis oleh DJKI Pusat (membutuhkan waktu bulanan hingga tahunan).</li>
    </ul>

    <h2 class="section-title">6. Persyaratan Pencatatan Paten</h2>
    <p class="description">Dokumen dan data yang harus disiapkan oleh pemohon meliputi:</p>
    <ul class="custom-list">
        <li>Scan KTP Seluruh Inventor</li>
        <li>Biodata Lengkap Seluruh Inventor</li>
        <li>Judul Invensi (Bahasa Indonesia & Bahasa Inggris)</li>
        <li>Abstrak Invensi (Bahasa Indonesia & Bahasa Inggris)</li>
        <li>Deskripsi Lengkap Invensi (Bahasa Indonesia & Bahasa Inggris)</li>
        <li>Dokumen Klaim Paten</li>
        <li>Gambar Teknik Invensi (PDF/PNG)</li>
        <li>Surat Pernyataan Kepemilikan (Bermeterai)</li>
        <li>Surat Peralihan Hak atas Invensi (jika diajukan atas nama lembaga/universitas)</li>
        <li>Surat Keterangan UMKM / Akta Pendirian Lembaga (jika ada)</li>
        <li>Surat Kuasa (jika diajukan melalui konsultan HKI)</li>
    </ul>

    <h2 class="section-title">7. Biaya Pencatatan Paten (PP RI No. 28 Tahun 2019)</h2>
    <div class="table-responsive">
        <table class="custom-table">
            <thead>
                <tr>
                    <th style="width: 5%;">No</th>
                    <th style="width: 45%;">Rincian Layanan</th>
                    <th style="width: 25%;">Lembaga Pendidikan, Penelitian, UMKM</th>
                    <th style="width: 25%;">Umum</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Pendaftaran Paten Sederhana</td>
                    <td>Rp 350.000</td>
                    <td>Rp 950.000</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Penelusuran Paten</td>
                    <td>Rp 500.000</td>
                    <td>Rp 500.000</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Penyusunan Draf Paten</td>
                    <td>Rp 500.000</td>
                    <td>Rp 1.000.000</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Pemeriksaan Substantif</td>
                    <td>Rp 500.000</td>
                    <td>Rp 500.000</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Administrasi Kepengurusan Awal</td>
                    <td>Rp 750.000</td>
                    <td>Rp 750.000</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Biaya Per Klaim</td>
                    <td>Rp 75.000</td>
                    <td>Rp 75.000</td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>Penambahan Deskripsi (per lembar diatas 30 hal)</td>
                    <td>Rp 15.000</td>
                    <td>Rp 15.000</td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>Percepatan Pemeriksaan Substantif</td>
                    <td>Rp 400.000</td>
                    <td>Rp 400.000</td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>Pengajuan Banding Paten</td>
                    <td>Rp 3.000.000</td>
                    <td>Rp 3.000.000</td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>Pencatatan Perjanjian Lisensi</td>
                    <td>Rp 1.000.000</td>
                    <td>Rp 1.000.000</td>
                </tr>
                <tr>
                    <td>11</td>
                    <td>Biaya Pemeliharaan Tahun ke-6</td>
                    <td>Rp 1.700.000</td>
                    <td>Rp 1.750.000</td>
                </tr>
                <tr>
                    <td>12</td>
                    <td>Biaya Pemeliharaan Tahun ke-10</td>
                    <td>Rp 3.900.000</td>
                    <td>Rp 4.050.000</td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection