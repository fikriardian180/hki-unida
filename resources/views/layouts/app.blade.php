<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Sentra HKI UNIDA')</title>

    <!-- Google Fonts & FontAwesome -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&family=Slabo+27px&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Favicon icon -->
    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">

    <!-- CSS GLOBAL (NAVBAR, FOOTER, & LAYOUT UTAMA) -->
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
            background-color: #3B6B80;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 40px;
            color: white;
            position: relative;
            z-index: 10;
        }

        .brand {
            display: flex;
            align-items: center;
            font-family: 'Poppins', sans-serif;
            gap: 12px;
            font-size: 24px;
            font-weight: 700;
            letter-spacing: 0.5px;
        }

        /* Toggle Button Mobile (Hamburger) */
        .menu-toggle {
            display: none;
            background: none;
            border: none;
            color: white;
            font-size: 24px;
            cursor: pointer;
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
            font-size: 16px;
            font-weight: 500;
            padding: 6px 10px;
            display: flex;
            align-items: center;
            gap: 6px;
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

        /* Hover di Desktop */
        @media (min-width: 769px) {
            .nav-item:hover .dropdown-menu {
                display: block;
            }
        }

        /* --- MAIN CONTENT LAYOUT --- */
        .main-content {
            max-width: 1100px;
            margin: 40px auto;
            padding: 0 20px;
            min-height: 60vh;
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

        /* --- MEDIA QUERIES (TAMPILAN MOBILE / HP) --- */
        @media (max-width: 768px) {
            .navbar {
                padding: 15px 20px;
                flex-wrap: wrap;
            }

            .menu-toggle {
                display: block; /* Munculkan tombol ☰ */
            }

            .nav-menu {
                display: none; /* Sembunyikan menu bawaan */
                flex-direction: column;
                width: 100%;
                gap: 0;
                margin-top: 15px;
                background-color: #2c5263;
                border-radius: 6px;
                overflow: hidden;
            }

            .nav-menu.active {
                display: flex; /* Muncul saat tombol ☰ diklik */
            }

            .nav-item {
                width: 100%;
                border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            }

            .nav-link {
                padding: 12px 16px;
                justify-content: space-between;
                width: 100%;
            }

            .dropdown-menu {
                position: static;
                box-shadow: none;
                background-color: #244351;
                border-radius: 0;
                padding: 0;
            }

            .dropdown-menu.show {
                display: block;
            }

            .dropdown-menu li a {
                padding: 10px 24px;
            }

            .hero-banner {
                width: 100%;
                height: auto;
            }
        }
    </style>

    <!-- Tempat CSS Khusus per Halaman -->
    @stack('styles')
</head>
<body>

    <!-- NAVBAR GLOBAL -->
    <nav class="navbar">
        <div class="brand">
            <span>SENTRA HKI UNIDA</span>
        </div>

        <!-- Tombol Hamburger Mobile -->
        <button class="menu-toggle" id="menuToggle" aria-label="Toggle Menu">
            <i class="fa-solid fa-bars"></i>
        </button>

        <ul class="nav-menu" id="navMenu">
            <li class="nav-item">
                <a class="nav-link dropdown-toggle" href="/">Home <i class="fa-solid fa-chevron-down"></i></a>
                <ul class="dropdown-menu">
                    <li><a href="/">Beranda Utama</a></li>
                    <li><a href="/sejarah">Sejarah HKI UNIDA Gontor</a></li>
                </ul>
            </li>

            <li class="nav-item">
                <a class="nav-link dropdown-toggle" href="/pengertian">Pengertian <i class="fa-solid fa-chevron-down"></i></a>
                <ul class="dropdown-menu">
                    <li><a href="/pengertian-hak-cipta">Hak Cipta</a></li>
                    <li><a href="/pengertian-paten">Paten</a></li>
                    <li><a href="/pengertian-merek">Merek</a></li> 
                </ul>
            </li>

            <li class="nav-item">
                <a class="nav-link dropdown-toggle" href="/pendaftaran">Pendaftaran <i class="fa-solid fa-chevron-down"></i></a>
                <ul class="dropdown-menu">
                    <li><a href="/formulir-pendaftaran">Form Pendaftaran</a></li>
                    <li><a href="/template-formulir">Template Forms</a></li>
                </ul>
            </li>

            <li class="nav-item">
                <a class="nav-link dropdown-toggle" href="/syarat-ketentuan">Syarat & Ketentuan <i class="fa-solid fa-chevron-down"></i></a>
                <ul class="dropdown-menu">
                    <li><a href="/syarat-ketentuan-hak-cipta">Hak Cipta</a></li>
                    <li><a href="/syarat-ketentuan-paten">Paten</a></li>
                    <li><a href="/syarat-ketentuan-merek">Merek</a></li>
                </ul>
            </li>
        </ul>
    </nav>

    <!-- KONTEN HALAMAN -->
    <main class="main-content">
        @yield('content')
    </main>

    <!-- FOOTER GLOBAL -->
    <footer class="footer">
        <div class="footer-container">
            <div class="footer-col">
                <h3>Sentra HKI UNIDA</h3>
                <p>Lembaga Layanan Hak Kekayaan Intelektual Universitas Darussalam Gontor.</p>
                <div class="social-links">
                    <a href="#"><i class="fa-brands fa-facebook"></i></a>
                    <a href="https://www.instagram.com/hki_unida_gontor/"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#"><i class="fa-brands fa-youtube"></i></a>
                </div>
            </div>

            <div class="footer-col">
                <h3>Tautan Cepat</h3>
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="/pengertian-hak-cipta">Pengertian HKI</a></li>
                    <li><a href="/formulir-pendaftaran">Pendaftaran HKI</a></li>
                    <li><a href="/sejarah">Sejarah UNIDA</a></li>
                </ul>
            </div>

            <div class="footer-col">
                <h3>Kontak Kami</h3>
                <p><i class="fa-solid fa-location-dot"></i> Jl. Raya Siman No. Km. 5, Siman, Ponorogo, Jawa Timur 63471</p>
                <p><i class="fa-solid fa-envelope"></i> hki@unida.gontor.ac.id</p>
                <p><i class="fa-solid fa-phone"></i> 0857-0858-3094</p>
            </div>
        </div>

        <div class="footer-bottom">
            <p>&copy; 2026 Sentra HKI UNIDA Gontor. All Rights Reserved.</p>
        </div>
    </footer>

    <!-- SCRIPT JAVASCRIPT NAVBAR MOBILE -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const menuToggle = document.getElementById('menuToggle');
            const navMenu = document.getElementById('navMenu');
            const dropdownToggles = document.querySelectorAll('.dropdown-toggle');

            // Toggle Hamburger Menu di HP
            menuToggle.addEventListener('click', function() {
                navMenu.classList.toggle('active');
            });

            // Toggle Submenu Dropdown di HP
            dropdownToggles.forEach(toggle => {
                toggle.addEventListener('click', function(e) {
                    if (window.innerWidth <= 768) {
                        e.preventDefault();
                        const dropdown = this.nextElementSibling;
                        dropdown.classList.toggle('show');
                    }
                });
            });
        });
    </script>

    <!-- Tempat Script JS Khusus per Halaman -->
    @stack('scripts')
</body>
</html>