<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RuanganController;
use App\Http\Controllers\ProyektorController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/ruangan', function () {
    return view('ruangan.index');
});

// Routes untuk Ruangan
Route::resource('ruangan', RuanganController::class);

// Routes untuk Proyektor
Route::resource('proyektor', ProyektorController::class);
