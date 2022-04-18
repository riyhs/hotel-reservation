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

    Route::get('/receptionist', 'receptionist')->name('receptionist')->middleware('admin');
    Route::get('/receptionist/create', 'createReceptionist')->name('create_receptionist')->middleware('admin');
    Route::post('/receptionist/create', 'storeReceptionist')->name('store_receptionist')->middleware('admin');
    Route::get('/receptionist/edit/{id}', 'editReceptionist')->name('edit_receptionist')->middleware('admin');
    Route::put('/receptionist/create/{id}', 'updateReceptionist')->name('update_receptionist')->middleware('admin');
    Route::delete('/receptionist/delete/{id}', 'deleteReceptionist')->name('delete_receptionist')->middleware('admin');
});

Route::get('/admin', function () {
    return view('admin/auth/login');
});

Route::controller(RoomSpecController::class)->group(function () {
    Route::get('/room_spec', 'index')->name('room_spec')->middleware('admin');
    Route::get('/room_spec/create', 'view_create')->name('create_room_spec')->middleware('admin');
    Route::post('/room_spec/create', 'store')->name('save_room_spec')->middleware('admin');
    Route::get('/room_spec/edit/{id}', 'edit')->name('edit_room_spec')->middleware('admin');
    Route::put('/room_spec/edit/{id}', 'update')->middleware('admin');
    Route::delete('/room_spec/delete/{id}', 'destroy')->name('delete_room_spec')->middleware('admin');
});

Route::controller(RoomController::class)->group(function () {
    Route::get('/room', 'index')->name('room')->middleware('admin');
    Route::get('/room/create', 'create')->name('create_room')->middleware('admin');
    Route::post('/room/create', 'store')->name('save_room')->middleware('admin');
    Route::get('/room/edit/{id}', 'edit')->name('edit_room')->middleware('admin');
    Route::put('/room/edit/{id}', 'update')->middleware('admin');
    Route::delete('/room/delete/{id}', 'destroy')->name('delete_room')->middleware('admin');
});

Route::controller(RoomFacilityController::class)->group(function () {
    Route::get('/room_facility', 'index')->name('room_facility')->middleware('admin');
    Route::get('/room_facility/create', 'create')->name('create_room_facility')->middleware('admin');
    Route::post('/room_facility/create', 'store')->name('save_room_facility')->middleware('admin');
    Route::get('/room_facility/edit/{id}', 'edit')->name('edit_room_facility')->middleware('admin');
    Route::put('/room_facility/edit/{id}', 'update')->middleware('admin');
    Route::delete('/room_facility/delete/{id}', 'destroy')->name('delete_room_facility')->middleware('admin');
});

Route::controller(HotelFacilityController::class)->group(function () {
    Route::get('/hotel_facility', 'index')->name('hotel_facility')->middleware('admin');
    Route::get('/hotel_facility/create', 'create')->name('create_hotel_facility')->middleware('admin');
    Route::post('/hotel_facility/create', 'store')->name('save_hotel_facility')->middleware('admin');
    Route::get('/hotel_facility/edit/{id}', 'edit')->name('edit_hotel_facility')->middleware('admin');
    Route::put('/hotel_facility/edit/{id}', 'update')->middleware('admin');
    Route::delete('/hotel_facility/delete/{id}', 'destroy')->name('delete_hotel_facility')->middleware('admin');
});

Route::controller(ReservationController::class)->group(function () {
    Route::get('/reservation', 'index')->name('reservation')->middleware('receptionist');
    Route::get('/reservation/create', 'create')->name('create_reservation')->middleware('receptionist');
    Route::post('/reservation/create', 'store')->name('save_reservation')->middleware('receptionist');
    Route::get('/reservation/{id}', 'detail')->name('detail_reservation')->middleware('receptionist');
    Route::put('/reservation/edit/{id}', 'update')->name('update_reservation')->middleware('receptionist');
    Route::delete('/reservation/delete/{id}', 'destroy')->name('delete_reservation')->middleware('receptionist');

    // GUEST
    Route::get('/create', 'guestCreate')->name('guestCreate');
    Route::post('/create', 'guestStore')->name('guestStore');
    Route::get('/booking', 'guestIndex');
    Route::get('/invoice/{id}', 'show')->name('print_ticket');
});
