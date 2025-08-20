@extends('layouts.app')

@section('title', 'Admin Dashboard')

@section('content')
<div class="container mt-5">
    <h2 class="text-center text-primary mb-4">🚆 Admin Dashboard</h2>
    <div class="row">
        <div class="col-md-3">
            <div class="card shadow p-3">
                <h5>Manage Trains</h5>
                <a href="/trains/schedule" class="btn btn-primary btn-sm mt-2">View Schedule</a>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card shadow p-3">
                <h5>Manage Passengers</h5>
                <a href="/passengers" class="btn btn-success btn-sm mt-2">Passenger List</a>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card shadow p-3">
                <h5>Bookings</h5>
                <a href="/booking/create" class="btn btn-warning btn-sm mt-2">View Bookings</a>
            </div>
        </div>
    </div>
</div>
@endsection