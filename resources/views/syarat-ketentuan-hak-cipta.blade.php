@extends('layouts.app')

@section('title', 'Syarat & Ketentuan Hak Cipta - Sentra HKI UNIDA Gontor')

@push('styles')
<style>
    /* CSS Khusus Halaman Syarat & Ketentuan Hak Cipta */
    .lead-description {
        font-size: 15px;
        color: #334155;
        line-height: 1.7;
        text-align: justify;
        margin-bottom: 25px;
        background-color: #f8fafc;
        border-left: 5px solid #3B6B80;
        padding: 18px 22px;
        border-radius: 0 8px 8px 0;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.03);
        word-wrap: break-word;
    }

    .terms-card {
        background-color: #ffffff;
        border: 1px solid #e2e8f0;
        border-radius: 8px;
        padding: 22px 25px;
        margin-bottom: 20px;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.03);
        transition: box-shadow 0.2s ease, transform 0.2s ease;
        box-sizing: border-box;
    }

    .terms-card:hover {
        box-shadow: 0 6px 14px rgba(0, 0, 0, 0.06);
        transform: translateY(-2px);
    }

    .terms-title {
        font-size: 18px;
        font-weight: 700;
        color: #1e293b;
        margin-bottom: 12px;
        display: flex;
        align-items: center;
        gap: 12px;
        line-height: 1.4;
    }

    .terms-title i {
        color: #3B6B80;
        font-size: 20px;
        flex-shrink: 0;
    }

    .sub-intro {
        font-size: 14.5px;
        color: #475569;
        margin-bottom: 12px;
        line-height: 1.6;
    }

    .custom-list {
        margin-left: 20px;
        padding-left: 5px;
        margin-bottom: 0;
    }

    .custom-list li {
        margin-bottom: 10px;
        color: #475569;
        line-height: 1.6;
        font-size: 14.5px;
    }

    .custom-list li:last-child {
        margin-bottom: 0;
    }

    .custom-list strong {
        color: #1e293b;
    }

    /* MEDIA QUERY RESPONSIF UNTUK MOBILITY (HP/TABLET) */
    @media (max-width: 768px) {
        .lead-description {
            font-size: 14px;
            text-align: left;
            padding: 15px;
        }

        .terms-card {
            padding: 18px 15px;
            margin-bottom: 15px;
        }

        .terms-title {
            font-size: 16px;
            gap: 10px;
        }

        .terms-title i {
            font-size: 18px;
        }

        .sub-intro {
            font-size: 13.5px;
        }

        .custom-list {
            margin-left: 15px;
            padding-left: 0;
        }

        .custom-list li {
            font-size: 13.5px;
            margin-bottom: 8px;
        }
    }
</style>
@endpush

@section('content')
    <h1 class="page-title">Syarat & Ketentuan Hak Cipta</h1>

    <div class="lead-description">
        Setiap pemohon (Pencipta) yang mengajukan permohonan fasilitasi pendaftaran Hak Cipta melalui Sentra HKI Universitas Darussalam Gontor <strong>wajib memahami dan menyetujui ketentuan khusus di bawah ini:</strong>
    </div>

    <!-- Poin 1 -->
    <div class="terms-card">
        <h2 class="terms-title"><i class="fa-solid fa-shapes"></i> 1. Ruang Lingkup Karya yang Dapat Diajukan</h2>
        <p class="sub-intro">Sentra HKI UNIDA Gontor memfasilitasi pendaftaran Hak Cipta di bidang ilmu pengetahuan, seni, dan sastra yang dihasilkan oleh civitas akademika, meliputi:</p>
        <ul class="custom-list">
            <li><strong>Karya Tulis:</strong> Buku, monograf, modul perkuliahan, jurnal ilmiah, artikel, draf kuliah, novel, dan booklet.</li>
            <li><strong>Karya Seni:</strong> Kaligrafi, lukisan, seni batik, seni dekoratif, gambar, dan desain grafis/logo.</li>
            <li><strong>Karya Audio Visual & Musik:</strong> Video pembelajaran, film dokumenter (sinematografi), aransemen musik, dan lagu.</li>
            <li><strong>Karya Berbasis Teknologi:</strong> Program komputer (software/aplikasi), database, dan sistem digital.</li>
        </ul>
    </div>

    <!-- Poin 2 -->
    <div class="terms-card">
        <h2 class="terms-title"><i class="fa-solid fa-shield-halved"></i> 2. Jaminan Orisinalitas & Larangan Plagiasi</h2>
        <ul class="custom-list">
            <li>Pemohon menjamin sepenuhnya bahwa karya yang dideklarasikan adalah <strong>karya asli hasil kreativitas mandiri</strong>, bukan merupakan plagiasi, saduran ilegal, atau tiruan dari karya milik orang lain.</li>
            <li>Jika karya merupakan hasil adaptasi, penerjemahan, atau pengembangan dari karya yang sudah ada, pemohon wajib <strong>menyertakan bukti izin tertulis atau lisensi</strong> dari pemegang hak cipta karya asli tersebut.</li>
        </ul>
    </div>

    <!-- Poin 3 -->
    <div class="terms-card">
        <h2 class="terms-title"><i class="fa-solid fa-scale-balanced"></i> 3. Kepemilikan Hak (Hak Moral vs Hak Ekonomi)</h2>
        <p class="sub-intro">Sesuai dengan regulasi internal universitas dan UU Hak Cipta yang berlaku:</p>
        <ul class="custom-list">
            <li><strong>Hak Moral:</strong> Nama pencipta (Dosen/Mahasiswa/Peneliti) akan tetap melekat selamanya pada karya tersebut dan tercantum di dalam Sertifikat resmi DJKI. Hak moral tidak dapat dialihkan atau dihapus.</li>
            <li><strong>Hak Ekonomi (Khusus Karya Afiliasi Kampus):</strong> Untuk karya riset yang didanai oleh internal/eksternal universitas, dibuat menggunakan fasilitas laboratorium kampus, atau ditujukan untuk kepentingan akreditasi institusi, Hak Ekonomi dialihkan kepada Universitas Darussalam Gontor. Pemohon wajib menandatangani Surat Pengalihan Hak Cipta di atas meterai Rp 10.000.</li>
        </ul>
    </div>

    <!-- Poin 4 -->
    <div class="terms-card">
        <h2 class="terms-title"><i class="fa-solid fa-file-arrow-up"></i> 4. Ketentuan Pengiriman Berkas & Contoh Ciptaan</h2>
        <ul class="custom-list">
            <li>Pemohon wajib mengunggah contoh ciptaan (file karya asli) dengan kualitas digital yang bersih dan jelas (tidak buram/rusak) sesuai dengan format yang diminta pada sistem pendaftaran online.</li>
            <li>Untuk karya buku/modul, pemohon wajib menyertakan halaman cover, kata pengantar, daftar isi, dan isi naskah yang utuh dalam format PDF tunggal.</li>
            <li>Untuk program komputer, pemohon wajib melampirkan draf source code (kode sumber) beserta manual penggunaan (user manual) aplikasi tersebut dalam format PDF/ZIP.</li>
        </ul>
    </div>

    <!-- Poin 5 -->
    <div class="terms-card">
        <h2 class="terms-title"><i class="fa-solid fa-certificate"></i> 5. Proses Perlindungan Hukum & Penerbitan Sertifikat</h2>
        <ul class="custom-list">
            <li>Sistem pendaftaran Hak Cipta nasional menggunakan skema deklaratif (e-HakCipta). Sentra HKI UNIDA Gontor akan mendaftarkan berkas yang telah lolos verifikasi internal ke sistem resmi Direktorat Jenderal Kekayaan Intelektual (DJKI) Kemenkumham RI.</li>
            <li>Pelindungan Hak Cipta resmi timbul secara otomatis sejak ciptaan tersebut diwujudkan secara nyata dan dideklarasikan ke dalam sistem kenegaraan. Surat Pencatatan Ciptaan biasanya akan terbit dalam waktu 1-2 hari kerja setelah admin melakukan pendaftaran dan pembayaran PNBP, sepanjang tidak ada sanggahan atau kendala teknis pada sistem pusat DJKI.</li>
        </ul>
    </div>
@endsection