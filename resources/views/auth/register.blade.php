@extends('layouts.app')

@section('title', 'Register')

@section('content')
<div class="container mt-5">

    <!-- Page Heading -->
    <div class="text-center mb-5">
        <h2 class="display-5 fw-bold text-dark">
            <i class="bi bi-person-plus-fill text-success me-2"></i> Create Your Account
        </h2>
        <p class="text-secondary">
            Sign up to access our online railway ticket booking system.<br>
            It only takes a few seconds to get started!
        </p>
    </div>

    <!-- Register Form -->
    <form class="p-4 shadow-lg rounded-4 bg-white mx-auto" style="max-width: 600px;">

        <!-- Name -->
        <div class="mb-3">
            <label class="form-label fw-semibold">Full Name <span class="text-danger">*</span></label>
            <input type="text" class="form-control rounded-pill shadow-sm" placeholder="Enter your full name" required>
            <small class="text-muted">Your official name (as per NID or passport)</small>
        </div>

        <!-- Email -->
        <div class="mb-3">
            <label class="form-label fw-semibold">Email Address <span class="text-danger">*</span></label>
            <input type="email" class="form-control rounded-pill shadow-sm" placeholder="Enter your email address" required>
            <small class="text-muted">We’ll never share your email with anyone else</small>
        </div>

        <!-- Phone -->
        <div class="mb-3">
            <label class="form-label fw-semibold">Mobile Number <span class="text-danger">*</span></label>
            <input type="tel" class="form-control rounded-pill shadow-sm" placeholder="e.g. 018XXXXXXXX" required>
            <small class="text-muted">Must be a valid Bangladeshi number</small>
        </div>

        <!-- Password -->
        <div class="mb-3">
            <label class="form-label fw-semibold">Password <span class="text-danger">*</span></label>
            <input type="password" class="form-control rounded-pill shadow-sm" placeholder="Create a strong password" required>
            <small class="text-muted">Use at least 8 characters including numbers & symbols</small>
        </div>

        <!-- Confirm Password -->
        <div class="mb-3">
            <label class="form-label fw-semibold">Confirm Password <span class="text-danger">*</span></label>
            <input type="password" class="form-control rounded-pill shadow-sm" placeholder="Re-enter your password" required>
        </div>

        <!-- Terms -->
        <div class="form-check mb-4">
            <input class="form-check-input" type="checkbox" id="terms" required>
            <label class="form-check-label small text-muted" for="terms">
                I agree to the <a href="#" class="text-success fw-semibold">Terms & Conditions</a> and <a href="#" class="text-success fw-semibold">Privacy Policy</a>
            </label>
        </div>

        <!-- Button -->
        <div class="d-grid">
            <button type="submit" class="btn btn-success fw-bold rounded-pill py-2">
                <i class="bi bi-check-circle me-2"></i> Register Now
            </button>
        </div>

        <!-- Already have account -->
        <div class="text-center mt-4">
            <span class="text-muted">Already have an account?</span>
            <a href="/login" class="fw-semibold text-success">Login Here</a>
        </div>
    </form>
</div>

<!-- ================= CSS ================= -->
<style>
.form-select, .form-control {
    border-radius: 50px;
    padding: 12px 18px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.08);
    transition: all 0.3s ease;
    font-size: 0.95rem;
}

.form-select:hover, .form-control:hover {
    box-shadow: 0 4px 12px rgba(0,0,0,0.12);
}

.btn-success {
    font-size: 1rem;
    letter-spacing: 0.5px;
    transition: all 0.3s ease;
}

.btn-success:hover {
    background-color: #0f6f3e;
    border-color: #0f6f3e;
    transform: translateY(-2px);
    box-shadow: 0 4px 10px rgba(0,0,0,0.15);
}
</style>
@endsection