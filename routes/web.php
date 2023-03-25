<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\PaketController;
use App\Http\Controllers\TrainerController;
use App\Http\Controllers\ListKendaraanController;
use App\Http\Controllers\LokasiKontakController;

Route::redirect('/', '/home');

Route::get('/home', [HomeController::class, 'index']);

Route::get('/about', [AboutController::class, 'index']);

Route::get('/jadwal', [JadwalController::class, 'index']);

Route::get('/paket', [PaketController::class, 'index']);

Route::get('/trainer', [TrainerController::class, 'index']);

Route::get('/list-kendaraan', [ListKendaraanController::class, 'index']);

Route::get('/lokasi-dan-kontak', [LokasiKontakController::class, 'index']);