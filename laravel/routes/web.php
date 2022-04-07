<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [AppController::class, 'index'])->name('home.index');
Route::get('/course', [AppController::class, 'course'])->name('home.course');
Route::get('/schoolYears', [AppController::class, 'schoolYears'])->name('home.schoolYears');
Route::get('/users', [AppController::class, 'users'])->name('home.users');
Route::get('/enrolledUsers', [AppController::class, 'enrolledUsers'])->name('home.enrolledUsers');