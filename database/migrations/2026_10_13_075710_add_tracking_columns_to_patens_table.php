<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('patens', function (Blueprint $table) {
            if (!Schema::hasColumn('patens', 'nomor_registrasi')) {
                $table->string('nomor_registrasi')->unique()->nullable()->after('id');
            }

            if (!Schema::hasColumn('patens', 'status')) {
                $table->enum('status', ['pending', 'verifikasi_berkas', 'diajukan_djki', 'sertifikat_terbit', 'ditolak'])
                      ->default('pending')
                      ->after('nomor_registrasi');
            }
        });
    }

    public function down(): void
    {
        Schema::table('patens', function (Blueprint $table) {
            $columnsToDrop = [];

            if (Schema::hasColumn('patens', 'nomor_registrasi')) {
                $columnsToDrop[] = 'nomor_registrasi';
            }

            if (Schema::hasColumn('patens', 'status')) {
                $columnsToDrop[] = 'status';
            }

            if (!empty($columnsToDrop)) {
                $table->dropColumn($columnsToDrop);
            }
        });
    }
};