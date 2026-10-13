<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('hak_ciptas', function (Blueprint $table) {
            if (!Schema::hasColumn('hak_ciptas', 'nomor_registrasi')) {
                $table->string('nomor_registrasi')->unique()->nullable()->after('id');
            }

            if (!Schema::hasColumn('hak_ciptas', 'status')) {
                $table->enum('status', ['pending', 'verifikasi_berkas', 'diajukan_djki', 'sertifikat_terbit', 'ditolak'])
                      ->default('pending')
                      ->after('nomor_registrasi');
            }
        });
    }

    public function down(): void
    {
        Schema::table('hak_ciptas', function (Blueprint $table) {
            $columnsToDrop = [];

            if (Schema::hasColumn('hak_ciptas', 'nomor_registrasi')) {
                $columnsToDrop[] = 'nomor_registrasi';
            }

            // Hapus kolom status HANYA jika dibuat oleh migration ini
            if (Schema::hasColumn('hak_ciptas', 'status')) {
                $columnsToDrop[] = 'status';
            }

            if (!empty($columnsToDrop)) {
                $table->dropColumn($columnsToDrop);
            }
        });
    }
};