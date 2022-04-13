<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\RoomSpecController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\RoomFacilityController;
use App\Http\Controllers\HotelFacilityController;
use Illuminate\Foundation\Auth\User;

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

// === GUEST === //
Route::controller(GuestController::class)->group(function () {
    Route::get('/register', 'index');
    Route::post('/register', 'store')->name('register');
    Route::get('/login', 'loginView');
    Route::post('/login', 'login')->name('login');
    Route::get('/logout', 'logout');
    // ADMIN
    Route::get('/guest', 'indexAdmin')->name('guest');
    Route::delete('/guest/delete/{id}', 'destroy')->name('delete_guest');
});

Route::controller(UserController::class)->group(function () {
    // Route::get('/register', 'index');
    // Route::post('/register', 'store')->name('register');
    Route::get('/', 'welcome')->name('home');
    Route::get('/accomodation', 'accomodation');

    Route::get('/admin', 'loginView');
    Route::post('/admin', 'login')->name('admin');
    Route::get('/admin-logout', 'logout');
    Route::get('/dashboard', 'dashboard')->name('dashboard');
});

Route::get('/admin', function () {
    return view('admin/auth/login');
});

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

Route::controller(RoomFacilityController::class)->group(function () {
    Route::get('/room_facility', 'index')->name('room_facility');
    Route::get('/room_facility/create', 'create')->name('create_room_facility');
    Route::post('/room_facility/create', 'store')->name('save_room_facility');
    Route::get('/room_facility/edit/{id}', 'edit')->name('edit_room_facility');
    Route::put('/room_facility/edit/{id}', 'update');
    Route::delete('/room_facility/delete/{id}', 'destroy')->name('delete_room_facility');
});

Route::controller(HotelFacilityController::class)->group(function () {
    Route::get('/hotel_facility', 'index')->name('hotel_facility');
    Route::get('/hotel_facility/create', 'create')->name('create_hotel_facility');
    Route::post('/hotel_facility/create', 'store')->name('save_hotel_facility');
    Route::get('/hotel_facility/edit/{id}', 'edit')->name('edit_hotel_facility');
    Route::put('/hotel_facility/edit/{id}', 'update');
    Route::delete('/hotel_facility/delete/{id}', 'destroy')->name('delete_hotel_facility');
});

Route::controller(ReservationController::class)->group(function () {
    Route::get('/reservation', 'index')->name('reservation');
    Route::get('/reservation/create', 'create')->name('create_reservation');
    Route::post('/reservation/create', 'store')->name('save_reservation');
    Route::get('/reservation/edit/{id}', 'edit')->name('edit_reservation');
    Route::put('/reservation/edit/{id}', 'update');
    Route::delete('/reservation/delete/{id}', 'destroy')->name('delete_reservation');

    // GUEST
    Route::get('/create', 'guestCreate')->name('guestCreate');
    Route::post('/create', 'guestStore')->name('guestStore');
    Route::get('/booking', 'guestIndex');
    Route::get('/invoice/{id}', 'show')->name('print_ticket');
});
