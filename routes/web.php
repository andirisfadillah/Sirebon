<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RetribusiKapalController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\KapalkuController;
use App\Http\Controllers\KapalWajibRetribusiController;
use App\Http\Controllers\KonfirmasiPembayaranRetribusiController;
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
    return view('welcome');
});


Route::get('/login', [LoginController::class, 'halamanlogin'])->name('login');
route::post('/postlogin', [LoginController::class, 'postlogin'])->name('postlogin');

Route::group(['middleware' => ['auth', 'ceklevel:karyawan,admin']], function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/profil', [ProfilController::class, 'profil'])->name('profil');
    Route::get('/kategori', [KategoriController::class, 'kategori'])->name('kategori');
    Route::get('/kapalku', [KapalkuController::class, 'kapalku'])->name('kapalku');
    Route::get('/kapalwajibretribusi', [KapalWajibRetribusiController::class, 'kapalwajibretribusi'])->name('kapalwajibretribusi');
    Route::get('/konfirmasipembayaranretribusi', [KonfirmasiPembayaranRetribusiController::class, 'konfirmasipembayaranretribusi'])->name('kapalwajibretribusi');
});
