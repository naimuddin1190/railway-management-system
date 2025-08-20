@extends('layouts.app')

@section('title', 'Train Schedule')

@section('content')
<div class="container mt-5">
    <h2 class="text-center text-primary mb-4">🚉 Train Schedule</h2>
    <table class="table table-striped table-bordered shadow">
        <thead class="thead-dark">
            <tr>
                <th>Train Name</th>
                <th>From</th>
                <th>To</th>
                <th>Departure</th>
                <th>Arrival</th>
            </tr>
        </thead>
        <tbody>
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
        </tbody>
    </table>
</div>
@endsection