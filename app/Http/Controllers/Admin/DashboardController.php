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

    public function downloadFileHakCipta($id, $field)
    {
        $hakCipta = HakCipta::findOrFail($id);
        $filePath = $hakCipta->$field;

        if ($filePath && Storage::exists($filePath)) {
            return Storage::response($filePath);
        }

        if ($filePath && Storage::disk('local')->exists($filePath)) {
            return Storage::disk('local')->response($filePath);
        }

        abort(404, 'File dokumen Hak Cipta tidak ditemukan di penyimpanan server.');
    }

    // Alias untuk kompatibilitas route lama
    public function downloadFile($id, $field)
    {
        return $this->downloadFileHakCipta($id, $field);
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

    public function downloadFilePaten($id, $field)
    {
        $paten = Paten::findOrFail($id);
        $filePath = $paten->$field;

        if ($filePath && Storage::exists($filePath)) {
            return Storage::response($filePath);
        }

        if ($filePath && Storage::disk('local')->exists($filePath)) {
            return Storage::disk('local')->response($filePath);
        }

        abort(404, 'File dokumen Paten tidak ditemukan di penyimpanan server.');
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

    public function downloadFileMerek($id, $field)
    {
        $merek = Merek::findOrFail($id);
        $filePath = $merek->$field;

        if ($filePath && Storage::exists($filePath)) {
            return Storage::response($filePath);
        }

        if ($filePath && Storage::disk('local')->exists($filePath)) {
            return Storage::disk('local')->response($filePath);
        }

        abort(404, 'File dokumen Merek tidak ditemukan di penyimpanan server.');
    }
}