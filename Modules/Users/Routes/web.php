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

Route::group(['prefix' => 'users', 'as' => 'users','middleware' => ['auth', 'verified'],'middleware' => 'auth:user' ], function () {
    Route::get('/', 'UsersController@index');
    
    Route::get('/create', 'UsersController@create');
    Route::Post('/store', 'UsersController@store');
    Route::get('/statusupdate/{id}', 'UsersController@statusupdate');
    Route::get('/delete/{id}', 'UsersController@delete');
	Route::get('/edit/{id}', 'UsersController@edit');
	 Route::Post('/update/{id}', 'UsersController@update');

  
});
