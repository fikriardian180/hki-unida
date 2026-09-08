<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('hak_ciptas', function (Blueprint $table) {
            $table->id();
            $table->string('email_pj');
            $table->string('kategori_pemohon');
            $table->string('hasil_program');
            
            // Pemohon 1
            $table->string('nama_pemohon_1');
            $table->string('nik_pemohon_1');
            $table->text('alamat_pemohon_1');
            $table->string('kode_pos_1');
            $table->string('no_hp_1');
            $table->string('email_pemohon_1');
            $table->string('npwp_pemohon_1');
            $table->string('prodi_pemohon_1');
            $table->string('prodi_lainnya_1')->nullable();

            // Pemohon 2-5 (Nullable)
            for ($i = 2; $i <= 5; $i++) {
                $table->string("nama_pemohon_{$i}")->nullable();
                $table->string("nik_pemohon_{$i}")->nullable();
                $table->text("alamat_pemohon_{$i}")->nullable();
                $table->string("kode_pos_{$i}")->nullable();
                $table->string("no_hp_{$i}")->nullable();
                $table->string("email_pemohon_{$i}")->nullable();
                $table->string("npwp_pemohon_{$i}")->nullable();
                $table->string("prodi_pemohon_{$i}")->nullable();
                $table->string("prodi_lainnya_{$i}")->nullable();
            }

            // Data Karya
            $table->text('deskripsi_karya');
            $table->text('judul_karya');
            $table->string('jenis_hak_cipta');
            $table->date('tanggal_diumumkan');

            // File Path Uploads
            $table->string('file_data_pencipta_lengkap')->nullable();
            $table->string('file_ktp');
            $table->string('file_npwp');
            $table->string('file_deskripsi_karya');
            $table->string('file_karya_ciptaan');
            $table->string('file_surat_pernyataan');
            $table->string('file_pengalihan_hak');
            $table->string('file_akte_pendirian')->nullable();

            $table->string('status')->default('Pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hak_ciptas');
    }
};