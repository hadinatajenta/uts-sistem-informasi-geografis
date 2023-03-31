<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\titikController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GeospasialController;

//menampilkan data dari database TITIKCONTROLLER.PHP
Route::get('/', [titikController::class, 'index']);
Route::get('/gis', [titikController::class, 'titik']);

//menambahkan data dari dashboard
Route::get('/dashboard', [GeospasialController::class, 'index']);
Route::post('/dashboardAdmin', [App\Http\Controllers\GeospasialController::class, 'store'])->name('dashboardAdmin');

Auth::routes();

//setelah login masuk ke halaman dashboard
Route::get('/dashboardAdmin', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/geospasial/{id}/edit', [GeospasialController::class, 'edit'])->name('geospasial.edit');

Route::put('/geospasial/{id}', [GeospasialController::class, 'update'])->name('geospasial.update');

Route::delete('/geospasial/{id}', [GeospasialController::class, 'destroy'])->name('geospasial.destroy');