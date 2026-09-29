<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard Admin - Sentra HKI UNIDA Gontor')</title>
    
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
    
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Global Admin CSS -->
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; }
        body { background-color: #f8fafc; color: #1e293b; display: flex; min-height: 100vh; }
        
        /* Sidebar Styles */
        .sidebar { width: 260px; background-color: #164e63; color: white; padding: 25px 20px; display: flex; flex-direction: column; justify-content: space-between; flex-shrink: 0; }
        
        .sidebar-brand { 
            font-size: 20px; 
            font-weight: 700; 
            margin-bottom: 30px; 
            border-bottom: 1px solid rgba(255, 255, 255, 0.2); 
            padding-bottom: 15px; 
            display: flex; 
            align-items: center; 
            justify-content: center; 
            gap: 10px; 
        }
        
        .brand-logo {
            width: 35px; 
            height: auto; 
            object-fit: contain;
            margin: 0; 
        }

        .sidebar-menu { list-style: none; }
        .sidebar-menu li { margin-bottom: 10px; }
        .sidebar-menu a { color: #e2e8f0; text-decoration: none; padding: 12px 15px; display: flex; align-items: center; gap: 12px; border-radius: 6px; font-weight: 500; transition: all 0.2s; }
        .sidebar-menu a:hover, .sidebar-menu a.active { background-color: #2c5263; color: white; }
        .btn-logout { background: none; border: none; color: #f87171; cursor: pointer; font-size: 15px; font-weight: 600; padding: 12px 15px; width: 100%; text-align: left; display: flex; align-items: center; gap: 12px; }

        /* Main Content Styles */
        .main-content { 
            flex: 1; 
            padding: 30px; 
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            min-height: 100vh;
            overflow-y: auto; 
        }

        .content-body {
            flex: 1;
        }

        .header { display: flex; justify-content: space-between; align-items: center; margin-bottom: 30px; background: white; padding: 20px 25px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.04); }

        /* General Table & Card Styling */
        .card { background: white; padding: 25px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.04); margin-top: 15px; }
        .btn-primary { background-color: #164e63; color: white; padding: 10px 18px; border-radius: 6px; text-decoration: none; font-weight: 600; display: inline-block; border: none; cursor: pointer; }
        .btn-primary:hover { background-color: #2c5263; }
        .btn-danger { background-color: #ef4444; color: white; padding: 6px 12px; border-radius: 4px; border: none; cursor: pointer; font-weight: 600; }
        .btn-secondary { background-color: #64748b; color: white; padding: 10px 18px; border-radius: 6px; text-decoration: none; font-weight: 600; display: inline-block; }
        .alert-success { background-color: #dcfce7; color: #166534; padding: 12px 16px; border-radius: 6px; margin-bottom: 15px; }
        
        .table-custom { width: 100%; border-collapse: collapse; margin-top: 15px; }
        .table-custom th, .table-custom td { padding: 12px 15px; text-align: left; border-bottom: 1px solid #e2e8f0; }
        .table-custom th { background-color: #f1f5f9; color: #334155; font-weight: 600; }

        .form-group { margin-bottom: 18px; }
        .form-group label { display: block; font-weight: 600; margin-bottom: 6px; color: #334155; }
        .form-control { width: 100%; padding: 10px 14px; border: 1px solid #cbd5e1; border-radius: 6px; font-size: 14px; }
        .form-control:focus { outline: none; border-color: #164e63; }

        /* Copyright Footer Style */
        .footer-bottom {
            text-align: center;
            padding-top: 20px;
            margin-top: 40px;
            border-top: 1px solid #e2e8f0;
            color: #94a3b8;
            font-size: 13px;
        }
    </style>

    @stack('styles')
</head>
<body>

    <!-- Sidebar -->
    <div class="sidebar">
        <div>
            <div class="sidebar-brand">
                <img src="{{ asset('images/logo-hki.png') }}" alt="Logo" class="brand-logo">
                <span>Sentra HKI Admin</span>
            </div>
            <ul class="sidebar-menu">
                <li><a href="{{ route('admin.dashboard') }}" class="{{ request()->routeIs('admin.dashboard*') ? 'active' : '' }}"><i class="fa-solid fa-chart-line"></i> Dashboard</a></li>
                <li><a href="{{ route('admin.hakcipta') }}" class="{{ request()->routeIs('admin.hakcipta*') ? 'active' : '' }}"><i class="fa-solid fa-copyright"></i> Hak Cipta</a></li>
                <li><a href="{{ route('admin.paten') }}" class="{{ request()->routeIs('admin.paten*') ? 'active' : '' }}"><i class="fa-solid fa-lightbulb"></i> Paten</a></li>
                <li><a href="{{ route('admin.merek') }}" class="{{ request()->routeIs('admin.merek*') ? 'active' : '' }}"><i class="fa-solid fa-trademark"></i> Merek</a></li>
                
                <!-- Menu Kelola Staff (Hanya Tampil untuk Super Admin) -->
                @if(auth()->user()->email === env('ADMIN_EMAIL', 'admin@unida.gontor.ac.id'))
                    <li>
                        <a href="{{ route('admin.users.index') }}" class="{{ request()->routeIs('admin.users*') ? 'active' : '' }}">
                            <i class="fa-solid fa-users"></i> Kelola Staff
                        </a>
                    </li>
                @endif
            </ul>
        </div>

        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="btn-logout"><i class="fa-solid fa-right-from-bracket"></i> Keluar (Logout)</button>
        </form>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <div class="content-body">
            <div class="header">
                <h2>@yield('header_title', 'Ringkasan Sistem Informasi HKI')</h2>
                <span>Halo, <strong>{{ Auth::user()->name }}</strong></span>
            </div>

            <!-- Bagian Konten Dinamis Halaman -->
            @yield('content')
        </div>

        <!-- Copyright -->
        <div class="footer-bottom">
            <p>&copy; 2026 Sentra HKI UNIDA Gontor. All Rights Reserved.</p>
        </div>
    </div>

    @stack('scripts')
</body>
</html>