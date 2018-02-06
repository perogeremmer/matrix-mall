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

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

Route::get('/', function () {
    $data['homepage'] = TRUE;
    return view('frontend.content')->with($data);
});


//Route::get('/shop', function () {
//    $data['homepage'] = FALSE;
//    return view('frontend.shop.index')->with($data);
//});

Route::group(['middleware' => 'checkUserLogin'], function (){
    Route::get('customer/transaction','transactionController@customerTransaction');
    Route::get('customer/profile','customerController@profile');
    Route::post('update/customer/{id}','customerController@update');
    Route::resource('customer','customerController');
    Route::resource('shop','shopController');
    Route::get('shop/category/{id}','shopController@category_detail');
    Route::get('shop/product/detail/{id}','shopController@product_detail');
    Route::get('shop/detail/{id}','shopController@detail');
});

Route::get('login','customerController@login');
//Route::get('customer/logout','customerController@logout');
Route::get('logout', function () {
    try{
        Session::flush();
        return redirect('login')->with('response','Berhasil logout!');
    }
    catch (\Exception $e){
        return redirect('login')->with('response-error',$e->getMessage());
    }
});
Route::post('/customer/check_login','customerController@check_login');



Route::prefix('supplier')->group(function () {
    Route::group(['middleware' => 'checkSupplierLogin'], function () {
        Route::resource('supplier','supplierController');
        Route::resource('product','productController');
        Route::prefix('transaction')->group(function () {
            Route::get('processing/{id}', 'transactionController@processing');
            Route::get('un-process', 'transactionController@transactionUnprocess');
            Route::get('on-process', 'transactionController@transactionInprocess');
        });
    });
    Route::get('/', 'supplierController@login');
    Route::get('profile', 'supplierController@profile');
    Route::get('login', 'supplierController@login');
    Route::get('logout', 'supplierController@logout');
    Route::post('check_login', 'supplierController@check_login');
    Route::get('register', 'supplierController@register');
    //Route::get('product', 'supplierController@register');

});

Route::prefix('admin')->group(function () {
    Route::get('/', 'adminController@login');
    Route::get('suppliers', 'adminController@suppliers');
    Route::get('approve/{id}', 'adminController@approve');
    Route::get('login', 'adminController@login');
    Route::get('logout', 'adminController@logout');
    Route::post('check_login', 'adminController@check_login');

});




