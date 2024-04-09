<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::get('/activityGet', function () {
    return "http verb GET";
});

Route::post('/postIt', [UserController::class, 'index']);

Route::put('/putIt', [UserController::class, 'update']);

Route::patch('/patchIt', [UserController::class, 'update']);

Route::delete('/deleteIt', [UserController::class, 'destroy']);

// Route::options('/optionIt', [UserController::class, 'index']);

Route::match(['get', 'post', 'put', 'patch', 'delete', 'options'], '/allOfIt', function () {
    return "It matches it all.";
});

Route::any('/anyOfIt', function () {
    return "It could by any of it.";
});
