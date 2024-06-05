<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\PeriksaController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\UnitKerjaController;
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
    return view('welcome');
});

Route::get('/kabar', function () {
    return view('kondisi');
});

Route::get('/pasien', function () {
    return view('pasien');
});

Route::get('/dokter', function () {
    return view('dokter');
});

Route::get('/periksa', function () {
    return view('periksa');
});

Route::get('/unit_kerja', function () {
    return view('unit_kerja');
});

route::get('/admin', [AdminController::class, 'index']);
route::get('/admin/pasien', [PasienController::class, 'index']);
route::get('/admin/periksa', [PeriksaController::class, 'index']);
route::get('/admin/dokter', [DokterController::class, 'index']);
route::get('/admin/unit_kerja', [UnitKerjaController::class, 'index']);
Route::get('/pegawai', [PegawaiController::class, 'index']);


