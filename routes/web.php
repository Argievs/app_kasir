<?php
use App\http\Controllers\UserController;
use App\http\Controllers\DashboardController;
use App\http\Controllers\ProdukController;
use App\http\Controllers\PelangganController;
use App\http\Controllers\PenjualanController;
use App\http\Controllers\DetailPenjualanController;
use App\http\Controllers\LoginController;
use App\http\Controllers\RegisterController;
use App\Http\Controllers\Controller;    
use Illuminate\Support\Facades\Route;

Route::get('/register', [RegisterController::class, 'showregister'])->name('register')->middleware('guest');
Route::post('/actionregister', [RegisterController::class, 'actionregister'])->name('actionregister')->middleware('guest');

Route::get('/', [LoginController::class, 'showlogin'])->name('login')->middleware('guest');
Route::post('/actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin')->middleware('guest');


Route::middleware('auth')->group(function(){ 
    
    Route::get('/logout', [LoginController::class, 'actionlogout'])->name('logout');
    // dashboard
    Route::get('/dashboard', [DashboardController::class, 'index']);
//user
Route::get('/user', [UserController::class, 'index']);
Route::get('/user/tambah', [UserController::class, 'create']);
Route::post('/user/simpan', [UserController::class, 'store']);
Route::get('/user/{id}/show', [UserController::class, 'show']);
Route::post('/user/{id}/update', [UserController::class, 'update']);
Route::get('/user/{id}/delete', [UserController::class, 'destroy']);

//produk
Route::get('/produk', [ProdukController::class, 'index']);
Route::get('/produk/tambah', [ProdukController::class, 'create']);
Route::post('/produk/simpan', [ProdukController::class, 'store']);
Route::get('/produk/{id}/edit', [ProdukController::class, 'edit']);
Route::post('/produk/{id}/update', [ProdukController::class, 'update']);
Route::get('/produk/{id}/hapus', [ProdukController::class, 'destroy']);

//pelanggan
Route::get('/pelanggan', [PelangganController::class, 'index']);
Route::get('/pelanggan/tambah', [PelangganController::class, 'create']);
Route::post('/pelanggan/simpan', [PelangganController::class, 'store']);
Route::get('/pelanggan/{id}/edit', [PelangganController::class, 'edit']);
Route::post('/pelanggan/{id}/update', [PelangganController::class, 'update']);
Route::get('/pelanggan/{id}/hapus', [PelangganController::class, 'destroy']);

//penjualan
Route::get('/penjualan', [PenjualanController::class, 'index']);
Route::get('/penjualan/tambah', [PenjualanController::class, 'create']);
Route::post('/penjualan/simpan', [PenjualanController::class, 'store']);
Route::get('/penjualan/laporan', [PenjualanController::class, 'laporan']);
Route::get('/penjualan/{id}/struk', [PenjualanController::class, 'struk']);
Route::get('/penjualan/{id}/edit', [PenjualanController::class, 'edit']);
Route::post('/penjualan/{id}/update', [PenjualanController::class, 'update']);
Route::get('/penjualan/{id}/hapus', [PenjualanController::class, 'destroy']);

//detailpenjualan
Route::get('/detailpenjualan', [DetailPenjualanController::class, 'index']);
Route::get('/detailpenjualan/tambah', [DetailPenjualanController::class, 'create']);
Route::post('/detailpenjualan/simpan', [DetailPenjualanController::class, 'store']);
Route::get('/detailpenjualan/{id}/edit', [DetailPenjualanController::class, 'edit']);
Route::post('/detailpenjualan/{id}/update', [PenjualanController::class, 'update']);
Route::get('/detailpenjualan/{id}/hapus', [DetailPenjualanController::class, 'destroy']);

});