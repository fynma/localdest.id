<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing');
});
Route::get('/destination', function () {
    return view('module.user.destination.index');
});
Route::get('/detail-destination', function () {
    return view('module.user.detail-destination.index');
});

Route::get('/contact-us', function (){
    return view('module.user.contactus.index');
});