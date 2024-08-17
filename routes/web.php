<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DestinationController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\GlobalController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReviewController;
use App\Http\Middleware\loginCheck;
use Laravel\Socialite\Facades\Socialite;

Route::controller(RegisterController::class)->group(function () {
    foreach (['register'] as $key => $value) {
        Route::post('/auth/' . $value, $value);
    }
});
Route::get('/getcsrf', [RegisterController::class, 'getCsrfToken'])->name('getCsrfToken');

Route::controller(LoginController::class)->group(function () {
    foreach (['login'] as $key => $value) {
        Route::post('/auth/' . $value, $value);
    }
});

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/getProvinsi', [GlobalController::class, 'getProvinsi']);

Route::get('/', function () {
    return view('landing');
})->name('landing');

Route::get('/detail-destination', function () {
    return view('module.user.detail-destination.index');
});

Route::get('/contact-us', function () {
    return view('module.user.contactus.index');
});
Route::get('/news', function () {
    return view('module.user.news.index');
});
Route::get('/open-news', function () {
    return view('module.user.news.detail-news');
});
Route::get('/destination', function () {
    return view('module.user.destination.index');
});
Route::controller(ReviewController::class)->group(function () {
    foreach (['index'] as $key => $value) {
        Route::post('/review/' . $value, $value);
    }
});
//google auth
Route::get('authorized/google', function () {
    return Socialite::driver('google')->redirect();
});

Route::get('authorized/google/callback', [LoginController::class, 'handleGoogleCallback']);

//route untuk controller maupun view yg restricted/ auth required di place d bawah situ ye
Route::middleware([loginCheck::class])->group(function () {
    Route::get('/request-destination', function () {
        return view('module.user.request-destination.index');
    });
    Route::controller(DestinationController::class)->group(function () {
        foreach (['create', 'saveHistorySearch', 'getHistory'] as $key => $value) {
            Route::post('/dest/' . $value, $value);
        }
    });
    Route::controller(ReviewController::class)->group(function () {
        foreach (['create', 'checkExistingReview'] as $key => $value) {
            Route::post('/review/' . $value, $value);
        }
    });
    Route::controller(ProfileController::class)->group(function () {
        foreach (['index', 'save', 'getUserDestinations', 'getWishlist', 'themePost'] as $key => $value) {
            Route::post('/profile/' . $value, $value);
        }
    });
    Route::get('/profile', function () {
        return view('module.user.profile.index');
    });
    Route::get('/wishlist', function () {
        return view('module.user.wishlist.index');
    });
    Route::get('/list-destination', function () {
        return view('module.user.user-destination.index');
    });
});
