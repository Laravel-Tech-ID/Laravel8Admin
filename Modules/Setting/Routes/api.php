<?php

use Illuminate\Http\Request;
use Modules\Setting\Entities\Setting;

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

Route::group(['middleware' => 'api', 'prefix' => 'v1'], function(){
    Route::group(['prefix' => 'setting'], function(){
        Route::get('index', [Modules\Setting\Http\Controllers\V1\SettingController::class, 'index']);
        Route::post('store', [Modules\Setting\Http\Controllers\V1\SettingController::class, 'store']);
    });
});
