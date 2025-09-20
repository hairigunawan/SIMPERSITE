<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RuanganController;
use App\Http\Controllers\ProyektorController;

Route::get('/', function () {
    return view('index');
});

// Routes untuk Ruangan
Route::resource('ruangan', RuanganController::class);

// Routes untuk Proyektor
Route::resource('proyektor', ProyektorController::class);
