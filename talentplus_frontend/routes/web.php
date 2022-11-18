<?php

use Illuminate\Support\Facades\Route;

// Import controller class
use App\Http\Controllers\ExternalPostApiController;

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

// Test
Route::get('/', [ExternalPostApiController::class, 'home'])->name('index');

// Serve a list of TALENT PLUS entries
Route::get('/list', [ExternalPostApiController::class, 'index'])->name('list');

// Serve a particular list item of TALENT PLUS entry
Route::get('/list/{id}', [ExternalPostApiController::class, 'show'])->name('single');
