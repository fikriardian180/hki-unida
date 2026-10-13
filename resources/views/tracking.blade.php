@extends('layouts.app') 

@section('title', 'Cek Status Permohonan')

@push('styles')
<style>
/* Google Font Integration */
@import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap');

body {
    font-family: 'Inter', system-ui, -apple-system, sans-serif;
    background-color: #f8fafc;
    color: #1e293b;
    margin: 0;
    padding: 0;
    min-height: 100vh;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}

/* Header & Footer Layout */
.tracking-header, .tracking-footer {
    background-color: #3b6d82;
    color: #ffffff;
}

.tracking-header {
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.header-container {
    max-width: 1280px;
    margin: 0 auto;
    padding: 0 1.5rem;
    height: 80px;
    display: flex;
    align-items: center;
    justify-content: space-between;
}

.logo-brand {
    display: flex;
    align-items: center;
    gap: 0.75rem;
    text-decoration: none;
    color: #ffffff;
    font-weight: 700;
    font-size: 1.25rem;
}

.logo-brand img {
    height: 40px;
    background-color: #ffffff;
    padding: 4px;
    border-radius: 6px;
}

.nav-links {
    display: flex;
    gap: 1.5rem;
    font-size: 0.875rem;
}

.nav-links a {
    color: #ffffff;
    text-decoration: none;
    transition: color 0.2s;
}

.nav-links a:hover, .nav-links a.active {
    color: #fcd34d;
}

/* Main Container */
.tracking-container {
    max-width: 896px;
    width: 100%;
    margin: 0 auto;
    padding: 3rem 1rem;
    flex-grow: 1;
}

/* Title Section */
.title-section {
    text-align: center;
    margin-bottom: 2.5rem;
}

.badge-tag {
    display: inline-block;
    padding: 0.25rem 0.75rem;
    background-color: #ccfbf1;
    color: #3b6d82;
    font-size: 0.75rem;
    font-weight: 700;
    border-radius: 9999px;
    text-transform: uppercase;
    letter-spacing: 0.05em;
    margin-bottom: 0.75rem;
}

.main-title {
    font-size: 2rem;
    font-weight: 800;
    color: #1e293b;
    margin: 0;
}

.subtitle {
    margin-top: 0.75rem;
    color: #64748b;
    font-size: 0.95rem;
}

.code-badge {
    background-color: #e2e8f0;
    padding: 2px 6px;
    border-radius: 4px;
    font-size: 0.8rem;
}

/* Form Card */
.search-card {
    background: #ffffff;
    padding: 1.5rem;
    border-radius: 16px;
    border: 1px solid #e2e8f0;
    box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.05);
    margin-bottom: 2.5rem;
}

.search-form {
    display: flex;
    gap: 0.75rem;
}

.input-wrapper {
    position: relative;
    flex-grow: 1;
}

.input-icon {
    position: absolute;
    left: 1rem;
    top: 50%;
    transform: translateY(-50%);
    color: #94a3b8;
}

.search-input {
    width: 100%;
    padding: 0.875rem 1rem 0.875rem 2.75rem;
    background-color: #f8fafc;
    border: 1px solid #cbd5e1;
    border-radius: 12px;
    font-size: 0.95rem;
    box-sizing: border-box;
    transition: all 0.2s;
}

.search-input:focus {
    outline: none;
    background-color: #ffffff;
    border-color: #3b6d82;
    box-shadow: 0 0 0 3px rgba(59, 109, 130, 0.2);
}

.btn-search {
    background-color: #3b6d82;
    color: #ffffff;
    font-weight: 600;
    padding: 0.875rem 2rem;
    border-radius: 12px;
    border: none;
    cursor: pointer;
    display: flex;
    align-items: center;
    gap: 0.5rem;
    transition: background-color 0.2s;
}

.btn-search:hover {
    background-color: #2e5769;
}

/* Result Card */
.result-card {
    background: #ffffff;
    border-radius: 16px;
    border: 1px solid #e2e8f0;
    box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05);
    overflow: hidden;
    margin-bottom: 1.5rem;
}

.card-header {
    background-color: #f1f5f9;
    padding: 1.5rem;
    border-bottom: 1px solid #e2e8f0;
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
    gap: 1rem;
}

.reg-number-label {
    font-size: 0.75rem;
    font-weight: 700;
    color: #3b6d82;
    text-transform: uppercase;
    display: block;
}

.reg-number {
    font-size: 1.5rem;
    font-weight: 900;
    color: #0f172a;
    margin: 0.25rem 0;
}

.work-title {
    font-size: 0.875rem;
    color: #475569;
    margin: 0;
}

.date-badge {
    background: #ffffff;
    padding: 0.5rem 1rem;
    border-radius: 8px;
    border: 1px solid #e2e8f0;
    font-size: 0.85rem;
}

.card-body {
    padding: 1.5rem;
}

/* Stepper Progress Grid */
.stepper-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
    gap: 0.75rem;
    margin-top: 1rem;
}

.step-box {
    padding: 1rem;
    border-radius: 12px;
    border: 1px solid #e2e8f0;
    background-color: #f8fafc;
    text-align: center;
    color: #94a3b8;
    transition: all 0.2s;
}

.step-icon {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 0.5rem;
    background-color: #e2e8f0;
    color: #64748b;
}

.step-num {
    font-size: 0.7rem;
    font-weight: 700;
    text-transform: uppercase;
}

.step-text {
    font-size: 0.875rem;
    font-weight: 600;
    margin-top: 2px;
}

/* Active & Completed Step States */
.step-box.active {
    background-color: #f0fdf4;
    border-color: #3b6d82;
    box-shadow: 0 0 0 2px rgba(59, 109, 130, 0.2);
}

.step-box.active .step-icon {
    background-color: #3b6d82;
    color: #ffffff;
}

.step-box.active .step-text, .step-box.active .step-num {
    color: #3b6d82;
}

.step-box.passed .step-icon {
    background-color: #10b981;
    color: #ffffff;
}

.step-box.passed .step-text {
    color: #0f172a;
}

/* Empty State */
.empty-card {
    background: #ffffff;
    padding: 3rem 1.5rem;
    border-radius: 16px;
    text-align: center;
    border: 1px solid #e2e8f0;
}

.empty-icon {
    width: 64px;
    height: 64px;
    background: #f1f5f9;
    color: #94a3b8;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 1rem;
    font-size: 1.5rem;
}

/* Footer */
.tracking-footer {
    text-align: center;
    padding: 2rem 1rem;
    font-size: 0.875rem;
    border-top: 1px solid #334155;
}
</style>
@endpush

@section('content')
<!-- Main Content Container -->
<main class="tracking-container">
    <!-- Title & Subtitle -->
    <div class="title-section">
        <span class="badge-tag">Layanan Digital HKI</span>
        <h1 class="main-title">Lacak Status Pengajuan HKI</h1>
        <p class="subtitle">
            Masukkan <strong>Nomor Registrasi</strong> (contoh: <code class="code-badge">HKI-HC/MRK/PTN-202610-XXXX</code>) atau <strong>Email Penanggung Jawab</strong>.
        </p>
    </div>

    <!-- Form Pencarian -->
    <div class="search-card">
        <form action="{{ route('tracking.index') }}" method="GET" class="search-form">
            <div class="input-wrapper">
                <i class="fa-solid fa-magnifying-glass input-icon"></i>
                <input type="text" name="keyword" value="{{ $keyword ?? '' }}" 
                       placeholder="Masukkan Nomor Registrasi / Email..." required
                       class="search-input">
            </div>
            <button type="submit" class="btn-search">
                <i class="fa-solid fa-paper-plane"></i>
                <span>Cari Status</span>
            </button>
        </form>
    </div>

    <!-- Hasil Pencarian -->
    @if(isset($keyword) && $keyword != '')
        @if(isset($hasil) && $hasil->count() > 0)
            <div>
                @foreach($hasil as $item)
                    <div class="result-card">
                        <!-- Card Header -->
                        <div class="card-header">
                            <div>
                                <span class="reg-number-label">Nomor Registrasi</span>
                                <div class="reg-number">{{ $item->nomor_registrasi ?? 'N/A' }}</div>
                                <p class="work-title">
                                    Judul Karya / Merek / Invensi: <strong>{{ $item->judul_karya ?? $item->nama_merek ?? $item->judul_paten ?? '-' }}</strong>
                                </p>
                            </div>
                            <div class="date-badge">
                                <span style="color:#94a3b8; font-size:0.75rem; display:block;">Tanggal Pengajuan</span>
                                <i class="fa-regular fa-calendar" style="color:#3b6d82;"></i>
                                <strong>{{ $item->created_at ? $item->created_at->format('d M Y, H:i') : '-' }} WIB</strong>
                            </div>
                        </div>

                        <!-- Stepper Tracker -->
                        <div class="card-body">
                            <span style="font-size:0.85rem; font-weight:700; color:#475569; text-transform:uppercase;">Progres Verifikasi:</span>

                            @php
                                $currentStatus = $item->status ?? 'pending';
                                $steps = [
                                    'pending' => ['label' => 'Diterima', 'icon' => 'fa-inbox'],
                                    'verifikasi_berkas' => ['label' => 'Verifikasi Berkas', 'icon' => 'fa-file-signature'],
                                    'diajukan_djki' => ['label' => 'Diajukan ke DJKI', 'icon' => 'fa-building-columns'],
                                    'sertifikat_terbit' => ['label' => 'Sertifikat Terbit', 'icon' => 'fa-certificate'],
                                ];

                                $statusKeys = array_keys($steps);
                                $currentIndex = array_search($currentStatus, $statusKeys);
                                if ($currentIndex === false) $currentIndex = 0;
                            @endphp

                            @if($currentStatus == 'ditolak')
                                <div style="background:#fef2f2; border-left:4px solid #ef4444; padding:1rem; border-radius:8px; margin-top:1rem; color:#991b1b;">
                                    <strong>Pengajuan Perlu Revisi / Ditolak</strong>
                                    <p style="margin:0.25rem 0 0; font-size:0.875rem;">Silakan hubungi Sekretariat Sentra HKI UNIDA untuk informasi perbaikan berkas.</p>
                                </div>
                            @else
                                <div class="stepper-grid">
                                    @foreach($steps as $key => $stepInfo)
                                        @php
                                            $stepIndex = array_search($key, $statusKeys);
                                            $isPassed = $stepIndex <= $currentIndex;
                                            $isCurrent = $stepIndex === $currentIndex;
                                            
                                            $classState = '';
                                            if ($isCurrent) $classState = 'active';
                                            elseif ($isPassed) $classState = 'passed';
                                        @endphp
                                        <div class="step-box {{ $classState }}">
                                            <div class="step-icon">
                                                <i class="fa-solid {{ $stepInfo['icon'] }}"></i>
                                            </div>
                                            <div class="step-num">Langkah {{ $stepIndex + 1 }}</div>
                                            <div class="step-text">{{ $stepInfo['label'] }}</div>
                                        </div>
                                    @endforeach
                                </div>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <div class="empty-card">
                <div class="empty-icon">
                    <i class="fa-solid fa-folder-open"></i>
                </div>
                <h3 style="margin:0; font-size:1.125rem;">Data Tidak Ditemukan</h3>
                <p style="color:#64748b; font-size:0.875rem; margin-top:0.5rem;">
                    Pendaftaran dengan kata kunci "<strong>{{ $keyword }}</strong>" belum terdaftar. Pastikan nomor registrasi atau email sudah benar.
                </p>
            </div>
        @endif
    @endif
</main>
@endsection