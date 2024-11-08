<?php

use App\Http\Controllers\Auth\LoginController;
// use App\Http\Controllers\LoginController;
use App\Http\Controllers\Guru\HomeController as GuruHomeController;
use App\Http\Controllers\Murid\HomeController as MuridHomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home.index');


Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.process');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
// Route Admin
// Route::prefix('admin')->group(function () {
//     Route::get('/', [AdminHomeController::class, 'index'])->name('admin');
// });

// Route Guru
Route::prefix('guru')->group(function () {
    Route::get('/', [GuruHomeController::class, 'index'])->name('guru');
});

// Murid Route
Route::prefix('murid')->group(function () {
    Route::get('/', [MuridHomeController::class, 'index'])->name('murid.mapel');
Route::get('/matematika', [MuridHomeController::class, 'soalmtk'])->name('murid.matematika');
Route::get('/inggris', [MuridHomeController::class, 'soaleng'])->name('murid.inggris');


    Route::get('/tugas', [MuridHomeController::class, 'tugas'])->name('murid.tugas');
});