<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomePageController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Admin\KategoriController;
use App\Http\Controllers\Admin\ProdukController;


Route::get('back-end', function () {
    return view('backend/main');
});

Auth::routes();

// Route::get('/', [App\Http\Controllers\HomeController::class, 'homePage']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', [HomePageController::class, 'index']);

Route::get('dashboard', [DashboardController::class, 'index']);

Route::get('admin/kategori', [KategoriController::class, 'index']);
Route::get('admin/tambah/kategori', [KategoriController::class, 'tambah']);
Route::post('admin/kategori', [KategoriController::class, 'tambahAksi']);
Route::get('admin/kategori/edit/{id}', [KategoriController::class, 'edit']);
Route::put('admin/kategori/{id}', [KategoriController::class, 'editAKsi']);
Route::delete('admin/kategori/hapus/{id}', [KategoriController::class, 'hapus']);

Route::get('admin/produk', [ProdukController::class, 'index']);
Route::get('admin/tambah/produk', [ProdukController::class, 'tambah']);
Route::post('admin/produk', [ProdukController::class, 'tambahAksi']);




