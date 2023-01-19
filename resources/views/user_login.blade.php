@extends('navbar')

@section('content')

<div class="login-form">
    <form action="{{route('login_logic')}}" method="POST"">
        @csrf
        <h2 class="text-center">Login</h2>
        @if(session('error'))
            <div class="alert alert-danger">
            <b>Opps!</b> {{session('error')}}
            </div>
        @endif
        <div class="form-group">
            <label for="">Email</label>
            <input type="email" name="email" class="form-control" placeholder="Enter Your Email" required>
        </div>
        <div class="form-group">
            <label for="">Password</label>
            <input type="password" name="password" class="form-control" placeholder="Enter Your Password" required>
        </div>
        <div class="clearfix">
            <label for="float-left form-check-label">
                <input type="checkbox" name="remember" value="1">
                 Remember me
            </label>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">Log in</button>
        </div>
    </form>
    <p class="text-center">
        Don't have an account?
        <a href="{{route('register_form')}}"><u>Register Here</u></a>
    </p>
</div>

@endsection
