<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\HistoryController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PesanController;
use App\Http\Controllers\ProfileController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::group(['middleware' => ['auth', 'ceklevel:penjual']], function () {
    Route::get('/daftar-barang', [BarangController::class, 'index']);
    Route::get('/daftar-barang/{id}', [BarangController::class, 'barang']);
    Route::get('/daftar-pesanan', [BarangController::class, 'daftar_pesanan']);
});

Route::group(['middleware' => ['auth', 'ceklevel:user']], function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/pesan/{id}', [PesanController::class, 'index']);
    Route::post('/pesan/{id}', [PesanController::class, 'pesan']);
    Route::get('/check-out', [PesanController::class, 'check_out']);
    Route::delete('/check-out/{id}', [PesanController::class, 'delete']);

    Route::get('/konfirmasi-check-out', [PesanController::class, 'konfirmasi']);

    Route::get('/history', [HistoryController::class, 'index']);
    Route::get('history/{id}', [HistoryController::class, 'detail']);
});

Route::group(['middleware' => ['auth', 'ceklevel:penjual,user']], function () {
    Route::get('/profile', [ProfileController::class, 'index']);
    Route::post('/profile', [ProfileController::class, 'update']);
});
