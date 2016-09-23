<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', function (){
    Auth::logout();
});

Route::group(['prefix'=>'codigos', 'where'=>['id'=>'[0-9]+']], function (){
    Route::get('',['as'=>'codigos', 'uses'=>'CodigosController@index']);
    Route::get('{id}/view',['as'=>'codigos.viewquestion', 'uses'=>'CodigosController@viewquestion']);
    Route::get('create', ['as'=>'codigos.create', 'middleware'=>'auth', 'uses'=>'CodigosController@create']);
    Route::post('store', ['as'=>'codigos.store', 'middleware'=>'auth', 'uses'=>'CodigosController@store']);
    Route::get('{id}/destroy', ['as'=>'codigos.destroy', 'middleware'=>'auth', 'uses'=>'CodigosController@destroy']);
    Route::get('{id}/edit', ['as'=> 'codigos.edit', 'middleware'=>'auth', 'uses' => 'CodigosController@edit']);
    Route::put('{id}/update', ['as'=> 'codigos.update', 'middleware'=>'auth', 'uses'=>'CodigosController@update']);

});
Auth::routes();
Route::get('/home', 'HomeController@index');
