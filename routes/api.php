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

Route::apiResource('/subscribers', 'SubscribersController');
Route::apiResource('/fields', 'FieldsController');

//custom api route to update field
Route::post('/update-field', 'FieldsController@updateField');
//custom api route to destroy field
Route::post('/destroy-field', 'FieldsController@destroyField');
//custom api route to get a subscriber's fields
Route::get('/subscriber-fields/{id}', 'FieldsController@subscriberfield');