<?php

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
    return view('layouts.dashboard');
});

Route::get('/blank', function () {
    return view('pages.blank');
});

Route::get('/input', function () {
    return view('pages.forminpt');
});

Route::get('/login', function () {
    return view('auth.login');
});