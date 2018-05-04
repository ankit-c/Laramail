<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <!-- Styles -->
        <style>
                ul {
                        list-style-type: none;
                    }
                li a{
                    color: #000;
                }
                .nav>li {
                  position: relative;
                  display: inline-block;

                }
                .navbar-nav {
                  flex-direction: row;
                }
                .nav-link {
                    padding-right: .5rem !important;
                     padding-left: .5rem !important;
                }
                textarea {
                  height: 150px;
                }
                header {
                    position: relative;
                    top: -20px;
                    /* background-color: #00CDCD; */
                }

        </style>
    </head>
    <body>

        <nav class="navbar navbar-expand-lg sticky-top navbar-light bg-light">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
              <a class="navbar-brand" href="{{url('/')}}">
                <img src="{{url('../images/splash.jpg')}}" width="30" height="30" class="d-inline-block align-top" alt="">
                Berozgaar
              </a>
            <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="{{ url('/email')}}">Send Email</a>
              </li>
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
        @yield('content')
        <!--JavaScripts-->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>
