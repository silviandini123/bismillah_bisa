<?php

use App\Exports\JenisExport;
use App\http\Controllers\HomeController;
use App\http\Controllers\CategoryController;
use App\http\Controllers\MenuController;
use App\http\Controllers\StokController;
use App\http\Controllers\ProdukController;
use App\http\Controllers\UserController;
use App\http\Controllers\JenisController;
use App\http\Controllers\PelangganController;
use App\Http\Controllers\PemesananController;
use App\Http\Controllers\TampilanController;
use App\Http\Controllers\TransaksiController;
use Illuminate\Support\Facades\Route;

Route::resource('/tampilan', TampilanController::class);

//login
Route::get('/login',[UserController::class, 'index']) ->name('login');
Route::post('/login/cek',[UserController::class, 'cekLogin']) ->name('cekLogin');
Route::get('/logout',[UserController::class, 'logout']) ->name('logout');

Route::group(['middleware'=>'auth'], function(){
    Route::resource('/home', HomeController::class);

    Route::group(['middleware'=>['cekUserLogin:1']], function(){
        Route::resource('/jenis', jenisController::class);
        Route::resource('/menu', MenuController::class);
        Route::resource('/stok', StokController::class);
        Route::resource('/pelanggan', PelangganController::class);
        //Route::resource('/category', CategoryController::class);
        Route::get('export/jenis', [JenisController::class, 'exportData'])->name('export-jenis');
        Route::get('export/jenis/pdf', [JenisController::class, 'generatepdf'])->name('export-jenis-pdf');
        Route::get('export/menu/pdf', [MenuController::class, 'generatepdf'])->name('export-menu-pdf');
        Route::get('export/stok/pdf', [StokController::class, 'generatepdf'])->name('export-stok-pdf');
        Route::get('export/menu', [MenuController::class, 'exportData'])->name('export-menu');
        Route::get('export/stok', [StokController::class, 'exportData'])->name('export-stok');
        Route::get('export/pelanggan', [PelangganController::class, 'exportData'])->name('export-pelanggan');
        Route::post('jenis/import', [JenisController::class, 'importData'])->name('import-jenis');
        Route::post('menu/import', [MenuController::class, 'importData'])->name('import-menu');
        Route::post('stok/import', [StokController::class, 'importData'])->name('import-stok');
    });

    Route::group(['middleware'=>['cekUserLogin:2']], function(){
        Route::resource('/pemesanan', PemesananController::class);
        Route::resource('/transaksi', TransaksiController::class);
        Route::get('/nota/{notrans}', [TransaksiController::class, 'faktur']);
        //Route::resource('/produk', ProdukController::class);
    });

    Route::group(['middleware'=>['cekUserLogin:3']], function(){
        Route::resource('/category', CategoryController::class);
    });

});



