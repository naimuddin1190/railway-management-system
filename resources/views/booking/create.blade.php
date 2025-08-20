@extends('layouts.app')

@section('title', 'Book Ticket')

@section('content')
<div class="container mt-5">
    <h2 class="text-center text-warning mb-4">🎫 Book Your Ticket</h2>
    <form class="p-4 shadow rounded bg-light">
        <div class="form-group">
            <label>Passenger Name</label>
            <input type="text" class="form-control" placeholder="Enter your name">
        </div>
        <div class="form-group">
            <label>Train</label>
            <select class="form-control">
                <option>Subarna Express</option>
                <option>Padma Express</option>
            </select>
        </div>
        <div class="form-group">
            <label>Seat Class</label>
            <select class="form-control">
                <option>AC</option>
                <option>Sleeper</option>
                <option>General</option>
            </select>
        </div>
        <button type="submit" class="btn btn-success mt-3">Book Now</button>
    </form>
</div>
@endsection