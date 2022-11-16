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
Route::get('/',function(){
    return redirect()->route('login.index');
});

//login
//login-url
Route::get('/login','loginController@index')->name('login.index');
Route::post('/login','loginController@verify')->name('login.verify');



Route::group(['middleware'=>['session']],function(){

    //home
    Route::get('/home','homeController@index')->name('home.index');

    //create
    Route::get('/createEvent','userController@create')->name('user.create');

    Route::post('/createEvent','userController@store')->name('event.store');

    //show
    Route::get('{id}/show','userController@show')->name('event.show');

    //delete
    Route::post('{id}/show','userController@destroy')->name('user.destroy');

    //edit
    Route::get('{id}/edit','userController@edit')->name('event.edit');
    Route::post('{id}/edit','userController@update')->name('event.update');
    
});
    //logout
    Route::get('/logout','logoutController@index')->name('logout.index');
