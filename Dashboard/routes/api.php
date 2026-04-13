<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::resource('users',\App\Http\Controllers\UserController::class);
Route::resource('zones',\App\Http\Controllers\ZoneController::class);
Route::resource('loyalty-levels',\App\Http\Controllers\LoyaltyLevelController::class);
Route::resource('drivers',\App\Http\Controllers\DriverController::class);
Route::resource('rentals',\App\Http\Controllers\RentalController::class);
Route::resource('payments',\App\Http\Controllers\PaymentController::class);
Route::resource('cars',\App\Http\Controllers\CarController::class);