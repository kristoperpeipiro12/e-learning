<?php

use App\Http\Controllers\Admin\MapelController;
use App\Http\Controllers\Auth\LoginController;
// use App\Http\Controllers\LoginController;
use App\Http\Controllers\admin\HomeController as adminHomeController;
use App\Http\Controllers\admin\InggrisController;
use App\Http\Controllers\admin\MatematikaController;
use App\Http\Controllers\Murid\HomeController as MuridHomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home.index');


Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.process');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

// Route Admin
// Route::prefix('admin')->group(function () {
//     Route::get('/', [AdminHomeController::class, 'index'])->name('admin');
// });

// Route admin
Route::prefix('admin')->group(function () {
    Route::get('/', [adminHomeController::class, 'index'])->name('admin');

    Route::get('/mapel', [MapelController::class, 'index'])->name('admin.mapel');
    Route::get('/mapel/create', [MapelController::class, 'create'])->name('admin.mapel.create');

    Route::get('/math', [MatematikaController::class, 'index'])->name('admin.matematika');
    Route::get('/math/create', [MatematikaController::class, 'create'])->name('admin.matematika.create');

    Route::get('/eng', [InggrisController::class, 'index'])->name('admin.inggris');
    Route::get('/eng/create', [InggrisController::class, 'create'])->name('admin.inggris.create');

});

// Murid Route
Route::prefix('murid')->group(function () {
    Route::get('/', [MuridHomeController::class, 'index'])->name('murid.mapel');
    Route::get('/matematika', [MuridHomeController::class, 'soalmtk'])->name('murid.matematika');
    Route::get('/inggris', [MuridHomeController::class, 'soaleng'])->name('murid.inggris');


    Route::get('/tugas', [MuridHomeController::class, 'tugas'])->name('murid.tugas');
});