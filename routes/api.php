<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\SaleController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\CustomerController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// product

Route::controller(ProductController::class)->group(function () {
    Route::get('/products', 'index');
    Route::get('/products/{id}', 'show');
});

// salesOrder

Route::controller(SaleController::class)->group(function () {
    Route::get('/sales/order', 'index');
    Route::get('/sales/{custId}', 'show');
});

// Customer

Route::controller(CustomerController::class)->group(function () {
    Route::get('/customers', 'index');
    Route::get('/customers/{custId}', 'show');
    Route::put('customers/{custId}', 'update');
});
