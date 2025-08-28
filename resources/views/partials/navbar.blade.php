<nav class="navbar navbar-expand-lg navbar-dark custom-navbar fixed-top">
    <div class="container">
        <a class="navbar-brand fw-bold" href="/"><i class="bi bi-train-front-fill me-2"></i>PUC Railway</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav" aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="mainNav">
            <!-- Left Menu -->
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link" href="/"><i class="bi bi-house-door me-1"></i>Home</a></li>
                <li class="nav-item"><a class="nav-link" href="/trains/schedule"><i class="bi bi-calendar-event me-1"></i>Schedule</a></li>
                <li class="nav-item"><a class="nav-link" href="/seats/availability"><i class="bi bi-grid-3x3-gap me-1"></i>Seat Checker</a></li>
                <li class="nav-item"><a class="nav-link" href="/fare/calculator"><i class="bi bi-cash-stack me-1"></i>Fare</a></li>
                <li class="nav-item"><a class="nav-link" href="/booking/create"><i class="bi bi-ticket-perforated me-1"></i>Book</a></li>
                <li class="nav-item"><a class="nav-link" href="/booking/ticket"><i class="bi bi-receipt me-1"></i>E-Ticket</a></li>
            </ul>

            <!-- Right Menu -->
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="/login"><i class="bi bi-box-arrow-in-right me-1"></i>Login</a></li>
                <li class="nav-item"><a class="nav-link" href="/register"><i class="bi bi-person-plus me-1"></i>Register</a></li>

                <!-- Dashboard Dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dashboardDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-speedometer2 me-1"></i>Dashboards
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dashboardDropdown">
                        <li><a class="dropdown-item" href="/passenger/dashboard"><i class="bi bi-person-circle me-1"></i>Passenger</a></li>
                        <li><a class="dropdown-item" href="/admin/dashboard"><i class="bi bi-shield-lock me-1"></i>Admin</a></li>
                    </ul>
                </li>

                <!-- Contact Us -->
                <li class="nav-item"><a class="nav-link" href="/contact"><i class="bi bi-envelope-at me-1"></i>Contact Us</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- Add spacing below navbar so content is not hidden behind it -->
<div style="margin-top: 80px;"></div>

<style>
.custom-navbar {
    background: linear-gradient(90deg, #006400, #32CD32);
    box-shadow: 0 4px 8px rgba(0,0,0,0.25);
}

.custom-navbar .nav-link {
    color: #fff !important;
    font-weight: 500;
    padding: 8px 16px;
    transition: all 0.3s ease;
}

.custom-navbar .nav-link:hover {
    background: rgba(255,255,255,0.2);
    border-radius: 6px;
    transform: translateY(-2px);
    color: #fff !important;
}

.custom-navbar .dropdown-menu {
    border-radius: 8px;
    box-shadow: 0 4px 10px rgba(0,0,0,0.2);
}

.custom-navbar .dropdown-item:hover {
    background-color: #006400;
    color: #fff;
}
</style>