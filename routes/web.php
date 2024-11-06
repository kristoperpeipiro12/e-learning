<?php

use App\Http\Controllers\Auth\LoginController;
// use App\Http\Controllers\LoginController;
use App\Http\Controllers\Guru\HomeController as GuruHomeController;
use App\Http\Controllers\Murid\HomeController as MuridHomeController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [LoginController::class, 'index'])->name('login');
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
    Route::get('/', [MuridHomeController::class, 'index'])->name('murid');
    Route::get('/tugas', [MuridHomeController::class, 'tugas'])->name('murid.tugas');
});