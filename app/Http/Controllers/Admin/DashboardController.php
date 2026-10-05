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
    // ==========================================
    // HALAMAN UTAMA DASHBOARD
    // ==========================================
    public function index()
    {
        // 1. Hitung total kartu statistik
        $totalHakCipta   = HakCipta::count();
        $totalPaten      = Paten::count();
        $totalMerek      = Merek::count();
        $totalPermohonan = $totalHakCipta + $totalPaten + $totalMerek;

        // 2. Ambil data daftar pengajuan terbaru
        $hakCiptasList = HakCipta::orderBy('created_at', 'desc')->get();
        $patenList     = Paten::orderBy('created_at', 'desc')->get();
        $merekList     = Merek::orderBy('created_at', 'desc')->get();

        return view('admin.dashboard', compact(
            'totalPermohonan',
            'totalHakCipta',
            'totalPaten',
            'totalMerek',
            'hakCiptasList',
            'patenList',
            'merekList'
        ));
    }

    // ==========================================
    // 1. MODUL HAK CIPTA
    // ==========================================

    public function indexHakCipta(Request $request)
    {
        $query = HakCipta::query();

        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('nama_pemohon_1', 'like', "%{$search}%")
                  ->orWhere('judul_karya', 'like', "%{$search}%")
                  ->orWhere('email_pj', 'like', "%{$search}%");
            });
        }

        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        $dataHakCipta = $query->orderBy('created_at', 'desc')->get();

        return view('admin.hak-cipta', compact('dataHakCipta'));
    }

    public function showHakCipta($id)
    {
        $data = HakCipta::findOrFail($id);
        return view('admin.detail-hak-cipta', compact('data'));
    }

    public function updateStatusHakCipta(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|string',
        ]);

        $hakCipta = HakCipta::findOrFail($id);
        $hakCipta->update([
            'status' => $request->status,
        ]);

        return redirect()->back()->with('success', 'Status permohonan Hak Cipta berhasil diperbarui!');
    }

    // Export Data Hak Cipta ke CSV/Excel
    public function exportHakCipta()
    {
        $data = HakCipta::all();
        $fileName = 'data-hak-cipta-' . date('Y-m-d') . '.csv';

        $headers = [
            "Content-type"        => "text/csv; charset=UTF-8",
            "Content-Disposition" => "attachment; filename=$fileName",
            "Pragma"              => "no-cache",
            "Cache-Control"       => "must-revalidate, post-check=0, pre-check=0",
            "Expires"             => "0"
        ];

        $columns = ['ID', 'Pemohon Utama', 'Judul Karya', 'Email PJ', 'Tanggal Pengajuan', 'Status'];

        $callback = function() use($data, $columns) {
            $file = fopen('php://output', 'w');
            fputcsv($file, $columns);

            foreach ($data as $item) {
                fputcsv($file, [
                    $item->id,
                    $item->nama_pemohon_1 ?? '-',
                    $item->judul_karya ?? '-',
                    $item->email_pj ?? '-',
                    $item->created_at ? $item->created_at->format('d-m-Y') : '-',
                    $item->status ?? '-'
                ]);
            }

            fclose($file);
        };

        return response()->stream($callback, 200, $headers);
    }

    public function downloadFileHakCipta($id, $field)
{
    $hakCipta = HakCipta::findOrFail($id);
    $filePath = $hakCipta->{$field};

    if (!$filePath || !Storage::disk('s3')->exists($filePath)) {
        abort(404, 'File tidak ditemukan di Cloudflare R2.');
    }

    // Mengambil isi file dari Cloudflare R2 dan menampilkannya di browser
    $fileContent = Storage::disk('s3')->get($filePath);
    $mimeType = Storage::disk('s3')->mimeType($filePath);

    return response($fileContent, 200, [
        'Content-Type' => $mimeType,
        'Content-Disposition' => 'inline; filename="' . basename($filePath) . '"',
    ]);
}

    // ==========================================
    // 2. MODUL PATEN
    // ==========================================

    public function indexPaten(Request $request)
    {
        $query = Paten::query();

        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('nama_pemohon_1', 'like', "%{$search}%")
                  ->orWhere('judul_invensi_id', 'like', "%{$search}%")
                  ->orWhere('email_pj', 'like', "%{$search}%");
            });
        }

        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        $dataPaten = $query->orderBy('created_at', 'desc')->get();

        return view('admin.paten', compact('dataPaten'));
    }

    public function showPaten($id)
    {
        $data = Paten::findOrFail($id);
        return view('admin.detail-paten', compact('data')); 
    }

    public function updateStatusPaten(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|string',
        ]);

        $paten = Paten::findOrFail($id);
        $paten->update([
            'status' => $request->status,
        ]);

        return redirect()->back()->with('success', 'Status permohonan Paten berhasil diperbarui!');
    }

    // Export Data Paten ke CSV/Excel
    public function exportPaten()
    {
        $data = Paten::all();
        $fileName = 'data-paten-' . date('Y-m-d') . '.csv';

        $headers = [
            "Content-type"        => "text/csv; charset=UTF-8",
            "Content-Disposition" => "attachment; filename=$fileName",
            "Pragma"              => "no-cache",
            "Cache-Control"       => "must-revalidate, post-check=0, pre-check=0",
            "Expires"             => "0"
        ];

        $columns = ['ID', 'Pemohon Utama', 'Judul Invensi', 'Email PJ', 'Tanggal Pengajuan', 'Status'];

        $callback = function() use($data, $columns) {
            $file = fopen('php://output', 'w');
            fputcsv($file, $columns);

            foreach ($data as $item) {
                fputcsv($file, [
                    $item->id,
                    $item->nama_pemohon_1 ?? '-',
                    $item->judul_invensi_id ?? '-',
                    $item->email_pj ?? '-',
                    $item->created_at ? $item->created_at->format('d-m-Y') : '-',
                    $item->status ?? '-'
                ]);
            }

            fclose($file);
        };

        return response()->stream($callback, 200, $headers);
    }

    public function downloadFilePaten($id, $field)
    {
        $paten = Paten::findOrFail($id);
        $filePath = $paten->$field;

        if (!$filePath || !Storage::disk('s3')->exists($filePath)) {
            abort(404, 'File tidak ditemukan di Cloudflare R2.');
        }

        // Mengambil isi file dari Cloudflare R2 dan menampilkannya di browser
        $fileContent = Storage::disk('s3')->get($filePath);
        $mimeType = Storage::disk('s3')->mimeType($filePath);

        return response($fileContent, 200, [
            'Content-Type' => $mimeType,
            'Content-Disposition' => 'inline; filename="' . basename($filePath) . '"',
        ]);
    }

    // ==========================================
    // 3. MODUL MEREK
    // ==========================================

    public function indexMerek(Request $request)
    {
        $query = Merek::query();

        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('nama_pemohon_1', 'like', "%{$search}%")
                  ->orWhere('judul_merek', 'like', "%{$search}%")
                  ->orWhere('email_pj', 'like', "%{$search}%");
            });
        }

        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        $dataMerek = $query->orderBy('created_at', 'desc')->get();

        return view('admin.merek', compact('dataMerek'));
    }

    public function showMerek($id)
    {
        $data = Merek::findOrFail($id);
        return view('admin.detail-merek', compact('data'));
    }

    public function updateStatusMerek(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|string',
        ]);

        $merek = Merek::findOrFail($id);
        $merek->update([
            'status' => $request->status,
        ]);

        return redirect()->back()->with('success', 'Status permohonan Merek berhasil diperbarui!');
    }

    // Export Data Merek ke CSV/Excel
    public function exportMerek()
    {
        $data = Merek::all();
        $fileName = 'data-merek-' . date('Y-m-d') . '.csv';

        $headers = [
            "Content-type"        => "text/csv; charset=UTF-8",
            "Content-Disposition" => "attachment; filename=$fileName",
            "Pragma"              => "no-cache",
            "Cache-Control"       => "must-revalidate, post-check=0, pre-check=0",
            "Expires"             => "0"
        ];

        $columns = ['ID', 'Pemohon Utama', 'Nama Merek', 'Email PJ', 'Tanggal Pengajuan', 'Status'];

        $callback = function() use($data, $columns) {
            $file = fopen('php://output', 'w');
            fputcsv($file, $columns);

            foreach ($data as $item) {
                fputcsv($file, [
                    $item->id,
                    $item->nama_pemohon_1 ?? '-',
                    $item->judul_merek ?? '-',
                    $item->email_pj ?? '-',
                    $item->created_at ? $item->created_at->format('d-m-Y') : '-',
                    $item->status ?? '-'
                ]);
            }

            fclose($file);
        };

        return response()->stream($callback, 200, $headers);
    }

    public function downloadFileMerek($id, $field)
    {
        $merek = Merek::findOrFail($id);
        $filePath = $merek->$field;

        if (!$filePath || !Storage::disk('s3')->exists($filePath)) {
            abort(404, 'File tidak ditemukan di Cloudflare R2.');
        }

        // Mengambil isi file dari Cloudflare R2 dan menampilkannya di browser
        $fileContent = Storage::disk('s3')->get($filePath);
        $mimeType = Storage::disk('s3')->mimeType($filePath);

        return response($fileContent, 200, [
            'Content-Type' => $mimeType,
            'Content-Disposition' => 'inline; filename="' . basename($filePath) . '"',
        ]);
    }

    // ==========================================
    // HELPER DOKUMEN DOWNLOAD
    // ==========================================
    private function processFileDownload($filePath, $moduleName)
    {
        // 1. Cek jika path di database kosong
        if (!$filePath) {
            abort(404, "Dokumen $moduleName tidak terdaftar / belum diunggah.");
        }

        // Pembersihan string path dari prefix umum
        $cleanPath = ltrim(str_replace(['public/', 'private/', 'storage/'], '', $filePath), '/');

        // Daftar kemungkinan lokasi file fisik di server (support private & public)
        $possiblePaths = [
            storage_path('app/' . $filePath),                       // e.g. /storage/app/private/hak-cipta/xxxx.pdf
            storage_path('app/private/' . $cleanPath),              // e.g. /storage/app/private/xxxx.pdf
            storage_path('app/public/' . $cleanPath),               // e.g. /storage/app/public/xxxx.pdf
            storage_path('app/' . $cleanPath),                      // Fallback clean path
            public_path('storage/' . $cleanPath),                   // Direct public storage link
        ];

        // Loop untuk mencari letak fisik file
        foreach ($possiblePaths as $fullPath) {
            if (file_exists($fullPath) && !is_dir($fullPath)) {
                return response()->file($fullPath);
            }
        }

        // Jika disk storage Laravel mendeteksi file
        if (Storage::disk('local')->exists($filePath)) {
            return Storage::disk('local')->response($filePath);
        }

        if (Storage::disk('public')->exists($cleanPath)) {
            return Storage::disk('public')->response($cleanPath);
        }

        abort(404, "File fisik dokumen $moduleName tidak ditemukan di server.");
    }
}