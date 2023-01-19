@extends('navbar')

@section('content')
<div class="col d-flex justify-content-center">
<div class="card w-50 mt-3">
<h2 class="card-header text-center">Profile</h2>
        <div class="card-body col-sm-12 mx-auto">
            <label for="">Name</label>
            <input type="text" name="name" class="form-control text-capitalize" placeholder="{{ Auth::user()->name }}" readonly>
        </div>
        <div class="card-body col-sm-12 mx-auto">
            <label for="">Email</label>
            <input type="text" name="email" class="form-control" placeholder="{{ Auth::user()->email }}" readonly>
        </div>
        <div class="card-body col-sm-12 mx-auto">
            <label for="">Gender</label>
            <input type="text" name="gender" class="form-control text-capitalize" placeholder="{{ Auth::user()->gender }}" readonly>
        </div>
        <div class="card-body col-sm-12 mx-auto">
            <label for="">Date of Birth</label>
            <input type="text" name="date_of_birth" class="form-control" placeholder="{{ Auth::user()->date_of_birth }}" readonly>
        </div>
        <div class="card-body col-sm-12 mx-auto">
            <label for="">Country</label>
            <input type="text" name="email" class="form-control text-capitalize" placeholder="{{ Auth::user()->country }}" readonly>
        </div>
</div>
</div>
@endsection
