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

Route::get('/phc', function () {
    return view('phc');
});

Route::get('/pmrk', function () {
    return view('pmrk');
});

Route::get('/pptn', function () {
    return view('pptn');
});

// HALAMAN SYARAT & KETENTUAN
Route::get('/sk', function () {
    return view('sk');
});

Route::get('/skhc', function () {
    return view('skhc');
});

Route::get('/skmrk', function () {
    return view('skmrk');
});

Route::get('/skptn', function () {
    return view('skptn');
});

// HALAMAN PENDAFTARAN & TEMPLATE
Route::get('/pendaftaran', function () {
    return view('pendaftaran');
});

Route::get('/pdffm', function () {
    return view('pdffm');
});

Route::get('/pdftf', function () {
    return view('pdftf');
});

// ROUTE FORMULIR HAK CIPTA
Route::get('/formulir-hak-cipta', [HakCiptaController::class, 'create'])->name('hakcipta.create');
Route::post('/formulir-hak-cipta', [HakCiptaController::class, 'store'])->name('hakcipta.store');

// ROUTE FORMULIR PATEN
Route::get('/formulir-paten', [PatenController::class, 'create'])->name('paten.create');
Route::post('/formulir-paten', [PatenController::class, 'store'])->name('paten.store');

// ROUTE FORMULIR MEREK
Route::get('/formulir-merek', [MerekController::class, 'create'])->name('merek.create');
Route::post('/formulir-merek', [MerekController::class, 'store'])->name('merek.store');

// ROUTE AUTENTIKASI ADMIN
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
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