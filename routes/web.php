<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
});

Route::controller(UserController::class)->group(function () {
    Route::get('/register', 'index');
    Route::post('/register', 'store')->name('register');
    Route::get('/login', 'loginView');
    Route::post('/login', 'login')->name('login');
    Route::get('/logout', 'logOut');
});

Route::get('/login', function () {
    return view('auth/login');
});

Route::get('/dashboard', [UserController::class, 'dashboard']);
