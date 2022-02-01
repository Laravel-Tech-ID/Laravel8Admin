<?php

use Illuminate\Http\Request;

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

// Route::group(['middleware' => 'api', 'prefix' => 'api'], function(){
//     Route::group(['prefix' => 'v1'], function(){
//         Route::group(['prefix' => 'setting'], function(){
//             return 'Testing';
//         });
//     });
// });
// Route::middleware('auth:api')->get('/auth', function (Request $request) {
//     return $request->user();
// });

// Route::group(['middleware' => 'auth:api', 'prefix' => 'v1'], function(){
Route::group(['middleware' => 'api', 'prefix' => 'v1'], function(){
    Route::group(['prefix' => 'auth'], function(){
        Route::get('login', [Modules\Auth\Http\Controllers\AuthController::class, 'login']);
        Route::post('register', [Modules\Auth\Http\Controllers\AuthController::class, 'register']);
    });
});
