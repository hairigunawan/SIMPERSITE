<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RuanganController;
use App\Http\Controllers\ProyektorController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PeminjamanController;

// Halaman utama
Route::get('/', [HomeController::class, 'index'])->name('home');

// Routes untuk Ruangan
Route::resource('ruangan', RuanganController::class);

// Routes untuk Proyektor
Route::resource('proyektor', ProyektorController::class);

Route::get('/peminjaman', [PeminjamanController::class, 'index'])->name('peminjaman');
Route::post('/peminjaman/ruangan', [PeminjamanController::class, 'pinjamRuangan'])->name('peminjaman.ruangan');
Route::post('/peminjaman/proyektor', [PeminjamanController::class, 'pinjamProyektor'])->name('peminjaman.proyektor');
