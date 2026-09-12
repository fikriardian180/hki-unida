@extends('layouts.app')

@section('title', 'Mengenal Kekayaan Intelektual - Sentra HKI UNIDA Gontor')

@push('styles')
<style>
    /* CSS Khusus Halaman Mengenal KI */
    .description-text {
        font-size: 15px;
        color: #475569;
        line-height: 1.7;
        text-align: justify;
        margin-bottom: 25px;
        word-wrap: break-word;
    }

    /* Welcome Card Flexbox */
    .welcome-card {
        background-color: #f8fafc;
        border-left: 5px solid #3B6B80;
        padding: 25px;
        border-radius: 0 8px 8px 0;
        margin-bottom: 25px;
        display: flex;
        align-items: center;
        gap: 25px;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.03);
    }

    .welcome-logo-wrap {
        flex-shrink: 0;
        width: 140px;
        text-align: center;
    }

    .welcome-logo-wrap img {
        width: 100%;
        height: auto;
        max-height: 130px;
        object-fit: contain;
        display: block;
        margin: 0 auto;
    }

    .welcome-content-wrap {
        flex: 1;
    }

    .page-heading {
        font-family: 'Slabo 27px', serif;
        font-size: 24px;
        color: #1e293b;
        margin-bottom: 10px;
        line-height: 1.3;
    }

    .welcome-card .description-text {
        margin-bottom: 0;
    }

    /* Cards Regime KI */
    .regime-card {
        background-color: #ffffff;
        border: 1px solid #e2e8f0;
        border-radius: 8px;
        padding: 25px;
        margin-bottom: 25px;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.04);
        transition: box-shadow 0.2s ease, transform 0.2s ease;
    }

    .regime-card:hover {
        box-shadow: 0 6px 16px rgba(0, 0, 0, 0.08);
        transform: translateY(-2px);
    }

    .regime-header {
        display: flex;
        align-items: center;
        gap: 12px;
        margin-bottom: 15px;
        border-bottom: 2px solid #f1f5f9;
        padding-bottom: 10px;
    }

    .regime-icon {
        font-size: 24px;
        color: #3B6B80;
    }

    .regime-title {
        font-size: 20px;
        font-weight: 700;
        color: #1e293b;
    }

    .info-list {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .info-list li {
        position: relative;
        padding-left: 20px;
        margin-bottom: 12px;
        font-size: 14px;
        color: #475569;
        line-height: 1.6;
    }

    .info-list li:last-child {
        margin-bottom: 0;
    }

    .info-list li::before {
        content: "•";
        color: #3B6B80;
        font-weight: bold;
        font-size: 18px;
        position: absolute;
        left: 4px;
        top: -1px;
    }

    .info-list strong {
        color: #1e293b;
    }

    /* MEDIA QUERY RESPONSIF UNTUK MOBILITY (HP/TABLET) */
    @media (max-width: 768px) {
        .welcome-card {
            flex-direction: column;
            text-align: center;
            padding: 20px 15px;
        }

        .welcome-logo-wrap {
            width: 100px;
        }

        .page-heading {
            font-size: 20px;
        }

        .description-text {
            font-size: 14px;
            text-align: left;
            line-height: 1.6;
        }

        .regime-card {
            padding: 18px 15px;
        }

        .regime-title {
            font-size: 18px;
        }

        .info-list li {
            font-size: 13.5px;
        }
    }
</style>
@endpush

@section('content')
    <h1 class="page-title">Mengenal Kekayaan Intelektual (KI)</h1>

    <!-- Welcome Card Header -->
    <div class="welcome-card">
        <div class="welcome-logo-wrap">
            <img src="{{ asset('images/gambar-ki.png') }}" alt="Ilustrasi Kekayaan Intelektual">
        </div>
        <div class="welcome-content-wrap">
            <h2 class="page-heading">Kekayaan Intelektual (KI)</h2>
            <p class="description-text">
                Kekayaan Intelektual (KI) adalah hak yang timbul dari hasil olah pikir otak manusia yang menghasilkan suatu produk atau proses yang berguna untuk manusia. Pada intinya, Kekayaan Intelektual adalah hak eksklusif yang diberikan oleh negara kepada kreator, pencipta, atau inventor atas hasil karya dan karsa kreativitasnya.
            </p>
        </div>
    </div>

    <p class="description-text">
        Kekayaan Intelektual merupakan aset tidak berwujud (<em>intangible asset</em>) yang memiliki nilai ekonomi tinggi. Di lingkungan perguruan tinggi seperti UNIDA Gontor, pelindungan KI menjadi bukti nyata dari orisinalitas riset sekaligus penghargaan atas reputasi akademik para dosen dan peneliti.
    </p>

    <!-- Rezim 1: Hak Cipta -->
    <div class="regime-card">
        <div class="regime-header">
            <i class="fa-solid fa-copyright regime-icon"></i>
            <h2 class="regime-title">1. Hak Cipta</h2>
        </div>
        <ul class="info-list">
            <li><strong>Pengertian:</strong> Hak eksklusif pencipta yang timbul secara otomatis berdasarkan prinsip deklaratif setelah suatu ciptaan diwujudkan dalam bentuk nyata tanpa mengurangi pembatasan sesuai ketentuan peraturan perundang-undangan.</li>
            <li><strong>Objek Perlindungan:</strong> Melindungi karya di bidang ilmu pengetahuan, seni, dan sastra.</li>
            <li><strong>Contoh di Kampus:</strong> Buku teks, jurnal ilmiah, monograf, modul perkuliahan, karya tulis, video pembelajaran (sinematografi), lagu/mars, seni kaligrafi, desain batik, hingga program komputer (software atau aplikasi).</li>
            <li><strong>Prinsip Hukum:</strong> Deklaratif (Perlindungan langsung aktif begitu karya berwujud nyata dan dipublikasikan, namun pencatatan di DJKI memperkuat bukti hukum mutlak).</li>
        </ul>
    </div>

    <!-- Rezim 2: Merek -->
    <div class="regime-card">
        <div class="regime-header">
            <i class="fa-solid fa-registered regime-icon"></i>
            <h2 class="regime-title">2. Merek (Trade Mark)</h2>
        </div>
        <ul class="info-list">
            <li><strong>Pengertian:</strong> Tanda yang dapat ditampilkan secara grafis berupa gambar, logo, nama, kata, huruf, angka, atau susunan warna untuk membedakan barang dan/atau jasa yang diproduksi oleh orang atau badan hukum dalam kegiatan perdagangan.</li>
            <li><strong>Objek Perlindungan:</strong> Melindungi identitas visual, nama, dan reputasi komersial dari sebuah produk atau jasa agar tidak ditiru oleh kompetitor.</li>
            <li><strong>Contoh di Kampus:</strong> Logo dan nama unit usaha pesantren/kampus (misalnya: Air Mineral UNIDA, produk herbal Laboratorium Farmasi, nama katering, roti buatan bakery kampus, atau jasa pelatihan bahasa).</li>
            <li><strong>Prinsip Hukum:</strong> First-to-File (Siapa yang mendaftar pertama kali di negara tersebut, dialah pemilik sah merek tersebut).</li>
        </ul>
    </div>

    <!-- Rezim 3: Paten -->
    <div class="regime-card">
        <div class="regime-header">
            <i class="fa-solid fa-lightbulb regime-icon"></i>
            <h2 class="regime-title">3. Paten</h2>
        </div>
        <ul class="info-list">
            <li><strong>Pengertian:</strong> Hak eksklusif yang diberikan oleh negara kepada inventor atas hasil invensinya di bidang teknologi, yang untuk selama waktu tertentu melaksanakan sendiri invensinya tersebut atau memberikan persetujuannya kepada pihak lain untuk melaksanakannya.</li>
            <li><strong>Objek Perlindungan:</strong> Solusi teknologi (alat, mesin, formula, atau proses metode baru) yang memecahkan masalah praktis di masyarakat atau industri.</li>
            <li><strong>Contoh di Kampus:</strong> Mesin tepat guna pertanian hasil riset Teknik Pertanian, formula suplemen herbal baru hasil riset Farmasi/Gizi, atau algoritma IoT baru sistem keamanan buatan Teknik Informatika.</li>
            <li><strong>Prinsip Hukum:</strong> Novelty (Invensi wajib benar-benar baru di dunia dan belum pernah dipublikasikan dalam bentuk jurnal atau prosiding sebelum tanggal pendaftaran paten dilakukan).</li>
        </ul>
    </div>
@endsection