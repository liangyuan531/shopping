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

// front end
Route::get('/', 'Home\IndexController@index');

// back end
Route::group(['prefix'=>'admin', 'namespace'=>'Admin'], function() {
    // Login 
    Route::get('login', 'LoginController@index');
    // admin main page
    Route::get('/', 'IndexController@index');
    // vip management
    Route::resource('vipmanagement', 'VipManagementController');
    // Customer management
    Route::resource('customermanagement', 'CustomerManagementController');
});
