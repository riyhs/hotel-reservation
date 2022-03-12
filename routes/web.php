<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GuestController;

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
    // Route::get('/register', 'index');
    // Route::post('/register', 'store')->name('register');
    Route::get('/admin', 'loginView');
    Route::post('/admin', 'login')->name('admin');
    Route::get('/admin-logout', 'logout');
});

Route::get('/admin', function () {
    return view('admin/auth/login');
});

Route::get('/dashboard', [UserController::class, 'dashboard']);

// === GUEST === //
Route::controller(GuestController::class)->group(function () {
    Route::get('/register', 'index');
    Route::post('/register', 'store')->name('register');
    Route::get('/login', 'loginView');
    Route::post('/login', 'login')->name('login');
    Route::get('/logout', 'logout');
});

Route::get('/home', [GuestController::class, 'home']);
