<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HakCipta;

class PendaftaranController extends Controller
{
    public function storeHakCipta(Request $request)
    {
        // 1. Validasi Input Utama & Berkas
        $rules = [
            'email_pj'          => 'required|email|max:255',
            'kategori_pemohon'  => 'required|string',
            'hasil_program'     => 'required|string',
            
            // Pemohon 1 (Wajib)
            'nama_pemohon_1'    => 'required|string|max:255',
            'nik_pemohon_1'     => 'required|string|max:30',
            'alamat_pemohon_1'  => 'required|string',
            'kode_pos_1'        => 'required|string|max:10',
            'no_hp_1'           => 'required|string|max:20',
            'email_pemohon_1'   => 'required|email|max:255',
            'npwp_pemohon_1'    => 'required|string|max:30',
            'prodi_pemohon_1'   => 'required|string',
            'prodi_lainnya_1'   => 'nullable|string|max:255',

            // Data Karya
            'deskripsi_karya'   => 'required|string',
            'judul_karya'       => 'required|string',
            'jenis_hak_cipta'   => 'required|string',
            'tanggal_diumumkan' => 'required|date',

            // Berkas Upload (Validasi File)
            'file_data_pencipta_lengkap' => 'nullable|file|mimes:pdf,zip,rar|max:10240',
            'file_ktp'                   => 'required|file|mimes:pdf,jpg,jpeg,png|max:5120',
            'file_npwp'                  => 'required|file|mimes:pdf,jpg,jpeg,png|max:5120',
            'file_deskripsi_karya'       => 'required|file|mimes:pdf,docx,doc|max:10240',
            'file_karya_ciptaan'         => 'required|file|mimes:pdf,zip,rar,mp4,mp3,jpg,png|max:25600', // Maks 25MB
            'file_surat_pernyataan'      => 'required|file|mimes:pdf|max:5120',
            'file_pengalihan_hak'        => 'required|file|mimes:pdf|max:5120',
            'file_akte_pendirian'        => 'nullable|file|mimes:pdf|max:5120',
        ];

        // Validasi opsional untuk Pemohon 2 - 5
        for ($i = 2; $i <= 5; $i++) {
            $rules["nama_pemohon_{$i}"]   = 'nullable|string|max:255';
            $rules["nik_pemohon_{$i}"]    = 'nullable|string|max:30';
            $rules["alamat_pemohon_{$i}"] = 'nullable|string';
            $rules["kode_pos_{$i}"]       = 'nullable|string|max:10';
            $rules["no_hp_{$i}"]          = 'nullable|string|max:20';
            $rules["email_pemohon_{$i}"]  = 'nullable|email|max:255';
            $rules["npwp_pemohon_{$i}"]   = 'nullable|string|max:30';
            $rules["prodi_pemohon_{$i}"]  = 'nullable|string';
            $rules["prodi_lainnya_{$i}"]  = 'nullable|string|max:255';
        }

        $validated = $request->validate($rules);

        // 2. Simpan Berkas Upload ke Storage Private
        $uploadFields = [
            'file_data_pencipta_lengkap',
            'file_ktp',
            'file_npwp',
            'file_deskripsi_karya',
            'file_karya_ciptaan',
            'file_surat_pernyataan',
            'file_pengalihan_hak',
            'file_akte_pendirian',
        ];

        foreach ($uploadFields as $field) {
            if ($request->hasFile($field)) {
                // Simpan di folder privat storage/app/private/hak-cipta/...
                $validated[$field] = $request->file($field)->store('private/hak-cipta/' . str_replace('file_', '', $field));
            } else {
                $validated[$field] = null;
            }
        }

        // Set status default awal
        $validated['status'] = 'Pending';

        // 3. Insert Data ke Database
        HakCipta::create($validated);

        return redirect()->back()->with('success', 'Permohonan Hak Cipta Anda berhasil dikirim! Tim Sentra HKI UNIDA Gontor akan segera memverifikasi berkas Anda.');
    }
}