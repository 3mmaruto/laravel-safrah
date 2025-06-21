<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GovernorateController;
use App\Http\Controllers\TripController;
use App\Http\Controllers\SeatController;


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
Route::get('/governorates', [GovernorateController::class, 'index']);
Route::get('/trips', [TripController::class, 'index']);
Route::get('trips/{tripId}/seats', [SeatController::class, 'getSeatsByTrip']);
