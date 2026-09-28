<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Mengambil email dari .env 
        $adminEmail = env('ADMIN_EMAIL', 'admin@unida.gontor.ac.id');
        $adminPassword = env('ADMIN_PASSWORD', 'change-this-password');
        $adminName = env('ADMIN_NAME', 'Admin Sentra HKI');

        // Buat atau perbarui akun admin menggunakan variabel lingkungan (.env)
        User::updateOrCreate(
            ['email' => $adminEmail],
            [
                'name' => $adminName,
                'password' => Hash::make($adminPassword),
            ]
        );
    }
}