<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('mereks', function (Blueprint $table) {
            if (!Schema::hasColumn('mereks', 'nomor_registrasi')) {
                $table->string('nomor_registrasi')->unique()->nullable()->after('id');
            }

            if (!Schema::hasColumn('mereks', 'status')) {
                $table->enum('status', ['pending', 'verifikasi_berkas', 'diajukan_djki', 'sertifikat_terbit', 'ditolak'])
                      ->default('pending')
                      ->after('nomor_registrasi');
            }
        });
    }

    public function down(): void
    {
        Schema::table('mereks', function (Blueprint $table) {
            $columnsToDrop = [];

            if (Schema::hasColumn('mereks', 'nomor_registrasi')) {
                $columnsToDrop[] = 'nomor_registrasi';
            }

            if (Schema::hasColumn('mereks', 'status')) {
                $columnsToDrop[] = 'status';
            }

            if (!empty($columnsToDrop)) {
                $table->dropColumn($columnsToDrop);
            }
        });
    }
};