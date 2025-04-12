<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryApiController;
use App\Http\Controllers\QuoteApiController;
use App\Http\Controllers\FeedbackApiController;
use App\Http\Controllers\AdsApiController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/categories', [CategoryApiController::class, 'index']);

Route::get('/quotes', [QuoteApiController::class, 'index']);
Route::get('/quotes/featured', [QuoteApiController::class, 'featured']);
Route::get('/quotes/search', [QuoteApiController::class, 'search']);
Route::get('/quotes', [QuoteApiController::class, 'show']);

Route::post('/feedback', [FeedbackApiController::class, 'store']);

Route::get('/ads', [AdsApiController::class, 'index']);
