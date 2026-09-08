<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HakCipta;
use App\Models\Paten;
use App\Models\Merek;

class AdminController extends Controller
{
    // Halaman Ringkasan Dashboard
    public function index()
    {
        $totalHakCipta = HakCipta::count();
        $totalPaten = Paten::count();
        $totalMerek = Merek::count();
        $totalPermohonan = $totalHakCipta + $totalPaten + $totalMerek;

        return view('admin.dashboard', compact('totalHakCipta', 'totalPaten', 'totalMerek', 'totalPermohonan'));
    }

    // Kelola Data Hak Cipta (dengan Filter & Search)
    public function hakCipta(Request $request)
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

        $dataHakCipta = $query->latest()->get();
        return view('admin.hak-cipta', compact('dataHakCipta'));
    }

    // Kelola Data Paten (dengan Filter & Search)
    public function paten(Request $request)
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

        $dataPaten = $query->latest()->get();
        return view('admin.paten', compact('dataPaten'));
    }

    // Kelola Data Merek (dengan Filter & Search)
    public function merek(Request $request)
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

        $dataMerek = $query->latest()->get();
        return view('admin.merek', compact('dataMerek'));
    }

    // Detail Hak Cipta
    public function detailHakCipta($id)
    {
        $data = HakCipta::findOrFail($id);
        return view('admin.detail-hak-cipta', compact('data'));
    }

    // Update Status Hak Cipta
    public function updateStatusHakCipta(Request $request, $id)
    {
        $request->validate(['status' => 'required|string']);
        $data = HakCipta::findOrFail($id);
        $data->update(['status' => $request->status]);

        return redirect()->back()->with('success', 'Status permohonan berhasil diperbarui!');
    }

    // Detail Paten
    public function detailPaten($id)
    {
        $data = Paten::findOrFail($id);
        return view('admin.detail-paten', compact('data'));
    }

    // Update Status Paten
    public function updateStatusPaten(Request $request, $id)
    {
        $request->validate(['status' => 'required|string']);
        $data = Paten::findOrFail($id);
        $data->update(['status' => $request->status]);

        return redirect()->back()->with('success', 'Status permohonan berhasil diperbarui!');
    }

    // Detail Merek
    public function detailMerek($id)
    {
        $data = Merek::findOrFail($id);
        return view('admin.detail-merek', compact('data'));
    }

    // Update Status Merek
    public function updateStatusMerek(Request $request, $id)
    {
        $request->validate(['status' => 'required|string']);
        $data = Merek::findOrFail($id);
        $data->update(['status' => $request->status]);

        return redirect()->back()->with('success', 'Status permohonan berhasil diperbarui!');
    }
    // Ekspor Data Hak Cipta ke CSV
    public function exportHakCipta()
    {
        $fileName = 'rekap-hak-cipta-' . date('Y-m-d') . '.csv';
        $data = HakCipta::all();

        $headers = [
            "Content-type"        => "text/csv; charset=UTF-8",
            "Content-Disposition" => "attachment; filename=$fileName",
            "Pragma"              => "no-cache",
            "Cache-Control"       => "must-revalidate, post-check=0, pre-check=0",
            "Expires"             => "0"
        ];

        $columns = ['No', 'Tanggal Kirim', 'Pemohon Utama', 'Email PJ', 'Judul Karya', 'Jenis Hak Cipta', 'Status'];

        $callback = function() use($data, $columns) {
            $file = fopen('php://output', 'w');
            fputs($file, "\xEF\xBB\xBF"); // BOM untuk dukungan Microsoft Excel
            fputcsv($file, $columns);

            foreach ($data as $index => $row) {
                fputcsv($file, [
                    $index + 1,
                    $row->created_at->format('Y-m-d H:i'),
                    $row->nama_pemohon_1,
                    $row->email_pj,
                    $row->judul_karya,
                    $row->jenis_hak_cipta,
                    $row->status ?? 'Pending'
                ]);
            }

            fclose($file);
        };

        return response()->stream($callback, 200, $headers);
    }

    // Ekspor Data Paten ke CSV
    public function exportPaten()
    {
        $fileName = 'rekap-paten-' . date('Y-m-d') . '.csv';
        $data = Paten::all();

        $headers = [
            "Content-type"        => "text/csv; charset=UTF-8",
            "Content-Disposition" => "attachment; filename=$fileName",
            "Pragma"              => "no-cache",
            "Cache-Control"       => "must-revalidate, post-check=0, pre-check=0",
            "Expires"             => "0"
        ];

        $columns = ['No', 'Tanggal Kirim', 'Pemohon Utama', 'Email PJ', 'Judul Invensi', 'Jenis Paten', 'Status'];

        $callback = function() use($data, $columns) {
            $file = fopen('php://output', 'w');
            fputs($file, "\xEF\xBB\xBF");
            fputcsv($file, $columns);

            foreach ($data as $index => $row) {
                fputcsv($file, [
                    $index + 1,
                    $row->created_at->format('Y-m-d H:i'),
                    $row->nama_pemohon_1,
                    $row->email_pj,
                    $row->judul_invensi_id,
                    $row->jenis_paten,
                    $row->status ?? 'Pending'
                ]);
            }

            fclose($file);
        };

        return response()->stream($callback, 200, $headers);
    }

    // Ekspor Data Merek ke CSV
    public function exportMerek()
    {
        $fileName = 'rekap-merek-' . date('Y-m-d') . '.csv';
        $data = Merek::all();

        $headers = [
            "Content-type"        => "text/csv; charset=UTF-8",
            "Content-Disposition" => "attachment; filename=$fileName",
            "Pragma"              => "no-cache",
            "Cache-Control"       => "must-revalidate, post-check=0, pre-check=0",
            "Expires"             => "0"
        ];

        $columns = ['No', 'Tanggal Kirim', 'Pemohon Utama', 'Email PJ', 'Judul Merek', 'Kelas Merek', 'Jenis Merek', 'Status'];

        $callback = function() use($data, $columns) {
            $file = fopen('php://output', 'w');
            fputs($file, "\xEF\xBB\xBF");
            fputcsv($file, $columns);

            foreach ($data as $index => $row) {
                fputcsv($file, [
                    $index + 1,
                    $row->created_at->format('Y-m-d H:i'),
                    $row->nama_pemohon_1,
                    $row->email_pj,
                    $row->judul_merek,
                    $row->kelas_merek,
                    $row->jenis_merek,
                    $row->status ?? 'Pending'
                ]);
            }

            fclose($file);
        };

        return response()->stream($callback, 200, $headers);
    }
}