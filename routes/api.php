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

/*
 * Welcome route - link to any public API documentation here
 */
Route::get('/', function () {
    echo 'Welcome to ArepasApp API';
});

Route::get('/xoom/{country}', '\App\Http\Controllers\XoomController@rate');

/**
 * @var $api \Dingo\Api\Routing\Router
 */
/*$api = app('Dingo\Api\Routing\Router');
$api->version('v1', function ($api) {
    $api->get('xoom/{country}', '\App\Http\Controllers\XoomController@rate');
});*/
