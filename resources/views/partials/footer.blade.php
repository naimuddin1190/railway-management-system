<footer class="text-white py-5" style="background: linear-gradient(135deg, #0d47a1, #1976d2);">
  <div class="container">
    <div class="row">
      
      <!-- About Section -->
      <div class="col-md-4 mb-4">
        <h5 class="fw-bold mb-3">About PUC Railway</h5>
        <p>
          Premier University Railway Reservation System.<br>
          Providing reliable train schedules, fare calculation, and online booking services.
        </p>
        <p class="mb-0"><i class="bi bi-geo-alt"></i> Chattogram, Bangladesh</p>
        <p><i class="bi bi-envelope"></i> support@pucrailway.com</p>
      </div>

      <!-- Quick Links -->
      <div class="col-md-4 mb-4">
        <h5 class="fw-bold mb-3">Quick Links</h5>
        <ul class="list-unstyled">
          <li><a href="/" class="text-white text-decoration-none d-block mb-2">Home</a></li>
          <li><a href="/trains/schedule" class="text-white text-decoration-none d-block mb-2">Schedule</a></li>
          <li><a href="/fare/calculator" class="text-white text-decoration-none d-block mb-2">Fare Calculator</a></li>
          <li><a href="/contact" class="text-white text-decoration-none d-block mb-2">Contact Us</a></li>
        </ul>
        
      </div>

      <!-- Payment & Social -->
      <div class="col-md-4 mb-4">
        <h5 class="fw-bold mb-3">Payment Methods</h5>
        <div class="d-flex flex-wrap gap-3 mb-3">
          <img src="{{ asset('images/bkash.png') }}" alt="bKash" class="payment-logo">
          <img src="{{ asset('images/nagad.png') }}" alt="Nagad" class="payment-logo">
          <img src="{{ asset('images/rocket.png') }}" alt="Rocket" class="payment-logo">
          <img src="{{ asset('images/upay.png') }}" alt="Upay" class="payment-logo">
        </div>

        <h5 class="fw-bold mb-3">Follow Us</h5>
        <div class="d-flex gap-3">
          <a href="#" class="text-white fs-4 social-link"><i class="bi bi-facebook"></i></a>
          <a href="#" class="text-white fs-4 social-link"><i class="bi bi-twitter"></i></a>
          <a href="#" class="text-white fs-4 social-link"><i class="bi bi-instagram"></i></a>
          <a href="#" class="text-white fs-4 social-link"><i class="bi bi-youtube"></i></a>
        </div>
      </div>
    </div>

    <hr class="border-light">
    <p class="text-center mb-0">© {{ date('Y') }} PUC Railway. All Rights Reserved.</p>
  </div>
</footer>

<style>
  .payment-logo {
    height: 45px;   /* fixed height for better alignment */
    width: auto;    /* keeps original aspect ratio */
    transition: transform 0.3s ease;
    cursor: pointer;
  }
  .payment-logo:hover {
    transform: scale(1.1);
  }
  .social-link {
    transition: color 0.3s ease, transform 0.3s ease;
  }
  .social-link:hover {
    color: #ffeb3b; /* Yellow highlight on hover */
    transform: scale(1.2);
  }
</style>