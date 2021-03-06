<?php

use Illuminate\Http\Request;
// use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Route;
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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::get('list', 'Tanvirs@list');

Route::post('login', 'API\UserController@login');
Route::post('register', 'API\UserController@register');
Route::post('product', 'API\Products@save');
Route::put('product', 'API\Products@update');
Route::group(['middleware' => 'auth:api'],
    function(){
        Route::post('details', 'API\UserController@details');
    }
);
