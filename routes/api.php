<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JwtAuthController;
use App\Http\Controllers\HomeController;

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
Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'
], function ($router) {
    Route::middleware('auth:sanctum')->get('test', [HomeController::class, 'test']);
    Route::middleware('auth:sanctum')->get('/user-profile', [JwtAuthController::class, 'userProfile']);
    Route::post('/register', [JwtAuthController::class, 'registeruser']);
    Route::post('/login', [JwtAuthController::class, 'loginUser']);

    Route::post('/token-refresh', [JwtAuthController::class, 'refresh']);
    Route::post('/signout', [JwtAuthController::class, 'signout']);
    Route::get('/logout', [JwtAuthController::class, 'logout']);

});



