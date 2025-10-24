<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\TaskerController;
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

Route::post('/tasker/add',[TaskerController::class,'add']);
Route::get('/tasker/{tasker}/show',[TaskerController::class,'show']);
Route::put('/tasker/{tasker}/update',[TaskerController::class,'update']);

/*  Authentication_Routes  */

Route::post('/auth/login',[AuthController::class,'login']);

/*Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});*/
