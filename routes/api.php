<?php

use App\Http\Controllers\Api\ApiPageController;
use App\Http\Controllers\Api\ApiPrestaController;
use App\Models\Page;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('page',[ApiPageController::class,'index']);
Route::get('page/{page}',[ApiPageController::class,'show']);

Route::get('presta',[ApiPrestaController::class,'index']);
Route::get('presta/{presta}',[ApiPrestaController::class,'show']);


