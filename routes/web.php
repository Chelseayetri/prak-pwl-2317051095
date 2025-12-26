<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MataKuliahController; 

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user', [UserController::class, 'index']);
Route::get('/user/create', [UserController::class, 'create'])->name('user.create');
Route::post('/user', [UserController::class, 'store'])->name('user.store');

Route::get('/matakuliah', [MataKuliahController::class, 'index']);
Route::get('/matakuliah/create', [MataKuliahController::class, 'create']);
Route::post('/matakuliah', [MataKuliahController::class, 'store'])->name('matakuliah.store');

Route::get('/matakuliah/{id}/edit', [MataKuliahController::class, 'edit']); // form edit
Route::put('/matakuliah/{id}', [MataKuliahController::class, 'update'])->name('matakuliah.update'); // simpan hasil edit
Route::delete('/matakuliah/{id}', [MataKuliahController::class, 'destroy'])->name('matakuliah.destroy'); // hapus data
