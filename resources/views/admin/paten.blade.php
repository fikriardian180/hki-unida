<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Paten - Admin Sentra HKI</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; }
        body { background-color: #f8fafc; color: #1e293b; display: flex; min-height: 100vh; }
        
        .sidebar { width: 260px; background-color: #3B6B80; color: white; padding: 25px 20px; display: flex; flex-direction: column; justify-content: space-between; }
        .sidebar-brand { font-size: 20px; font-weight: 700; text-align: center; margin-bottom: 30px; border-bottom: 1px solid rgba(255,255,255,0.2); padding-bottom: 15px; }
        .sidebar-menu { list-style: none; }
        .sidebar-menu li { margin-bottom: 10px; }
        .sidebar-menu a { color: #e2e8f0; text-decoration: none; padding: 12px 15px; display: flex; align-items: center; gap: 12px; border-radius: 6px; font-weight: 500; transition: all 0.2s; }
        .sidebar-menu a:hover, .sidebar-menu a.active { background-color: #2c5263; color: white; }
        .btn-logout { background: none; border: none; color: #f87171; cursor: pointer; font-size: 15px; font-weight: 600; padding: 12px 15px; width: 100%; text-align: left; display: flex; align-items: center; gap: 12px; }

        .main-content { flex: 1; padding: 30px; overflow-y: auto; }
        .header { display: flex; justify-content: space-between; align-items: center; margin-bottom: 25px; background: white; padding: 20px 25px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.04); }
        
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

        .filter-container { display: flex; gap: 12px; margin-bottom: 20px; flex-wrap: wrap; }
        .filter-input { padding: 8px 14px; border: 1px solid #cbd5e1; border-radius: 6px; font-size: 14px; outline: none; flex: 1; min-width: 200px; }
        .filter-select { padding: 8px 14px; border: 1px solid #cbd5e1; border-radius: 6px; font-size: 14px; outline: none; background: white; }
        .btn-filter { padding: 8px 16px; background: #3B6B80; color: white; border: none; border-radius: 6px; font-weight: 600; cursor: pointer; }
        .btn-reset { padding: 8px 16px; background: #94a3b8; color: white; text-decoration: none; border-radius: 6px; font-weight: 600; font-size: 14px; display: inline-flex; align-items: center; }
        .btn-export { padding: 8px 16px; background: #10b981; color: white; text-decoration: none; border-radius: 6px; font-weight: 600; font-size: 14px; display: inline-flex; align-items: center; gap: 6px; }
        .btn-export:hover { background: #059669; }
    </style>
</head>
<body>

    <div class="sidebar">
        <div>
            <div class="sidebar-brand"><i class="fa-solid fa-shield-halved"></i> Sentra HKI Admin</div>
            <ul class="sidebar-menu">
                <li><a href="{{ route('admin.dashboard') }}"><i class="fa-solid fa-chart-line"></i> Dashboard</a></li>
                <li><a href="{{ route('admin.hakcipta') }}"><i class="fa-solid fa-copyright"></i> Hak Cipta</a></li>
                <li><a href="{{ route('admin.paten') }}" class="active"><i class="fa-solid fa-lightbulb"></i> Paten</a></li>
                <li><a href="{{ route('admin.merek') }}"><i class="fa-solid fa-trademark"></i> Merek</a></li>
            </ul>
        </div>
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="btn-logout"><i class="fa-solid fa-right-from-bracket"></i> Keluar (Logout)</button>
        </form>
    </div>

    <div class="main-content">
        <div class="header">
            <h2>Daftar Permohonan Paten</h2>
            <span>Total: <strong>{{ $dataPaten->count() }} Permohonan</strong></span>
        </div>

        <div class="table-container">
            <form action="{{ route('admin.paten') }}" method="GET" class="filter-container">
                <input type="text" name="search" class="filter-input" placeholder="Cari nama pemohon, judul invensi, atau email..." value="{{ request('search') }}">
                <select name="status" class="filter-select">
                    <option value="">-- Semua Status --</option>
                    <option value="Pending" {{ request('status') == 'Pending' ? 'selected' : '' }}>Pending</option>
                    <option value="Diproses" {{ request('status') == 'Diproses' ? 'selected' : '' }}>Diproses</option>
                    <option value="Selesai" {{ request('status') == 'Selesai' ? 'selected' : '' }}>Selesai</option>
                    <option value="Ditolak" {{ request('status') == 'Ditolak' ? 'selected' : '' }}>Ditolak</option>
                </select>
                <button type="submit" class="btn-filter"><i class="fa-solid fa-magnifying-glass"></i> Cari</button>
                @if(request('search') || request('status'))
                    <a href="{{ route('admin.paten') }}" class="btn-reset">Reset</a>
                @endif

                <a href="{{ route('admin.paten.export') }}" class="btn-export">
                    <i class="fa-solid fa-file-excel"></i> Ekspor Excel
                </a>
            </form>

            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Tanggal Kirim</th>
                        <th>Pemohon Utama</th>
                        <th>Judul Invensi</th>
                        <th>Jenis Paten</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($dataPaten as $index => $item)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $item->created_at->format('d M Y H:i') }}</td>
                            <td>
                                <strong>{{ $item->nama_pemohon_1 }}</strong><br>
                                <small style="color: #64748b;">{{ $item->email_pj }}</small>
                            </td>
                            <td>{{ $item->judul_invensi_id }}</td>
                            <td><span style="text-transform: capitalize;">{{ str_replace('-', ' ', $item->jenis_paten) }}</span></td>
                            <td>
                                @php $status = $item->status ?? 'Pending'; @endphp
                                <span class="badge badge-{{ strtolower($status) }}">{{ $status }}</span>
                            </td>
                            <td>
                                <a href="{{ route('admin.paten.detail', $item->id) }}" class="btn-action"><i class="fa-solid fa-eye"></i> Detail</a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" style="text-align: center; color: #64748b; padding: 20px;">
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
    </div>

<script>
    document.querySelector('.filter-select').addEventListener('change', function() {
        this.form.submit();
    });
</script>
</body>
</html>