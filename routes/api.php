<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\OrderController;
use App\Http\Controllers\Api\SupplierController;
use App\Http\Controllers\Api\LoginController;
use App\Http\Controllers\Api\UserController;


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


//!----order api route----
Route::middleware('auth:api')->get('/getOrders', [OrderController::class, 'getOrders'])->name('getOrders');
Route::middleware('auth:api')->post('/addOrders', [OrderController::class, 'addOrders'])->name('addOrders');
Route::middleware('auth:api')->put('/updateOrder/{order}', [OrderController::class, 'updateOrder'])->name('updateOrder');
Route::middleware('auth:api')->delete('/delOrders/{id}', [OrderController::class, 'delOrders'])->name('delOrders');

//!----product api route----
Route::middleware('auth:api')->get('/getProducts', [ProductController::class, 'getProducts'])->name('getProducts');
Route::middleware('auth:api')->post('/addProduct', [ProductController::class, 'addProduct'])->name('addProduct');
Route::middleware('auth:api')->put('/updateProduct/{product}', [ProductController::class, 'updateProduct'])->name('updateProduct');
Route::middleware('auth:api')->delete('/delProduct/{id}', [ProductController::class, 'delProduct'])->name('delProduct');

//!----Supply api route----
Route::middleware('auth:api')->get('/getSuppliers', [SupplierController::class, 'getSuppliers'])->name('getSuppliers');
Route::middleware('auth:api')->post('/addSupplier', [SupplierController::class, 'addSupplier'])->name('addSupplier');
Route::middleware('auth:api')->put('/updateSupplier/{supplier}', [SupplierController::class, 'updateSupplier'])->name('updateSupplier');
Route::middleware('auth:api')->delete('/delSupplier/{id}', [SupplierController::class, 'delSupplier'])->name('delSupplier');

Route::post('/login', [LoginController::class, 'login'])->name('login');


