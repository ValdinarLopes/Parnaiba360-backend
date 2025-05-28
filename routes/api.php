<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TouristSpotController;

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

route::middleware('auth:sanctum')->group(function () {
    route::apiResource('/spots', TouristSpotController::class);
});
