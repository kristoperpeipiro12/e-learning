<?php

use App\Http\Controllers\Admin\MapelController;
use App\Http\Controllers\Auth\LoginController;
// use App\Http\Controllers\LoginController;
use App\Http\Controllers\admin\HomeController as adminHomeController;
use App\Http\Controllers\admin\InggrisController;
use App\Http\Controllers\admin\MatematikaController;
use App\Http\Controllers\Murid\HomeController as MuridHomeController;
use App\Http\Controllers\Player\PlayerController;
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
    Route::post('/mapel/store', [MapelController::class, 'store'])->name('mapel.store');

    Route::get('/math', [MatematikaController::class, 'index'])->name('admin.matematika');
    Route::get('/math/create', [MatematikaController::class, 'create'])->name('admin.matematika.create');
    Route::post('/math/store', [MatematikaController::class, 'store'])->name('matematika.store');
    Route::delete('/math/{id}', [MatematikaController::class, 'delete'])->name('matematika.delete');

    Route::get('/eng', [InggrisController::class, 'index'])->name('admin.inggris');
    Route::get('/eng/create', [InggrisController::class, 'create'])->name('admin.inggris.create');
    Route::post('/eng/store', [InggrisController::class, 'store'])->name('inggris.store');
    Route::delete('/eng/{id}', [InggrisController::class, 'delete'])->name('inggris.delete');

});

// Murid Route
Route::prefix('player')->group(function () {
    // Route::get('/', [PlayerController::class, 'index'])->name('player');
    Route::get('/mapel', [PlayerController::class, 'index'])->name('player.mapel');
    Route::get('/soal/{mapel}', [PlayerController::class, 'play'])->name('player.play');
});