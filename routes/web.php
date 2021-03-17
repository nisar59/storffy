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

Auth::routes(['verify' => true]);
Auth::routes();
Route::get('/', 'pathController@index');
Route::get('home', 'pathController@index');
Route::get('about', 'pathController@about');
Route::get('contact-us', 'pathController@contact');
Route::get('faqs', 'pathController@faqs');

Route::any('logout', ['as' => 'logout', 'uses' => 'Auth\LoginController@logout']);
// Route::get('/login', ['as' => 'login', 'uses' => 'Auth\LoginController@showLoginForm']);

////////////////////////////////////////////////////////////////

Route::group(['prefix' => 'viewer', 'as' => 'viewer','middleware' => ['auth', 'verified'],'middleware' => 'auth:user' ], function () {
    Route::get('/', 'HomeController@index');
});
