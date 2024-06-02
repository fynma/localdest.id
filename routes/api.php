<?php

use App\Http\Controllers\DestinationController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::middleware('auth:api')->group(function () {
//     Route::middleware(['cors'])->group(function () {
        Route::get('/user', function (Request $request) {
            return $request->user();
        })->middleware('auth:sanctum');

        Route::controller(DestinationController::class)->group(function () {
            foreach (['index', 'loadDetailDestination'] as $key => $value) {
                Route::post('/destination/' . $value, $value);
            }
        });
//     });
// });
