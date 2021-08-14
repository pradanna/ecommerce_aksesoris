<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BarangController;
use Illuminate\Support\Facades\Route;

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
    return view('home');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/tentang-kami', function () {
    return view('tentangKami');
});

Route::get('/register-page', function () {
    return view('registerPage');
});

Route::get('/detail', function () {
    return view('detail');
});

Route::get('/custom', function () {
    return view('detail-custom');
});

Route::get('/kategori', function () {
    return view('kategori');
});

Route::get('/user', function () {
    return view('user/dashboard');
});



Route::get('/user/keranjang', function () {
    return view('user/keranjang');
});

Route::get('/user/pembayaran', function () {
    return view('user/pembayaran');
});


Route::get('/user/menunggu', function () {
    return view('user/menunggu');
});

Route::get('/user/proses', function () {
    return view('user/proses-desain');
});

Route::get('/user/pengiriman', function () {
    return view('user/pengiriman');
});

Route::get('/user/selesai', function () {
    return view('user/selesai');
});

Route::get('/user/profil', function () {
    return view('user/profil');
});


Route::get('/user/profil', function () {
    return view('user/profil');
});


Route::get('/admin', function () {
    return view('admin/dashboard');
});

Route::get('/admin/produk', function () {
    return view('admin/produk/produk');
});

Route::get('/admin/pelanggan', function () {
    return view('admin/pelanggan/pelanggan');
});

Route::get('/admin/pesanan', function () {
    return view('admin/pesanan/pesanan');
});




Route::post('/register',[AuthController::class,'register']);

Route::get('/barang', [BarangController::class, 'index']);
Route::post('/barang', [BarangController::class, 'createProduct']);
