@extends('layouts.app')

@section('title', 'Fare Calculator')

@section('content')
<div class="container mt-5">

    <!-- Page Heading -->
    <div class="text-center mb-5">
        <h2 class="display-6 fw-bold text-dark">
            <i class="bi bi-cash-coin text-success me-2"></i>Fare Calculator
        </h2>
        <p class="text-secondary">Estimate your train fare for all major routes in Bangladesh</p>
    </div>

    <!-- Fare Calculator Form -->
    <form class="p-4 shadow-sm rounded-4 bg-white mx-auto" style="max-width: 600px;">
        <div class="mb-3">
            <label class="form-label fw-semibold">From</label>
            <select class="form-select rounded-pill shadow-sm" name="from" required>
                <option selected disabled>Select Starting City</option>
                <option>Dhaka</option>
                <option>Chattogram</option>
                <option>Cox's Bazar</option>
                <option>Khulna</option>
                <option>Sylhet</option>
                <option>Rajshahi</option>
                <option>Comilla</option>
                <option>Feni</option>
                <option>Bogra</option>
                <option>Narsingdi</option>
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label fw-semibold">To</label>
            <select class="form-select rounded-pill shadow-sm" name="to" required>
                <option selected disabled>Select Destination City</option>
                <option>Dhaka</option>
                <option>Chattogram</option>
                <option>Cox's Bazar</option>
                <option>Khulna</option>
                <option>Sylhet</option>
                <option>Rajshahi</option>
                <option>Comilla</option>
                <option>Feni</option>
                <option>Bogra</option>
                <option>Narsingdi</option>
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label fw-semibold">Class</label>
            <select class="form-select rounded-pill shadow-sm" name="class" required>
                <option>AC</option>
                <option>Sleeper</option>
                <option>General</option>
            </select>
        </div>

        <div class="d-grid">
            <button type="submit" class="btn btn-success fw-bold rounded-pill">Calculate Fare</button>
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