<?php

Route::get('/', function () {
    return View::make('welcome');
})->middleware(['auth.superadmin', 'auth.admin']);

Route::group(['middleware' => 'web'], function() {
    Route::auth();

    Route::group(['prefix' => 'administrator', 'middleware' => 'auth.admin'], function () {
        Route::get('simpanan/export', 'SimpananController@export');
        Route::resource('simpanan', 'SimpananController');
        Route::resource('anggota', 'AnggotaController');
        Route::get('home', 'HomeController@index')->name('admin.home');
    });
  
    Route::group(['prefix' => 'superadmin', 'middleware' => 'auth.superadmin'], function(){
        Route::get('anggota', 'Admin\UserController@index');
        Route::get('simpanan', 'Admin\SimpananController@index');
        Route::get('home', 'Admin\HomeController@index')->name('superadmin.home');
    });

});