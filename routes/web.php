<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TrainController;
use App\Http\Controllers\BookingController;



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


Route::get('/trains/schedule', [TrainController::class, 'schedule'])->name('trains.schedule');


// Booking Pages
Route::get('/booking/{schedule}/create', [BookingController::class, 'create'])->name('booking.create');
Route::post('/booking/store', [BookingController::class, 'store'])->name('booking.store');
Route::get('/booking/ticket/{pnr}', [BookingController::class, 'ticket'])->name('booking.ticket');
Route::get('/booking/ticket/{pnr}/download', [BookingController::class, 'downloadTicket'])->name('booking.download');


// Seat Availability
Route::view('/seats/availability', 'seats.availability');

// Fare Calculator
Route::view('/fare/calculator', 'fare.calculator');

// Passenger List (Admin)
Route::view('/passengers/list', 'passengers.list');

// Contact Page
Route::view('/contact', 'contact.contact');
