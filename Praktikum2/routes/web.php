<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MobilController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;

// Home
Route::get('/', [HomeController::class, 'home'])->name('home');

// Mobil
Route::get('/mobil', [MobilController::class, 'mobil'])->name('mobil');
Route::get('/tambahMobil', [MobilController::class, 'tambahMobil'])->name('mobil.tambah');
Route::post('/simpanMobil', [MobilController::class, 'simpan'])->name('mobil.simpan');

// Company Profile
Route::get('/company-profile', [MobilController::class, 'companyProfile'])->name('company-profile');

// About
Route::get('/about', [AboutController::class, 'about'])->name('about');