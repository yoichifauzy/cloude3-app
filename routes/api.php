<?php

use App\Http\Controllers\Api\Auth\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\Auth\RegisterController;
use App\Http\Controllers\Api\UserController;
use App\Http\Resources\UserResource;

Route::post('/auth/register', [RegisterController::class, '__invoke']);
Route::post('/auth/login', [LoginController::class, '__invoke']);
Route::get('/data', [UserController::class, '__invoke']);     