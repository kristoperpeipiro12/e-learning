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
route::get('/', [LoginController::class, 'login'])->name('login');
Route::get('/admin', [AdminHomeController::class, 'index'])->name('admin');
Route::get('/guru', [GuruHomeController::class, 'index'])->name('guru');
Route::get('/murid', [MuridHomeController::class, 'index'])->name('murid');
