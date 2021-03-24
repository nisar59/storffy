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

Route::group(['prefix' => 'coupons_for', 'as' => 'coupons_for','middleware' => ['auth', 'verified'],'middleware' => 'auth:user' ], function () {
    Route::get('/', 'CouponForController@index');
    Route::get('/create', 'CouponForController@create');
    Route::Post('/store', 'CouponForController@store');
    Route::get('/statusupdate/{id}', 'CouponForController@statusupdate');
    Route::get('/delete/{id}', 'CouponForController@delete');
	Route::get('/edit/{id}', 'CouponForController@edit');
    Route::Post('/update/{id}', 'CouponForController@update');

});