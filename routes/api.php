<?php

use App\Http\Controllers\AbsensiController;
use App\Http\Controllers\FingerprintController;
use App\Http\Controllers\JobRoleController;
use App\Models\GlobalModel;
use App\Models\Kodearea;
use App\Models\Pegawai;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/fingerprint', [FingerprintController::class,'index']);

Route::get('/absensi/{kodepegawai}', [AbsensiController::class,'show']);

Route::get('/test',function(){
        return Kodearea::all();
});
