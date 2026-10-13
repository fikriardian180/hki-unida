@extends('layouts.admin')

@section('title', 'Kelola Paten - Admin Sentra HKI')
@section('header_title', 'Daftar Permohonan Paten')

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
    .status-pending { background-color: #fef3c7; color: #92400e; border-color: #fde68a; }
    .status-verifikasi { background-color: #dbeafe; color: #1e40af; border-color: #bfdbfe; }
    .status-djki { background-color: #f3e8ff; color: #6b21a8; border-color: #e9d5ff; }
    .status-sertifikat { background-color: #d1fae5; color: #065f46; border-color: #a7f3d0; }
    .status-ditolak { background-color: #fee2e2; color: #991b1b; border-color: #fecaca; }

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
        <span style="color: #64748b; font-size: 14px;">Total: <strong>{{ $dataPaten->count() }} Permohonan</strong></span>
    </div>

    <div class="table-container">
        <form action="{{ route('admin.paten') }}" method="GET" class="filter-container">
            <input type="text" name="search" class="filter-input" placeholder="Cari No. Reg, pemohon, judul invensi, atau email..." value="{{ request('search') }}">
            <select name="status" class="filter-select">
                <option value="">-- Semua Status --</option>
                <option value="pending" {{ request('status') == 'pending' ? 'selected' : '' }}>Diterima (Pending)</option>
                <option value="verifikasi_berkas" {{ request('status') == 'verifikasi_berkas' ? 'selected' : '' }}>Verifikasi Berkas</option>
                <option value="diajukan_djki" {{ request('status') == 'diajukan_djki' ? 'selected' : '' }}>Diajukan ke DJKI</option>
                <option value="sertifikat_terbit" {{ request('status') == 'sertifikat_terbit' ? 'selected' : '' }}>Sertifikat Terbit</option>
                <option value="ditolak" {{ request('status') == 'ditolak' ? 'selected' : '' }}>Ditolak / Revisi</option>
            </select>
            <button type="submit" class="btn-filter"><i class="fa-solid fa-magnifying-glass"></i> Cari</button>
            @if(request('search') || request('status'))
                <a href="{{ route('admin.paten') }}" class="btn-reset">Reset</a>
            @endif

            <a href="{{ route('admin.paten.export') }}" class="btn-export">
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
                    <th>Judul Invensi</th>
                    <th>Jenis Paten</th>
                    <th>Status Pengajuan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($dataPaten as $index => $item)
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
                        <td>{{ $item->judul_invensi_id }}</td>
                        <td><span style="text-transform: capitalize;">{{ str_replace('-', ' ', $item->jenis_paten) }}</span></td>
                        <td>
                            <!-- Form Update Status Instant -->
                            <form action="{{ route('admin.paten.status', $item->id) }}" method="POST">
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
                                    <option value="verifikasi_berkas" {{ $currentStatus == 'verifikasi_berkas' ? 'selected' : '' }}>Verifikasi Berkas</option>
                                    <option value="diajukan_djki" {{ $currentStatus == 'diajukan_djki' ? 'selected' : '' }}>Diajukan ke DJKI</option>
                                    <option value="sertifikat_terbit" {{ $currentStatus == 'sertifikat_terbit' ? 'selected' : '' }}>Sertifikat Terbit</option>
                                    <option value="ditolak" {{ $currentStatus == 'ditolak' ? 'selected' : '' }}>Ditolak / Revisi</option>
                                </select>
                            </form>
                        </td>
                        <td>
                            <a href="{{ route('admin.detail-paten', $item->id) }}" class="btn-action" style="display: inline-flex; align-items: center; gap: 6px; white-space: nowrap;">
                                <i class="fa-solid fa-eye"></i>
                                <span>Detail</span>
                            </a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="8" style="text-align: center; color: #64748b; padding: 20px;">
                            @if(request('search') || request('status'))
                                Data permohonan yang dicari tidak ditemukan.
                            @else
                                Belum ada permohonan Paten yang masuk.
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
</script>
@endpush