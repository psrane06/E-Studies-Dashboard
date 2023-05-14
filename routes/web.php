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

Route::get('/register', [UserController::class, 'create'])->name('register')->middleware('guest');
Route::put('/users', [UserController::class, 'store']);

Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');
Route::post('/users/login', [UserController::class, 'authenticate']);
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

Route::get('/forgot', [UserController::class, 'forgot'])->name('forgot')->middleware('guest');

Route::get('/dashboard', function () {
    return view('layouts.dashboard');
})->name('dashboard')->middleware('auth');


// create course
Route::get('/courses/create', [CourseController::class, 'create'])->middleware('auth');
// store course
Route::get('/courses', [CourseController::class, 'store']);

Route::get('/courses/list', [CourseController::class, 'index']);

// view course
Route::get('/courses/{course}', [CourseController::class, 'show']);

