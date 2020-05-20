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

Route::post('custon', 'CustomizationController@store');
Route::resource('type', 'TypeController');

/* JsonApi::register('default')->routes(function ($api) {
    $api->resource('product')->relationships(function ($relations) {
        $relations->hasMany('product_customizations');
    });
    $api->resource('type')->relationships(function ($relations) {
        $relations->hasMany('customization');
    });
    $api->resource('custom')->relationships(function ($relations) {
        $relations->hasMany('products');
        $relations->hasMany('options');
        $relations->hasOne('types');
    });
    $api->resource('option')->relationships(function ($relations) {
        $relations->hasOne('custom');
    });
    $api->resource('product_customization')->relationships(function ($relations) {
        $relations->hasOne('products');
        $relations->hasOne('customs');
    });
}); */