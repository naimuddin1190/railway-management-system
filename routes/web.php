<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application.
| These routes are loaded by the RouteServiceProvider within a group
| which contains the "web" middleware group. Now create something great!
|
*/

// Home
Route::view('/', 'home');

// Auth Pages
Route::view('/login', 'auth.login');
Route::view('/register', 'auth.register');
Route::view('/profile', 'auth.profile');

// Dashboards
Route::view('/admin/dashboard', 'admin.dashboard');
Route::view('/passenger/dashboard', 'passenger.dashboard');

// Train Schedule
Route::view('/trains/schedule', 'trains.schedule');

// Booking Pages
Route::view('/booking/create', 'booking.create');
Route::view('/booking/ticket', 'booking.ticket');
Route::view('/booking/cancel', 'booking.cancel');

// Seat Availability
Route::view('/seats/availability', 'seats.availability');

// Fare Calculator
Route::view('/fare/calculator', 'fare.calculator');

// Passenger List (Admin)
Route::view('/passengers/list', 'passengers.list');

// Contact Page
Route::view('/contact', 'contact.contact');
