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


Route::get('/add', function () {
    return view('addpro');
});
Route::get('/list/{id}',  [

    'uses' => 'ProjectController@listdocs'
]);
Route::get('/docs', [

    'uses' => 'ProjectController@create'
]);
Route::post('/docs', [

    'uses' => 'ProjectController@docs',
    'as' => 'docs'
]);



Route::post('/add', [

    'uses' => 'ProjectController@store',
    'as' => 'pro'
]);

Route::get('/projects', [

    'uses' => 'ProjectController@index']);