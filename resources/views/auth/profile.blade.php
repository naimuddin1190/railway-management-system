@extends('layouts.app')

@section('title','Profile')

@section('content')
<div class="container py-5" style="min-height: 80vh;">
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">

            <!-- Profile Card -->
            <div class="card shadow-lg border-0 rounded-4">
                <!-- Header -->
                <div class="card-header bg-success text-white text-center rounded-top-4">
                    <h3 class="mb-0">
                        <i class="bi bi-person-circle me-2"></i>Update Profile
                    </h3>
                </div>

                <!-- Form Body -->
                <div class="card-body p-4">
                    <form>
                        <div class="row g-3">
                            <!-- Full Name -->
                            <div class="col-md-6">
                                <label class="form-label fw-semibold">Full Name</label>
                                <input type="text" class="form-control rounded-3 shadow-sm" placeholder="Enter your name">
                            </div>
                            <!-- Phone -->
                            <div class="col-md-6">
                                <label class="form-label fw-semibold">Phone</label>
                                <input type="text" class="form-control rounded-3 shadow-sm" placeholder="01XXXXXXXXX">
                            </div>
                            <!-- ID Proof -->
                            <div class="col-md-6">
                                <label class="form-label fw-semibold">ID Proof Type</label>
                                <select class="form-select rounded-3 shadow-sm">
                                    <option selected disabled>Choose...</option>
                                    <option value="nid">NID</option>
                                    <option value="passport">Passport</option>
                                    <option value="license">Driving License</option>
                                </select>
                            </div>
                            <!-- ID Number -->
                            <div class="col-md-6">
                                <label class="form-label fw-semibold">ID Number</label>
                                <input type="text" class="form-control rounded-3 shadow-sm" placeholder="Enter ID Number">
                            </div>
                            <!-- Address -->
                            <div class="col-12">
                                <label class="form-label fw-semibold">Address</label>
                                <textarea class="form-control rounded-3 shadow-sm" rows="3" placeholder="Enter full address"></textarea>
                            </div>
                        </div>

                        <!-- Save Button -->
                        <div class="d-grid mt-4">
                            <button type="submit" class="btn btn-success rounded-3 py-2 fw-semibold shadow-sm">
                                <i class="bi bi-save2 me-2"></i> Save Changes
                            </button>
                        </div>
                    </form>
                </div>

                <!-- Footer -->
                <div class="card-footer text-center text-muted small">
                    <i class="bi bi-shield-lock me-1"></i> Your data is safe with us
                </div>
            </div>
            <!-- End Profile Card -->

        </div>
    </div>
</div>

<!-- Optional CSS -->
<style>
.card .form-control, .card .form-select {
    transition: all 0.3s ease;
}
.card .form-control:focus, .card .form-select:focus {
    box-shadow: 0 0 8px rgba(25,135,84,0.3);
    border-color: #198754;
}
.btn-success:hover {
    background-color: #146c43;
    border-color: #146c43;
    transform: translateY(-2px);
}
.card {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}
.card:hover {
    transform: translateY(-2px);
    box-shadow: 0 10px 25px rgba(0,0,0,0.2);
}
</style>
@endsection