@extends('navbar')

@section('content')

<div class="login-form">
    @if(session('message'))
            <div class="alert alert-success">
                {{session('message')}}
            </div>
    @endif
    <form action="{{route('register_logic')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <h2 class="text-center">Register</h2>
        <div class="form-group">
            <label for="">Name</label>
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Enter Your Name" required>
            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="">Email</label>
            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Enter Your Email" required>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="">Password</label>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Enter Your Password">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="">Confirm Password</label>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password_confirmation" required autocomplete="current-password" placeholder="Re-type Your Password">
        </div>
        <div class="form-group">
            <label for="">Gender</label>
            <div class="custom-control custom-radio">
                <input type="radio" id="male" name="gender" class="custom-control-input" value="male" required>
                <label class="custom-control-label" for="male">Male</label>
              </div>
              <div class="custom-control custom-radio">
                <input type="radio" id="female" name="gender" class="custom-control-input" value="female" required>
                <label class="custom-control-label" for="female">Female</label>
              </div>
        </div>
        <div class="form-group">
            <label for="">Date of Birth</label>
            <input class="@error('date_of_birth') is-invalid @enderror" id="datepicker" width="340" name="date_of_birth" placeholder="yyyy-mm-dd" required>
            <script>
                $('#datepicker').datepicker({
                    format: "yyyy-mm-dd",
                    uiLibrary: 'bootstrap4'
                });
            </script>
            @error('date_of_birth')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="inputCountry">Country</label>
            <select id="inputCountry" name="country" class="form-control" required>
              <option selected value="indonesia">Choose a country</option>
              <option value="indonesia">Indonesia</option>
              <option value="japan">Japan</option>
              <option value="singapore">Singapore</option>
              <option value="malaysia">Malaysia</option>
              <option value="laos">Laos</option>
            </select>
          </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">Register</button>
        </div>
    </form>
    <p class="text-center">
        Have an account?
        <a href="{{route('login_user')}}"><u>Login Here</u></a>
    </p>
</div>

@endsection
