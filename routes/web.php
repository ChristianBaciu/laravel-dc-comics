<?php

use App\Http\Controllers\backend\ComicsController;
use App\Http\Controllers\guest\PageController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [PageController::class, 'index'])->name('homePage');

Route::resource('comics', ComicsController::class);

// Route::get('/', [ComicsController::class, 'index']);
