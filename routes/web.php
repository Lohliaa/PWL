<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MahasiswaController;
use Illuminate\Http\Request;

use App\Http\Controllers\SuplierController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\PegawaiController;

use App\Http\Controllers\ArticleController;


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

// Route::get('/',function (){return view('index');});

// Route::get('/',[HomeController::class, 'index']);
Route::get('/suplier',[SuplierController::class, 'suplier'])->name('suplier');
Route::get('/pelanggan',[PelangganController::class, 'pelanggan'])->name('pelanggan');
// -------------------------------------------------------------------------------//
Route::get('/barang',[BarangController::class, 'barang'])->name('barang');
Route::get('/pegawai',[PegawaiController::class, 'pegawai'])->name('pegawai');

Route::get('/', function () {
    return view('welcome');
});

//Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::resource('mahasiswa', MahasiswaController::class);
Route::get('/search', [MahasiswaController::class, 'search'])->name('search');
Route::get('/mahasiswa/nilai/{mahasiswa}', [MahasiswaController::class, 'mhsMatkul'])->name('nilai');

Route::resource('articles', ArticleController::class);

Route::get('/article/cetak_pdf', [ArticleController::class, 'cetak_pdf']);

Route::get('/mahasiswa/cetakpdf/{mahasiswa}', [MahasiswaController::class, 'cetak_pdf'])->name('cetakpdf');