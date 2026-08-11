<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SENTRA HKI UNIDA</title>

    <!-- Google Font & FontAwesome untuk icon pencarian -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&family=Slabo+27px&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
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

        /* --- HERO BANNER SKew EFFECT --- */
        .hero-banner {
            position: relative;
            height: 260px;
            display: flex;
            overflow: hidden;
            background-color: #1a1a1a;
        }

        .banner-segment {
            height: 100%;
            position: relative;
            background-size: cover;
            background-position: center;
        }

        /* Segment Kiri (Gedung Utama + Logo HKI) */
        .segment-1 {
            width: 65%;
            background-image: url('https://unida.gontor.ac.id/wp-content/uploads/2021/01/Gedung-Utama-UNIDA.jpg');
            clip-path: polygon(0 0, 100% 0, 85% 100%, 0% 100%);
            z-index: 1;
        }

        /* Segment Kanan (Gedung Samping/Asrama) */
        .segment-2 {
            width: 45%;
            margin-left: -10%;
            background-image: url('https://unida.gontor.ac.id/wp-content/uploads/2020/09/UNIDA-Gontor-1.jpg');
            clip-path: polygon(15% 0, 100% 0, 100% 100%, 0% 100%);
        }

        /* Overlay Logo HKI di tengah Banner */
        .center-logo-overlay {
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            z-index: 4;
            height: 140px;
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

        .description {
            font-size: 15px;
            color: #555555;
            line-height: 1.6;
        }
    </style>
</head>
<body>

    <!-- NAVBAR HEADER -->
    <!-- NAVBAR HEADER -->
    <nav class="navbar">
        <div class="brand">
            <!-- Tempatkan Logo HKI UNIDA jika ada -->
            <span>SENTRA HKI UNIDA</span>
        </div>

        <!-- SEMUA MENU DIGABUNG DALAM 1 TAG UL -->
        <ul class="nav-menu">
            <li class="nav-item">
                <a class="nav-link">Home <i class="fa-solid font-size-xs fa-chevron-down"></i></a>
                <ul class="dropdown-menu">
                    <li><a href="#">Sejarah HKI UNIDA Gontor</a></li>
                </ul>
            </li>

            <li class="nav-item">
                <a class="nav-link">Pengertian <i class="fa-solid font-size-xs fa-chevron-down"></i></a>
                <ul class="dropdown-menu">
                    <li><a href="#">Hak Cipta</a></li>
                    <li><a href="#">Paten</a></li>
                    <li><a href="#">Merek</a></li> 
                </ul>
            </li>

            <li class="nav-item">
                <a class="nav-link">Pendaftaran <i class="fa-solid fa-chevron-down"></i></a>
                <ul class="dropdown-menu">
                    <li><a href="#">Form Pendaftaran</a></li>
                    <li><a href="#">Template Forms</a></li>
                </ul>
            </li>

            <li class="nav-item">
                <a class="nav-link">Syarat & Ketentuan <i class="fa-solid fa-chevron-down"></i></a>
                <ul class="dropdown-menu">
                    <li><a href="#">Hak Cipta</a></li>
                    <li><a href="#">Paten</a></li>
                    <li><a href="#">Merek</a></li>
                </ul>
            </li>
        </ul>
    </nav>

     <!-- KONTEN UTAMA HALAMAN -->
    <main class="main-content">
        <h1 class="page-title">Formulir Pendaftaran Kekayaan Intelektual (HKI)</h1>
        
        <p class="description">
            Silakan isi formulir daring (<em>online</em>) di bawah ini dengan data yang sebenar-benarnya. 
            Sebelum mengisi, pastikan Bapak/Ibu sudah mengunduh berkas <em>template</em> surat pernyataan 
            di menu Pusat Unduhan dan telah menandatanganinya.
        </p>
    </main>

    <!-- JAVASCRIPT UNTUK INTERAKSI PENCARIAN -->
    <script>
        document.getElementById('searchBtn').addEventListener('click', function() {
            let searchQuery = prompt("Masukkan kata kunci pencarian:");
            if(searchQuery) {
                alert("Mencari: " + searchQuery);
            }
        });
    </script>
</body>
</html>