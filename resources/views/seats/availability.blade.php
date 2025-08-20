@extends('layouts.app')

@section('title', 'Seat Availability')

@section('content')
<div class="container mt-5">
    <h2 class="text-center text-info mb-4">💺 Seat Availability</h2>
    <form class="p-4 shadow rounded bg-light">
        <div class="form-group">
            <label>Select Train</label>
            <select class="form-control">
                <option>Subarna Express</option>
                <option>Padma Express</option>
            </select>
        </div>
        <div class="form-group">
            <label>Travel Date</label>
            <input type="date" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary mt-3">Check Availability</button>
    </form>
</div>
@endsection