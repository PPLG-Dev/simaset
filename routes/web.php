<?php

use App\Http\Controllers\TanahController;
// use App\Models\Barang; ini dihapus
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['name' => 'Jane Doe']);
});

// Route::get('/barang', function () {
//     return view('data', [
//         'title' => 'Barang',
//         'items' => Barang::all(),
//     ]);
// });

// Ganti jadi ini!
Route::get('/tanah', [TanahController::class, 'index'])->name('tanah.index');
Route::get('/tanah/create', [TanahController::class, 'create'])->name('tanah.create');
Route::post('/tanah', [TanahController::class, 'store'])->name('tanah.store');
Route::get('/tanah/{id}/edit', [TanahController::class, 'edit'])->name('tanah.edit');
Route::put('/tanah/{id}', [TanahController::class, 'update'])->name('tanah.update');
Route::delete('/tanah/{id}', [TanahController::class, 'destroy'])->name('tanah.destroy');


