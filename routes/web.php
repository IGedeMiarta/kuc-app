<?php

use App\Http\Controllers\AuthController;
use App\Models\Searchbar;
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
Route::get('/searchbar', [Searchbar::class,'loadData']);

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

Route::get('/login', [AuthController::class,'loginview']);
Route::post('/login', [AuthController::class,'authlogin']);
Route::get('/lockscreen', [AuthController::class,'lockscreen']);
