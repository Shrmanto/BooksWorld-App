<?php

use App\Models\Buku;
use App\Models\Peminjam;
use App\Models\Status;
use App\Models\transaksi_detail;
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
    $buku = Buku::all();
    $status = Status::all();
    return view('welcome', compact('buku', 'status'));
})->name('welcome');
// Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('welcome');


Auth::routes();
// Route::post('/login', [App\Http\Controllers\LoginController::class, 'redirect'])->name('login-user');
Route::post('/register', [App\Http\Controllers\RegistController::class, 'create'])->name('register-user');

// Admin
Route::middleware('role:admin')->get('/dashboard', function () {
    $peminjam = Peminjam::count();
    $PeminjamanBuku = transaksi_detail::sum('jumlah_pinjam');
    $totalBuku = Buku::count('jumlah');
    // $persentaseTersisa = ($totalBuku - $PeminjamanBuku) / $totalBuku * 100;
    // $persentaseTersisa = round($persentaseTersisa);
    return view('home', compact('peminjam', 'PeminjamanBuku'));
})->name('dashboard');

Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin');
Route::get('/peminjam', [App\Http\Controllers\PeminjamController::class, 'index'])->name('peminjam');

// Kategori
Route::get('/kategori', [App\Http\Controllers\KategoriController::class, 'index'])->name('kategori');
Route::get('/kategori/create', [App\Http\Controllers\KategoriController::class, 'create'])->name('kategori.create');
Route::post('/kategori', [App\Http\Controllers\KategoriController::class, 'store'])->name('kategori.store');
Route::get('/kategori/{id}/edit', [App\Http\Controllers\KategoriController::class, 'edit'])->name('kategori.edit');
Route::put('/kategori/{id}', [App\Http\Controllers\KategoriController::class, 'update'])->name('kategori.update');
Route::get('/kategori/{id}/delete', [App\Http\Controllers\KategoriController::class, 'destroy'])->name('kategori.delete');

// Buku
Route::get('/buku', [App\Http\Controllers\BukuController::class, 'index'])->name('buku');
Route::get('/buku/create', [App\Http\Controllers\BukuController::class, 'create'])->name('buku.create');
Route::post('/buku', [App\Http\Controllers\BukuController::class, 'store'])->name('buku.store');
Route::get('/buku/{id}/edit', [App\Http\Controllers\BukuController::class, 'edit'])->name('buku.edit');
Route::put('/buku/{id}', [App\Http\Controllers\BukuController::class, 'update'])->name('buku.update');
Route::get('/buku/{id}/delete', [App\Http\Controllers\BukuController::class, 'destroy'])->name('buku.delete');

// Lihat Transaksi Peminjaman
Route::get('/peminjamanAdmin', [App\Http\Controllers\Transaksi_DetailController::class, 'index'])->name('peminjamanAdmin');
// ACC Peminjaman
Route::get('/peminjamanAdmin/{id}/update', [App\Http\Controllers\Transaksi_DetailController::class, 'update'])->name('peminjamanAdmin.update');
Route::get('/detailpeminjaman/{id}/detail', [App\Http\Controllers\Transaksi_DetailController::class, 'showDetail'])->name('detailpeminjaman.detail');

// User
Route::middleware('role:user')->get('/home', function () {
    return view('peminjamMain.home.home');
})->name('home');

// List Buku
Route::get('/Listbuku', [App\Http\Controllers\ListBukuController::class, 'index'])->name('Listbuku');
Route::get('/detailbuku/{id}', [App\Http\Controllers\ListBukuController::class, 'detail'])->name('detailbuku');

// Kerranjang
Route::group(['prefix' => 'cart'], function () {
    Route::get('/keranjang', [App\Http\Controllers\CartController::class, 'index'])->name('keranjang');
    Route::post('/addtocart/{id}', [App\Http\Controllers\CartController::class, 'addToCart'])->name('addtocart');
    Route::delete('/removefromcart/delete/{id}', [App\Http\Controllers\CartController::class, 'removeFromCart'])->name('removefromcart');
    Route::post('/pinjam', [App\Http\Controllers\CartController::class, 'pinjam'])->name('pinjam');
});

// Peminjaman
Route::get('/peminjamanUser', [\App\Http\Controllers\Transaksi_DetailController::class, 'peminjaman'])->name('peminjamanUser');



