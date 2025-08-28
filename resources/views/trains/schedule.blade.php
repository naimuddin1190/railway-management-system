@extends('layouts.app')

@section('title', 'Train Schedule')

@section('content')
<div class="container mt-5">

    <!-- Page Heading -->
    <div class="text-center mb-5">
        <h2 class="display-6 fw-bold text-dark">
            <i class="bi bi-train-front-fill text-success me-2"></i>Train Schedule
        </h2>
        <p class="text-secondary">Check all major train schedules across Bangladesh</p>
    </div>

    <!-- Search Filter (optional) -->
    <form class="row g-3 mb-4 justify-content-center" action="/trains/schedule" method="get">
        <div class="col-md-3">
            <select class="form-select rounded-pill shadow-sm" name="from">
                <option value="" selected disabled>From (City)</option>
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
        <div class="col-md-3">
            <select class="form-select rounded-pill shadow-sm" name="to">
                <option value="" selected disabled>To (City)</option>
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
        <div class="col-md-2">
            <button class="btn btn-success rounded-pill w-100">Filter</button>
        </div>
    </form>

    <!-- Schedule Table -->
    <div class="table-responsive shadow-sm rounded-4 overflow-hidden">
        <table class="table table-striped mb-0">
            <thead class="table-success">
                <tr>
                    <th>Train Name</th>
                    <th>From</th>
                    <th>To</th>
                    <th>Departure</th>
                    <th>Arrival</th>
                </tr>
            </thead>
            <tbody>
                <!-- Sample Trains -->
                <tr>
                    <td>Subarna Express</td>
                    <td>Dhaka</td>
                    <td>Chattogram</td>
                    <td>07:00 AM</td>
                    <td>12:00 PM</td>
                </tr>
                <tr>
                    <td>Padma Express</td>
                    <td>Dhaka</td>
                    <td>Rajshahi</td>
                    <td>11:00 PM</td>
                    <td>05:00 AM</td>
                </tr>
                <tr>
                    <td>Turna Express</td>
                    <td>Dhaka</td>
                    <td>Chattogram</td>
                    <td>08:00 AM</td>
                    <td>01:00 PM</td>
                </tr>
                <tr>
                    <td>Ekota Express</td>
                    <td>Dhaka</td>
                    <td>Dinajpur</td>
                    <td>09:30 PM</td>
                    <td>05:30 AM</td>
                </tr>
                <tr>
                    <td>Chattala Express</td>
                    <td>Chattogram</td>
                    <td>Dhaka</td>
                    <td>06:00 AM</td>
                    <td>11:30 AM</td>
                </tr>
                <tr>
                    <td>Rupsha Express</td>
                    <td>Khulna</td>
                    <td>Dhaka</td>
                    <td>08:00 PM</td>
                    <td>06:00 AM</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<!-- ================= CSS ================= -->
<style>
.table-responsive {
    box-shadow: 0 8px 20px rgba(0,0,0,0.1);
}

.table th, .table td {
    vertical-align: middle;
}

.table-striped tbody tr:nth-of-type(odd) {
    background-color: #f9f9f9;
}

.table-success {
    background-color: #e6f4ea !important;
}

.form-select, .btn {
    transition: all 0.3s ease;
}

.form-select:hover {
    box-shadow: 0 4px 12px rgba(0,0,0,0.1);
}

.btn-success:hover {
    background: #0f6f3e;
    border-color: #0f6f3e;
}

@media (max-width: 768px) {
    .display-6 { font-size: 1.8rem; }
}
</style>

@endsection