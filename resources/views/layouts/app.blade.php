<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{url('css/Style.css')}}">
    <link rel="stylesheet" href="{{url('css/bootstrap.min.css')}}">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body class="container-fluid">
<div class="row">
            <div class="input-position-group">
                <nav class="nav mt-4">
                    <a href="{{route('welcome')}}" class="nav-element" id="">
                        Home
                    </a>
                    <a href="{{route('about')}}" class="nav-element" id="">
                        About us 
                    </a>
                    <a href="{{route('programs')}}" class="nav-element" id="">
                        Programs
                    </a>
                    <a href="{{route('info')}}" class="nav-element" id="">
                        Info
                    </a>
                    <a href="{{route('contact')}}" class="nav-element" id="">
                        Contact us
                    </a>   
                    <div class="offset-1 mt-5">
                        <input class="nav-element rechercher icon" type="text" name="" id="" placeholder="type to search..">
                    </div>
 
                
            </div>
        </div>
    <div>

        <main class="image-home">
            @yield('content')
        </main>
    </div>
</body>
</html>
