<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('views.beranda');
Route::get('/profil-sekolah', [HomeController::class, 'profilSekolah'])->name('views.profil_sekolah');
Route::get('/sambutan-kepala-sekolah', [HomeController::class, 'sambutan'])->name('views.sambutan');
Route::get('/visi-misi', [HomeController::class, 'visimisi'])->name('views.visimisi');
Route::get('/struktur-organisasi', [HomeController::class, 'struktur'])->name('views.struktur');
Route::get('/sarana-prasarana', [HomeController::class, 'sarana'])->name('views.sarana');
Route::get('/sarana-prasarana/{slug}', [HomeController::class, 'saranaDetail'])->name('views.sarana.detail');
Route::get('/fasilitas-unggulan', [HomeController::class, 'fasilitas'])->name('views.fasilitas');
Route::get('/ekstrakurikuler', [HomeController::class, 'ekstrakurikuler'])->name('views.ekstra');
Route::get('/ekstrakurikuler/{slug}', [HomeController::class, 'ekstrakurikulerDetail'])->name('views.ekstra.detail');
Route::prefix('kejuruan')->group(function () {
    Route::get('/teknik-pemesinan', [HomeController::class, 'mesin'])->name('views.mesin');
    Route::get('/pplg', [HomeController::class, 'pplg'])->name('views.pplg');
});
Route::get('/galeri', [HomeController::class, 'galeri'])->name('views.galeri');
Route::prefix('bkk')->group(function () {
    Route::get('/registrasi-alumni', [HomeController::class, 'registrasiAlumni'])->name('bkk.registrasi');
    Route::get('/info-lowongan', [HomeController::class, 'infoLowongan'])->name('bkk.lowongan');
    Route::get('/info-lowongan/{slug}', [HomeController::class, 'infoLowonganDetail'])->name('bkk.lowongan.detail');
});
Route::get('/kontak', [HomeController::class, 'kontak'])->name('views.kontak');
Route::get('/berita', [HomeController::class, 'berita'])->name('views.berita');

Route::get('/kurikulum', [HomeController::class, 'kurikulum'])->name('views.kurikulum');
Route::get('/kalender-akademik', [HomeController::class, 'kalender'])->name('views.kalender');
Route::get('/prestasi', [HomeController::class, 'prestasi'])->name('views.prestasi');