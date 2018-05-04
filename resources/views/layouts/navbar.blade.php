@extends('welcome')
@section('navbar')
<!-- Image and text -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
          <a class="navbar-brand" href="{{url('/')}}">
            <img src="{{url('../images/splash.jpg')}}" width="30" height="30" class="d-inline-block align-top" alt="">
            Berozgaar
          </a>
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/about')}}">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('/contact')}}">Contact</a>
          </li>
          <li class="nav-item">
          <div class="form-inline my-2 my-lg-0">
              @if (Route::has('login'))

                      @auth
                          <a class="nav-link" href="{{ url('/home') }}">Home</a>
                      @else
                          <a class="nav-link" href="{{ route('login') }}">Login</a>
                          <a class="nav-link" href="{{ route('register') }}">Register</a>
                      @endauth

              @endif
          </div>
          </li>
        </ul>
      </div>
    </nav>
@endsection
