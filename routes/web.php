<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SiteController;

// 🏥 Halaman utama RSHP (public)
Route::get('/', [SiteController::class, 'home'])->name('home');
Route::get('/struktur', [SiteController::class, 'struktur'])->name('struktur');
Route::get('/layanan', [SiteController::class, 'layanan'])->name('layanan');
Route::get('/kontak', [SiteController::class, 'kontak'])->name('kontak');
Route::get('/buatjanji', [SiteController::class, 'buatjanji'])->name('buatjanji');

// 🧩 Route default Breeze (jangan dihapus)
require __DIR__ . '/auth.php';

// =====================================================
// 🔒 Semua route di bawah hanya bisa diakses setelah login
// =====================================================
Route::middleware(['auth'])->group(function () {

    // 🔹 Route profile (default Breeze)
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // =====================================================
    // 🎯 Dashboard berdasarkan role
    // =====================================================

    Route::get('/dashboard/admin', [App\Http\Controllers\DashboardAdminController::class, 'index'])
        ->name('dashboard.admin');

    Route::get('/dashboard/dokter', [App\Http\Controllers\DashboardDokterController::class, 'index'])
        ->name('dashboard.dokter');

    Route::get('/dashboard/perawat', [App\Http\Controllers\DashboardPerawatController::class, 'index'])
        ->name('dashboard.perawat');

    Route::get('/dashboard/resepsionis', [App\Http\Controllers\DashboardResepsionisController::class, 'index'])
        ->name('dashboard.resepsionis');

    Route::get('/dashboard/pemilik', [App\Http\Controllers\DashboardPemilikController::class, 'index'])
        ->name('dashboard.pemilik');
});
