<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DestinationController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Middleware\loginCheck;

Route::controller(RegisterController::class)->group(function () {
    foreach (['register'] as $key => $value) {
        Route::post('/auth/' . $value, $value);
    }
});
Route::controller(LoginController::class)->group(function () {
    foreach (['login'] as $key => $value) {
        Route::post('/auth/' . $value, $value);
    }
});

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/', function () {
    return view('landing');
})->name('landing');

Route::get('/detail-destination', function () {
    return view('module.user.detail-destination.index');
});

Route::get('/contact-us', function () {
    return view('module.user.contactus.index');
});
Route::get('/news', function (){
    return view('module.user.news.index');
});
Route::get('/open-news', function (){
    return view('module.user.news.detail-news');
});
Route::get('/destination', function () {
    return view('module.user.destination.index');
});

//route untuk controller maupun view yg restricted/ auth required di place d bawah situ ye
Route::middleware([loginCheck::class])->group(function () {
});
