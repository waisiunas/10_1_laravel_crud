<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Models\Course;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
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

Route::get('/', [HomeController::class, 'home'])->name('home');

Route::get('/users', [UserController::class, 'index'])->name('users');
Route::get('/user/create', [UserController::class, 'create'])->name('user.create');
Route::post('/user/create', [UserController::class, 'store']);
Route::get('/user/{user}/edit', [UserController::class, 'edit'])->name('user.edit');
Route::post('/user/{user}/edit', [UserController::class, 'update']);
Route::get('/user/{user}/delete', [UserController::class, 'destroy'])->name('user.delete');

Route::get('/courses', [CourseController::class, 'index'])->name('courses');
Route::get('/course/create', [CourseController::class, 'create'])->name('course.create');
Route::post('/course/create', [CourseController::class, 'store']);
Route::get('/course/{course}/edit', [CourseController::class, 'edit'])->name('course.edit');
Route::post('/course/{course}/edit', [CourseController::class, 'update']);
Route::get('/course/{course}/delete', [CourseController::class, 'destroy'])->name('course.delete');

Route::get('/about', function () {
    return view('about');
})->name('about');
