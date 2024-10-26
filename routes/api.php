<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\v2\GenreController;

use App\Http\Controllers\api\v2\BrandController;
use App\Http\Controllers\api\v2\SongController;

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

Route::get('/genres', [GenreController::class,'index']);

Route::get('/brands', [BrandController::class,'index']);

Route::get('/songs', [SongController::class,'index']);