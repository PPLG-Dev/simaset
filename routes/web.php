<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BangunanController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\TanahController;
// use App\Models\Barang; ini dihapus
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['name' => 'Jane Doe']);
});

// Hanya yang belum login yang bisa ke form login
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'loginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
});

// Grup untuk semua pengguna yang sudah login (admin & petugas)
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Route yang bisa diakses admin dan petugas
    Route::middleware('role:admin,petugas')->group(function () {
        Route::resource('/tanah', TanahController::class)->names('tanah');
        Route::resource('/bangunan', BangunanController::class)->names('bangunan');
    });

    // Route khusus untuk admin (manajemen pengguna)
    Route::middleware('role:admin')->group(function () {
        // Pastikan Anda sudah membuat UserController, misalnya dengan:
        // php artisan make:controller UserController --resource
        Route::resource('/users', UserController::class)->names('users');
    });

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});