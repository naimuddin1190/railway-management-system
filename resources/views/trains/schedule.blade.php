@extends('layouts.app')

@section('title', 'Train Schedule')

@section('content')
<div class="container mt-5">

    <!-- Page Heading -->
    <div class="text-center mb-5">
        <h2 class="display-6 fw-bold text-dark">
            <i class="bi bi-train-front-fill text-success me-2"></i>Train Schedule
        </h2>
        <p class="text-secondary">Check all major train schedules across Bangladesh</p>
    </div>

    <!-- Search Filter -->
    <form class="row g-3 mb-4 justify-content-center" action="{{ route('trains.schedule') }}" method="get">
        <div class="col-md-3">
            <select class="form-select rounded-pill shadow-sm" name="from">
                <option value="" selected disabled>From (City)</option>
                @foreach($cities as $city)
                    <option value="{{ $city }}" {{ request('from') == $city ? 'selected' : '' }}>
                        {{ $city }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="col-md-3">
            <select class="form-select rounded-pill shadow-sm" name="to">
                <option value="" selected disabled>To (City)</option>
                @foreach($cities as $city)
                    <option value="{{ $city }}" {{ request('to') == $city ? 'selected' : '' }}>
                        {{ $city }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="col-md-3">
            <input type="date" class="form-control rounded-pill shadow-sm" name="date" value="{{ request('date') }}">
        </div>
        <div class="col-md-2">
            <button class="btn btn-success rounded-pill w-100">Filter</button>
        </div>
    </form>

    <!-- Schedule Table -->
    <div class="table-responsive shadow-sm rounded-4 overflow-hidden">
        <table class="table table-striped mb-0">
            <thead class="table-success">
                <tr>
                    <th>Train Name</th>
                    <th>From</th>
                    <th>To</th>
                    <th>Departure</th>
                    <th>Arrival</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @forelse($schedules as $schedule)
                    <tr>
                        <td>{{ $schedule->train->name }}</td>
                        <td>{{ $schedule->train->source }}</td>
                        <td>{{ $schedule->train->destination }}</td>
                        <td>{{ \Carbon\Carbon::parse($schedule->departure_time)->format('h:i A') }}</td>
                        <td>{{ \Carbon\Carbon::parse($schedule->arrival_time)->format('h:i A') }}</td>
                        <td>
                            <a href="{{ route('booking.create', $schedule->id) }}" class="btn btn-sm btn-outline-success rounded-pill">
                                Book Now
                            </a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-center text-muted py-4">
                            <i class="bi bi-exclamation-circle text-danger"></i> 
                            Sorry, no train found. Please try another date/route.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

<!-- ================= CSS ================= -->
<style>
.table-responsive {
    box-shadow: 0 8px 20px rgba(0,0,0,0.1);
}

.table th, .table td {
    vertical-align: middle;
}

.table-striped tbody tr:nth-of-type(odd) {
    background-color: #f9f9f9;
}

.table-success {
    background-color: #e6f4ea !important;
}

.form-select, .btn, .form-control {
    transition: all 0.3s ease;
}

.form-select:hover, .form-control:hover {
    box-shadow: 0 4px 12px rgba(0,0,0,0.1);
}

.btn-success:hover {
    background: #0f6f3e;
    border-color: #0f6f3e;
}

@media (max-width: 768px) {
    .display-6 { font-size: 1.8rem; }
}
</style>
@endsection
