<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HakCiptaController;
use App\Http\Controllers\PatenController;
use App\Http\Controllers\MerekController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;

// HALAMAN UTAMA & INFORMASI
Route::get('/', function () {
    return view('index');
});

Route::get('/sejarah', function () {
    return view('sejarah');
});

// HALAMAN PENGERTIAN HKI
Route::get('/pengertian', function () {
    return view('pengertian');
});

Route::get('/pengertian-hak-cipta', function () {
    return view('pengertian-hak-cipta');
});

Route::get('/pengertian-merek', function () {
    return view('pengertian-merek');
});

Route::get('/pengertian-paten', function () {
    return view('pengertian-paten');
});

// HALAMAN SYARAT & KETENTUAN
Route::get('/syarat-ketentuan', function () {
    return view('syarat-ketentuan');
});

Route::get('/syarat-ketentuan-hak-cipta', function () {
    return view('syarat-ketentuan-hak-cipta');
});

Route::get('/syarat-ketentuan-merek', function () {
    return view('syarat-ketentuan-merek');
});

Route::get('/syarat-ketentuan-paten', function () {
    return view('syarat-ketentuan-paten');
});

// HALAMAN PENDAFTARAN & TEMPLATE
Route::get('/pendaftaran', function () {
    return view('pendaftaran');
});

Route::get('/formulir-pendaftaran', function () {
    return view('formulir-pendaftaran');
});

Route::get('/template-formulir', function () { // Sudah dihapus spasi tambahannya
    return view('template-formulir');
});

// ROUTE FORMULIR HAK CIPTA (Dengan Throttle Submit Form: Maks 3 per menit)
Route::get('/formulir-hak-cipta', [HakCiptaController::class, 'create'])->name('hakcipta.create');
Route::post('/formulir-hak-cipta', [HakCiptaController::class, 'store'])->middleware('throttle:3,1')->name('hakcipta.store');

// ROUTE FORMULIR PATEN (Dengan Throttle Submit Form: Maks 3 per menit)
Route::get('/formulir-paten', [PatenController::class, 'create'])->name('paten.create');
Route::post('/formulir-paten', [PatenController::class, 'store'])->middleware('throttle:3,1')->name('paten.store');

// ROUTE FORMULIR MEREK (Dengan Throttle Submit Form: Maks 3 per menit)
Route::get('/formulir-merek', [MerekController::class, 'create'])->name('merek.create');
Route::post('/formulir-merek', [MerekController::class, 'store'])->middleware('throttle:3,1')->name('merek.store');

// ROUTE AUTENTIKASI ADMIN (Dengan Throttle Login: Maks 5 percobaan per menit)
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->middleware('throttle:5,1')->name('login.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// ROUTE DASHBOARD ADMIN
Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    
    // Hak Cipta
    Route::get('/hak-cipta', [AdminController::class, 'hakCipta'])->name('admin.hakcipta');
    Route::get('/hak-cipta/export', [AdminController::class, 'exportHakCipta'])->name('admin.hakcipta.export');
    Route::get('/hak-cipta/{id}', [AdminController::class, 'detailHakCipta'])->name('admin.hakcipta.detail');
    Route::post('/hak-cipta/{id}/status', [AdminController::class, 'updateStatusHakCipta'])->name('admin.hakcipta.status');

    // Paten
    Route::get('/paten', [AdminController::class, 'paten'])->name('admin.paten');
    Route::get('/paten/export', [AdminController::class, 'exportPaten'])->name('admin.paten.export');
    Route::get('/paten/{id}', [AdminController::class, 'detailPaten'])->name('admin.paten.detail');
    Route::post('/paten/{id}/status', [AdminController::class, 'updateStatusPaten'])->name('admin.paten.status');

    // Merek
    Route::get('/merek', [AdminController::class, 'merek'])->name('admin.merek');
    Route::get('/merek/export', [AdminController::class, 'exportMerek'])->name('admin.merek.export');
    Route::get('/merek/{id}', [AdminController::class, 'detailMerek'])->name('admin.merek.detail');
    Route::post('/merek/{id}/status', [AdminController::class, 'updateStatusMerek'])->name('admin.merek.status');
});