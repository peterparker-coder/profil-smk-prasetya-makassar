<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\BeritaController;
use App\Http\Controllers\Admin\ProfilSekolahController;

// ─── Halaman Publik ───────────────────────────────────────────────────────────

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/berita/{slug}', [HomeController::class, 'show'])
    ->name('berita.show');

// ─── Autentikasi ──────────────────────────────────────────────────────────────

Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);
});

Route::post('/logout', [LoginController::class, 'logout'])
    ->middleware('auth')
    ->name('logout');

// ─── Admin (dilindungi middleware auth) ──────────────────────────────────────

Route::middleware('auth')->prefix('admin')->name('admin.')->group(function () {

    // CRUD Berita
    Route::resource('berita', BeritaController::class)
        ->except(['show'])
        ->parameters(['berita' => 'berita']);

    // Profil Sekolah
    Route::get('/profil-sekolah', [ProfilSekolahController::class, 'edit'])
        ->name('profil-sekolah.edit');

    Route::put('/profil-sekolah', [ProfilSekolahController::class, 'update'])
        ->name('profil-sekolah.update');
});
