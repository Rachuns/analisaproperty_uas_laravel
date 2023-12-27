<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminsController;

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

Route::get('/', function () {
    return view('/beranda.index');
});

Route::get('/welcome_admin', function () {
    return view('admin.welcome_admin');
});

Route::resource('tentang', App\Http\Controllers\TentangController::class);
Route::resource('analisa', App\Http\Controllers\AnalisaController::class);
Route::resource('beranda', App\Http\Controllers\BerandaController::class);
Route::resource('layanan', App\Http\Controllers\LayananController::class);
Route::resource('testimoni', App\Http\Controllers\TestimoniController::class);
Route::resource('projek', App\Http\Controllers\ProjekController::class);