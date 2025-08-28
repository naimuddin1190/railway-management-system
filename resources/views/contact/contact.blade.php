@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')
<div class="container py-5">
    <!-- Page Header -->
    <div class="text-center mb-5">
        <h2 class="fw-bold text-success">Contact Us</h2>
        <p class="text-muted">Have any questions or feedback? We'd love to hear from you.</p>
    </div>

    <div class="row g-4">
        <!-- Contact Form -->
        <div class="col-lg-6">
            <div class="card shadow-lg border-0 rounded-4 h-100">
                <div class="card-body p-4">
                    <h5 class="fw-bold mb-3 text-success"><i class="bi bi-envelope-fill me-2"></i>Send us a Message</h5>
                    <form>
                        <div class="mb-3">
                            <label class="form-label">Your Name</label>
                            <input type="text" class="form-control" placeholder="Enter your name">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Your Email</label>
                            <input type="email" class="form-control" placeholder="Enter your email">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Message</label>
                            <textarea class="form-control" rows="5" placeholder="Write your message"></textarea>
                        </div>
                        <button type="submit" class="btn btn-success px-4"><i class="bi bi-send-fill me-1"></i>Send</button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Team Members -->
        <div class="col-lg-6">
            <div class="card shadow-lg border-0 rounded-4 h-100">
                <div class="card-body p-4">
                    <h5 class="fw-bold mb-4 text-success"><i class="bi bi-people-fill me-2"></i>Our Team</h5>
                    <div class="row g-4">
                        
                        <!-- Member 1 -->
                        <div class="col-md-6 text-center">
                            <div class="team-card p-3 rounded-4 shadow-sm">
                                <img src="{{ asset('images/team/naim.jpg') }}" class="rounded-circle mb-3 team-img" alt="MD Naim Uddin Mozumdar">
                                <h6 class="fw-bold">MD Naim Uddin Mozumdar</h6>
                                <p class="text-muted small">Team Leader & Developer</p>
                                <div class="social-links">
                                    <a href="#"><i class="bi bi-facebook"></i></a>
                                    <a href="https://github.com/naimuddin1190/naimuddin1190"><i class="bi bi-github"></i></a>
                                    <a href="#"><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                        </div>

                        <!-- Member 2 -->
                        <div class="col-md-6 text-center">
                            <div class="team-card p-3 rounded-4 shadow-sm">
                                <img src="{{ asset('images/team/ratul.jpg') }}" class="rounded-circle mb-3 team-img" alt="Syed Nasibur Rahamaan Ratul">
                                <h6 class="fw-bold">Syed Nasibur Rahamaan Ratul</h6>
                                <p class="text-muted small">Backend Developer</p>
                                <div class="social-links">
                                    <a href="#"><i class="bi bi-facebook"></i></a>
                                    <a href="#"><i class="bi bi-github"></i></a>
                                    <a href="#"><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                        </div>

                        <!-- Member 3 -->
                        <div class="col-md-6 text-center">
                            <div class="team-card p-3 rounded-4 shadow-sm">
                                <img src="{{ asset('images/team/shamraj.jpg') }}" class="rounded-circle mb-3 team-img" alt="Shamraj Deb Nath">
                                <h6 class="fw-bold">Shamraj Deb Nath</h6>
                                <p class="text-muted small">Frontend Developer</p>
                                <div class="social-links">
                                    <a href="#"><i class="bi bi-facebook"></i></a>
                                    <a href="#"><i class="bi bi-github"></i></a>
                                    <a href="#"><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                        </div>

                        <!-- Member 4 -->
                        <div class="col-md-6 text-center">
                            <div class="team-card p-3 rounded-4 shadow-sm">
                                <img src="{{ asset('images/team/shagor.jpg') }}" class="rounded-circle mb-3 team-img" alt="Shakwat Azam Shagor">
                                <h6 class="fw-bold">Shakwat Azam Shagor</h6>
                                <p class="text-muted small">UI/UX Designer</p>
                                <div class="social-links">
                                    <a href="#"><i class="bi bi-facebook"></i></a>
                                    <a href="#"><i class="bi bi-github"></i></a>
                                    <a href="#"><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Custom CSS -->
<style>
.team-card {
    background: #f8f9fa;
    transition: transform 0.3s, box-shadow 0.3s;
}
.team-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 6px 20px rgba(0,0,0,0.15);
}
.team-img {
    width: 120px;
    height: 120px;
    object-fit: cover;
    border: 4px solid #32CD32;
}
.social-links a {
    color: #006400;
    font-size: 1.2rem;
    margin: 0 5px;
    transition: color 0.3s;
}
.social-links a:hover {
    color: #32CD32;
}
</style>
@endsection