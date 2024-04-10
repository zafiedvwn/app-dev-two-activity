<?php

use App\Http\Controllers\UserController;
// use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
// use App\Http\Middleware\EnsureTokenIsValid;
// use App\Http\Middleware\EnsureUserHasRole;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::middleware('extract.token')->group(function () {
//     Route::get('/users', [UserController::class,'index']);
//     Route::patch('/users/{user}', [UserController::class,'update']);

//     Route::post('/posts', [PostController::class,'store']);
//     Route::put('/posts/{post}', [PostController::class,'update']);
//     Route::delete('/posts/{post}', [PostController::class,'destroy']);
// });

Route::apiResource('products', ProductController::class);
// Route::get('/products', [ProductController::class,'index']);
// Route::post('/products', [ProductController::class,'store']);
// Route::get('/products/{product}', [ProductController::class,'show']);
// Route::put('products/{product}', [ProductController::class,'update']);
// Route::delete('products/{product}', [ProductController::class,'destroy']);
