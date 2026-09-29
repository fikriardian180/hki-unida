@extends('layouts.admin') {{-- sesuaikan nama file layout kamu jika bukan 'layouts.admin' --}}

@section('header_title', 'Kelola Staff & Pengelola')

@section('content')
<div>
    <div style="display: flex; justify-content: space-between; align-items: center;">
        <h3>Daftar Staff Sentra HKI</h3>
        <a href="{{ route('admin.users.create') }}" class="btn-primary">+ Tambah Staff Baru</a>
    </div>

    @if(session('success'))
        <div class="alert-success" style="margin-top: 15px;">{{ session('success') }}</div>
    @endif

    <div class="card">
        <table class="table-custom">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($users as $key => $user)
                <tr>
                    <td>{{ $users->firstItem() + $key }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        @if($user->id !== auth()->id())
                        <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus staff ini?')" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn-danger"><i class="fa-solid fa-trash"></i> Hapus</button>
                        </form>
                        @else
                        <span style="color: #0284c7; font-weight: 600;">(Akun Anda)</span>
                        @endif
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="4" style="text-align: center; color: #94a3b8;">Belum ada staff terdaftar.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
        
        <div style="margin-top: 20px;">
            {{ $users->links() }}
        </div>
    </div>
</div>
@endsection