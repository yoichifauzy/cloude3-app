<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\Api\Auth\RegisterController;
use App\Http\Controllers\Api\Auth\LoginController;
use App\Http\Controllers\Api\UserController;

Route::post('/auth/register', [RegisterController::class, 'register']);
Route::post('/auth/login', LoginController::class);
Route::get('/data', [UserController::class, 'index']);
Route::middleware('auth:sanctum')->get('/user', function(Request $request) {
    return $request->user();
});