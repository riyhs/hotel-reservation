<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\RoomSpecController;

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
Route::get('/hotel', function () {
    return view('hotel');
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

Route::get('/room', function () {
    return view('admin/room');
})->name('room');

Route::controller(RoomSpecController::class)->group(function () {
    Route::get('/room_spec', 'index')->name('room_spec');
    Route::get('/room_spec/create', 'view_create')->name('create_room_spec');
    Route::post('/room_spec/create', 'store')->name('save_room_spec');
    Route::get('/room_spec/edit/{id}', 'edit')->name('edit_room_spec');
    Route::put('/room_spec/edit/{id}', 'update');
    Route::delete('/room_spec/delete/{id}', 'destroy')->name('delete_room_spec');
});

Route::controller(RoomController::class)->group(function () {
    Route::get('/room', 'index')->name('room');
    Route::get('/room/create', 'create')->name('create_room');
    Route::post('/room/create', 'store')->name('save_room');
    Route::get('/room/edit/{id}', 'edit')->name('edit_room');
    Route::put('/room/edit/{id}', 'update');
    Route::delete('/room/delete/{id}', 'destroy')->name('delete_room');
});

// === GUEST === //
Route::controller(GuestController::class)->group(function () {
    Route::get('/register', 'index');
    Route::post('/register', 'store')->name('register');
    Route::get('/login', 'loginView');
    Route::post('/login', 'login')->name('login');
    Route::get('/logout', 'logout');
});

Route::get('/home', [GuestController::class, 'home']);
