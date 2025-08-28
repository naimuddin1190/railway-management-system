@extends('layouts.app')

@section('title', 'Passenger Dashboard')

@section('content')
<div class="container mt-5">

    <!-- Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="text-success fw-bold">
            <i class="bi bi-person-circle me-2"></i>Passenger Dashboard
        </h2>
        <!-- Logout Button -->
        <form action="#" method="POST">
            @csrf
            <button type="submit" class="btn btn-danger btn-sm rounded-pill">
                <i class="bi bi-box-arrow-right me-1"></i>Logout
            </button>
        </form>
    </div>

    <div class="row g-4">

        <!-- Book Ticket -->
        <div class="col-md-4">
            <div class="card shadow-sm rounded-4 h-100 p-3 border-success">
                <h5 class="fw-bold text-success">🎫 Book a Ticket</h5>
                <p>Quickly book your train tickets</p>
                <a href="/booking/create" class="btn btn-success btn-sm mt-2 rounded-pill">
                    <i class="bi bi-ticket-perforated me-1"></i>Book Now
                </a>
            </div>
        </div>

        <!-- Seat Availability -->
        <div class="col-md-4">
            <div class="card shadow-sm rounded-4 h-100 p-3 border-success">
                <h5 class="fw-bold text-success">💺 Check Seat Availability</h5>
                <p>Check AC, Sleeper & General seats</p>
                <a href="/seats/availability" class="btn btn-success btn-sm mt-2 rounded-pill">
                    <i class="bi bi-search me-1"></i>Check Now
                </a>
            </div>
        </div>

        <!-- Fare Calculator -->
        <div class="col-md-4">
            <div class="card shadow-sm rounded-4 h-100 p-3 border-success">
                <h5 class="fw-bold text-success">💰 Fare Calculator</h5>
                <p>Estimate fare by distance & class</p>
                <a href="/fare/calculator" class="btn btn-success btn-sm mt-2 rounded-pill">
                    <i class="bi bi-cash-coin me-1"></i>Calculate
                </a>
            </div>
        </div>

        <!-- Booking History -->
        <div class="col-md-4">
            <div class="card shadow-sm rounded-4 h-100 p-3 border-success">
                <h5 class="fw-bold text-success">📜 Booking History</h5>
                <p>View your past bookings</p>
                <a href="/booking/history" class="btn btn-success btn-sm mt-2 rounded-pill">
                    <i class="bi bi-clock-history me-1"></i>View History
                </a>
            </div>
        </div>

        <!-- Profile -->
        <div class="col-md-4">
            <div class="card shadow-sm rounded-4 h-100 p-3 border-success">
                <h5 class="fw-bold text-success">👤 Profile</h5>
                <p>Update your personal details</p>
                <a href="/profile" class="btn btn-success btn-sm mt-2 rounded-pill">
                    <i class="bi bi-person-lines-fill me-1"></i>Update Profile
                </a>
            </div>
        </div>

        <!-- Support -->
        <div class="col-md-4">
            <div class="card shadow-sm rounded-4 h-100 p-3 border-success">
                <h5 class="fw-bold text-success">📞 Support</h5>
                <p>Need help? Contact support</p>
                <a href="/support" class="btn btn-success btn-sm mt-2 rounded-pill">
                    <i class="bi bi-headset me-1"></i>Get Support
                </a>
            </div>
        </div>

    </div>
</div>

<style>
.card h5 {
    font-size: 1.2rem;
}
.card p {
    color: #555;
    font-size: 1rem;
}
.btn:hover {
    transform: translateY(-2px);
    transition: all 0.3s ease;
}
.card {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}
.card:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 20px rgba(0,0,0,0.25);
}
</style>
@endsection