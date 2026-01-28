<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController; // Panggil Koki kita tadi

// Route untuk Halaman Depan
Route::get('/', [HomeController::class, 'index']);