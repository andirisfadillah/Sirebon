<?php

use App\Http\Controllers\Admin\RekeningController;
use App\Http\Controllers\Admin\WajibController;
use App\Http\Controllers\Admin\KapalWajibController;
use App\Http\Controllers\Admin\KategoriController;
use App\Http\Controllers\Admin\PembayaranController;
use App\Http\Controllers\Admin\LaporanController;
use App\Http\Controllers\Admin\ProfilController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\WajibRetribusi\WajibRetribusiController;
use App\Http\Controllers\WajibRetribusi\KategoriRetribusiController;
use App\Http\Controllers\WajibRetribusi\KapalkuController;
use App\Http\Controllers\WajibRetribusi\ProfileController;
use App\Http\Controllers\WajibRetribusi\KonfirmasiPembayaranController;

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
route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::group(['middleware' => ['auth', 'ceklevel:admin,wajib']], function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::resource('rekening', RekeningController::class);
    Route::resource('kategori-retribusi', KategoriController::class);
    Route::resource('wajib-retribusi', WajibController::class);
    Route::resource('kapal', KapalWajibController::class);
    Route::resource('pembayaran', PembayaranController::class);
    Route::resource('konfirmasi', KonfirmasiPembayaranController::class);
    Route::resource('laporan', LaporanController::class);
    Route::resource('profil', ProfilController::class);
    Route::resource('kategori', KategoriRetribusiController::class);
    Route::resource('kapalku', KapalkuController::class);
    Route::get('/ganti-password', [ProfilController::class, 'changePasswordForm'])->name('ganti-password-form');
    Route::post('/ganti-password', [ProfilController::class, 'changePassword'])->name('ganti-password');
});

Route::group(['middleware' => ['auth', 'ceklevel:wajib']], routes: function () {
    Route::get('/prf', [ProfileController::class, 'profile'])->name('profile');
});
