<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\BeritaController;
use App\Http\Controllers\Admin\ProfilSekolahController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('berita', BeritaController::class)
        ->except(['show'])
        ->parameters(['berita' => 'berita']);
});

Route::get('/berita/{slug}', [HomeController::class, 'show'])
    ->name('berita.show');

    Route::get('/profil-sekolah', [ProfilSekolahController::class, 'edit'])
    ->name('profil-sekolah.edit');

Route::put('/profil-sekolah', [ProfilSekolahController::class, 'update'])
    ->name('profil-sekolah.update');