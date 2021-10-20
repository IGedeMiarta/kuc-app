<?php

use App\Http\Controllers\AuthController;
use App\Models\GlobalModel;
use Clockwork\Request\Request;
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
Route::post('/search', function () {
    $route=$_POST;
    return redirect($route['search']);
});

Route::get('/', function () {
    return view('layouts.dashboardmain',
    ['title'=>'Dashboard']
);
});

Route::get('/blank', function () {
    return view('pages.blank',
    ['title'=>'Blank Pages',
     'headerlink'=>['Blank']   
    ]
);
});

Route::get('/input', function () {
    return view('pages.forminpt',
    [
        'title'=>'Form Input',
        // 'headerlink' => ['Dashboard','Gudang','Form Input']       
    ]
);
});

Route::get('/select-input', function () {
    
    return view('pages.formselect',
    [
        'title'=>'Form Select',
        'countres' => GlobalModel::countryList()
    ]
    );
});
Route::post('/select-input', function (Request $request) {
    return $_POST;
});
Route::get('/login', [AuthController::class,'loginview']);
Route::post('/login', [AuthController::class,'authlogin']);
Route::get('/lockscreen', [AuthController::class,'lockscreen']);
Route::get('/user-profile', function () {
    return view('pages.userprofile',['title'=>'User Profile']);
});

Route::get('barang-masuk',function(){
    return view('pages.brng_masuk',['title'=>'Barang Masuk','headerlink'=>['Barang','Barang Masuk']]);
});

Route::get('/absents',function(){
    return view('layouts.auth.absent',['title'=>'Absensi']);
});