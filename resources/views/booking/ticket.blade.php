@extends('layouts.app')

@section('title', 'Your Ticket')

@section('content')
<div class="container mt-5">

    <!-- Page Heading -->
    <div class="text-center mb-5">
        <h2 class="display-6 fw-bold text-dark">
            <i class="bi bi-receipt text-success me-2"></i>Your Ticket
        </h2>
        <p class="text-secondary">Here is your booked ticket. You can download it as PDF.</p>
    </div>

    <!-- Ticket Card -->
    <div class="card p-4 shadow-sm rounded-4 mx-auto" style="max-width: 500px; background-color: #f8f9fa;">
        <p><strong>Passenger:</strong> John Doe</p>
        <p><strong>Train:</strong> Subarna Express</p>
        <p><strong>Seat:</strong> AC - B2</p>
        <p><strong>Date:</strong> 20-Aug-2025</p>
        <p><strong>From:</strong> Dhaka</p>
        <p><strong>To:</strong> Chattogram</p>
    </div>

    <!-- Download Button -->
    <div class="d-grid mt-3" style="max-width: 500px; margin:auto;">
        <button class="btn btn-success fw-bold rounded-pill shadow-sm">
            <i class="bi bi-download me-1"></i> Download PDF
        </button>
    </div>
</div>

<!-- ================= CSS ================= -->
<style>
.card p {
    font-size: 1rem;
    margin-bottom: 0.5rem;
}

.btn-success:hover {
    background-color: #0f6f3e;
    border-color: #0f6f3e;
}
</style>
@endsection