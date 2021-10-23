<?php

use App\Http\Controllers\JobRoleController;
use App\Models\GlobalModel;
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

//  http://127.0.0.1:8000/api/country  {link api}
Route::get('country', function () {
    $rs = GlobalModel::countryList();
    return response($rs,200);
});
Route::post('country', function (Request $request) {
    if(isset($_POST)){
        return $_POST;
    }else{
        return 'fail';
    }
});

// Route::get('/job-role',[JobRoleController::class,'index']);
// Route::post('/job-role', [JobRoleController::class,'store']);
// Route::get('/job-role/{id}', [JobRoleController::class,'show']);
// Route::put('/job-role/{id}', [JobRoleController::class,'update']);
// Route::delete('/job-role/{id}', [JobRoleController::class,'destroy']);

Route::resource('job-role', JobRoleController::class);

