<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

// Halaman utama (opsional, mengarahkan ke daftar produk)
Route::get('/', function () {
    return view('welcome');
});

// Rute untuk CRUD Produk
Route::get('/products', [ProductController::class, 'index'])->name('products.index'); // Menampilkan daftar produk
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create'); // Form tambah produk
Route::post('/products', [ProductController::class, 'store'])->name('products.store'); // Menyimpan produk baru
Route::get('/products/{product}', [ProductController::class, 'show'])->name('products.show'); // Menampilkan detail produk
Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit'); // Form edit produk
Route::put('/products/{product}', [ProductController::class, 'update'])->name('products.update'); // Memperbarui produk
Route::delete('/products/{product}', [ProductController::class, 'destroy'])->name('products.destroy'); // Menghapus produk
