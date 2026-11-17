@extends('layouts.app')

@section('title', 'Sentra HKI UNIDA Gontor — Beranda')

@push('styles')
<style>
    /* Hero Section */
    .hero {
        padding: 135px 0 80px;
        position: relative;
        background: radial-gradient(circle at top right, rgba(59, 107, 128, 0.12), transparent 50%),
                    radial-gradient(circle at bottom left, rgba(245, 158, 11, 0.08), transparent 45%);
    }
    .hero-title {
        font-size: clamp(2.1rem, 4vw, 3.1rem);
        font-weight: 800;
        line-height: 1.18;
        color: var(--clr-dark);
    }
    .accent-underline {
        position: relative;
        display: inline-block;
        color: var(--clr-primary);
    }
    .accent-underline svg {
        position: absolute;
        left: 0;
        bottom: -6px;
        width: 100%;
        height: 12px;
    }
    .hero-lead {
        font-size: 1.05rem;
        color: var(--clr-muted);
        line-height: 1.75;
    }
    .hero-media { position: relative; }
    .hero-media-frame {
        border-radius: 24px;
        overflow: hidden;
        box-shadow: 0 24px 50px rgba(15, 23, 42, 0.14);
        background: #E2E8F0;
        aspect-ratio: 4/3;
    }
    .hero-media-frame img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    .float-card {
        position: absolute;
        background: #fff;
        padding: 14px 18px;
        border-radius: 16px;
        box-shadow: 0 14px 30px rgba(15, 23, 42, 0.1);
        display: flex;
        align-items: center;
        gap: 12px;
    }
    .float-card-1 { bottom: 24px; left: -20px; }
    .float-card-2 { top: 24px; right: -20px; }
    .fc-icon {
        width: 42px;
        height: 42px;
        border-radius: 12px;
        background: rgba(59, 107, 128, 0.12);
        color: var(--clr-primary);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.25rem;
    }
    .fc-val { font-weight: 800; font-family: 'Plus Jakarta Sans', sans-serif; font-size: 1.05rem; color: var(--clr-dark); }
    .fc-label { font-size: 0.78rem; color: var(--clr-muted); }

    /* Stats Band */
    .stats-band {
        background: var(--clr-dark);
        color: #fff;
        border-radius: 24px;
        padding: 2.5rem 1.5rem;
        box-shadow: 0 20px 40px rgba(11, 18, 32, 0.15);
    }
    .stat-item {
        text-align: center;
        padding: 1rem;
        border-right: 1px solid rgba(255, 255, 255, 0.1);
    }
    .stat-item:last-child { border-right: none; }
    .stat-num {
        font-family: 'Plus Jakarta Sans', sans-serif;
        font-size: clamp(1.8rem, 3vw, 2.5rem);
        font-weight: 800;
        color: var(--clr-accent);
    }
    .stat-label { font-size: 0.9rem; color: #CBD5E1; margin-top: 4px; }

    /* About / Sambutan */
    .about-logo-card {
        background: #fff;
        border-radius: 24px;
        padding: 3rem 2rem;
        box-shadow: var(--shadow-soft);
        border: 1px solid #F1F5F9;
        text-align: center;
    }
    .about-logo-card img {
        max-height: 180px;
        width: auto;
        object-fit: contain;
    }
    .about-list { list-style: none; padding: 0; }
    .about-list li { display: flex; align-items: flex-start; gap: 14px; margin-bottom: 1.1rem; }
    .about-list .ic {
        width: 38px;
        height: 38px;
        border-radius: 10px;
        background: rgba(59, 107, 128, 0.12);
        color: var(--clr-primary);
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
    }

    /* How It Works */
    .hiw-num {
        width: 54px;
        height: 54px;
        border-radius: 50%;
        background: var(--clr-primary);
        color: #fff;
        font-family: 'Plus Jakarta Sans', sans-serif;
        font-weight: 800;
        font-size: 1.25rem;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 1.25rem;
        box-shadow: 0 10px 20px rgba(59, 107, 128, 0.25);
    }

    /* Team Cards (Foto Utuh + Info Bersih di Bawah) */
    .vol-card {
        background: #ffffff;
        border-radius: var(--radius-lg);
        overflow: hidden;
        border: 1px solid #E2E8F0;
        box-shadow: var(--shadow-soft);
        height: 100%;
        display: flex;
        flex-direction: column;
        transition: transform 0.25s ease, box-shadow 0.25s ease;
    }
    .vol-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 18px 36px rgba(15, 23, 42, 0.1);
    }
    .vol-img-wrap {
        width: 100%;
        aspect-ratio: 3/4;
        background: #E2E8F0;
        overflow: hidden;
    }
    .vol-card img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: top center; /* Memastikan bagian kepala/wajah tidak terpotong */
    }
    .vol-overlay {
        padding: 1rem 0.9rem;
        background: #ffffff;
        color: var(--clr-dark);
        text-align: center;
        flex-grow: 1;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }
    .vol-overlay .fw-bold {
        font-size: 0.95rem;
        line-height: 1.35;
        color: var(--clr-dark);
    }
    .vol-overlay .small {
        font-size: 0.78rem;
        color: var(--clr-primary);
        font-weight: 600;
        margin-top: 4px;
        opacity: 1 !important;
    }

    @media (max-width: 576px) {
        .vol-overlay {
            padding: 0.75rem 0.6rem;
        }
        .vol-overlay .fw-bold {
            font-size: 0.85rem;
        }
        .vol-overlay .small {
            font-size: 0.72rem;
        }
    }

    /* CTA Banner */
    .cta-banner {
        background: linear-gradient(135deg, var(--clr-primary), var(--clr-primary-dark));
        color: #fff;
        border-radius: 28px;
        padding: 3.5rem 2rem;
        text-align: center;
    }
    .btn-cta {
        background: var(--clr-accent);
        color: var(--clr-dark);
        font-weight: 700;
        padding: 0.85rem 2rem;
        border-radius: 50px;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 8px;
        transition: transform 0.2s;
    }
    .btn-cta:hover { transform: scale(1.03); color: var(--clr-dark); }

    @media (max-width: 768px) {
        .float-card-1, .float-card-2 { position: static; margin-top: 12px; }
        .stat-item { border-right: none; border-bottom: 1px solid rgba(255,255,255,0.1); }
    }
</style>
@endpush

@section('fullwidth_content')
    <!-- ============================================
         HERO SECTION
    ============================================ -->
    <header class="hero" id="home">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6" data-aos="fade-right">
                    <span class="eyebrow"><i class="bi bi-shield-check"></i> Sistem Informasi Satu Pintu</span>
                    <h1 class="hero-title mt-3">
                        Sentra HKI <span class="accent-underline">UNIDA Gontor<svg viewBox="0 0 200 14" preserveAspectRatio="none"><path d="M2 10 Q 50 2 100 8 T 198 6" stroke="#F59E0B" stroke-width="5" fill="none" stroke-linecap="round"></path></svg></span>
                    </h1>
                    <p class="hero-lead mt-4">
                        Unit strategis Universitas Darussalam Gontor yang berkomitmen penuh memfasilitasi, melindungi, serta mengelola seluruh aset intelektual hasil kreativitas, riset, dan inovasi civitas akademika.
                    </p>
                    <div class="d-flex flex-wrap gap-3 mt-4">
                        <a href="{{ url('/formulir-pendaftaran') }}" class="btn-hw-primary">Ajukan HKI Sekarang <i class="bi bi-arrow-right"></i></a>
                        <a href="{{ url('/cek-status') }}" class="btn-hw-outline"><i class="bi bi-search"></i> Cek Status Pendaftaran</a>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left" data-aos-delay="120">
                    <div class="hero-media">
                        <div class="hero-media-frame">
                            <img src="{{ asset('images/banner1baru.jpg') }}" alt="Gedung UNIDA Gontor">
                        </div>
                        <div class="float-card float-card-1">
                            <span class="fc-icon"><i class="bi bi-clock-history"></i></span>
                            <div>
                                <div class="fc-val">Real-Time</div>
                                <div class="fc-label">Pantau status validasi mandiri</div>
                            </div>
                        </div>
                        <div class="float-card float-card-2">
                            <span class="fc-icon"><i class="bi bi-patch-check-fill"></i></span>
                            <div>
                                <div class="fc-val">Tri Dharma</div>
                                <div class="fc-label">Perlindungan Riset &amp; Inovasi</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- ============================================
         STATISTIK CAPAIAN HKI (Silakan sesuaikan angkanya)
    ============================================ -->
    <section class="section-pad pt-0" id="impact">
        <div class="container">
            <div class="stats-band" data-aos="zoom-in">
                <div class="row g-0">
                    <div class="col-6 col-md-3 stat-item">
                        <div class="stat-num"><span class="counter" data-target="782">0</span>+</div>
                        <div class="stat-label">Hak Cipta Terdaftar</div>
                    </div>
                    <div class="col-6 col-md-3 stat-item">
                        <div class="stat-num"><span class="counter" data-target="8">0</span>+</div>
                        <div class="stat-label">Paten &amp; Paten Sederhana</div>
                    </div>
                    <div class="col-6 col-md-3 stat-item">
                        <div class="stat-num"><span class="counter" data-target="17">0</span>+</div>
                        <div class="stat-label">Merek Terdaftar</div>
                    </div>
                    <div class="col-6 col-md-3 stat-item">
                        <div class="stat-num"><span class="counter" data-target="300">0</span>+</div>
                        <div class="stat-label">Total KI 2017-2025</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================
         SAMBUTAN & PROFIL SINGKAT
    ============================================ -->
    <section class="section-pad" id="about">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-5" data-aos="fade-right">
                    <div class="about-logo-card">
                        <img src="{{ asset('images/logo-hki.png') }}" alt="Logo Sentra HKI UNIDA">
                        <h4 class="fw-bold mt-4 mb-1" style="color: var(--clr-primary);">Sentra HKI UNIDA Gontor</h4>
                        <p class="text-muted small mb-0">Lembaga Layanan Hak Kekayaan Intelektual</p>
                        <hr class="my-4">
                        <a href="{{ url('/sejarah') }}" class="btn-hw-outline w-100 justify-content-center">
                            <i class="bi bi-journal-text"></i> Baca Sejarah Sentra HKI
                        </a>
                    </div>
                </div>
                <div class="col-lg-7" data-aos="fade-left">
                    <span class="eyebrow"><i class="bi bi-building"></i> Selamat Datang</span>
                    <h2 class="section-title mt-3 mb-3">Sistem Informasi Resmi Sentra HKI Universitas Darussalam Gontor</h2>
                    <p class="section-sub">
                        Sebagai bentuk perwujudan Tri Dharma Perguruan Tinggi yang adaptif terhadap era digital, platform ini hadir untuk memangkas birokrasi dan menyederhanakan proses administratif.
                    </p>
                    <p class="section-sub">
                        Melalui Sistem Informasi Satu Pintu ini, para dosen dan peneliti kini dapat melakukan pengajuan berkas HKI, mengunduh dokumen persyaratan, hingga memantau perkembangan status validasi secara mandiri dari mana saja tanpa harus mengabaikan aktivitas pembelajaran.
                    </p>
                    <ul class="about-list mt-4">
                        <li>
                            <span class="ic"><i class="bi bi-shield-lock-fill"></i></span>
                            <div>
                                <strong>Kepastian Hukum Karya</strong>
                                <div class="text-muted small">Menjaga hak moral dan ekonomi pencipta atas karya ilmiah, buku, jurnal, aplikasi, hingga invensi teknologi.</div>
                            </div>
                        </li>
                        <li>
                            <span class="ic"><i class="bi bi-graph-up-arrow"></i></span>
                            <div>
                                <strong>Klasterisasi &amp; Reputasi Riset</strong>
                                <div class="text-muted small">Mendongkrak klasterisasi riset dan mengukuhkan kontribusi nyata UNIDA Gontor bagi kemajuan sains dan teknologi di tingkat nasional maupun internasional.</div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================
         LAYANAN UNGGULAN (HAK CIPTA, PATEN, MEREK)
    ============================================ -->
    <section class="section-pad bg-white" id="layanan">
        <div class="container">
            <div class="text-center mx-auto mb-5" style="max-width: 640px;" data-aos="fade-up">
                <span class="eyebrow"><i class="bi bi-grid-fill"></i> Layanan Utama</span>
                <h2 class="section-title mt-3">Jenis Pelindungan Kekayaan Intelektual</h2>
                <p class="section-sub mt-2">Pelajari ketentuan masing-masing jenis HKI atau langsung ajukan permohonan Anda.</p>
            </div>
            <div class="row g-4">
                <!-- Hak Cipta -->
                <div class="col-md-4" data-aos="fade-up">
                    <div class="card-hw p-4 d-flex flex-column">
                        <div class="icon-box"><i class="fa-solid fa-copyright"></i></div>
                        <h4 class="fw-bold">Hak Cipta</h4>
                        <p class="text-muted flex-grow-1">
                            Perlindungan instan untuk karya tulis, buku, modul perkuliahan, karya seni, audio visual, hingga program komputer.
                        </p>
                        <div class="d-flex gap-2 mt-3">
                            <a href="{{ url('/syarat-ketentuan-hak-cipta') }}" class="btn-hw-outline flex-grow-1 justify-content-center">Syarat</a>
                            <a href="{{ url('/formulir-pendaftaran') }}" class="btn-hw-primary flex-grow-1 justify-content-center">Ajukan <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Paten -->
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="card-hw p-4 d-flex flex-column">
                        <div class="icon-box"><i class="fa-solid fa-lightbulb"></i></div>
                        <h4 class="fw-bold">Paten</h4>
                        <p class="text-muted flex-grow-1">
                            Fasilitasi pendaftaran invensi teknologi, alat tepat guna, serta formula riset terapan unggulan kampus.
                        </p>
                        <div class="d-flex gap-2 mt-3">
                            <a href="{{ url('/syarat-ketentuan-paten') }}" class="btn-hw-outline flex-grow-1 justify-content-center">Syarat</a>
                            <a href="{{ url('/formulir-pendaftaran') }}" class="btn-hw-primary flex-grow-1 justify-content-center">Ajukan <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Merek -->
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="card-hw p-4 d-flex flex-column">
                        <div class="icon-box"><i class="fa-solid fa-registered"></i></div>
                        <h4 class="fw-bold">Merek</h4>
                        <p class="text-muted flex-grow-1">
                            Perlindungan identitas visual dan brand untuk produk unit usaha, laboratorium, dan inkubator bisnis UNIDA.
                        </p>
                        <div class="d-flex gap-2 mt-3">
                            <a href="{{ url('/syarat-ketentuan-merek') }}" class="btn-hw-outline flex-grow-1 justify-content-center">Syarat</a>
                            <a href="{{ url('/formulir-pendaftaran') }}" class="btn-hw-primary flex-grow-1 justify-content-center">Ajukan <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================
         ALUR PENGAJUAN
    ============================================ -->
    <section class="section-pad" id="alur">
        <div class="container">
            <div class="text-center mx-auto mb-5" style="max-width: 640px;" data-aos="fade-up">
                <span class="eyebrow"><i class="bi bi-signpost-split-fill"></i> Prosedur Singkat</span>
                <h2 class="section-title mt-3">Alur Pendaftaran HKI</h2>
            </div>
            <div class="row g-4 text-center">
                <div class="col-md-4" data-aos="fade-up">
                    <div class="card-hw p-4">
                        <div class="hiw-num">1</div>
                        <h5 class="fw-bold">Unduh &amp; Lengkapi Berkas</h5>
                        <p class="text-muted mb-0">Unduh template dokumen persyaratan pada menu <a href="{{ url('/template-formulir') }}" class="text-decoration-none fw-semibold">Template Forms</a> dan lengkapi data pencipta.</p>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="120">
                    <div class="card-hw p-4">
                        <div class="hiw-num">2</div>
                        <h5 class="fw-bold">Isi Formulir Online</h5>
                        <p class="text-muted mb-0">Unggah berkas permohonan melalui halaman <a href="{{ url('/formulir-pendaftaran') }}" class="text-decoration-none fw-semibold">Form Pendaftaran</a> untuk diverifikasi tim Sentra HKI.</p>
                    </div>
                </div>
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="240">
                    <div class="card-hw p-4">
                        <div class="hiw-num">3</div>
                        <h5 class="fw-bold">Pantau Status &amp; Sertifikat</h5>
                        <p class="text-muted mb-0">Lacak progres pengajuan kapan saja melalui fitur <a href="{{ url('/cek-status') }}" class="text-decoration-none fw-semibold">Cek Status Pendaftaran</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================
         TIM SENTRA HKI (Silakan isi nama, jabatan & foto)
    ============================================ -->
    <section class="section-pad bg-white" id="tim">
        <div class="container">
            <div class="text-center mx-auto mb-5" style="max-width: 640px;" data-aos="fade-up">
                <span class="eyebrow"><i class="bi bi-people-fill"></i> Struktur Pengelola</span>
                <h2 class="section-title mt-3">Tim Sentra HKI UNIDA</h2>
            </div>
            <div class="row g-4 justify-content-center">
                <!-- Staf 1 -->
                <div class="col-6 col-md-3" data-aos="fade-up">
                    <div class="vol-card">
                        <div class="vol-img-wrap">
                            <img src="{{ asset('images/Dian.png') }}" alt="Dian Nasrul Munif, M.Pd.">
                        </div>
                        <div class="vol-overlay">
                            <div class="fw-bold font-display">Dian Nasrul Munif, M.Pd.</div>
                            <div class="small">Head Office</div>
                        </div>
                    </div>
                </div>

                <!-- Staf 2 -->
                <div class="col-6 col-md-3" data-aos="fade-up" data-aos-delay="80">
                    <div class="vol-card">
                        <div class="vol-img-wrap">
                            <img src="{{ asset('images/April.png') }}" alt="Aprillia Dwi Saputri, S.H.">
                        </div>
                        <div class="vol-overlay">
                            <div class="fw-bold font-display">Aprillia Dwi Saputri, S.H.</div>
                            <div class="small">Acceleration And Law Affairs</div>
                        </div>
                    </div>
                </div>

                <!-- Staf 3 -->
                <div class="col-6 col-md-3" data-aos="fade-up" data-aos-delay="160">
                    <div class="vol-card">
                        <div class="vol-img-wrap">
                            <img src="{{ asset('images/Rafki.png') }}" alt="Rafki Fauzan">
                        </div>
                        <div class="vol-overlay">
                            <div class="fw-bold font-display">Rafki Fauzan</div>
                            <div class="small">Divisi Media &amp; Informasi</div>
                        </div>
                    </div>
                </div>

                <!-- Staf 4 -->
                <div class="col-6 col-md-3" data-aos="fade-up" data-aos-delay="240">
                    <div class="vol-card">
                        <div class="vol-img-wrap">
                            <img src="{{ asset('images/Sun.png') }}" alt="M. Sun Fauzy Muhajir">
                        </div>
                        <div class="vol-overlay">
                            <div class="fw-bold font-display">M. Sun Fauzy Muhajir</div>
                            <div class="small">Divisi Keuangan</div>
                        </div>
                    </div>
                </div>

                <!-- Staf 5 -->
                <div class="col-6 col-md-3" data-aos="fade-up" data-aos-delay="320">
                    <div class="vol-card">
                        <div class="vol-img-wrap">
                            <img src="{{ asset('images/Malik.png') }}" alt="Malik Adnan">
                        </div>
                        <div class="vol-overlay">
                            <div class="fw-bold font-display">Malik Adnan</div>
                            <div class="small">Divisi Administrasi &amp; Pendaftaran</div>
                        </div>
                    </div>
                </div>

                <!-- Staf 6 -->
                <div class="col-6 col-md-3" data-aos="fade-up" data-aos-delay="400">
                    <div class="vol-card">
                        <div class="vol-img-wrap">
                            <img src="{{ asset('images/Pikri.JPG') }}" alt="Fikri Ardian">
                        </div>
                        <div class="vol-overlay">
                            <div class="fw-bold font-display">Fikri Ardian</div>
                            <div class="small">Divisi Pengembang Sistem Informasi</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================
         CTA BANNER
    ============================================ -->
    <section class="section-pad" id="cta">
        <div class="container">
            <div class="cta-banner" data-aos="zoom-in">
                <h2 class="fw-bold">Mari Catatkan dan Amankan Karya Terbaik Anda!</h2>
                <p class="mb-4 opacity-90">Hubungi Kami atau langsung ajukan permohonan HKI secara daring sekarang.</p>
                <div class="d-flex flex-wrap justify-content-center gap-3">
                    <a href="{{ url('/formulir-pendaftaran') }}" class="btn-cta"><i class="bi bi-send-fill"></i> Form Pendaftaran</a>
                    <a href="{{ url('/https://wa.me/6285708583094') }}" class="btn-hw-outline"><i class="fa-brands fa-whatsapp"></i> Pusat bantuan</a>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
<script>
    // Animasi Counter Statistik
    const counters = document.querySelectorAll('.counter');
    const speed = 150;
    const animateCounters = () => {
        counters.forEach(counter => {
            const target = +counter.getAttribute('data-target');
            const count = +counter.innerText.replace(/\./g, '');
            const inc = Math.ceil(target / speed);
            if (count < target) {
                counter.innerText = Math.min(count + inc, target).toLocaleString('id-ID');
                setTimeout(animateCounters, 20);
            } else {
                counter.innerText = target.toLocaleString('id-ID');
            }
        });
    };

    const observer = new IntersectionObserver(entries => {
        if (entries[0].isIntersecting) {
            animateCounters();
            observer.disconnect();
        }
    });
    const impactSection = document.getElementById('impact');
    if (impactSection) observer.observe(impactSection);
</script>
@endpush