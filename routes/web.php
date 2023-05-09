<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', [UserController::class, 'create']);
Route::put('/users', [UserController::class, 'store']);

Route::get('/login', [UserController::class, 'login']);
Route::post('/logout', [UserController::class, 'logout']);

Route::get('/dashboard', function () {
    return view('layouts.dashboard');
})->name('dashboard');

// store course
Route::get('/courses', [CourseController::class, 'store']);

// create course
Route::get('/courses/create', [CourseController::class, 'create']);
