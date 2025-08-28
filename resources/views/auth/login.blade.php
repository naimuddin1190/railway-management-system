@extends('layouts.app')

@section('title', 'Login')

@section('content')
<div class="container mt-5">

    <!-- Page Heading -->
    <div class="text-center mb-5">
        <h2 class="display-6 fw-bold text-dark">
            <i class="bi bi-box-arrow-in-right text-success me-2"></i>Login to Your Account
        </h2>
        <p class="text-secondary">Access your railway account to book and manage tickets</p>
    </div>

    <!-- Login Form -->
    <form class="p-4 shadow-sm rounded-4 bg-white mx-auto" style="max-width: 500px;">
        
        <!-- Email -->
        <div class="mb-3">
            <label class="form-label fw-semibold">Email Address</label>
            <input type="email" class="form-control rounded-pill shadow-sm" placeholder="Enter your email" required>
        </div>

        <!-- Password -->
        <div class="mb-3">
            <label class="form-label fw-semibold">Password</label>
            <input type="password" class="form-control rounded-pill shadow-sm" placeholder="Enter your password" required>
        </div>

        <!-- Remember + Forgot -->
        <div class="d-flex justify-content-between align-items-center mb-3">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="remember">
                <label class="form-check-label small text-muted" for="remember">
                    Remember Me
                </label>
            </div>
            <a href="#" class="small text-success fw-semibold">Forgot Password?</a>
        </div>

        <!-- Button -->
        <div class="d-grid">
            <button type="submit" class="btn btn-success fw-bold rounded-pill">Login</button>
        </div>

        <!-- Register -->
        <div class="text-center mt-3">
            <span class="text-muted">Don’t have an account?</span>
            <a href="/register" class="fw-semibold text-success">Register</a>
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