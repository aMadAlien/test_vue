<?php

use App\Http\Controllers\FirstController;
use App\Http\Controllers\SecondController;
use App\Http\Controllers\ThirdController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::controller(FirstController::class)->group(static function () {
    Route::get('/first', 'index');
});

Route::controller(SecondController::class)->group(static function () {
    Route::get('/second', 'index');
});

Route::controller(ThirdController::class)->group(static function () {
    Route::get('/third', 'index');
});
