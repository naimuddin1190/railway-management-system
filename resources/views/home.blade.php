@extends('layouts.app')
@section('title','Home')
@section('content')
<div class="p-5 mb-4 bg-white rounded-3 shadow-sm">
<div class="container-fluid py-5">
<h1 class="display-6 fw-bold">Plan your journey with RailwayMS</h1>
<p class="col-md-8 fs-5">Search schedules, check seats, calculate fare, and book tickets — all in one place.</p>
<form class="row g-2" action="/trains/schedule" method="get">
<div class="col-md-4"><input class="form-control" name="from" placeholder="From (e.g., Dhaka)"></div>
<div class="col-md-4"><input class="form-control" name="to" placeholder="To (e.g., Chattogram)"></div>
<div class="col-md-3"><input type="date" class="form-control" name="date"></div>
<div class="col-md-1 d-grid"><button class="btn btn-primary">Go</button></div>
</form>
</div>
</div>


<div class="row g-4">
<div class="col-md-3">
<div class="card h-100 shadow-sm">
<div class="card-body">
<h5 class="card-title"><i class="bi bi-clock"></i> Train Schedule</h5>
<p class="card-text">Find trains, stops, and timings.</p>
<a href="/trains/schedule" class="btn btn-outline-primary btn-sm">Open</a>
</div>
</div>
</div>
<div class="col-md-3">
<div class="card h-100 shadow-sm">
<div class="card-body">
<h5 class="card-title"><i class="bi bi-grid-3x3-gap"></i> Seat Availability</h5>
<p class="card-text">Check AC/Sleeper/General seats.</p>
<a href="/seats/availability" class="btn btn-outline-primary btn-sm">Open</a>
</div>
</div>
</div>
<div class="col-md-3">
<div class="card h-100 shadow-sm">
<div class="card-body">
<h5 class="card-title"><i class="bi bi-cash-coin"></i> Fare Calculator</h5>
<p class="card-text">Estimate fare by distance & class.</p>
<a href="/fare/calculator" class="btn btn-outline-primary btn-sm">Open</a>
</div>
</div>
</div>
<div class="col-md-3">
<div class="card h-100 shadow-sm">
<div class="card-body">
<h5 class="card-title"><i class="bi bi-ticket-perforated"></i> Book Tickets</h5>
<p class="card-text">Quick booking with e‑ticket.</p>
<a href="/booking/create" class="btn btn-outline-primary btn-sm">Open</a>
</div>
</div>
</div>
</div>
@endsection