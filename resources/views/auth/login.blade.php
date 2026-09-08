<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin - Sentra HKI UNIDA Gontor</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: #f1f5f9;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .login-card {
            background-color: #ffffff;
            width: 100%;
            max-width: 400px;
            padding: 35px 30px;
            border-radius: 10px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
            border-top: 5px solid #3B6B80;
        }

        .login-header {
            text-align: center;
            margin-bottom: 25px;
        }

        .login-header h2 {
            font-size: 22px;
            color: #3B6B80;
            margin-bottom: 6px;
        }

        .login-header p {
            font-size: 13px;
            color: #64748b;
        }

        .form-group {
            margin-bottom: 18px;
        }

        .form-label {
            display: block;
            font-size: 13px;
            font-weight: 600;
            color: #334155;
            margin-bottom: 6px;
        }

        .form-control {
            width: 100%;
            padding: 11px 14px;
            font-size: 14px;
            border: 1px solid #cbd5e1;
            border-radius: 6px;
            outline: none;
            transition: all 0.2s;
        }

        .form-control:focus {
            border-color: #3B6B80;
            box-shadow: 0 0 0 3px rgba(59, 107, 128, 0.15);
        }

        .btn-login {
            width: 100%;
            background-color: #3B6B80;
            color: white;
            border: none;
            padding: 12px;
            font-size: 15px;
            font-weight: 600;
            border-radius: 6px;
            cursor: pointer;
            transition: background-color 0.2s;
            margin-top: 10px;
        }

        .btn-login:hover {
            background-color: #2c5263;
        }

        .alert-error {
            background-color: #fef2f2;
            border: 1px solid #fecaca;
            color: #991b1b;
            padding: 10px 12px;
            border-radius: 6px;
            font-size: 13px;
            margin-bottom: 18px;
        }
    </style>
</head>
<body>

    <div class="login-card">
        <div class="login-header">
            <h2>Panel Admin Sentra HKI</h2>
            <p>Silakan masuk untuk mengelola permohonan</p>
        </div>

        @if ($errors->any())
            <div class="alert-error">
                <i class="fa-solid fa-circle-exclamation"></i> {{ $errors->first() }}
            </div>
        @endif

        <form action="{{ route('login.post') }}" method="POST">
            @csrf
            <div class="form-group">
                <label class="form-label">Alamat Email</label>
                <input type="email" name="email" class="form-control" placeholder="admin@unida.gontor.ac.id" required value="{{ old('email') }}">
            </div>

            <div class="form-group">
                <label class="form-label">Password</label>
                <input type="password" name="password" class="form-control" placeholder="••••••••" required>
            </div>

            <button type="submit" class="btn-login">
                <i class="fa-solid fa-right-to-bracket"></i> Masuk
            </button>
        </form>
    </div>

</body>
</html>