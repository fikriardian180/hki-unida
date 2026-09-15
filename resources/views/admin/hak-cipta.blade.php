@extends('layouts.admin')

@section('title', 'Kelola Hak Cipta - Admin Sentra HKI')
@section('header_title', 'Daftar Permohonan Hak Cipta')

@push('styles')
<style>
    .table-container { background: white; border-radius: 8px; padding: 20px; box-shadow: 0 2px 4px rgba(0,0,0,0.04); overflow-x: auto; }
    table { width: 100%; border-collapse: collapse; text-align: left; font-size: 14px; }
    th, td { padding: 12px 15px; border-bottom: 1px solid #e2e8f0; }
    th { background-color: #f1f5f9; color: #334155; font-weight: 600; }
    tr:hover { background-color: #f8fafc; }
    
    .badge { padding: 4px 10px; border-radius: 20px; font-size: 12px; font-weight: 600; display: inline-block; }
    .badge-pending { background-color: #fef3c7; color: #d97706; }
    .badge-diproses { background-color: #e0f2fe; color: #0284c7; }
    .badge-selesai { background-color: #d1fae5; color: #059669; }
    .badge-ditolak { background-color: #fee2e2; color: #dc2626; }
    
    .btn-action { padding: 6px 12px; background-color: #3B6B80; color: white; text-decoration: none; border-radius: 4px; font-size: 12px; font-weight: 600; }
    .btn-action:hover { background-color: #2c5263; }

    /* Style Form Filter */
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
    <div style="margin-bottom: 15px; display: flex; justify-content: flex-end; align-items: center;">
        <span style="color: #64748b; font-size: 14px;">Total: <strong>{{ $dataHakCipta->count() }} Permohonan</strong></span>
    </div>

    <div class="table-container">
        <!-- Form Pencarian, Filter Status & Tombol Ekspor -->
        <form action="{{ route('admin.hakcipta') }}" method="GET" class="filter-container">
            <input type="text" name="search" class="filter-input" placeholder="Cari nama pemohon, judul karya, atau email..." value="{{ request('search') }}">
            <select name="status" class="filter-select">
                <option value="">-- Semua Status --</option>
                <option value="Pending" {{ request('status') == 'Pending' ? 'selected' : '' }}>Pending</option>
                <option value="Diproses" {{ request('status') == 'Diproses' ? 'selected' : '' }}>Diproses</option>
                <option value="Selesai" {{ request('status') == 'Selesai' ? 'selected' : '' }}>Selesai</option>
                <option value="Ditolak" {{ request('status') == 'Ditolak' ? 'selected' : '' }}>Ditolak</option>
            </select>
            <button type="submit" class="btn-filter"><i class="fa-solid fa-magnifying-glass"></i> Cari</button>
            @if(request('search') || request('status'))
                <a href="{{ route('admin.hakcipta') }}" class="btn-reset">Reset</a>
            @endif
            
            <!-- TOMBOL EKSPOR EXCEL/CSV -->
            <a href="{{ route('admin.hakcipta.export') }}" class="btn-export">
                <i class="fa-solid fa-file-excel"></i> Ekspor Excel
            </a>
        </form>

        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Tanggal Kirim</th>
                    <th>Pemohon Utama</th>
                    <th>Judul Ciptaan</th>
                    <th>Jenis Hak Cipta</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($dataHakCipta as $index => $item)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $item->created_at->format('d M Y H:i') }}</td>
                        <td>
                            <strong>{{ $item->nama_pemohon_1 }}</strong><br>
                            <small style="color: #64748b;">{{ $item->email_pj }}</small>
                        </td>
                        <td>{{ $item->judul_karya }}</td>
                        <td>{{ $item->jenis_hak_cipta }}</td>
                        <td>
                            @php $status = $item->status ?? 'Pending'; @endphp
                            <span class="badge badge-{{ strtolower($status) }}">{{ $status }}</span>
                        </td>
                        <td>
                            <a href="{{ route('admin.detail-hak-cipta', $item->id) }}" class="btn-action"><i class="fa-solid fa-eye"></i> Detail</a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" style="text-align: center; color: #64748b; padding: 20px;">
                            @if(request('search') || request('status'))
                                Data permohonan yang dicari tidak ditemukan.
                            @else
                                Belum ada permohonan Hak Cipta yang masuk.
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
    // Script Auto-submit saat dropdown Status diubah
    document.querySelector('.filter-select').addEventListener('change', function() {
        this.form.submit();
    });
</script>
@endpush