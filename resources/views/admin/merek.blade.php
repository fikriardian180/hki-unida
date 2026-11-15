@extends('layouts.admin')

@section('title', 'Kelola Merek - Admin Sentra HKI')
@section('header_title', 'Daftar Permohonan Merek')

@push('styles')
<style>
    .table-container { background: white; border-radius: 8px; padding: 20px; box-shadow: 0 2px 4px rgba(0,0,0,0.04); overflow-x: auto; }
    table { width: 100%; border-collapse: collapse; text-align: left; font-size: 14px; }
    th, td { padding: 12px 15px; border-bottom: 1px solid #e2e8f0; }
    th { background-color: #f1f5f9; color: #334155; font-weight: 600; }
    tr:hover { background-color: #f8fafc; }
    
    /* Styling Select Status Interaktif */
    .status-select {
        padding: 6px 10px;
        border-radius: 6px;
        font-size: 12px;
        font-weight: 600;
        border: 1px solid #cbd5e1;
        cursor: pointer;
        outline: none;
    }
    .status-pending  { background-color: #fef3c7; color: #d97706; border-color: #fde68a; }
    .status-diproses { background-color: #e0f2fe; color: #0284c7; border-color: #bae6fd; }
    .status-selesai  { background-color: #d1fae5; color: #059669; border-color: #a7f3d0; }
    .status-ditolak  { background-color: #fee2e2; color: #dc2626; border-color: #fca5a5; }

    .btn-action { padding: 6px 12px; background-color: #3B6B80; color: white; text-decoration: none; border-radius: 4px; font-size: 12px; font-weight: 600; }
    .btn-action:hover { background-color: #2c5263; }

    .filter-container { display: flex; gap: 12px; margin-bottom: 20px; flex-wrap: wrap; }
    .filter-input { padding: 8px 14px; border: 1px solid #cbd5e1; border-radius: 6px; font-size: 14px; outline: none; flex: 1; min-width: 200px; }
    .filter-select { padding: 8px 14px; border: 1px solid #cbd5e1; border-radius: 6px; font-size: 14px; outline: none; background: white; }
    .btn-filter { padding: 8px 16px; background: #3B6B80; color: white; border: none; border-radius: 6px; font-weight: 600; cursor: pointer; }
    .btn-reset { padding: 8px 16px; background: #94a3b8; color: white; text-decoration: none; border-radius: 6px; font-weight: 600; font-size: 14px; display: inline-flex; align-items: center; }
    .btn-export { padding: 8px 16px; background: #10b981; color: white; text-decoration: none; border-radius: 6px; font-weight: 600; font-size: 14px; display: inline-flex; align-items: center; gap: 6px; }
    .btn-export:hover { background: #059669; }
</style>
@endpush

@section('content')
    <div style="margin-bottom: 15px; display: flex; justify-content: space-between; align-items: center;">
        <div>
            @if(session('success'))
                <span style="color: #059669; font-weight: 600; font-size: 14px;">
                    <i class="fa-solid fa-circle-check"></i> {{ session('success') }}
                </span>
            @endif
        </div>
        <span style="color: #64748b; font-size: 14px;">Total: <strong>{{ $dataMerek->count() }} Permohonan</strong></span>
    </div>

    <div class="table-container">
        <form action="{{ route('admin.merek') }}" method="GET" class="filter-container">
            <input type="text" name="search" class="filter-input" placeholder="Cari No. Reg, pemohon, judul merek, atau email..." value="{{ request('search') }}">
            <select name="status" class="filter-select">
                <option value="">-- Semua Status --</option>
                <option value="pending" {{ request('status') == 'pending' ? 'selected' : '' }}>Diterima (Pending)</option>
                <option value="diproses" {{ request('status') == 'diproses' ? 'selected' : '' }}>Diproses</option>
                <option value="selesai" {{ request('status') == 'selesai' ? 'selected' : '' }}>Selesai</option>
                <option value="ditolak" {{ request('status') == 'ditolak' ? 'selected' : '' }}>Ditolak</option>
            </select>
            <button type="submit" class="btn-filter"><i class="fa-solid fa-magnifying-glass"></i> Cari</button>
            @if(request('search') || request('status'))
                <a href="{{ route('admin.merek') }}" class="btn-reset">Reset</a>
            @endif

            <a href="{{ route('admin.merek.export') }}" class="btn-export">
                <i class="fa-solid fa-file-excel"></i> Ekspor CSV
            </a>
        </form>

        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>No. Registrasi</th>
                    <th>Tanggal Kirim</th>
                    <th>Pemohon Utama</th>
                    <th>Judul / Nama Merek</th>
                    <th>Tipe Merek</th>
                    <th>Status Pengajuan</th>
                    <th>Aksi</th>
                    <th>Hapus</th>
                </tr>
            </thead>
            <tbody>
                @forelse($dataMerek as $index => $item)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td style="font-family: monospace; font-weight: bold; color: #164e63;">
                            {{ $item->nomor_registrasi ?? '-' }}
                        </td>
                        <td>{{ $item->created_at->format('d M Y H:i') }}</td>
                        <td>
                            <strong>{{ $item->nama_pemohon_1 }}</strong><br>
                            <small style="color: #64748b;">{{ $item->email_pj }}</small>
                        </td>
                        <td>{{ $item->judul_merek }}</td>
                        <td><span style="text-transform: capitalize;">{{ $item->tipe_merek ?? '-' }}</span></td>
                        <td>
                            <!-- Form Update Status Instant -->
                            <form action="{{ route('admin.merek.status', $item->id) }}" method="POST">
                                @csrf
                                @method('POST')
                                @php $currentStatus = $item->status ?? 'pending'; @endphp
                                <select name="status" onchange="this.form.submit()" class="status-select 
                                    {{ $currentStatus == 'pending' ? 'status-pending' : '' }}
                                    {{ $currentStatus == 'verifikasi_berkas' ? 'status-verifikasi' : '' }}
                                    {{ $currentStatus == 'diajukan_djki' ? 'status-djki' : '' }}
                                    {{ $currentStatus == 'sertifikat_terbit' ? 'status-sertifikat' : '' }}
                                    {{ $currentStatus == 'ditolak' ? 'status-ditolak' : '' }}">
                                    <option value="pending" {{ $currentStatus == 'pending' ? 'selected' : '' }}>Diterima (Pending)</option>
                                    <option value="diproses" {{ $currentStatus == 'diproses' ? 'selected' : '' }}>Diproses</option>
                                    <option value="selesai" {{ $currentStatus == 'selesai' ? 'selected' : '' }}>Selesai</option>
                                    <option value="ditolak" {{ $currentStatus == 'ditolak' ? 'selected' : '' }}>Ditolak</option>
                                </select>
                            </form>
                        </td>
                        <td>
                            <a href="{{ route('admin.detail-merek', $item->id) }}" class="btn-action" style="display: inline-flex; align-items: center; gap: 6px; white-space: nowrap;">
                                <i class="fa-solid fa-eye"></i>
                                <span>Detail</span>
                            </a>
                        </td>
                        <td>
                            <form action="{{ route('merek.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus permohonan ini?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" style="padding: 6px 10px; background-color: #ef4444; color: white; border: none; border-radius: 4px; font-size: 12px; font-weight: 600; cursor: pointer;">
                                    <i class="fa-solid fa-trash"></i> Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="8" style="text-align: center; color: #64748b; padding: 20px;">
                            @if(request('search') || request('status'))
                                Data permohonan yang dicari tidak ditemukan.
                            @else
                                Belum ada permohonan Merek yang masuk.
                            @endif
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection

@push('scripts')
<script>
    document.querySelector('.filter-select').addEventListener('change', function() {
        this.form.submit();
    });
    // Warna Status Dropdown diubah secara dinamis saat halaman dimuat
    document.addEventListener('DOMContentLoaded', function() {
        const statusSelects = document.querySelectorAll('.status-select');
        statusSelects.forEach(select => {
            const currentStatus = select.value.toLowerCase();
            select.classList.remove('status-pending', 'status-diproses', 'status-selesai', 'status-ditolak');
            if (currentStatus === 'pending') select.classList.add('status-pending');
            else if (currentStatus === 'diproses') select.classList.add('status-diproses');
            else if (currentStatus === 'selesai') select.classList.add('status-selesai');
            else if (currentStatus === 'ditolak') select.classList.add('status-ditolak');
        });
    });
</script>
@endpush