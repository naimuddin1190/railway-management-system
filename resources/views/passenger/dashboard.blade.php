@extends('layouts.app')

@section('title', 'Passenger Dashboard')

@section('content')
<div class="container mt-5">
    <h2 class="text-center text-success mb-4">👤 Passenger Dashboard</h2>
    <div class="row">
        <div class="col-md-4">
            <div class="card shadow p-3">
                <h5>Book a Ticket</h5>
                <a href="/booking/create" class="btn btn-primary btn-sm mt-2">Book Now</a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow p-3">
                <h5>Check Seat Availability</h5>
                <a href="/seats/availability" class="btn btn-info btn-sm mt-2">Check Now</a>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card shadow p-3">
                <h5>Fare Calculator</h5>
                <a href="/fare/calculator" class="btn btn-dark btn-sm mt-2">Calculate</a>
            </div>
        </div>
    </div>
</div>
@endsection