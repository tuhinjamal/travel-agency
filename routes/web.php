<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DetailController;
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
    return view('welcome');
});

Auth::routes();
Route::group(['namespace'=>'App\Http\Controllers\frontend',],function(){
    Route::get('/','FrontendController@view');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//admin area
Route::get('/admin/home', [App\Http\Controllers\HomeController::class, 'adminIndex'])->name('admin.home')->middleware('is_admin');


Route::get('/detail/{id}', [DetailController::class, 'detail'])->name('package.detail');
