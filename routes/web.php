<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\barangController;

Route::get('/Beranda', [barangController::class, 'index'])->name('barang.index');
Route::get('/TambahBarang', [barangController::class, 'create'])->name('barang.create');
Route::post('/store', [barangController::class, 'store'])->name('barang.store');
Route::get('/DetailBarang/{id}', [barangController::class, 'show'])->name('barang.show');