@extends('layouts.app')
@section('title','Login')
@section('content')
<div class="row justify-content-center">
<div class="col-md-5">
<div class="card shadow-sm">
<div class="card-body">
<h3 class="mb-3">Login</h3>
<form>
<div class="mb-3"><label class="form-label">Email</label><input class="form-control" type="email"></div>
<div class="mb-3"><label class="form-label">Password</label><input class="form-control" type="password"></div>
<div class="d-grid gap-2">
<button class="btn btn-primary">Login</button>
<a href="/register" class="btn btn-outline-secondary">Create account</a>
</div>
</form>
</div>
</div>
</div>
</div>
@endsection