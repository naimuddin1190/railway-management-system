@extends('layouts.app')

@section('title', 'Passenger List')

@section('content')
<div class="container mt-5">
    <!-- Header -->
    <div class="text-center mb-4">
        <h2 class="text-success fw-bold">
            <i class="bi bi-people-fill me-2"></i>Passenger List
        </h2>
        <p class="text-muted">All booked passengers for trains</p>
    </div>

    <!-- Table Card -->
    <div class="card shadow-lg rounded-4">
        <div class="card-body p-3">
            <div class="table-responsive">
                <table class="table table-hover align-middle mb-0">
                    <thead class="table-success text-success">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Train</th>
                            <th scope="col">Seat</th>
                            <th scope="col">Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Naim</td>
                            <td>Subarna Express</td>
                            <td>AC-B2</td>
                            <td>20-Aug-2025</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Ratul</td>
                            <td>Padma Express</td>
                            <td>SL-C4</td>
                            <td>21-Aug-2025</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Shamraj</td>
                            <td>Turna Express</td>
                            <td>SL-A1</td>
                            <td>22-Aug-2025</td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td>Shagor</td>
                            <td>Ekota Express</td>
                            <td>AC-A3</td>
                            <td>23-Aug-2025</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Optional CSS -->
<style>
.table-hover tbody tr:hover {
    background-color: rgba(25, 135, 84, 0.1); /* green hover like login theme */
    transition: all 0.3s ease;
}
.card {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}
.card:hover {
    transform: translateY(-2px);
    box-shadow: 0 12px 25px rgba(0,0,0,0.2);
}
</style>
@endsection