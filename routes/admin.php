<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register Admin routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "Admin" middleware group. Now create something great!
|
*/



//Route::get('/home',[App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');


#Route::get('/admin/home',[App\Http\Controllers\HomeController::class, 'admin'])->name('admin.home')->middleware('is_admin');
#Route::get('admin-login',[App\Http\Controllers\Auth\LoginController::class, 'adminLogin'])->name('admin.login');

Route::group(['namespace'=>'App\Http\Controllers','middleware'=>'is_admin'],function(){
   

    //user  management routes are groupped here
    Route::prefix('users')->group(function(){
        Route::get('/view','AdminController@view')->name('users.view');
        Route::get('/add','AdminController@add')->name('users.add');
        Route::post('/store','AdminController@store')->name('users.store');
        Route::get('/edit/{id}','AdminController@edit')->name('users.edit');
        Route::post('/update/{id}','AdminController@update')->name('users.update');
        Route::get('/delete/{id}','AdminController@delete')->name('users.delete');

    });

    //  frontend management routes are groupped here
    Route::prefix('users')->group(function(){
        Route::get('/view','AdminController@view')->name('users.view');
        Route::get('/add','AdminController@add')->name('users.add');
        Route::post('/store','AdminController@store')->name('users.store');
        Route::get('/edit/{id}','AdminController@edit')->name('users.edit');
        Route::post('/update/{id}','AdminController@update')->name('users.update');
        Route::get('/delete/{id}','AdminController@delete')->name('users.delete');

    });


  

  

  
  
   Route::prefix('package')->group(function(){
        Route::get('/view','PackageController@view')->name('package.view');
        Route::get('/add','PackageController@add')->name('package.add');
        Route::post('/store','PackageController@store')->name('package.store');
        Route::get('/edit/{id}','PackageController@edit')->name('package.edit');
        Route::post('/update/{id}','PackageController@update')->name('package.update');
        Route::get('/delete/{id}','PackageController@delete')->name('package.delete');
        Route::get('/detail/{id}','PackageController@detail')->name('package.detail');

    });
    

    Route::prefix('element')->group(function(){
        Route::get('/view','ElementController@view')->name('element.view');
        Route::get('/add','ElementController@add')->name('element.add');
        Route::post('/store','ElementController@store')->name('element.store');
        Route::get('/edit/{id}','ElementController@edit')->name('element.edit');
        Route::post('/update/{id}','ElementController@update')->name('element.update');
        Route::get('/delete/{id}','ElementController@delete')->name('element.delete');

    });

    Route::prefix('slider')->group(function(){
        Route::get('/view','SliderController@view')->name('slider.view');
        Route::get('/add','SliderController@add')->name('slider.add');
        Route::post('/store','SliderController@store')->name('slider.store');
        Route::get('/edit/{id}','SliderController@edit')->name('slider.edit');
        Route::post('/update/{id}','SliderController@update')->name('slider.update');
        Route::get('/delete/{id}','SliderController@delete')->name('slider.delete');

    });
    
});