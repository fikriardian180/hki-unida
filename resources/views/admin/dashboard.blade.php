<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin - Sentra HKI UNIDA Gontor</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; }
        body { background-color: #f8fafc; color: #1e293b; display: flex; min-height: 100vh; }
        
        /* Sidebar */
        .sidebar { width: 260px; background-color: #3B6B80; color: white; padding: 25px 20px; display: flex; flex-direction: column; justify-content: space-between; }
        .sidebar-brand { font-size: 20px; font-weight: 700; text-align: center; margin-bottom: 30px; border-bottom: 1px solid rgba(255,255,255,0.2); padding-bottom: 15px; }
        .sidebar-menu { list-style: none; }
        .sidebar-menu li { margin-bottom: 10px; }
        .sidebar-menu a { color: #e2e8f0; text-decoration: none; padding: 12px 15px; display: flex; align-items: center; gap: 12px; border-radius: 6px; font-weight: 500; transition: all 0.2s; }
        .sidebar-menu a:hover, .sidebar-menu a.active { background-color: #2c5263; color: white; }
        .btn-logout { background: none; border: none; color: #f87171; cursor: pointer; font-size: 15px; font-weight: 600; padding: 12px 15px; width: 100%; text-align: left; display: flex; align-items: center; gap: 12px; }

        /* Content */
        .main-content { flex: 1; padding: 30px; overflow-y: auto; }
        .header { display: flex; justify-content: space-between; align-items: center; margin-bottom: 30px; background: white; padding: 20px 25px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.04); }
        .grid-cards { display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 20px; margin-bottom: 30px; }
        .card { background: white; padding: 20px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.04); border-left: 5px solid #3B6B80; }
        .card h3 { font-size: 14px; color: #64748b; margin-bottom: 8px; }
        .card .number { font-size: 28px; font-weight: 700; color: #0f172a; }
    </style>
</head>
<body>

    <!-- Sidebar -->
    <div class="sidebar">
        <div>
            <div class="sidebar-brand"><i class="fa-solid fa-shield-halved"></i> Sentra HKI Admin</div>
            <ul class="sidebar-menu">
                <li><a href="{{ route('admin.dashboard') }}" class="active"><i class="fa-solid fa-chart-line"></i> Dashboard</a></li>
                <li><a href="{{ route('admin.hakcipta') }}"><i class="fa-solid fa-copyright"></i> Hak Cipta</a></li>
                <li><a href="{{ route('admin.paten') }}"><i class="fa-solid fa-lightbulb"></i> Paten</a></li>
                <li><a href="{{ route('admin.merek') }}"><i class="fa-solid fa-trademark"></i> Merek</a></li>
            </ul>
        </div>
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="btn-logout"><i class="fa-solid fa-right-from-bracket"></i> Keluar (Logout)</button>
        </form>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <div class="header">
            <h2>Ringkasan Sistem Informasi HKI</h2>
            <span>Halo, <strong>{{ Auth::user()->name }}</strong></span>
        </div>

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
    </div>

</body>
</html>