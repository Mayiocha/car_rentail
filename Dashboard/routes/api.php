<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UsersController;
use App\Http\Controllers\Api\BrandsController;
use App\Http\Controllers\Api\CarsController;
use App\Http\Controllers\Api\DrivesController;
use App\Http\Controllers\Api\LoyaltsController;
use App\Http\Controllers\Api\PaymentsController;
use App\Http\Controllers\Api\RentailsController;
use App\Http\Controllers\Api\AuthController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('users', UsersController::class);
Route::apiResource('brands', BrandsController::class);
Route::apiResource('cars', CarsController::class);
Route::apiResource('drivers', DrivesController::class);
Route::apiResource('loyalty-levels', LoyaltsController::class);
Route::apiResource('payments', PaymentsController::class);
Route::apiResource('rentals', RentailsController::class);

// Endpoints extra que pide la práctica
Route::patch('cars/{id}/status', [CarsController::class, 'updateStatus']);
Route::patch('rentals/{id}/status', [RentailsController::class, 'updateStatus']);

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::middleware('jwt')->group(function () {
    Route::get('/user', [AuthController::class, 'getUser']);
    Route::put('/user', [AuthController::class, 'updateUser']);
    Route::post('/logout', [AuthController::class, 'logout']);
});

