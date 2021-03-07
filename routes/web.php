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

Route::get('/', function () {
    return redirect()->to(route('get-total'));
});
Route::any('/get-total', 'CalculateTotalController@getTotal')->name('get-total');

Route::any('/pay', 'PayController@redirectToGateway')->name('pay');
Route::get('/payment/callback', 'PayController@handleGatewayCallback');
