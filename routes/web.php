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

Route::get('/', function () {
    return view('welcome');
});


Route::prefix('supplier')->group(function () {
    Route::get('product', 'supplierController@register');

    Route::resource('supplier','supplierController');
    Route::resource('product','productController');

    Route::get('login', 'supplierController@login');
    Route::get('logout', 'supplierController@logout');
    Route::post('check_login', 'supplierController@check_login');
    Route::get('register', 'supplierController@register');
});



