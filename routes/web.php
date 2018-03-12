<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('users','UserController');


/*

	Rutas de DataTable

*/
Route::get('getUsers', 'UserController@getData');

Route::get('users/{id}/delete', 'UserController@dele');


Route::get('mosaico', 'MosaicoController@index')->name('mosaico');