@extends('layouts.admin')

@section('title', 'Dashboard Admin - Sentra HKI UNIDA Gontor')
@section('header_title', 'Ringkasan Sistem Informasi HKI')

@push('styles')
<style>
    .grid-cards { 
        display: grid; 
        grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); 
        gap: 20px; 
        margin-bottom: 30px; 
    }
    .card { 
        background: white; 
        padding: 20px; 
        border-radius: 8px; 
        box-shadow: 0 2px 4px rgba(0,0,0,0.04); 
        border-left: 5px solid #3B6B80; 
    }
    .card h3 { 
        font-size: 14px; 
        color: #64748b; 
        margin-bottom: 8px; 
    }
    .card .number { 
        font-size: 28px; 
        font-weight: 700; 
        color: #0f172a; 
    }
    .table-container {
        background: white;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0,0,0,0.04);
        margin-bottom: 30px;
    }
    .table-container h3 {
        font-size: 16px;
        color: #1e293b;
        margin-bottom: 15px;
    }
</style>
@endpush

@section('content')
    <!-- Kartu Ringkasan Statistik -->
    <div class="grid-cards">
        <div class="card" style="border-left-color: #3b82f6;">
            <h3>Total Permohonan</h3>
            <div class="number">{{ $totalPermohonan }}</div>
        </div>
        <div class="card" style="border-left-color: #10b981;">
            <h3>Hak Cipta</h3>
            <div class="number">{{ $totalHakCipta }}</div>
        </div>
        <div class="card" style="border-left-color: #f59e0b;">
            <h3>Paten</h3>
            <div class="number">{{ $totalPaten }}</div>
        </div>
        <div class="card" style="border-left-color: #8b5cf6;">
            <h3>Merek</h3>
            <div class="number">{{ $totalMerek }}</div>
        </div>
    </div>

    <!-- 1. Tabel Daftar Pengajuan Hak Cipta -->
    <div class="table-container">
        <h3><i class="fa-solid fa-copyright" style="color: #10b981;"></i> Daftar Pengajuan Hak Cipta Masuk</h3>
        <table style="width: 100%; border-collapse: collapse; font-size: 14px; text-align: left;">
            <thead>
                <tr style="border-bottom: 2px solid #e2e8f0; color: #475569;">
                    <th style="padding: 10px;">No</th>
                    <th style="padding: 10px;">Email PJ</th>
                    <th style="padding: 10px;">Nama Pemohon 1</th>
                    <th style="padding: 10px;">Judul Karya</th>
                    <th style="padding: 10px;">Tanggal Masuk</th>
                    <th style="padding: 10px;">Status</th>
                    <th style="padding: 10px;">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($hakCiptasList as $index => $item)
                    <tr style="border-bottom: 1px solid #f1f5f9;">
                        <td style="padding: 10px;">{{ $index + 1 }}</td>
                        <td style="padding: 10px;">{{ $item->email_pj }}</td>
                        <td style="padding: 10px;">{{ $item->nama_pemohon_1 }}</td>
                        <td style="padding: 10px;">{{ $item->judul_karya }}</td>
                        <td style="padding: 10px;">{{ $item->created_at ? $item->created_at->format('d M Y') : '-' }}</td>
                        <td style="padding: 10px;">
                            <span style="background: #fef3c7; color: #d97706; padding: 4px 8px; border-radius: 4px; font-weight: 600; font-size: 12px;">
                                {{ $item->status ?? 'Pending' }}
                            </span>
                        </td>
                        <td style="padding: 10px;">
                            <a href="{{ route('admin.hakcipta.detail', $item->id) }}" style="background: #3B6B80; color: white; padding: 6px 12px; border-radius: 4px; text-decoration: none; font-size: 12px;">
                                Lihat Isi & Berkas
                            </a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" style="padding: 15px; text-align: center; color: #94a3b8;">Belum ada berkas Hak Cipta yang masuk.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <!-- 2. Tabel Daftar Pengajuan Paten -->
    <div class="table-container">
        <h3><i class="fa-solid fa-lightbulb" style="color: #f59e0b;"></i> Daftar Pengajuan Paten Masuk</h3>
        <table style="width: 100%; border-collapse: collapse; font-size: 14px; text-align: left;">
            <thead>
                <tr style="border-bottom: 2px solid #e2e8f0; color: #475569;">
                    <th style="padding: 10px;">No</th>
                    <th style="padding: 10px;">Email PJ</th>
                    <th style="padding: 10px;">Nama Pemohon 1</th>
                    <th style="padding: 10px;">Judul Invensi</th>
                    <th style="padding: 10px;">Tanggal Masuk</th>
                    <th style="padding: 10px;">Status</th>
                    <th style="padding: 10px;">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($patenList ?? [] as $index => $item)
                    <tr style="border-bottom: 1px solid #f1f5f9;">
                        <td style="padding: 10px;">{{ $index + 1 }}</td>
                        <td style="padding: 10px;">{{ $item->email_pj }}</td>
                        <td style="padding: 10px;">{{ $item->nama_pemohon_1 }}</td>
                        <td style="padding: 10px;">{{ $item->judul_invensi_id }}</td>
                        <td style="padding: 10px;">{{ $item->created_at ? $item->created_at->format('d M Y') : '-' }}</td>
                        <td style="padding: 10px;">
                            <span style="background: #fef3c7; color: #d97706; padding: 4px 8px; border-radius: 4px; font-weight: 600; font-size: 12px;">
                                {{ $item->status ?? 'Pending' }}
                            </span>
                        </td>
                        <td style="padding: 10px;">
                            <a href="{{ route('admin.paten.detail', $item->id) }}" style="background: #3B6B80; color: white; padding: 6px 12px; border-radius: 4px; text-decoration: none; font-size: 12px;">
                                Lihat Isi & Berkas
                            </a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" style="padding: 15px; text-align: center; color: #94a3b8;">Belum ada berkas Paten yang masuk.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <!-- 3. Tabel Daftar Pengajuan Merek -->
    <div class="table-container">
        <h3><i class="fa-solid fa-trademark" style="color: #8b5cf6;"></i> Daftar Pengajuan Merek Masuk</h3>
        <table style="width: 100%; border-collapse: collapse; font-size: 14px; text-align: left;">
            <thead>
                <tr style="border-bottom: 2px solid #e2e8f0; color: #475569;">
                    <th style="padding: 10px;">No</th>
                    <th style="padding: 10px;">Email PJ</th>
                    <th style="padding: 10px;">Nama Pemohon 1</th>
                    <th style="padding: 10px;">Judul / Nama Merek</th>
                    <th style="padding: 10px;">Tanggal Masuk</th>
                    <th style="padding: 10px;">Status</th>
                    <th style="padding: 10px;">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($merekList ?? [] as $index => $item)
                    <tr style="border-bottom: 1px solid #f1f5f9;">
                        <td style="padding: 10px;">{{ $index + 1 }}</td>
                        <td style="padding: 10px;">{{ $item->email_pj }}</td>
                        <td style="padding: 10px;">{{ $item->nama_pemohon_1 }}</td>
                        <td style="padding: 10px;">{{ $item->judul_merek }}</td>
                        <td style="padding: 10px;">{{ $item->created_at ? $item->created_at->format('d M Y') : '-' }}</td>
                        <td style="padding: 10px;">
                            <span style="background: #fef3c7; color: #d97706; padding: 4px 8px; border-radius: 4px; font-weight: 600; font-size: 12px;">
                                {{ $item->status ?? 'Pending' }}
                            </span>
                        </td>
                        <td style="padding: 10px;">
                            <a href="{{ route('admin.merek.detail', $item->id) }}" style="background: #3B6B80; color: white; padding: 6px 12px; border-radius: 4px; text-decoration: none; font-size: 12px;">
                                Lihat Isi & Berkas
                            </a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" style="padding: 15px; text-align: center; color: #94a3b8;">Belum ada berkas Merek yang masuk.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection