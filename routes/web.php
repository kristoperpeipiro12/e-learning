<?php

use App\Http\Controllers\Admin\HomeController as AdminHomeController;
use App\Http\Controllers\Guru\HomeController as GuruHomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Murid\HomeController as MuridHomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
 */

// Route::get('/', function () {
//     return view('welcome');
// });

// Route Awal
Route::get('/', [LoginController::class, 'login'])->name('login');

// Route Admin
Route::prefix('admin')->group(function () {
    Route::get('/', [AdminHomeController::class, 'index'])->name('admin');
});

// Route Guru
Route::prefix('guru')->group(function () {
    Route::get('/', [GuruHomeController::class, 'index'])->name('guru');
});

// Murid Route
Route::prefix('murid')->group(function () {
    Route::get('/', [MuridHomeController::class, 'index'])->name('murid');
    Route::get('/tugas', [MuridHomeController::class, 'tugas'])->name('murid.tugas');
});

// Note :
// Prefix cocok digunakan jika kamu memiliki sekelompok URL yang memiliki pola yang
// sama. Misalnya, jika kamu memiliki banyak route yang berhubungan dengan admin 
// atau guru, maka kamu bisa menggunakan prefix.
