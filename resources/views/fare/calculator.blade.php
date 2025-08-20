@extends('layouts.app')

@section('title', 'Fare Calculator')

@section('content')
<div class="container mt-5">
    <h2 class="text-center text-dark mb-4">💰 Fare Calculator</h2>
    <form class="p-4 shadow rounded bg-light">
        <div class="form-group">
            <label>From</label>
            <input type="text" class="form-control" placeholder="Enter starting station">
        </div>
        <div class="form-group">
            <label>To</label>
            <input type="text" class="form-control" placeholder="Enter destination">
        </div>
        <div class="form-group">
            <label>Class</label>
            <select class="form-control">
                <option>AC</option>
                <option>Sleeper</option>
                <option>General</option>
            </select>
        </div>
        <button type="submit" class="btn btn-success mt-3">Calculate Fare</button>
    </form>
</div>
@endsection