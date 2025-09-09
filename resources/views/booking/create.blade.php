@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h3>Booking for: {{ $schedule->train->name }} ({{ $schedule->run_date->format('Y-m-d') }})</h3>

    <form id="bookingForm" action="{{ route('booking.store') }}" method="post">
        @csrf
        <input type="hidden" name="schedule_id" value="{{ $schedule->id }}">
        <input type="hidden" name="payment_method" id="payment_method">
        <input type="hidden" name="total_price" id="total_price">
        <input type="hidden" name="journey_date" value="{{ $prefilledDate ?? $schedule->run_date->format('Y-m-d') }}">

        <div class="mb-3">
            <label>Main Passenger Name</label>
            <input name="name" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Main Passenger Phone</label>
            <input name="phone" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Class</label>
            <select name="class" id="classSelect" class="form-select" required>
                <option value="">Select Class</option>
                <option @if(isset($prefilledClass) && $prefilledClass=='AC') selected @endif>AC</option>
                <option @if(isset($prefilledClass) && $prefilledClass=='Berth') selected @endif>Berth</option>
                <option @if(isset($prefilledClass) && $prefilledClass=='Shovon') selected @endif>Shovon</option>
                <option @if(isset($prefilledClass) && $prefilledClass=='Shovon Chair') selected @endif>Shovon Chair</option>
                <option @if(isset($prefilledClass) && $prefilledClass=='First Class') selected @endif>First Class</option>
            </select>
        </div>

        <div class="mb-3">
            <label>Passengers</label>
            <input type="number" id="passengers" name="passengers" value="0" class="form-control" min="0" required>
        </div>

        <!-- Price Display -->
        <div class="mb-3">
            <label>Total Price:</label>
            <input type="text" id="priceDisplay" class="form-control" value="0 Taka" readonly>
        </div>

        <!-- Extra Passenger Info -->
        <div id="extraPassengers"></div>

        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#paymentModal">Confirm Booking</button>
        <a href="{{ url()->previous() }}" class="btn btn-danger">Cancel</a>
    </form>
</div>

<!-- Payment Modal -->
<div class="modal fade" id="paymentModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content p-3">
      <div class="modal-header">
        <h5 class="modal-title">Select Payment Method</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <div class="d-flex flex-wrap gap-3">
          <div class="payment-card" data-method="bKash">
            <img src="{{ asset('images/payment/bkash.png') }}" alt="bKash" class="payment-logo">
            <span>bKash</span>
          </div>
          <div class="payment-card" data-method="Nagad">
            <img src="{{ asset('images/payment/nagad.png') }}" alt="Nagad" class="payment-logo">
            <span>Nagad</span>
          </div>
          <div class="payment-card" data-method="Rocket">
            <img src="{{ asset('images/payment/rocket.png') }}" alt="Rocket" class="payment-logo">
            <span>Rocket</span>
          </div>
          <div class="payment-card" data-method="Upay">
            <img src="{{ asset('images/payment/upay.png') }}" alt="Upay" class="payment-logo">
            <span>Upay</span>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <button type="button" id="confirmPayment" class="btn btn-primary">Proceed</button>
      </div>
    </div>
  </div>
</div>

<style>
.payment-card {
    border: 2px solid #ddd;
    border-radius: 10px;
    padding: 10px;
    text-align: center;
    cursor: pointer;
    width: 100px;
    transition: 0.3s;
}
.payment-card:hover {
    border-color: #0d6efd;
    background-color: #f0f8ff;
}
.payment-card.selected {
    border-color: #0d6efd;
    background-color: #e7f1ff;
}
.payment-logo {
    width: 50px;
    height: 50px;
    margin-bottom: 5px;
}
.extra-passenger {
    border: 1px dashed #ccc;
    padding: 10px;
    margin-bottom: 10px;
    border-radius: 8px;
}
</style>

<script>
const ticketPrice = 200;
const passengersInput = document.getElementById('passengers');
const priceDisplay = document.getElementById('priceDisplay');
const totalPriceHidden = document.getElementById('total_price');
const extraPassengersDiv = document.getElementById('extraPassengers');

function updatePrice() {
    const count = parseInt(passengersInput.value) || 0;
    const total = count * ticketPrice;
    priceDisplay.value = total + " Taka";
    totalPriceHidden.value = total;

    // Clear previous extra passenger fields
    extraPassengersDiv.innerHTML = '';

    if(count > 1){
        for(let i=2; i<=count; i++){
            const html = `
                <div class="extra-passenger">
                    <label>Passenger ${i} Name</label>
                    <input type="text" name="passenger_names[]" class="form-control" required>

                    <label class="mt-2">Passenger ${i} Phone</label>
                    <input type="text" name="passenger_phones[]" class="form-control" required>
                </div>
            `;
            extraPassengersDiv.insertAdjacentHTML('beforeend', html);
        }
    }
}

passengersInput.addEventListener('input', updatePrice);
updatePrice(); // initial

// Payment selection
document.querySelectorAll('.payment-card').forEach(card => {
    card.addEventListener('click', function(){
        document.querySelectorAll('.payment-card').forEach(c => c.classList.remove('selected'));
        this.classList.add('selected');
        document.getElementById('payment_method').value = this.getAttribute('data-method');
    });
});

// Confirm payment
document.getElementById('confirmPayment').addEventListener('click', function(){
    const form = document.getElementById('bookingForm');
    if(!form.name.value || !form.phone.value || !form.class.value || !passengersInput.value){
        alert("Please fill all main booking details.");
        return;
    }
    if(!document.getElementById('payment_method').value){
        alert("Please select a payment method.");
        return;
    }
    if(passengersInput.value == 0){
        alert("Please select at least 1 passenger.");
        return;
    }

    // Check extra passenger fields
    const extraNames = form.querySelectorAll('input[name="passenger_names[]"]');
    const extraPhones = form.querySelectorAll('input[name="passenger_phones[]"]');
    for(let i=0;i<extraNames.length;i++){
        if(!extraNames[i].value || !extraPhones[i].value){
            alert("Please fill all extra passenger details.");
            return;
        }
    }

    form.submit();
});
</script>
@endsection
