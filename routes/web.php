<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BangunanController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\TanahController;
// use App\Models\Barang; ini dihapus
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['name' => 'Jane Doe']);
});

// Hanya yang belum login yang bisa ke form login
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'loginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
});

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    });
    Route::resource('/tanah', TanahController::class)->names('tanah');
    Route::resource('/bangunan', BangunanController::class)->names('bangunan');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});