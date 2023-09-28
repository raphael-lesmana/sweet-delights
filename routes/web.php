<?php

use App\Http\Controllers\ItemController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

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
    return view('homepage');
})->middleware('auth');

Route::get('/login', [LoginController::class, 'get'])->name('login');

Route::get('/register', [RegisterController::class, 'get'])->name('register');

Route::get('/search', function () {
    return view('search');
})->middleware('auth');

Route::get('/checkout', function () {
    return view('checkout');
})->middleware('auth');

Route::get('/add', [ItemController::class, 'get_add'])->middleware('auth');

Route::post('/login', [LoginController::class, 'login']);

Route::post('/register', [RegisterController::class, 'register']);
