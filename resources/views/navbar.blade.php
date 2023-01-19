@include('head')

<nav class="navbar navbar-expand-lg navbar-light bg-light mb-3">
    <div class="container">
    <a class="navbar-brand" href="{{ route('home') }}"><strong>Barbatos Shop</strong></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
            Category
          </a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="/category/1">Beauty</a>
            <a class="dropdown-item" href="/category/2">Camera</a>
            <a class="dropdown-item" href="/category/3">Books</a>
          </div>
        </li>
        @if (Auth::user() && Auth::user()->role == 'administrator')
        <li class="nav-item">
              <a class="nav-link" href="{{ route('manage_product') }}">Manage Product</a>
        </li>
        @endif
      </ul>
      <ul class="nav navbar-nav">
        @if ( auth()->check() )
        @if (Auth::user() && Auth::user()->role == 'registered')
        <a class="btn btn-secondary" href="{{route('cart')}}" role="button"><i class="fa fa-shopping-cart"></i></a>
        @endif
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                    {{Auth::user()->name}}
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="{{ route('profile') }}">Profile</a>
                    @if (Auth::user()->role == 'registered')
                        <a class="dropdown-item" href="{{ route('history') }}">History</a>
                    @endif
                    <a class="dropdown-item" href="{{ route('logout_logic') }}">Logout</a>
                </div>
            </li>
        @else
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login_user') }}">Log In</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('register_form') }}">Register</a>
            </li>
        @endif
      </ul>
    </div>
    </div>
</nav>

<div class="container">
    @yield('content')
</div>
