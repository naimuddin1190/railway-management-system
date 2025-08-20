@extends('layouts.app')
@section('title','Profile')
@section('content')
<div class="row justify-content-center">
<div class="col-md-8">
<div class="card shadow-sm">
<div class="card-body">
<h3 class="mb-3">Update Profile</h3>
<form>
<div class="row g-3">
<div class="col-md-6"><label class="form-label">Name</label><input class="form-control"></div>
<div class="col-md-6"><label class="form-label">Phone</label><input class="form-control"></div>
<div class="col-md-6"><label class="form-label">ID Proof Type</label><input class="form-control" placeholder="NID/Passport"></div>
<div class="col-md-6"><label class="form-label">ID Number</label><input class="form-control"></div>
<div class="col-12"><label class="form-label">Address</label><textarea class="form-control" rows="2"></textarea></div>
</div>
<div class="d-grid mt-3"><button class="btn btn-primary">Save</button></div>
</form>
</div>
</div>
</div>
</div>
@endsection