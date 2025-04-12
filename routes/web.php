<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\QuoteController;
use App\Http\Controllers\AdsSettingController;
use App\Http\Controllers\FeedbackController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index']);

    Route::resource('/admin/categories', CategoryController::class);
    Route::resource('/admin/quotes', QuoteController::class);
    Route::resource('/admin/ads-settings', AdsSettingController::class);
    Route::get('/admin/feedback', [FeedbackController::class, 'index']);
});

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/login', [AdminController::class, 'login']);
Route::get('/logout', [AdminController::class, 'logout']);
