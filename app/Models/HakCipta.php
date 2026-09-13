<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HakCipta extends Model
{
    use HasFactory;

    protected $table = 'hak_ciptas';

    protected $fillable = [
        'email_pj',
        'kategori_pemohon',
        'hasil_program',
        
        // Pemohon 1
        'nama_pemohon_1',
        'nik_pemohon_1',
        'alamat_pemohon_1',
        'kode_pos_1',
        'no_hp_1',
        'email_pemohon_1',
        'npwp_pemohon_1',
        'prodi_pemohon_1',
        'prodi_lainnya_1',

        // Pemohon 2 - 5
        'nama_pemohon_2', 'nik_pemohon_2', 'alamat_pemohon_2', 'kode_pos_2', 'no_hp_2', 'email_pemohon_2', 'npwp_pemohon_2', 'prodi_pemohon_2', 'prodi_lainnya_2',
        'nama_pemohon_3', 'nik_pemohon_3', 'alamat_pemohon_3', 'kode_pos_3', 'no_hp_3', 'email_pemohon_3', 'npwp_pemohon_3', 'prodi_pemohon_3', 'prodi_lainnya_3',
        'nama_pemohon_4', 'nik_pemohon_4', 'alamat_pemohon_4', 'kode_pos_4', 'no_hp_4', 'email_pemohon_4', 'npwp_pemohon_4', 'prodi_pemohon_4', 'prodi_lainnya_4',
        'nama_pemohon_5', 'nik_pemohon_5', 'alamat_pemohon_5', 'kode_pos_5', 'no_hp_5', 'email_pemohon_5', 'npwp_pemohon_5', 'prodi_pemohon_5', 'prodi_lainnya_5',

        // Data Karya
        'deskripsi_karya',
        'judul_karya',
        'jenis_hak_cipta',
        'tanggal_diumumkan',

        // Berkas Upload
        'file_data_pencipta_lengkap',
        'file_ktp',
        'file_npwp',
        'file_deskripsi_karya',
        'file_karya_ciptaan',
        'file_surat_pernyataan',
        'file_pengalihan_hak',
        'file_akte_pendirian',

        'status',
    ];
}