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

Route::group(['middleware' => 'web'], function () {
    Route::get('/', function () {
        return view('shop.index');
    });

    Route::get('clearitem', 'dataController@clearData');

    Route::get('fetch-data', 'dataController@showData');

    Route::post('addToCart', 'dataController@addToCart');

    Route::get('fetchCart', 'dataController@fetchData');

    Route::post('less', 'dataController@lessItem');

    Route::post('removeItem', 'dataController@removeItem');

});
