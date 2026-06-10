<?php

use Illuminate\Support\Facades\Route;
use Mahbubur508\ApiAuth\Http\Controllers\ApiAuthController;

Route::prefix(config('api-auth.prefix', 'api/v1/auth'))
    ->middleware(['api'])
    ->group(function () {
        
        // Public Routes
        Route::post('register', [ApiAuthController::class, 'register']);
        Route::post('login', [ApiAuthController::class, 'login']);

        // Protected Routes (Sanctum Middleware)
        Route::middleware('auth:sanctum')->group(function () {
            Route::get('me', [ApiAuthController::class, 'me']);
            Route::post('logout', [ApiAuthController::class, 'logout']);
        });
    });