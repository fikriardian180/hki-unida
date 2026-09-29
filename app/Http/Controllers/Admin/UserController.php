<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Helper privat untuk memastikan hanya Super Admin yang bisa akses
     */
    private function checkSuperAdmin()
    {
        $superAdminEmail = env('ADMIN_EMAIL', 'admin@unida.gontor.ac.id');

        if (!auth()->check() || auth()->user()->email !== $superAdminEmail) {
            abort(403, 'Akses ditolak! Hanya Super Admin yang dapat mengelola staff.');
        }
    }

    // 1. Menampilkan Daftar Staff
    public function index()
    {
        $this->checkSuperAdmin();

        $users = User::latest()->paginate(10);
        return view('admin.users.index', compact('users'));
    }

    // 2. Form Tambah Staff Baru
    public function create()
    {
        $this->checkSuperAdmin();

        return view('admin.users.create');
    }

    // 3. Menyimpan Staff Baru
    public function store(Request $request)
    {
        $this->checkSuperAdmin();

        $request->validate([
            'name'     => 'required|string|max:255',
            'email'    => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
        ]);

        User::create([
            'name'     => $request->name,
            'email'    => $request->email,
            'password' => Hash::make($request->password),
            'role'     => 'staff',
        ]);

        return redirect()->route('admin.users.index')->with('success', 'Akun staff berhasil ditambahkan!');
    }

    // 4. Menghapus Akun Staff
    public function destroy(User $user)
    {
        $this->checkSuperAdmin();

        if ($user->id === auth()->id()) {
            return back()->with('error', 'Anda tidak bisa menghapus akun sendiri!');
        }

        $user->delete();
        return redirect()->route('admin.users.index')->with('success', 'Akun staff berhasil dihapus!');
    }
}