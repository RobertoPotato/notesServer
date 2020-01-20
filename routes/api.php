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

//AUTH_APIS
Route::post('register', 'Auth\RegisterController@register');


//NOTES_APIS
Route::get('notes', 'NoteController@index');
Route::get('notes/{notes}', 'NoteController@show');
Route::post('notes', 'NoteController@store');
Route::put('notes/{notes}', 'NoteController@update');
Route::delete('notes/{notes}', 'NoteController@delete');


//PRODUCTS_APIS
Route::get('products', 'ProductsController@index');
Route::get('products/{products}', 'ProductsController@show');
Route::post('products', 'ProductsController@store');
Route::put('products/{products}', 'ProductsController@update');
Route::delete('products/{products}', 'ProductsController@delete');