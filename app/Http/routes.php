<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/
Route::get('/', function () {
    return View::make('welcome');
})->middleware('auth');

Route::group(['middleware' => 'web', 'prefix' => 'administrator'], function () {
  Route::get('simpanan/export', ['uses'=>'SimpananController@export']);
  Route::resource('anggota', 'AnggotaController');
  Route::resource('simpanan', 'SimpananController');
  Route::get('home', 'HomeController@index');

});

Route::group(['middleware' => 'web'], function () {
  Route::auth();
});



// PREFIX ADMIN
//
// Route::group(['prefix' => 'admin'], function () {
//   Route::get('/posts', 'PostController@index');
//   Route::post('/post', 'PostController@store');
//   Route::delete('/post/{post}', 'PostController@destroy');
// });

// ARRAY MIDDLEWARE
//
// Route::group(['middleware' => ['web']], function () {
//     //
// });

// SAMPLING
//
// Route::get('anggotas', function(){
//   $anggotas = DB::table('Anggotas')->get();
//   return json_decode(json_encode($anggotas));
// });
