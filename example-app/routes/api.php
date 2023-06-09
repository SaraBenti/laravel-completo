<?php
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ErrorController;
use App\Http\Controllers\HotelController;



use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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

//POST http://localhost:8000/api/users
Route::post('/users', [UserController::class, 'create']);
//DELETE http://localhost:8000/api/users/7 
Route::delete('/users/{id}', [UserController::class, 'delete']);
//GET http://localhost:8000/api/users/3
Route::get('/users/{id}', [UserController::class, 'read']);
//GET http://localhost:8000/api/users
Route::get('/users', [UserController::class, 'readAll']);
//PUT http://localhost:8000/api/users/22
Route::put('/users/{id}', [UserController::class, 'update']);


//http://localhost:8000/api/errore-di-prova
Route::get('/errore-di-prova',[ErrorController::class,'error']);

//POST http://localhost:8000/api/reviews
Route::post('/reviews', [ReviewController::class, 'create']);
//DELETE http://localhost:8000/api/reviews/7 
Route::delete('/reviews/{id}', [ReviewController::class, 'delete']);
//GET http://localhost:8000/api/reviews/3
Route::get('/reviews/{id}', [ReviewController::class, 'read']);
//GET http://localhost:8000/api/reviews
Route::get('/reviews', [ReviewController::class, 'readAll']);
//PUT http://localhost:8000/api/reviews/22
Route::put('/reviews/{id}', [ReviewController::class, 'update']);



//POST http://localhost:8000/api/hotels
Route::post('/hotels', [HotelController::class, 'create']);
//DELETE http://localhost:8000/api/reviews/7 
Route::delete('/hotels/{id}', [HotelController::class, 'delete']);
//GET http://localhost:8000/api/reviews/3
Route::get('/hotels/{id}', [HotelController::class, 'read']);
//GET http://localhost:8000/api/reviews
Route::get('/hotels', [HotelController::class, 'readAll']);
//PUT http://localhost:8000/api/reviews/22
Route::put('/hotels/{id}', [HotelController::class, 'update']);
