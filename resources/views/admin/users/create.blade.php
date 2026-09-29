@extends('layouts.admin')

@section('header_title', 'Tambah Staff Baru')

@section('content')
<div>
    <h3>Form Pendaftaran Staff</h3>

    <div class="card">
        <form action="{{ route('admin.users.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label>Nama Lengkap</label>
                <input type="text" name="name" class="form-control" placeholder="Masukkan nama staff" required>
            </div>

            <div class="form-group">
                <label>Email Official Staff</label>
                <input type="email" name="email" class="form-control" placeholder="staff@unida.gontor.ac.id" required>
            </div>

            <div class="form-group">
                <label>Password Awal</label>
                <input type="password" name="password" class="form-control" placeholder="Minimal 8 karakter" minlength="8" required>
            </div>

            <div style="margin-top: 25px; display: flex; gap: 10px;">
                <button type="submit" class="btn-primary">Simpan Staff</button>
                <a href="{{ route('admin.users.index') }}" class="btn-secondary">Batal</a>
            </div>
        </form>
    </div>
</div>
@endsection