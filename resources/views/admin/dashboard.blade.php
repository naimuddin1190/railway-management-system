@extends('layouts.app')

@section('title', 'Admin View')

@section('content')
<div class="container mt-5">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="text-success fw-bold">
            <i class="bi bi-eye-fill me-2"></i>Admin View Page
        </h2>
        <!-- Back to Dashboard -->
        <a href="/admin/dashboard" class="btn btn-outline-success btn-sm rounded-pill">
            <i class="bi bi-arrow-left me-1"></i>Back to Dashboard
        </a>
    </div>

    <div class="row g-4">

        <!-- Example: Train Schedule -->
        <div class="col-md-6">
            <div class="card shadow-sm rounded-4 h-100 p-3 border-success">
                <h5 class="fw-bold text-success">🚆 Train Schedule</h5>
                <p>View all train timings and details</p>
                <a href="/trains/schedule" class="btn btn-success btn-sm mt-2 rounded-pill">
                    <i class="bi bi-calendar2-week me-1"></i>View Schedule
                </a>
            </div>
        </div>

        <!-- Example: Passenger Details -->
        <div class="col-md-6">
            <div class="card shadow-sm rounded-4 h-100 p-3 border-success">
                <h5 class="fw-bold text-success">👥 Passenger Details</h5>
                <p>Check registered passenger information</p>
                <a href="/passengers/list" class="btn btn-success btn-sm mt-2 rounded-pill">
                    <i class="bi bi-people-fill me-1"></i>View Passengers
                </a>
            </div>
        </div>

        <!-- Example: Booking History -->
        <div class="col-md-6">
            <div class="card shadow-sm rounded-4 h-100 p-3 border-success">
                <h5 class="fw-bold text-success">📝 Booking History</h5>
                <p>Track all booking records</p>
                <a href="/booking/list" class="btn btn-success btn-sm mt-2 rounded-pill">
                    <i class="bi bi-list-check me-1"></i>View Bookings
                </a>
            </div>
        </div>

        <!-- Example: Payments -->
        <div class="col-md-6">
            <div class="card shadow-sm rounded-4 h-100 p-3 border-success">
                <h5 class="fw-bold text-success">💳 Payments</h5>
                <p>Check ticket payment records</p>
                <a href="/payments/list" class="btn btn-success btn-sm mt-2 rounded-pill">
                    <i class="bi bi-credit-card-2-front me-1"></i>View Payments
                </a>
            </div>
        </div>

    </div>
</div>

<!-- ================= CSS ================= -->
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