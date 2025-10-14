<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MatakuliahController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Di sini tempat kamu mendaftarkan route aplikasi web kamu.
| Semua route ini akan dimuat oleh RouteServiceProvider.
|
*/

Route::get('/', function () {
    return view('welcome');
});

// === Route Profil ===
Route::get('/profile/{nama}/{nim}/{kelas}', [ProfileController::class, 'profile']);

// === Route User ===
Route::get('/user', [UserController::class, 'index'])->name('user.index');
Route::get('/user/create', [UserController::class, 'create'])->name('user.create');
Route::post('/user', [UserController::class, 'store'])->name('user.store');

// === Route Mata Kuliah ===
Route::get('/matakuliah', [MatakuliahController::class, 'index'])->name('matakuliah.index'); // ✅ tambahkan name di sini
Route::get('/matakuliah/create', [MatakuliahController::class, 'create'])->name('matakuliah.create');
Route::post('/matakuliah', [MatakuliahController::class, 'store'])->name('matakuliah.store');
Route::get('/matakuliah/{id}/edit', [MatakuliahController::class, 'edit'])->name('matakuliah.edit');
Route::put('/matakuliah/{id}', [MatakuliahController::class, 'update'])->name('matakuliah.update');
Route::delete('/matakuliah/{id}', [MatakuliahController::class, 'destroy'])->name('matakuliah.destroy');