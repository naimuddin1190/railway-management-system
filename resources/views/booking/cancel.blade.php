@extends('layouts.app')

@section('title', 'Cancel Ticket')

@section('content')
<div class="container mt-5">
    <h2 class="text-center text-danger mb-4">❌ Cancel Ticket</h2>
    <form class="p-4 shadow rounded bg-light">
        <div class="form-group">
            <label>Enter Ticket ID</label>
            <input type="text" class="form-control" placeholder="Ticket ID">
        </div>
        <button type="submit" class="btn btn-danger mt-3">Cancel Ticket</button>
    </form>
</div>
@endsection