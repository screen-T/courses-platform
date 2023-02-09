<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{url('css/Style.css')}}">
    <link rel="stylesheet" href="{{url('css/bootstrap.min.css')}}"> @yield('head')
  </head>
  <body class="container-fluid">
    <div class="navbarv2">

    
    <div class="d-xl-none mobile-navbar">
      <button class="btn-open " id="open">
        <img class="btn-open-image" src="{{url('image/menu.png')}}" alt="openbar">
      </button>
      <div class="">
        <ul class="navbar-content content-old">
          <li class="nav-mobile-item">
            <a href="{{route('welcome')}}" class="nav-mobile-element" id=""> Home </a>
          </li>
          <li class="nav-mobile-item">
            <a href="{{route('welcome')}}#about" class="nav-mobile-element" id=""> About us </a>
          </li>
          <li class="nav-mobile-item">
            <a href="{{route('welcome')}}#about" class="nav-mobile-element" id=""> About us </a>
          </li>
          <li class="nav-mobile-item">
            <a href="{{route('course.index')}}" class="nav-mobile-element" id=""> Courses </a>
          </li>
          <li class="nav-mobile-item">
            <a href="{{route('info')}}" class="nav-mobile-element" id=""> Info </a>
          </li>
          <li class="nav-mobile-item">
            <a href="{{route('contact')}}" class="nav-mobile-element" id=""> Contact us </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="d-none d-xl-block">
      <div class="row">
        <div class="input-position-group">
          <nav class="nav mt-4">
            <a href="{{route('welcome')}}" class="nav-element" id=""> Home </a>
            <a href="{{route('welcome')}}#about" class="nav-element" id=""> About us </a>
            <a href="{{route('course.index')}}" class="nav-element" id=""> Course </a>
            <a href="{{route('info')}}" class="nav-element" id=""> Info </a>
            <a href="{{route('contact')}}" class="nav-element" id=""> Contact us </a> @guest @if (Route::has('login')) <a class="nav-element" href="{{ route('login') }}">{{ __('Login') }}</a> @endif @if (Route::has('register')) <a class="nav-element" href="{{ route('register') }}">{{ __('Register') }}</a> @endif @else <a id="navbarDropdown" class="nav-element" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
              {{ Auth::user()->name }}
            </a>
            <a class="nav-element" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
              {{ __('Logout') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none"> @csrf </form>
            </li> @endguest
          </nav>
          </nav>
          <div class="offset-1 mt-5">
            <input class="nav-element rechercher icon" type="text" name="" id="" placeholder="type to search..">
          </div>
        </div>
      </div>
    </div>
  </div>
    <div class="">
      <div class=""> @yield('content') </div>
    </div>
    @section('footer')
      @include('layouts.footer')
    @show
    
    <script src="{{url('js/main.js')}}"></script>
  </body>
</html>