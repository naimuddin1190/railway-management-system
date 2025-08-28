@extends('layouts.app')

@section('title', 'Book Ticket')

@section('content')
<div class="container mt-5">

    <!-- Page Heading -->
    <div class="text-center mb-5">
        <h2 class="display-6 fw-bold text-dark">
            <i class="bi bi-ticket-perforated text-success me-2"></i>Book Your Ticket
        </h2>
        <p class="text-secondary">Quick and secure ticket booking for all major trains in Bangladesh</p>
    </div>

    <!-- Booking Form -->
    <form class="p-4 shadow-sm rounded-4 bg-white mx-auto" style="max-width: 600px;">
        <div class="mb-3">
            <label class="form-label fw-semibold">Passenger Name</label>
            <input type="text" class="form-control rounded-pill shadow-sm" placeholder="Enter your name" name="passenger_name" required>
        </div>

        <div class="mb-3">
            <label class="form-label fw-semibold">Train</label>
            <select class="form-select rounded-pill shadow-sm" name="train" required>
                <option selected disabled>Select a Train</option>
                <option>Subarna Express</option>
                <option>Padma Express</option>
                <option>Turna Express</option>
                <option>Ekota Express</option>
                <option>Chattala Express</option>
                <option>Rupsha Express</option>
                <option>Jamuna Express</option>
                <option>Parabat Express</option>
                <option>Moyna Express</option>
                <option>Silk City Express</option>
                <option>Meghna Express</option>
                <option>Rangpur Express</option>
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label fw-semibold">Seat Class</label>
            <select class="form-select rounded-pill shadow-sm" name="class" required>
                <option>AC</option>
                <option>Sleeper</option>
                <option>General</option>
            </select>
        </div>

        <div class="d-grid">
            <button type="submit" class="btn btn-success fw-bold rounded-pill">Book Now</button>
        </div>
    </form>
</div>

<!-- ================= CSS ================= -->
<style>
.form-select, .form-control {
    border-radius: 50px;
    padding: 10px 15px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.08);
    transition: all 0.3s ease;
}

.form-select:hover, .form-control:hover {
    box-shadow: 0 4px 12px rgba(0,0,0,0.12);
}

.btn-success:hover {
    background-color: #0f6f3e;
    border-color: #0f6f3e;
}
</style>
@endsection