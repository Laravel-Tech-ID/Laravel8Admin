<?php

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

Route::get('/', function (){
    return redirect('login');
    // dd(config('app.fe_asset'));
    // return view('fe.eduzone.index');
});

// Route::group(['prefix' => 'admin', 'middleware' => ['app','auth']],function(){
// Route::group(['prefix' => 'admin', 'middleware' => ['app','auth']],function(){

// });

// Route::post('/daftar', [App\Http\Controller\AuthController::class, 'daftar']);
// Route::get('/user', [App\Http\Controllers\UserController::class, 'user']);
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
