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
        Schema::create('mereks', function (Blueprint $table) {
            $table->id();
            $table->string('email_pj');
            $table->string('kategori_pemohon');
            
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

            // Detail Merek
            $table->text('deskripsi_karya');
            $table->text('judul_merek');
            $table->string('kelas_merek');
            $table->string('jenis_merek');

            // Berkas Uploads
            $table->string('file_ktp');
            $table->string('file_akta_pendirian')->nullable();
            $table->string('file_pengalihan_hak');
            $table->string('file_surat_umkm')->nullable();
            $table->string('file_ttd_digital');
            $table->string('file_bentuk_merek');
            $table->string('file_dokumen_pendukung')->nullable();
            $table->string('file_deskripsi_merek');

            $table->string('status')->default('Pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mereks');
    }
};