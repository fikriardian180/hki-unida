<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Sentra HKI UNIDA')</title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">

    <!-- Bootstrap 5, Bootstrap Icons & FontAwesome -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- AOS Animation -->
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">

    <style>
        :root {
            --clr-primary: #3B6B80;       /* Warna Teal Utama Sentra HKI UNIDA */
            --clr-primary-dark: #2c5263;
            --clr-accent: #F59E0B;        /* Emas Aksen */
            --clr-bg: #F8FAFC;
            --clr-dark: #0B1220;
            --clr-text: #1E293B;
            --clr-muted: #64748B;
            --radius-lg: 20px;
            --radius-md: 14px;
            --shadow-soft: 0 12px 32px rgba(15, 23, 42, 0.06);
        }

        body {
            font-family: 'Inter', sans-serif;
            color: var(--clr-text);
            background-color: var(--clr-bg);
            overflow-x: hidden;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        main { flex: 1; }

        h1, h2, h3, h4, h5, h6, .font-display {
            font-family: 'Plus Jakarta Sans', sans-serif;
        }

        /* --- NAVBAR MODERN --- */
        .navbar-hw {
            padding: 1.15rem 0;
            transition: all 0.3s ease;
            background: rgba(255, 255, 255, 0.92);
            backdrop-filter: blur(12px);
            border-bottom: 1px solid rgba(59, 107, 128, 0.08);
        }
        .navbar-hw.scrolled {
            background: #ffffff;
            border-bottom: 1px solid rgba(59, 107, 128, 0.1);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.06);
            padding: 0.7rem 0;
        }
        .hw-logo {
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-weight: 800;
            font-size: 1.30rem;
            color: var(--clr-primary-dark);
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 10px;
        }
        .hw-logo img {
            height: 60px;
            width: auto;
        }
        .hw-logo .dot { color: var(--clr-accent); }

        .nav-hw .nav-link {
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-weight: 600;
            font-size: 0.94rem;
            color: var(--clr-text);
            padding: 0.5rem 0.95rem !important;
            transition: color 0.2s;
        }
        .nav-hw .nav-link:hover,
        .nav-hw .nav-link:focus {
            color: var(--clr-primary);
        }

        /* Dropdown Bootstrap Styled */
        .nav-hw .dropdown-menu {
            border: none;
            border-radius: 14px;
            box-shadow: 0 12px 30px rgba(15, 23, 42, 0.12);
            padding: 0.5rem;
            margin-top: 0.5rem;
        }
        .nav-hw .dropdown-item {
            font-size: 0.9rem;
            font-weight: 500;
            color: var(--clr-text);
            border-radius: 8px;
            padding: 0.55rem 1rem;
            transition: all 0.2s;
        }
        .nav-hw .dropdown-item:hover {
            background-color: rgba(59, 107, 128, 0.1);
            color: var(--clr-primary);
        }

        /* Hover dropdown otomatis di Desktop */
        @media (min-width: 992px) {
            .nav-hw .dropdown:hover .dropdown-menu {
                display: block;
                margin-top: 0;
            }
        }

        /* Perbaikan Tampilan Navbar di HP / Tablet */
        @media (max-width: 991.98px) {
            .navbar-collapse {
                background: #ffffff;
                margin-top: 0.75rem;
                padding: 1rem;
                border-radius: 16px;
                box-shadow: 0 16px 36px rgba(15, 23, 42, 0.12);
                border: 1px solid #E2E8F0;
                max-height: 80vh;
                overflow-y: auto;
            }
            .nav-hw .nav-item {
                border-bottom: 1px solid #F1F5F9;
            }
            .nav-hw .nav-item:last-child {
                border-bottom: none;
            }
            .nav-hw .nav-link {
                display: flex;
                justify-content: space-between;
                align-items: center;
                padding: 0.75rem 0.5rem !important;
            }
            .dropdown-arrow {
                padding: 6px 12px;
                background: #F1F5F9;
                border-radius: 8px;
                transition: transform 0.25s ease;
            }
            .dropdown-arrow.rotated {
                transform: rotate(180deg);
                background: rgba(59, 107, 128, 0.15);
                color: var(--clr-primary);
            }
            .nav-hw .dropdown-menu {
                box-shadow: none;
                background: #F8FAFC;
                margin-top: 0;
                margin-bottom: 0.5rem;
                padding: 0.35rem;
            }
        }

        /* --- BUTTONS --- */
        .btn-hw-primary {
            background: var(--clr-primary);
            color: #fff;
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-weight: 600;
            font-size: 0.92rem;
            padding: 0.65rem 1.4rem;
            border-radius: 50px;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            border: none;
            transition: all 0.25s ease;
            box-shadow: 0 8px 20px rgba(59, 107, 128, 0.25);
        }
        .btn-hw-primary:hover {
            background: var(--clr-primary-dark);
            color: #fff;
            transform: translateY(-2px);
        }
        .btn-hw-outline {
            background: #fff;
            color: var(--clr-text);
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-weight: 600;
            font-size: 0.92rem;
            padding: 0.65rem 1.4rem;
            border-radius: 50px;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            border: 1px solid #CBD5E1;
            transition: all 0.25s ease;
        }
        .btn-hw-outline:hover {
            border-color: var(--clr-primary);
            color: var(--clr-primary);
        }

        /* --- SHARED COMPONENTS & SUB-PAGES --- */
        .eyebrow {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            background: rgba(59, 107, 128, 0.12);
            color: var(--clr-primary);
            font-weight: 600;
            font-size: 0.85rem;
            padding: 6px 14px;
            border-radius: 50px;
        }
        .section-pad { padding: 80px 0; }
        .section-title { font-weight: 800; color: var(--clr-dark); }
        .section-sub { color: var(--clr-muted); line-height: 1.7; }

        /* Kompatibilitas Halaman Sub-Konten Lama (.main-content & .page-title) */
        .main-content {
            max-width: 1140px;
            margin: 110px auto 50px;
            padding: 0 20px;
            min-height: 60vh;
        }
        .page-title {
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-size: clamp(1.75rem, 3vw, 2.35rem);
            color: var(--clr-primary);
            font-weight: 800;
            border-bottom: 2px solid #E2E8F0;
            padding-bottom: 14px;
            margin-bottom: 24px;
            line-height: 1.25;
        }

        .card-hw {
            background: #fff;
            border-radius: var(--radius-lg);
            border: 1px solid #F1F5F9;
            box-shadow: var(--shadow-soft);
            transition: transform 0.25s ease, box-shadow 0.25s ease;
            height: 100%;
        }
        .card-hw:hover {
            transform: translateY(-5px);
            box-shadow: 0 18px 36px rgba(15, 23, 42, 0.09);
        }
        .icon-box {
            width: 52px;
            height: 52px;
            border-radius: 14px;
            background: rgba(59, 107, 128, 0.12);
            color: var(--clr-primary);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.4rem;
            margin-bottom: 1.25rem;
        }

        /* --- FOOTER MODERN --- */
        .footer-hw {
            background: var(--clr-dark);
            color: #94A3B8;
            padding: 4.5rem 0 2rem;
            margin-top: auto;
        }
        .footer-hw h6 {
            color: #fff;
            font-weight: 700;
            margin-bottom: 1.2rem;
            position: relative;
            padding-bottom: 8px;
        }
        .footer-hw h6::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            width: 32px;
            height: 2px;
            background: var(--clr-accent);
        }
        .footer-hw ul { list-style: none; padding: 0; }
        .footer-hw ul li { margin-bottom: 0.65rem; }
        .footer-link {
            color: #94A3B8;
            text-decoration: none;
            transition: color 0.2s;
            display: inline-flex;
            align-items: center;
            gap: 6px;
        }
        .footer-link:hover { color: #fff; }
        .footer-social {
            display: flex;
            gap: 10px;
            margin-top: 1.25rem;
        }
        .footer-social a {
            width: 38px;
            height: 38px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.08);
            color: #fff;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            transition: all 0.2s;
        }
        .footer-social a:hover {
            background: var(--clr-primary);
            transform: translateY(-2px);
        }
    </style>

    <!-- Tempat CSS Khusus per Halaman -->
    @stack('styles')
</head>
<body>

    <!-- NAVBAR GLOBAL -->
    <nav class="navbar navbar-expand-lg navbar-hw fixed-top" id="mainNav">
        <div class="container">
            <a class="hw-logo" href="{{ url('/') }}">
                <img src="{{ asset('images/logo-hki.png') }}" alt="Logo Sentra HKI UNIDA">
                <span>Sentra HKI <span class="dot">UNIDA</span></span>
            </a>

            <!-- Tombol Hamburger Murni Bootstrap 5 -->
            <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu" aria-controls="navMenu" aria-expanded="false" aria-label="Toggle Menu">
                <i class="bi bi-list fs-1 text-dark"></i>
            </button>

            <div class="collapse navbar-collapse" id="navMenu">
                <ul class="navbar-nav nav-hw mx-auto mt-2 mt-lg-0">
                    <!-- Home Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="{{ url('/') }}">
                            <span>Home</span>
                            <i class="bi bi-chevron-down small dropdown-arrow"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ url('/') }}">Beranda Utama</a></li>
                            <li><a class="dropdown-item" href="{{ url('/sejarah') }}">Sejarah HKI UNIDA Gontor</a></li>
                        </ul>
                    </li>

                    <!-- Pengertian Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="{{ url('/pengertian') }}">
                            <span>Pengertian</span>
                            <i class="bi bi-chevron-down small dropdown-arrow"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ url('/pengertian-hak-cipta') }}">Hak Cipta</a></li>
                            <li><a class="dropdown-item" href="{{ url('/pengertian-paten') }}">Paten</a></li>
                            <li><a class="dropdown-item" href="{{ url('/pengertian-merek') }}">Merek</a></li>
                        </ul>
                    </li>

                    <!-- Pendaftaran Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="{{ url('/pendaftaran') }}">
                            <span>Pendaftaran</span>
                            <i class="bi bi-chevron-down small dropdown-arrow"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ url('/formulir-pendaftaran') }}">Form Pendaftaran</a></li>
                            <li><a class="dropdown-item" href="{{ url('/template-formulir') }}">Template Forms</a></li>
                            <li><a class="dropdown-item" href="{{ url('/cek-status') }}">Cek Status Pendaftaran</a></li>
                        </ul>
                    </li>

                    <!-- Syarat & Ketentuan Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="{{ url('/syarat-ketentuan') }}">
                            <span>Syarat &amp; Ketentuan</span>
                            <i class="bi bi-chevron-down small dropdown-arrow"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ url('/syarat-ketentuan-hak-cipta') }}">Hak Cipta</a></li>
                            <li><a class="dropdown-item" href="{{ url('/syarat-ketentuan-paten') }}">Paten</a></li>
                            <li><a class="dropdown-item" href="{{ url('/syarat-ketentuan-merek') }}">Merek</a></li>
                        </ul>
                    </li>
                </ul>

                <!-- Tombol Aksi Kanan -->
                <div class="d-flex flex-column flex-lg-row gap-2 mt-3 mt-lg-0">
                    <a href="{{ url('/cek-status') }}" class="btn-hw-outline justify-content-center">Cek Status</a>
                    <a href="{{ url('/formulir-pendaftaran') }}" class="btn-hw-primary justify-content-center">Ajukan HKI <i class="bi bi-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </nav>

    <!-- KONTEN HALAMAN -->
    @hasSection('fullwidth_content')
        <main>
            @yield('fullwidth_content')
        </main>
    @else
        <main class="main-content">
            @yield('content')
        </main>
    @endif

    <!-- FOOTER GLOBAL -->
    <footer class="footer-hw">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4">
                    <a class="hw-logo text-white" href="{{ url('/') }}">
                        <img src="{{ asset('images/logo-hki.png') }}" alt="Logo Sentra HKI UNIDA">
                        <span>Sentra HKI <span class="dot">UNIDA</span></span>
                    </a>
                    <p class="mt-3 small lh-lg">
                        Lembaga Layanan Hak Kekayaan Intelektual Universitas Darussalam Gontor. Memfasilitasi pendaftaran Hak Cipta, Paten, dan Merek civitas akademika.
                    </p>
                    <div class="footer-social">
                        <a href="https://www.tiktok.com/@hkiunidagontor" target="_blank" rel="noopener" aria-label="Tiktok"><i class="fa-brands fa-tiktok"></i></a>
                        <a href="https://www.instagram.com/hki_unida_gontor/" target="_blank" rel="noopener" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
                    </div>
                </div>

                <div class="col-6 col-lg-2">
                    <h6>Tautan Cepat</h6>
                    <ul class="small">
                        <li><a class="footer-link" href="{{ url('/') }}"><i class="bi bi-chevron-right"></i> Home</a></li>
                        <li><a class="footer-link" href="{{ url('/pengertian-hak-cipta') }}"><i class="bi bi-chevron-right"></i> Pengertian HKI</a></li>
                        <li><a class="footer-link" href="{{ url('/formulir-pendaftaran') }}"><i class="bi bi-chevron-right"></i> Pendaftaran HKI</a></li>
                        <li><a class="footer-link" href="{{ url('/sejarah') }}"><i class="bi bi-chevron-right"></i> Sejarah UNIDA</a></li>
                    </ul>
                </div>

                <div class="col-6 col-lg-2">
                    <h6>Layanan</h6>
                    <ul class="small">
                        <li><a class="footer-link" href="{{ url('/syarat-ketentuan-hak-cipta') }}"><i class="bi bi-chevron-right"></i> Hak Cipta</a></li>
                        <li><a class="footer-link" href="{{ url('/syarat-ketentuan-paten') }}"><i class="bi bi-chevron-right"></i> Paten</a></li>
                        <li><a class="footer-link" href="{{ url('/syarat-ketentuan-merek') }}"><i class="bi bi-chevron-right"></i> Merek</a></li>
                        <li><a class="footer-link" href="{{ url('/template-formulir') }}"><i class="bi bi-chevron-right"></i> Template Forms</a></li>
                    </ul>
                </div>

                <div class="col-lg-4">
                    <h6>Kontak Kami</h6>
                    <p class="small mb-2 d-flex gap-2">
                        <i class="fa-solid fa-location-dot mt-1 text-warning"></i>
                        <span>Jl. Raya Siman No. Km. 5, Siman, Ponorogo, Jawa Timur 63471</span>
                    </p>
                    <p class="small mb-2 d-flex gap-2">
                        <i class="fa-solid fa-envelope mt-1 text-warning"></i>
                        <span>hki@unida.gontor.ac.id</span>
                    </p>
                    <p class="small mb-0 d-flex gap-2">
                        <i class="fa-solid fa-phone mt-1 text-warning"></i>
                        <span>0857-0858-3094</span>
                    </p>
                </div>
            </div>

            <hr class="border-secondary my-4">
            <div class="text-center small">
                &copy; {{ date('Y') }} Sentra HKI UNIDA Gontor. All Rights Reserved. <strong>v1.2.4</strong>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init({ duration: 800, easing: 'ease-out-cubic', once: true });

        // Efek Navbar Scroll
        const nav = document.getElementById('mainNav');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 40) nav.classList.add('scrolled');
            else nav.classList.remove('scrolled');
        });

        // Hover Dropdown di Desktop (>= 992px)
        document.querySelectorAll('.nav-hw .dropdown').forEach(dropdown => {
            dropdown.addEventListener('mouseenter', () => {
                if (window.innerWidth >= 992) {
                    const menu = dropdown.querySelector('.dropdown-menu');
                    if (menu) menu.classList.add('show');
                }
            });
            dropdown.addEventListener('mouseleave', () => {
                if (window.innerWidth >= 992) {
                    const menu = dropdown.querySelector('.dropdown-menu');
                    if (menu) menu.classList.remove('show');
                }
            });
        });

        // Klik Ikon Panah (.dropdown-arrow) di HP (< 992px) untuk buka/tutup submenu tanpa memblokir link
        document.querySelectorAll('.dropdown-arrow').forEach(arrow => {
            arrow.addEventListener('click', function(e) {
                if (window.innerWidth < 992) {
                    e.preventDefault();
                    e.stopPropagation();
                    const menu = this.closest('.dropdown').querySelector('.dropdown-menu');
                    if (menu) {
                        menu.classList.toggle('show');
                        this.classList.toggle('rotated');
                    }
                }
            });
        });
    </script>

    <!-- Tempat Script JS Khusus per Halaman -->
    @stack('scripts')
</body>
</html>