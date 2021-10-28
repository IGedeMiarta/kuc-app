<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AbsensiController;
use App\Http\Controllers\DatatablesController;
use App\Http\Controllers\PegawaiController;

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
Route::post('/search', function () {
    $route=$_POST;
    return redirect($route['search']);
});

Route::get('/', function () {
    return view('layouts.dashboardmain',
    ['title'=>'Dashboard']
);
});

Route::get('/pegawai',[PegawaiController::class,'index']);
Route::get('/pegawai-detail/{pegawai}',[PegawaiController::class,'show']);
Route::post('/pegawai-detail/{NIP}',[PegawaiController::class,'update']);

Route::resource('/absensi', AbsensiController::class);

Route::get('/tb-absen',[DatatablesController::class,'tabelAbsen'])->name('absensi.index'); //serverside datatables
