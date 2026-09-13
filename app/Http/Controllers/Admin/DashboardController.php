<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HakCipta;
use App\Models\Paten;
use App\Models\Merek;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DashboardController extends Controller
{
    public function index()
    {
        // 1. Hitung total kartu statistik
        $totalHakCipta = HakCipta::count();
        $totalPaten    = class_exists(Paten::class) ? Paten::count() : 0;
        $totalMerek    = class_exists(Merek::class) ? Merek::count() : 0;
        $totalPermohonan = $totalHakCipta + $totalPaten + $totalMerek;

        // 2. Ambil data daftar pengajuan Hak Cipta terbaru
        $hakCiptasList = HakCipta::orderBy('created_at', 'desc')->get();

        return view('admin.dashboard', compact(
            'totalPermohonan',
            'totalHakCipta',
            'totalPaten',
            'totalMerek',
            'hakCiptasList'
        ));
    }

    // Method untuk melihat detail lengkap & berkas yang diunggah
    public function showHakCipta($id)
    {
        $data = HakCipta::findOrFail($id);
        return view('admin.detail-hak-cipta', compact('data'));
    }

    // Method untuk update status permohonan (Pending, Diproses, Selesai, Ditolak)
    public function updateStatusHakCipta(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|string',
        ]);

        $hakCipta = HakCipta::findOrFail($id);
        $hakCipta->update([
            'status' => $request->status,
        ]);

        return redirect()->back()->with('success', 'Status permohonan berhasil diperbarui!');
    }

        public function downloadFile($id, $field)
    {
        $hakCipta = HakCipta::findOrFail($id);
        
        // Ambil path file dari database
        $filePath = $hakCipta->$field;

        // Cek jika path ada di database dan filenya benar-benar eksis di Storage
        if ($filePath && Storage::exists($filePath)) {
            return Storage::response($filePath);
        }

        // Cek fallback jika tersimpan di disk local/private secara langsung
        if ($filePath && Storage::disk('local')->exists($filePath)) {
            return Storage::disk('local')->response($filePath);
        }

        abort(404, 'File dokumen tidak ditemukan di penyimpanan server.');
    }
}