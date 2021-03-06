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

    Route::prefix('contact')->group(function(){
        Route::get('/view','ContactController@view')->name('contact.view');
        Route::get('/add','ContactController@add')->name('contact.add');
        Route::post('/store','ContactController@store')->name('contact.store');
        Route::get('/edit/{id}','ContactController@edit')->name('contact.edit');
        Route::post('/update/{id}','ContactController@update')->name('contact.update');
        Route::get('/delete/{id}','ContactController@delete')->name('contact.delete');

    });

     Route::prefix('buildManager')->group(function(){
        Route::get('/view','BuildManagerController@view')->name('buildManager.view');
        Route::get('/add','BuildManagerController@add')->name('buildManager.add');
        Route::post('/store','BuildManagerController@store')->name('buildManager.store');
        Route::get('/edit/{id}','BuildManagerController@edit')->name('buildManager.edit');
        Route::post('/update/{id}','BuildManagerController@update')->name('buildManager.update');
        Route::get('/delete/{id}','BuildManagerController@delete')->name('buildManager.delete');

    });

     Route::prefix('newsManager')->group(function(){
        Route::get('/view','NewsmanagerController@view')->name('newsManager.view');
        Route::get('/add','NewsmanagerController@add')->name('newsManager.add');
        Route::post('/store','NewsmanagerController@store')->name('newsManager.store');
        Route::get('/edit/{id}','NewsmanagerController@edit')->name('newsManager.edit');
        Route::post('/update/{id}','NewsmanagerController@update')->name('newsManager.update');
        Route::get('/delete/{id}','NewsmanagerController@delete')->name('newsManager.delete');

    });
    
});