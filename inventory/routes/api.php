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

// Route::middleware('auth:api')->group(function () {
    Route::apiResource('/supplier', 'Api\SupplierController');
    Route::apiResource('/brand', 'Api\BrandController');
    Route::apiResource('/customer', 'Api\CustomerController');
    Route::apiResource('/item', 'Api\ItemController');
    Route::apiResource('/stock', 'Api\StockController');
    Route::apiResource('/sale', 'Api\SaleController');
// });

// Route::post('/login', 'Api\AuthController@login')->name('login.api');
