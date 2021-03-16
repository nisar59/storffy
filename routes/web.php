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

//Auth::routes(['verify' => true]);
Auth::routes();
Route::get('/', 'pathController@index');
Route::get('home', 'pathController@index');
Route::get('about', 'pathController@about');
Route::get('contact-us', 'pathController@contact');
Route::get('faqs', 'pathController@faqs');

Route::any('logout', ['as' => 'logout', 'uses' => 'Auth\LoginController@logout']);

Route::group(['prefix' =>'admin'], function () {

    Route::get('/login', ['as' => 'login-admin', 'uses' => 'Auth\LoginController@showLoginForm']);
    Route::post('login',['as' => 'login-admin', 'uses' => 'Auth\LoginController@loginAdmin']);
    Route::any('logout', ['as' => 'logout', 'uses' => 'Auth\LoginController@adminlogout']);
});

////////////////////////////////////////////////////////////////
Route::group(['prefix' =>'creator'], function () {
    Route::get('/login', ['as' => 'login-creator', 'uses' => 'Auth\LoginController@showLoginForm']);
    Route::post('login',['as' => 'login-creator', 'uses' => 'Auth\LoginController@loginCreator']);
    Route::get('register/',['as' => 'register-creator', 'uses' => 'Auth\RegisterController@showRegisterForm']);
   
    Route::any('logout', ['as' => 'logout', 'uses' => 'Auth\LoginController@creatorlogout']);
   //Route::post('password/email', 'Auth\AdminForgotPasswordController@sendResetLinkEmail');
   //Route::get('password/reset', 'Auth\AdminForgotPasswordController@showLinkRequestForm');
   //Route::post('password/reset', 'Auth\AdminResetPasswordController@rest');
  //Route::get('password/reset/{token}', 'Auth\AdminResetPasswordController@showResetForm');
});
Route::group(['prefix' => 'admin', 'as' => 'admin', 'middleware' => 'auth:admin' ], function () {
    Route::get('/', 'HomeController@admin');
});
Route::group(['prefix' => 'creator', 'as' => 'user', 'middleware' => 'auth:creator' ], function () {
    Route::get('/', 'HomeController@creator');
});
Route::group(['prefix' => 'viewer', 'as' => 'viewer','middleware' => ['verified'],'middleware' => 'auth:user' ], function () {
    Route::get('/', 'HomeController@index');
});
