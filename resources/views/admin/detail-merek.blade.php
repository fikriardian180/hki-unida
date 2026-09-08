<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Merek - Admin Sentra HKI</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; }
        body { background-color: #f8fafc; color: #1e293b; display: flex; min-height: 100vh; }
        
        .sidebar { width: 260px; background-color: #3B6B80; color: white; padding: 25px 20px; display: flex; flex-direction: column; justify-content: space-between; }
        .sidebar-brand { font-size: 20px; font-weight: 700; text-align: center; margin-bottom: 30px; border-bottom: 1px solid rgba(255,255,255,0.2); padding-bottom: 15px; }
        .sidebar-menu { list-style: none; }
        .sidebar-menu li { margin-bottom: 10px; }
        .sidebar-menu a { color: #e2e8f0; text-decoration: none; padding: 12px 15px; display: flex; align-items: center; gap: 12px; border-radius: 6px; font-weight: 500; }
        .sidebar-menu a:hover, .sidebar-menu a.active { background-color: #2c5263; color: white; }
        .btn-logout { background: none; border: none; color: #f87171; cursor: pointer; font-size: 15px; font-weight: 600; padding: 12px 15px; width: 100%; text-align: left; }

        .main-content { flex: 1; padding: 30px; overflow-y: auto; }
        .header { display: flex; justify-content: space-between; align-items: center; margin-bottom: 25px; background: white; padding: 20px 25px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.04); }
        .btn-back { padding: 8px 14px; background: #64748b; color: white; text-decoration: none; border-radius: 5px; font-size: 13px; font-weight: 600; }

        .card-detail { background: white; border-radius: 8px; padding: 25px; box-shadow: 0 2px 4px rgba(0,0,0,0.04); margin-bottom: 25px; }
        .card-title { font-size: 18px; font-weight: 700; color: #3B6B80; margin-bottom: 15px; border-bottom: 2px solid #f1f5f9; padding-bottom: 8px; }
        .info-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 15px; margin-bottom: 15px; }
        .info-item label { font-size: 12px; font-weight: 600; color: #64748b; text-transform: uppercase; display: block; margin-bottom: 4px; }
        .info-item p { font-size: 14px; color: #0f172a; font-weight: 500; }

        .file-list { display: flex; flex-direction: column; gap: 10px; }
        .file-item { display: flex; justify-content: space-between; align-items: center; padding: 12px 15px; background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 6px; }
        .btn-download { padding: 6px 12px; background: #3B6B80; color: white; text-decoration: none; border-radius: 4px; font-size: 12px; font-weight: 600; }

        .form-status { display: flex; gap: 12px; align-items: center; }
        .select-status { padding: 8px 12px; border-radius: 5px; border: 1px solid #cbd5e1; font-size: 14px; outline: none; }
        .btn-update { padding: 8px 16px; background: #10b981; color: white; border: none; border-radius: 5px; font-weight: 600; cursor: pointer; }
    </style>
</head>
<body>

    <div class="sidebar">
        <div>
            <div class="sidebar-brand"><i class="fa-solid fa-shield-halved"></i> Sentra HKI Admin</div>
            <ul class="sidebar-menu">
                <li><a href="{{ route('admin.dashboard') }}"><i class="fa-solid fa-chart-line"></i> Dashboard</a></li>
                <li><a href="{{ route('admin.hakcipta') }}"><i class="fa-solid fa-copyright"></i> Hak Cipta</a></li>
                <li><a href="{{ route('admin.paten') }}"><i class="fa-solid fa-lightbulb"></i> Paten</a></li>
                <li><a href="{{ route('admin.merek') }}" class="active"><i class="fa-solid fa-trademark"></i> Merek</a></li>
            </ul>
        </div>
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="btn-logout"><i class="fa-solid fa-right-from-bracket"></i> Keluar (Logout)</button>
        </form>
    </div>

    <div class="main-content">
        <div class="header">
            <h2>Detail Permohonan Merek</h2>
            <a href="{{ route('admin.merek') }}" class="btn-back"><i class="fa-solid fa-arrow-left"></i> Kembali</a>
        </div>

        @if(session('success'))
            <div style="background: #d1e7dd; color: #0f5132; padding: 12px 15px; border-radius: 6px; margin-bottom: 20px;">
                <i class="fa-solid fa-circle-check"></i> {{ session('success') }}
            </div>
        @endif

        <!-- Status Permohonan -->
        <div class="card-detail">
            <div class="card-title">Status Permohonan</div>
            <form action="{{ route('admin.merek.status', $data->id) }}" method="POST" class="form-status">
                @csrf
                <select name="status" class="select-status">
                    <option value="Pending" {{ ($data->status ?? '') == 'Pending' ? 'selected' : '' }}>Pending</option>
                    <option value="Diproses" {{ ($data->status ?? '') == 'Diproses' ? 'selected' : '' }}>Diproses</option>
                    <option value="Selesai" {{ ($data->status ?? '') == 'Selesai' ? 'selected' : '' }}>Selesai</option>
                    <option value="Ditolak" {{ ($data->status ?? '') == 'Ditolak' ? 'selected' : '' }}>Ditolak</option>
                </select>
                <button type="submit" class="btn-update"><i class="fa-solid fa-floppy-disk"></i> Simpan Status</button>
            </form>
        </div>

        <!-- Informasi Merek -->
        <div class="card-detail">
            <div class="card-title">Informasi Pendaftaran Merek</div>
            <div class="info-grid">
                <div class="info-item"><label>Judul / Nama Merek</label><p>{{ $data->judul_merek }}</p></div>
                <div class="info-item"><label>Jenis Merek</label><p style="text-transform: capitalize;">{{ str_replace('-', ' ', $data->jenis_merek) }}</p></div>
                <div class="info-item"><label>Kelas Merek</label><p>{{ $data->kelas_merek }}</p></div>
                <div class="info-item"><label>Unsur Warna Merek</label><p>{{ $data->unsur_warna ?? '-' }}</p></div>
            </div>
            <div class="info-item"><label>Deskripsi / Arti Merek</label><p>{{ $data->deskripsi_merek ?? '-' }}</p></div>
        </div>

        <!-- Data Pemohon 1 s/d 5 -->
        @for ($i = 1; $i <= 5; $i++)
            @php
                $nama = $data->{"nama_pemohon_$i"};
                $nik = $data->{"nik_pemohon_$i"};
                $email = $data->{"email_pemohon_$i"};
                $hp = $data->{"no_hp_$i"};
                $prodi = $data->{"prodi_pemohon_$i"};
                $prodiLainnya = $data->{"prodi_lainnya_$i"};
                $npwp = $data->{"npwp_pemohon_$i"};
                $alamat = $data->{"alamat_pemohon_$i"};
                $kodePos = $data->{"kode_pos_$i"};
            @endphp

            @if($nama)
                <div class="card-detail">
                    <div class="card-title">Data Pemohon {{ $i }} {{ $i == 1 ? '(Penanggung Jawab)' : '' }}</div>
                    <div class="info-grid">
                        <div class="info-item"><label>Nama Lengkap</label><p>{{ $nama }}</p></div>
                        <div class="info-item"><label>NIK</label><p>{{ $nik ?? '-' }}</p></div>
                        <div class="info-item"><label>Email</label><p>{{ $email ?? '-' }}</p></div>
                        <div class="info-item"><label>No. HP / WA</label><p>{{ $hp ?? '-' }}</p></div>
                        <div class="info-item">
                            <label>Prodi / Instansi</label>
                            <p>{{ $prodi == 'other' ? $prodiLainnya : ($prodi ?? '-') }}</p>
                        </div>
                        <div class="info-item"><label>NPWP</label><p>{{ $npwp ?? '-' }}</p></div>
                    </div>
                    <div class="info-item">
                        <label>Alamat Lengkap</label>
                        <p>{{ $alamat ?? '-' }} {{ $kodePos ? '(Kode Pos: '.$kodePos.')' : '' }}</p>
                    </div>
                </div>
            @endif
        @endfor

        <!-- File Unggahan -->
        <div class="card-detail">
            <div class="card-title">Berkas Lampiran Merek</div>
            <div class="file-list">
                @php
                    $files = [
                        'KTP Pemohon' => $data->file_ktp,
                        'Akta Pendirian' => $data->file_akta_pendirian,
                        'Surat Pengalihan Hak' => $data->file_pengalihan_hak,
                        'Surat Keterangan UMKM' => $data->file_surat_umkm,
                        'Tanda Tangan Digital' => $data->file_ttd_digital,
                        'Bentuk / Label Merek' => $data->file_bentuk_merek,
                        'Dokumen Pendukung' => $data->file_dokumen_pendukung,
                        'Deskripsi Merek' => $data->file_deskripsi_merek,
                    ];
                @endphp

                @foreach($files as $label => $filePath)
                    @if($filePath)
                        <div class="file-item">
                            <span>
                                @if(Str::endsWith($filePath, ['.png', '.jpg', '.jpeg']))
                                    <i class="fa-solid fa-file-image" style="color: #0284c7; margin-right: 8px;"></i>
                                @else
                                    <i class="fa-solid fa-file-pdf" style="color: #e11d48; margin-right: 8px;"></i>
                                @endif
                                {{ $label }}
                            </span>
                            <a href="{{ asset('storage/' . $filePath) }}" target="_blank" class="btn-download"><i class="fa-solid fa-eye"></i> Lihat / Unduh</a>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>

    </div>

</body>
</html>