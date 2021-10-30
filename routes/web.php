<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AbsensiController;
use App\Http\Controllers\DatatablesController;
use App\Http\Controllers\LoginController;
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
Route::get('/', function () {
    return redirect("/login");  
})->middleware('auth');

Route::get('/dashboard', function () {
    return view('layouts.dashboard.index',
    ['title'=>'Dashboard']);
})->middleware('auth');

Route::get('/login', [LoginController::class,'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class,'authenticate']);
Route::post('/search', [LoginController::class,'logout']);

Route::get('/pegawai',[PegawaiController::class,'index'])->middleware('auth');
Route::get('/pegawai-detail/{pegawai}',[PegawaiController::class,'show']);
Route::post('/pegawai-detail/{NIP}',[PegawaiController::class,'update']);

// Route::resource('/pegawai', PegawaiController::class)->middleware('auth');
Route::resource('/absensi', AbsensiController::class);

Route::get('/tb-absen',[DatatablesController::class,'tabelAbsen'])->name('absensi.index'); //serverside datatables