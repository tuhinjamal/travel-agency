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

// Route::get('/welocme', function () {
//     return view('welcome');
// })->name('welcome');


Auth::routes();
Route::group(['namespace'=>'App\Http\Controllers\frontend',],function(){
    Route::get('/','FrontendController@view')->name('welcome');
    Route::get('/hajj_packages','FrontendController@hajj_packages')->name('hajj_packages.view');
    Route::get('/umrah_packages','FrontendController@umrah_packages')->name('umrah_packages.view');
    Route::get('/tour_packages','FrontendController@tour_packages')->name('tour_packages.view');
    Route::get('/contact','FrontendController@contact')->name('contact.front_view');
    
});

Route::group(['namespace'=>'App\Http\Controllers',],function(){

    
    Route::get('/view','BuildController@view')->name('custom.view');
    Route::get('/add','BuildController@add')->name('custom.add');
    Route::post('/store','BuildController@store')->name('custom.store');
    Route::get('/edit/{id}','BuildController@edit')->name('custom.edit');
    Route::post('/update/{id}','BuildController@update')->name('custom.update');
    Route::get('/delete/{id}','BuildController@delete')->name('custom.delete');


    Route::get('/viewNews','NewstellerController@view')->name('Newsteller.view');
    Route::get('/addNews','NewstellerController@add')->name('Newsteller.add');
    Route::post('/storeNews','NewstellerController@store')->name('Newsteller.store');
    Route::get('/editNews/{id}','NewstellerController@edit')->name('Newsteller.edit');
    Route::post('/updateNews/{id}','NewstellerController@update')->name('Newsteller.update');
    Route::get('/deleteNews/{id}','NewstellerController@delete')->name('Newsteller.delete');
    
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//admin area
Route::get('/admin/home', [App\Http\Controllers\HomeController::class, 'adminIndex'])->name('admin.home')->middleware('is_admin');


Route::get('/detail/{id}', [DetailController::class, 'detail'])->name('package.detail');

