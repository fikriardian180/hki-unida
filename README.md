# 🏛️ Sentra HKI UNIDA Gontor Web Application

Aplikasi Sistem Informasi Layanan dan Pendaftaran Hak Kekayaan Intelektual (HKI) berbasis web untuk **Universitas Darussalam Gontor**. Sistem ini dirancang untuk memfasilitasi pengajuan permohonan Hak Cipta, Paten, dan Merek secara online, serta menyediakan panel kontrol admin yang lengkap untuk pengelolaan berkas oleh tim Sentra HKI.

---

## 🚀 Fitur Utama Sistem

### 🌐 Halaman Publik (Pengguna / Pemohon)
- **Informasi & Layanan HKI:** Halaman informasi lengkap mengenai jenis-jenis HKI (Hak Cipta, Paten, Merek), Sejarah UNIDA, serta Syarat & Ketentuan pendaftaran.
- **Formulir Pendaftaran Multi-Pemohon:** Form pengajuan online terstruktur yang mendukung pendaftaran hingga 5 pemohon (PJ & Anggota) dalam satu kali kirim.
- **Manajemen Lampiran Berkas:** Pengunggahan dokumen persyaratan (KTP, NPWP, Surat Pernyataan, Surat Pengalihan Hak, Berkas Karya, dll.) secara terorganisasi.
- **Navigasi Mobile Responsive:** Tampilan navigasi yang intuitif di perangkat Desktop maupun Smartphone (dukungan *hamburger menu* dan *dropdown chevron* yang responsif).

### 🛡️ Dashboard & Panel Admin
- **Ringkasan Statistik Real-Time:** Kartu ringkasan total permohonan masuk, Hak Cipta, Paten, dan Merek.
- **Tabel Rekapitulasi Terpadu:** Tampilan daftar pengajuan berkas masuk lengkap dengan indikator waktu Waktu Indonesia Barat (WIB) dan status permohonan.
- **Manajemen Status Dinamis:** Fitur ubah status pengajuan (*Pending*, *Diproses*, *Selesai*, *Ditolak*) dengan indikator warna kustom.
- **Verifikasi Berkas & Detail:** Panel pratinjau detail informasi pemohon beserta tautan akses/unduh langsung untuk berkas lampiran PDF/Gambar.
- **Pencarian, Filter, & Ekspor:** Pencarian cepat (nama/email/judul karya), filter berdasarkan status, dan ekspor data rekapitulasi ke format Excel.

---

## 🛠️ Stack Teknologi

- **Backend Framework:** Laravel 11 (PHP 8.3)
- **Database:** MySQL 8.0
- **Frontend:** HTML5, CSS3 Custom (Grid & Flexbox Layout), JavaScript (ES6 Vanilla)
- **Icon & Typography:** FontAwesome 6 Free, Google Fonts (Roboto, Slabo 27px, Poppins)
- **Containerization:** Docker Compose (PHP-FPM 8.3, Nginx Alpine, MySQL 8.0)
- **Version Control:** Git & GitHub

---

## 🚀 Prasyarat Sistem
Sebelum menjalankan aplikasi, pastikan server/komputer sudah terinstal:
- **Docker Engine** & **Docker Compose Plugin**
- **Git**

---

## 🛠️ Langkah Instalasi & Deploy (Docker Compose)

### 1. Clone Repositori
```bash
git clone https://github.com/fikriardian180/hki-unida.git
cd hki-unida

2. Konfigurasi Environment (.env)
Salin file .env.example menjadi .env:

cp .env.example .env

3. Build & Jalankan Container
Jalankan stack Docker Compose di background:

docker compose up -d --build

4. Setup Aplikasi Laravel
Eksekusi perintah-perintah berikut di dalam container app:

# 1. Install dependensi composer
docker compose exec app composer install

# 2. Generate Application Key
docker compose exec app php artisan key:generate

# 3. Jalankan Migrasi Database & Seeder
docker compose exec app php artisan migrate --seed

# 4. Buat Symlink Storage (Penting untuk upload berkas)
docker compose exec app php artisan storage:link

# 5. Optimasi Cache (Khusus Lingkungan Produksi)
docker compose exec app php artisan config:cache
docker compose exec app php artisan route:cache
docker compose exec app php artisan view:cache

## 🌐 Alokasi Port & Service Container

| Service Name | Container Name | Internal Port | Exposed Port | Fungsi |
| :--- | :--- | :--- | :--- | :--- |
| `app` | `hki_unida_app` | `9000` | - | PHP 8.3-FPM (Laravel Backend) |
| `webserver` | `hki_unida_webserver` | `80` | `8000` | Nginx Webserver |
| `db` | `hki_unida_db` | `3306` | `3306` | MySQL 8.0 Database |