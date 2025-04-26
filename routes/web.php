<?php

use App\Http\Controllers\FrontController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChatbotController;


Route::get('/', [FrontController::class, 'index'])->name('index');
Route::get('/filter-detail-kota', [FrontController::class, 'filter'])->name('filter.detailkota');
Route::get('/wisata', [FrontController::class, 'wisata'])->name('wisata');

Route::get('/umkm', [FrontController::class, 'umkm'])->name('umkm');
Route::get('/kuliner', [FrontController::class, 'kuliner'])->name('kuliner');
Route::get('/komunitas', [FrontController::class, 'komunitas'])->name('komunitas');
Route::post('/cari-map', [FrontController::class, 'cariMap'])->name('cari.map');

