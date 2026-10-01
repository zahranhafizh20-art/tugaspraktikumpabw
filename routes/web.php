<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\BanjirController;

Route::get('/students', [StudentController::class, 'index'])->name('students.index');
Route::get('/lapor', [BanjirController::class, 'form'])->name('banjir.form');
Route::post('/lapor', [BanjirController::class, 'kirim'])->name('banjir.kirim');
Route::get('/konfirmasi', [BanjirController::class, 'konfirmasi'])->name('banjir.konfirmasi');
Route::get('/daftar', [BanjirController::class, 'daftar'])->name('banjir.daftar');

