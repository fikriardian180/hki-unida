<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paten;

class PatenController extends Controller
{
    public function create()
    {
        return view('formulir-paten');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'email_pj' => 'required|email',
            'kategori_pemohon' => 'required|string',
            'nama_pemohon_1' => 'required|string',
            'nik_pemohon_1' => 'required|string',
            'alamat_pemohon_1' => 'required|string',
            'kode_pos_1' => 'required|string',
            'no_hp_1' => 'required|string',
            'email_pemohon_1' => 'required|email',
            'npwp_pemohon_1' => 'required|string',
            'prodi_pemohon_1' => 'required|string',
            'prodi_lainnya_1' => 'nullable|string',

            // Data Pemohon 2-5 opsional
            'nama_pemohon_2' => 'nullable|string', 'nik_pemohon_2' => 'nullable|string', 'alamat_pemohon_2' => 'nullable|string', 'kode_pos_2' => 'nullable|string', 'no_hp_2' => 'nullable|string', 'email_pemohon_2' => 'nullable|email', 'npwp_pemohon_2' => 'nullable|string', 'prodi_pemohon_2' => 'nullable|string', 'prodi_lainnya_2' => 'nullable|string',
            'nama_pemohon_3' => 'nullable|string', 'nik_pemohon_3' => 'nullable|string', 'alamat_pemohon_3' => 'nullable|string', 'kode_pos_3' => 'nullable|string', 'no_hp_3' => 'nullable|string', 'email_pemohon_3' => 'nullable|email', 'npwp_pemohon_3' => 'nullable|string', 'prodi_pemohon_3' => 'nullable|string', 'prodi_lainnya_3' => 'nullable|string',
            'nama_pemohon_4' => 'nullable|string', 'nik_pemohon_4' => 'nullable|string', 'alamat_pemohon_4' => 'nullable|string', 'kode_pos_4' => 'nullable|string', 'no_hp_4' => 'nullable|string', 'email_pemohon_4' => 'nullable|email', 'npwp_pemohon_4' => 'nullable|string', 'prodi_pemohon_4' => 'nullable|string', 'prodi_lainnya_4' => 'nullable|string',
            'nama_pemohon_5' => 'nullable|string', 'nik_pemohon_5' => 'nullable|string', 'alamat_pemohon_5' => 'nullable|string', 'kode_pos_5' => 'nullable|string', 'no_hp_5' => 'nullable|string', 'email_pemohon_5' => 'nullable|email', 'npwp_pemohon_5' => 'nullable|string', 'prodi_pemohon_5' => 'nullable|string', 'prodi_lainnya_5' => 'nullable|string',

            'judul_invensi_id' => 'required|string',
            'judul_invensi_en' => 'required|string',
            'jenis_paten' => 'required|string',

            // File Uploads
            'file_ktp' => 'required|file|mimes:pdf|max:10240',
            'file_surat_pernyataan_invensi' => 'required|file|mimes:pdf|max:10240',
            'file_pengalihan_hak' => 'nullable|file|mimes:pdf|max:10240',
            'file_surat_umkm' => 'nullable|file|mimes:pdf|max:10240',
            'file_gambar_paten' => 'nullable|file|mimes:png,jpg,jpeg|max:10240',
            'file_klaim_paten' => 'required|file|mimes:pdf|max:10240',
            'file_abstrak_id' => 'required|file|mimes:pdf|max:10240',
            'file_abstrak_en' => 'required|file|mimes:pdf|max:10240',
            'file_deskripsi_paten' => 'required|file|mimes:pdf|max:10240',
        ]);

        $fileFields = [
            'file_ktp', 'file_surat_pernyataan_invensi', 'file_pengalihan_hak',
            'file_surat_umkm', 'file_gambar_paten', 'file_klaim_paten',
            'file_abstrak_id', 'file_abstrak_en', 'file_deskripsi_paten'
        ];

        foreach ($fileFields as $fileKey) {
            if ($request->hasFile($fileKey)) {
                $validated[$fileKey] = $request->file($fileKey)->store('private/paten');
            }
        }

        Paten::create($validated);

        return redirect()->back()->with('success',   'Permohonan Pendaftaran Paten Berhasil Dikirim!. Tim Kami akan segera menghubungi Anda.');
    }
}