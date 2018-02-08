<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'FuncionarioController@index');

/*
Route::get('funcionarios', 'FuncionarioController@index');
Route::get('funcionarios/show', 'FuncionarioController@show');
Route::get('funcionarios/{id}/delete', 'FuncionarioController@destroy');
Route::get('funcionarios/{id}', 'FuncionarioController@show');
Route::post('funcionarios/{id}/edit', 'FuncionarioController@edit');
Route::post('funcionarios/{id}', 'FuncionarioController@update');
Route::post('funcionarios/create', 'FuncionarioController@create');

Route::get('funcionarios/{id}/edit', 'FuncionarioController@edit');
Route::get('funcionarios/{id}', 'FuncionarioController@update');
Route::get('funcionarios/create', 'FuncionarioController@create');
*/

Route::group(['middleware' => ['web']], function () {
    Route::get('funcionarios', 'FuncionarioController@index');
    Route::get('funcionarios/create', 'FuncionarioController@create');
    Route::post('funcionarios/store', 'FuncionarioController@store');

    Route::get('funcionarios/{id}', 'FuncionarioController@show');
    Route::get('funcionarios/{id}/edit', 'FuncionarioController@edit');
    Route::get('funcionarios/{id}/update', 'FuncionarioController@update');

    Route::get('funcionarios/{id}/destroy', 'FuncionarioController@destroy');
}); 