@extends('layouts.app')

@section('title', 'Seat Availability')

@section('content')
<div class="container mt-5">

    <!-- Page Heading -->
    <div class="text-center mb-5">
        <h2 class="display-6 fw-bold text-dark">
            <i class="bi bi-grid-3x3-gap text-success me-2"></i>Seat Availability
        </h2>
        <p class="text-secondary">Check available seats for all major trains across Bangladesh</p>
    </div>

    <!-- Seat Check Form -->
    <form class="p-4 shadow-sm rounded-4 bg-white mx-auto" style="max-width: 600px;">
        <div class="mb-3">
            <label class="form-label fw-semibold">Select Train</label>
            <select class="form-select rounded-pill shadow-sm" name="train">
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
                <!-- আরও train add করতে পারো -->
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label fw-semibold">Travel Date</label>
            <input type="date" class="form-control rounded-pill shadow-sm" name="date" required>
        </div>

        <div class="d-grid">
            <button type="submit" class="btn btn-success fw-bold rounded-pill">Check Availability</button>
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