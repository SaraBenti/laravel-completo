<?php

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
//http://localhost:8000/api

//POST http://localhost:8000/api/cars
Route::post('/cars', [CarController::class, 'create']);
//DELETE http://localhost:8000/api/cars/7 
Route::delete('/cars/{id}', [CarController::class, 'delete']);
//GET http://localhost:8000/api/cars/3
Route::get('/cars/{id}', [CarController::class, 'read']);
//GET http://localhost:8000/api/cars
Route::get('/cars', [CarController::class, 'readAll']);
//PUT http://localhost:8000/api/cars/22
Route::put('/cars/{id}', [CarController::class, 'update']);

//POST http://localhost:8000/api/verifications
Route::post('/verifications', [ReviewController::class, 'create']);
//DELETE http://localhost:8000/api/verifications/7 
Route::delete('/verifications/{id}', [ReviewController::class, 'delete']);
//GET http://localhost:8000/api/verifications/3
Route::get('/verifications/{id}', [ReviewController::class, 'read']);
//GET http://localhost:8000/api/verifications
Route::get('/verifications', [ReviewController::class, 'readAll']);
//PUT http://localhost:8000/api/verifications/22
Route::put('/verifications/{id}', [ReviewController::class, 'update']);
