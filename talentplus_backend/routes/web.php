<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Import the controller
use App\Http\Controllers\PostController;
use App\Http\Controllers\DashboardController;

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

Route::get('/', function () {
    return view('welcome');
})->name('index');

Route::get('/test', function () {
    return view('test');
})->name('test');

Route::middleware('auth')->group(function () {
    // Dashboard
    Route::get('/dashboard', DashboardController::class)->name('dashboard');
/*
    // List all users
    Route::get('/users', [PostController::class, 'users'])->name('users');

    // Show user of given id
    Route::get('/show_user/{id}', [UserController::class, 'show_user'])->name('show_user');
*/
    // List all posts
    Route::get('/posts', [PostController::class, 'posts'])->name('posts');

    // Create new post
    Route::get('/new_post', [PostController::class, 'create'])->name('new_post');
    Route::post('/new_post', [PostController::class, 'store'])->name('new_posting');

    // Show post of given id
    Route::get('/show_post/{id}', [PostController::class, 'show'])->name('show_post');

    // Edit post of given id
    Route::get('/edit_post/{id}', [PostController::class, 'edit'])->name('edit_post');
    Route::post('/edit_post/{id}', [PostController::class, 'update'])->name('update_post');

    // Delete post of given id
    Route::get('/delete/{id}', [PostController::class, 'destroy'])->name('delete_post');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
