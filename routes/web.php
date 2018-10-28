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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/user1/adduser', 'User1Controller@index');

Route::get('/viewuser', 'HomeController@view');

Route::get('/calculation', 'HomeController@calculation');

Route::post('/calculation', 'HomeController@store');

Route::get('/adduser', 'UserController@index');
Route::post('/adduser', 'UserController@store')->name('adduser');

Route::get('/donation', 'AKController@view');
Route::get('/relation', 'AKController@relation');
Route::get('/show/{id}', 'AKController@show');

Route::get('tree', 'AkhiratController@index');

Route::get('/search', 'AkhiratController@showsearch');
Route::get('/autocomplete', array('as'=>'autocomplete','uses'=>'AkhiratController@search'));




