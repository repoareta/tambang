<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PegawaiController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('login', function () {
    return view('login');
});

// Dashboard
Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

// Pegawai
Route::prefix('pegawai')->name('pegawai.')->group(function () {
    Route::get('/', [PegawaiController::class, 'index'])->name('index');
    Route::get('/create', [PegawaiController::class, 'create'])->name('create');
    Route::get('/{id}/edit', [PegawaiController::class, 'edit'])->name('edit');
});
