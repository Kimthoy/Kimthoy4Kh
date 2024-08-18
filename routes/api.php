<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProductController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
Route::get('products', [ProductController::class,'index']);
Route::get('products/{product}', [ProductController::class,'show']);
Route::post('products', [ProductController::class,'store']);
Route::put('products/{product}', [ProductController::class,'update']);
Route::delete('products/{product}', [ProductController::class,'delete']);