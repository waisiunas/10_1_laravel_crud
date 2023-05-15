<?php

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

Route::get('/user/{id}/delete', function ($id) {

    $is_deleted = User::find($id)->delete();

    if($is_deleted) {
        return 'deleted';
    } else {
        return 'Not deleted';
    }
});

Route::get('/about', function () {
    return view('about');
})->name('about');
