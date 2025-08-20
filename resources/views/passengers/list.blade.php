@extends('layouts.app')

@section('title', 'Passenger List')

@section('content')
<div class="container mt-5">
    <h2 class="text-center text-primary mb-4">👥 Passenger List</h2>
    <table class="table table-bordered shadow">
        <thead class="thead-dark">
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Train</th>
                <th>Seat</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>John Doe</td>
                <td>Subarna Express</td>
                <td>AC-B2</td>
                <td>20-Aug-2025</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Jane Smith</td>
                <td>Padma Express</td>
                <td>SL-C4</td>
                <td>21-Aug-2025</td>
            </tr>
        </tbody>
    </table>
</div>
@endsection