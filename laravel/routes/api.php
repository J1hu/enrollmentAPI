<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CourseController;
use App\Http\Controllers\UserController;

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

//courses
Route::get('/courses', [CourseController::class, 'get']);
Route::post('/course', [CourseController::class, 'store']);
Route::put('/course/{courseId}', [CourseController::class, 'update']);
Route::delete('/course/{courseId}', [CourseController::class, 'delete']);

//users
Route::get('/users', [UserController::class, 'get']);
Route::post('/user', [UserController::class, 'store']);