<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
// Route::post('/login', [App\Http\Controllers\LoginController::class, 'redirect'])->name('login-user');
Route::post('/register', [App\Http\Controllers\RegistController::class, 'create'])->name('register-user');

// Admin
Route::middleware('role:admin')->get('/dashboard', function () {
    return view('layouts.app');
})->name('dashboard');
Route::get('/dashhome', [App\Http\Controllers\HomeController::class, 'index'])->name('dashhome');
Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin');

// Kategori
Route::get('/kategori', [App\Http\Controllers\KategoriController::class, 'index'])->name('kategori');
Route::get('/kategori/create', [App\Http\Controllers\KategoriController::class, 'create'])->name('kategori.create');
Route::post('/kategori', [App\Http\Controllers\KategoriController::class, 'store'])->name('kategori.store');
Route::get('/kategori/{id}/edit', [App\Http\Controllers\KategoriController::class, 'edit'])->name('kategori.edit');
Route::put('/kategori/{id}', [App\Http\Controllers\KategoriController::class, 'update'])->name('kategori.update');

// Buku
Route::get('/buku', [App\Http\Controllers\BukuController::class, 'index'])->name('buku');
Route::get('/buku/create', [App\Http\Controllers\BukuController::class, 'create'])->name('buku.create');
Route::post('/buku', [App\Http\Controllers\BukuController::class, 'store'])->name('buku.store');
Route::get('/buku/{id}/edit', [App\Http\Controllers\BukuController::class, 'edit'])->name('buku.edit');
Route::put('/buku/{id}', [App\Http\Controllers\BukuController::class, 'update'])->name('buku.update');


// User
Route::middleware('role:user')->get('/home', function () {
    return view('customer.home.index');
})->name('home');

// List Buku
Route::get('/Listbuku', [App\Http\Controllers\ListBukuController::class, 'index'])->name('Listbuku');
Route::get('/detailbuku/{id}', [App\Http\Controllers\ListBukuController::class, 'detail'])->name('detailbuku');