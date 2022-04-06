<?php

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

Route::group(['prefix' => 'admin', 'middleware' => ['auth','app']],function(){
    Route::group(['prefix' => 'profile'], function(){
        Route::get('edit',[Modules\Profile\Http\Controllers\V1\Web\ProfileController::class, 'edit'])->name('admin.profile.edit');
        Route::put('update',[Modules\Profile\Http\Controllers\V1\Web\ProfileController::class, 'update'])->name('admin.profile.update');
        Route::delete('{id}/delete',[Modules\Profile\Http\Controllers\V1\Web\ProfileController::class, 'destroy'])->name('admin.profile.destroy');
        Route::get('{id}/file',[Modules\Profile\Http\Controllers\V1\Web\ProfileController::class, 'file'])->name('admin.profile.file');
    });
});