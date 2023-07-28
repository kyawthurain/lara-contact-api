<?php

use App\Http\Controllers\AuthApiController;
use App\Http\Controllers\ContactController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::prefix('/v1')->group(function(){

    Route::apiResource('contact',ContactController::class)->middleware('can:sanctum');
    Route::controller(AuthApiController::class)->group(function(){
        Route::post('register','register')->name('register');
        Route::post('login','login')->name('login');
    });

});
