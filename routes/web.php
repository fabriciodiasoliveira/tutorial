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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/', 'NomesController@index')->name('home');

Auth::routes();

//Route::get('/home', 'NomesController@index')->name('home');

Route::get('/nomes/', 'NomesController@index')->name('nomes.index');
Route::post('/nomes/', 'NomesController@store')->name('nomes.store');
Route::delete('/nomes/delete/{id}', 'NomesController@destroy')->name('nomes.delete');
Route::put('/nomes/update/{id}', 'NomesController@update')->name('nomes.update');
Route::get('/nomes/create', 'NomesController@create')->name('nomes.create');
Route::get('/nomes/show/{id}', 'NomesController@show')->name('nomes.show');
Route::get('/nomes/edit/{id}', 'NomesController@edit')->name('nomes.edit');
