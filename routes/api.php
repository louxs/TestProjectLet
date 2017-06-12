<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::group(['prefix' => 'relation'], function (){
    Route::post('email', 'Api\RelationController@getRelationByEmail')->name('get.relation.email');
});
//Route::group(['prefix' => 'api/','middleware' => ['jwt.auth']], function (){
////    Route::get('', 'Api\UserController@search'); // recherche users
//
//});