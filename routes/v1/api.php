<?php

use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskerController;

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

//Tasker Routes
Route::post('/tasker/add', [TaskerController::class, 'add']);
Route::get('/tasker/{tasker}/show', [TaskerController::class, 'show']);
Route::put('/tasker/{tasker}/update', [TaskerController::class, 'update']);

//Authentication Routes
Route::post('/register',[UserController::class,'register']);
Route::post('/login',[UserController::class,'login']);
Route::post('/logout',[UserController::class,'logout']);

//Task Routes
Route::post('/task/add', [TaskController::class, 'add']);


//product

Route::post('/product/store',[\App\Http\Controllers\ProductController::class,'store']);
