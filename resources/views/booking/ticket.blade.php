@extends('layouts.app')

@section('title', 'Your Ticket')

@section('content')
<div class="container mt-5">
    <h2 class="text-center text-success mb-4">🎟 Your Ticket</h2>
    <div class="card p-4 shadow">
        <p><strong>Passenger:</strong> John Doe</p>
        <p><strong>Train:</strong> Subarna Express</p>
        <p><strong>Seat:</strong> AC - B2</p>
        <p><strong>Date:</strong> 20-Aug-2025</p>
    </div>
    <button class="btn btn-primary mt-3">Download PDF</button>
</div>
@endsection