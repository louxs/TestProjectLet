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

Route::get('/dash', function () {
    return view('admin.dashboard');
});


Route::get('/swagger', ['as' => 'swagger', 'uses' => 'Api\SwaggerController@swagger']);
Route::get('/api-docs/docs/swagger.json', ['as' => 'swagger_docs']);


Auth::routes();

