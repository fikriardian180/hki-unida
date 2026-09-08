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
        // Buat akun admin jika belum ada
        User::updateOrCreate(
            ['email' => 'admin@unida.gontor.ac.id'],
            [
                'name' => 'Admin Sentra HKI',
                'password' => Hash::make('admin123'),
            ]
        );
    }
}