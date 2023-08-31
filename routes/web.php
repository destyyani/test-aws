<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\PelamarController;
use App\Models\Pelamar;
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
    return view('beranda');
});
Route::get('/beranda', function () {
    return view('beranda');
});
 Route::get('/profil', function () {
    return view('profil');
 });
//Route::get('/barang', [BarangController::class,'index']);
//Route::get('/barang/create', [BarangController::class,'create']);
//Route::post('/barang', [BarangController::class,'store']);
//Route::get('/barang/{barang}', [BarangController::class,'show']);
//Route::get('/barang/{barang}/edit', [BarangController::class,'edit']);
//Route::put('/barang/{barang}', [BarangController::class,'update']);
//Route::delete('/barang/{barang}', [BarangController::class,'destroy']);

//route URL untuk satu kesatuan semua function dari controller
Route::resource('/pelamar', PelamarController::class);
//Route::resource('/guru', GuruController::class);
