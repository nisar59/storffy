
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


Route::group(['prefix' => 'coupons', 'as' => 'coupons','middleware' => ['auth', 'verified'],'middleware' => 'auth:user' ], function () {
    Route::get('/', 'CouponsController@index');
    Route::get('/create', 'CouponsController@create');
    Route::Post('/store', 'CouponsController@store');
});
