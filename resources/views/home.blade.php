@extends('layouts.app')

@section('title','Home')

@section('content')

<!-- Hero Section -->
<div class="hero-section p-5 mb-5 bg-white rounded-4 shadow-sm">
    <div class="container-fluid py-5">
        <div class="row align-items-center">
            
            <!-- Left Side: Form -->
            <div class="col-md-6 text-center text-md-start">
                <h1 class="display-5 fw-bold text-dark mb-3">
                    <i class="bi bi-train-front-fill text-success me-2"></i>
                    Plan your journey with <span class="text-success">PUC Railway</span>
                </h1>
                <p class="col-md-10 fs-5 text-secondary mb-4">
                    Search schedules, check seats, calculate fare, and book tickets — all in one place.
                </p>

                <!-- Search Form -->
                <form class="row g-3" action="/trains/schedule" method="get">
                    <!-- From City -->
                    <div class="col-6">
                        <select class="form-select rounded-pill shadow-sm" name="from" required>
                            <option value="" selected disabled>From (City)</option>
                            <option>Dhaka</option>
                            <option>Chattogram</option>
                            <option>Cox's Bazar</option>
                            <option>Khulna</option>
                            <option>Sylhet</option>
                            <option>Rajshahi</option>
                            <option>Comilla</option>
                            <option>Feni</option>
                            <option>Bogra</option>
                            <option>Narsingdi</option>
                        </select>
                    </div>

                    <!-- To City -->
                    <div class="col-6">
                        <select class="form-select rounded-pill shadow-sm" name="to" required>
                            <option value="" selected disabled>To (City)</option>
                            <option>Dhaka</option>
                            <option>Chattogram</option>
                            <option>Cox's Bazar</option>
                            <option>Khulna</option>
                            <option>Sylhet</option>
                            <option>Rajshahi</option>
                            <option>Comilla</option>
                            <option>Feni</option>
                            <option>Bogra</option>
                            <option>Narsingdi</option>
                        </select>
                    </div>

                    <!-- Journey Date -->
                    <div class="col-6">
                        <input type="date" class="form-control rounded-pill shadow-sm" name="date" required>
                    </div>

                    <!-- Choose Class Dropdown -->
                    <div class="col-6">
                        <select class="form-select rounded-pill shadow-sm" name="class" required>
                            <option value="" selected disabled>Choose Class</option>
                            <option>AC</option>
                            <option>Sleeper</option>
                            <option>Shovon</option>
                            <option>Shovon Chair</option>
                            <option>First Class</option>
                            <option>General</option>
                        </select>
                    </div>

                    <!-- Submit Button -->
                    <div class="col-12 d-grid">
                        <button class="btn btn-success rounded-pill fw-bold">Search Trains</button>
                    </div>
                </form>
            </div>

            <!-- Right Side: Auto Carousel -->
            <div class="col-md-6 text-center mt-4 mt-md-0">
                <div id="trainCarousel" class="carousel slide rounded-4 shadow-sm" data-bs-ride="carousel" data-bs-interval="2500">
                    
                    <!-- Indicators (dots) -->
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#trainCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#trainCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#trainCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>

                    <!-- Carousel Images -->
                    <div class="carousel-inner rounded-4">
                        <div class="carousel-item active">
                            <img src="{{ asset('images/carousel/c1.jpeg') }}" class="d-block w-100 rounded-4" style="max-height: 350px; object-fit: cover;" alt="Train 1">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('images/carousel/c2.jpg') }}" class="d-block w-100 rounded-4" style="max-height: 350px; object-fit: cover;" alt="Train 2">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('images/carousel/c3.jpg') }}" class="d-block w-100 rounded-4" style="max-height: 350px; object-fit: cover;" alt="Train 3">
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>


<!-- ================= New 4 Image Section ================= -->
<div class="container my-5">
    <div class="row text-center g-4">
        <div class="col-md-3 col-6">
            <img src="{{ asset('images/middle/search.png') }}" class="img-fluid mb-3" style="max-height:140px;" alt="Search">
            <h5 class="fw-bold">Search</h5>
            <p class="text-secondary small">Choose your origin, destination, journey dates and search for trains.</p>
        </div>
        <div class="col-md-3 col-6">
            <img src="{{ asset('images/middle/select.png') }}" class="img-fluid mb-3" style="max-height:140px;" alt="Select">
            <h5 class="fw-bold">Select</h5>
            <p class="text-secondary small">Select your desired trip and choose your seats.</p>
        </div>
        <div class="col-md-3 col-6">
            <img src="{{ asset('images/middle/pay.png') }}" class="img-fluid mb-3" style="max-height:140px;" alt="Pay">
            <h5 class="fw-bold">Pay</h5>
            <p class="text-secondary small">Pay for tickets via Debit / Credit Cards or MFS.</p>
        </div>
        <div class="col-md-3 col-6">
            <img src="{{ asset('images/middle/ticket.png') }}" class="img-fluid mb-3" style="max-height:140px;" alt="Ticket">
            <h5 class="fw-bold">Get Ticket</h5>
            <p class="text-secondary small">Instantly download or print your e-ticket hassle-free.</p>
        </div>
    </div>
</div>

<!-- ================= Purchase Instruction Section ================= -->
<div class="container my-5">
    <div class="row align-items-center bg-white rounded-3 shadow-sm p-4">
        <!-- Left: Image -->
        <div class="col-md-6 text-center mb-3 mb-md-0">
            <img src="{{ asset('images/instruction.png') }}" 
                 class="img-fluid rounded-4 shadow-sm" 
                 style="max-height: 350px; object-fit: cover;" 
                 alt="Instruction Image">
        </div>

        <!-- Right: Instructions -->
        <div class="col-md-6">
            <h3 class="fw-bold text-dark mb-3">How to Purchase Your Ticket</h3>
            <ol class="text-secondary fs-5" style="line-height: 2;">
                <li>Choose your origin and destination stations from the "From" and "To" dropdowns.</li>
                <li>Select your journey date.</li>
                <li>Pick your desired class (AC,Sleeper,General etc.).</li>
                <li>Click on the <span class="fw-bold text-success">"Search Trains"</span> button.</li>
                <li>Select your preferred train and available seats.</li>
                <li>Proceed to payment using Bkash/Nagad/Rocket/Upay mobile banking.</li>
                <li>Download or print your e-ticket instantly.</li>
            </ol>
        </div>
    </div>
</div>

<!-- ================= CSS ================= -->
<style>
.hero-section {
    border-radius: 1.5rem;
    transition: box-shadow 0.3s ease;
}
.hero-section:hover {
    box-shadow: 0 12px 25px rgba(0,0,0,0.15);
}
.btn-outline-success:hover {
    background: #0f6f3e;
    color: #fff;
    border-color: #0f6f3e;
}
.form-select, .form-control {
    border-radius: 50px;
    padding: 10px 15px;
    box-shadow: 0 2px 6px rgba(0,0,0,0.08);
}
@media (max-width: 768px) {
    .display-5 {
        font-size: 2rem;
    }
    .hero-section {
        text-align: center;
    }
}
</style>

@endsection