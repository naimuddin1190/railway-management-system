@extends('layouts.app')
@section('title','Register')
@section('content')
<div class="row justify-content-center">
<div class="col-md-6">
<div class="card shadow-sm">
<div class="card-body">
<h3 class="mb-3">Create Account</h3>
<form>
<div class="row g-3">
<div class="col-md-6"><label class="form-label">Name</label><input class="form-control"></div>
<div class="col-md-6"><label class="form-label">Phone</label><input class="form-control"></div>
<div class="col-md-6"><label class="form-label">Email</label><input class="form-control" type="email"></div>
<div class="col-md-6"><label class="form-label">Password</label><input class="form-control" type="password"></div>
</div>
<div class="d-grid mt-3"><button class="btn btn-primary">Register</button></div>
</form>
</div>
</div>
</div>
</div>
@endsection