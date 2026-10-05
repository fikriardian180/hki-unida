<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HakCipta;
use Illuminate\Support\Facades\Storage;

class HakCiptaController extends Controller
{
    public function create()
    {
        return view('formulir-hak-cipta');
    }

    public function store(Request $request)
    {
        // 1. Validasi input
        $validated = $request->validate([
            'email_pj' => 'required|email',
            'kategori_pemohon' => 'required|string',
            'hasil_program' => 'required|string',

            // Pemohon 1
            'nama_pemohon_1' => 'required|string',
            'nik_pemohon_1' => 'required|string',
            'alamat_pemohon_1' => 'required|string',
            'kode_pos_1' => 'required|string',
            'no_hp_1' => 'required|string',
            'email_pemohon_1' => 'required|email',
            'npwp_pemohon_1' => 'required|string',
            'prodi_pemohon_1' => 'required|string',
            'prodi_lainnya_1' => 'nullable|string',

            // Pemohon 2-5 (Opsional)
            'nama_pemohon_2' => 'nullable|string', 'nik_pemohon_2' => 'nullable|string', 'alamat_pemohon_2' => 'nullable|string', 'kode_pos_2' => 'nullable|string', 'no_hp_2' => 'nullable|string', 'email_pemohon_2' => 'nullable|email', 'npwp_pemohon_2' => 'nullable|string', 'prodi_pemohon_2' => 'nullable|string', 'prodi_lainnya_2' => 'nullable|string',
            'nama_pemohon_3' => 'nullable|string', 'nik_pemohon_3' => 'nullable|string', 'alamat_pemohon_3' => 'nullable|string', 'kode_pos_3' => 'nullable|string', 'no_hp_3' => 'nullable|string', 'email_pemohon_3' => 'nullable|email', 'npwp_pemohon_3' => 'nullable|string', 'prodi_pemohon_3' => 'nullable|string', 'prodi_lainnya_3' => 'nullable|string',
            'nama_pemohon_4' => 'nullable|string', 'nik_pemohon_4' => 'nullable|string', 'alamat_pemohon_4' => 'nullable|string', 'kode_pos_4' => 'nullable|string', 'no_hp_4' => 'nullable|string', 'email_pemohon_4' => 'nullable|email', 'npwp_pemohon_4' => 'nullable|string', 'prodi_pemohon_4' => 'nullable|string', 'prodi_lainnya_4' => 'nullable|string',
            'nama_pemohon_5' => 'nullable|string', 'nik_pemohon_5' => 'nullable|string', 'alamat_pemohon_5' => 'nullable|string', 'kode_pos_5' => 'nullable|string', 'no_hp_5' => 'nullable|string', 'email_pemohon_5' => 'nullable|email', 'npwp_pemohon_5' => 'nullable|string', 'prodi_pemohon_5' => 'nullable|string', 'prodi_lainnya_5' => 'nullable|string',

            // Karya
            'deskripsi_karya' => 'required|string',
            'judul_karya' => 'required|string',
            'jenis_hak_cipta' => 'required|string',
            'tanggal_diumumkan' => 'required|date',

            // File Uploads
            'file_data_pencipta_lengkap' => 'nullable|file|mimes:doc,docx,pdf|max:10240',
            'file_ktp' => 'required|file|mimes:pdf|max:10240',
            'file_npwp' => 'required|file|mimes:pdf|max:10240',
            'file_deskripsi_karya' => 'required|file|mimes:pdf|max:10240',
            'file_karya_ciptaan' => 'required|file|mimes:pdf,zip,rar|max:51200',
            'file_surat_pernyataan' => 'required|file|mimes:pdf|max:10240',
            'file_pengalihan_hak' => 'required|file|mimes:pdf|max:10240',
            'file_akte_pendirian' => 'nullable|file|mimes:pdf|max:10240',
        ]);

        // 2. Simpan file yang diunggah ke folder privat
        $fileFields = [
            'file_data_pencipta_lengkap', 'file_ktp', 'file_npwp',
            'file_deskripsi_karya', 'file_karya_ciptaan', 'file_surat_pernyataan',
            'file_pengalihan_hak', 'file_akte_pendirian'
        ];

        foreach ($fileFields as $fileKey) {
            if ($request->hasFile($fileKey)) {
                // Simpan ke storage privat tanpa argumen 'public'
                $validated[$fileKey] = $request->file($fileKey)->store('private/hak-cipta', 's3');
            }
        }

        // 3. Simpan data ke Database
        HakCipta::create($validated);

        // 4. Redirect kembali dengan pesan sukses
        return redirect()->back()->with('success', 'Permohonan Pendaftaran Hak Cipta Berhasil Dikirim!. Tim Kami akan segera menghubungi Anda.');
    }
    public function showFile($id, $field)
    {
        $hakCipta = HakCipta::findOrFail($id);
        $filePath = $hakCipta->{$field};

        if (!$filePath || !Storage::disk('s3')->exists($filePath)) {
            abort(404, 'File tidak ditemukan di S3/R2.');
        }

        // Ambil isi file dari S3/R2 dan kembalikan response stream ke browser
        $fileContent = Storage::disk('s3')->get($filePath);
        $mimeType = Storage::disk('s3')->mimeType($filePath);

        return response($fileContent, 200, [
            'Content-Type' => $mimeType,
            'Content-Disposition' => 'inline; filename="' . basename($filePath) . '"',
        ]);
    }
}
