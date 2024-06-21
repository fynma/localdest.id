<?php

use App\Http\Controllers\DestinationController;
use App\Http\Controllers\GlobalController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::middleware('auth:api')->group(function () {
//     Route::middleware(['cors'])->group(function () {
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::controller(DestinationController::class)->group(function () {
    foreach (['index', 'loadDetailDestination', 'getTag', 'getTagDest'] as $key => $value) {
        Route::post('/destination/' . $value, $value);
    }
});
//     });
// });

Route::get('/getProvinsi', [GlobalController::class, 'getProvinsi']);
Route::get('/getKota/{id}', [GlobalController::class, 'getKota']);
