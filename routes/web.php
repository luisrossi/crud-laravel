<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'ClientesController@index');

Route::group(['prefix'=>'clientes', 'where'=>['id'=>'[0-9]+']], function() {
	Route::any('', ['as'=>'clientes', 'uses'=>'ClientesController@index']);
	Route::get('create', ['as'=>'clientes.create', 'uses'=>'ClientesController@create']);
	Route::get('destroy', ['as'=>'clientes.destroy', 'uses'=>'ClientesController@destroy']);
	Route::get('edit', ['as'=>'clientes.edit', 'uses'=>'ClientesController@edit']);
	Route::put('{id}/update', ['as'=>'clientes.update', 'uses'=>'ClientesController@update']);
	Route::post('store', ['as'=>'clientes.store', 'uses'=>'ClientesController@store']);
});
