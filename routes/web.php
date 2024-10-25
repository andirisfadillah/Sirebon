<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;

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


route::get('/login',[LoginController::class,'halamanlogin'])->name('login');
route::post('/postLogin',[LoginController::class,'postLogin'])->name(name: 'postLogin');

Route::group(['middleware' => ['auth','ceklevel:karyawan,admin']], function () {
    Route::get('/home', [HomeController::class,'index'])->name('home');
});