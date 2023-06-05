<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
  
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
  
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <link rel="stylesheet" href="{{ URL::asset('css/style.css'); }} ">

    <title>PT ANEKA REGALINDO</title>
  
    <link rel="icon" href="{{url('client/images/logo-aneka.ico')}}">
</head>
<body onload="load()">
    <div id="app">
        <nav class="navbar fixed-top navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img style="width: 300px" src="{{url('client/images/logo-regalindo.png')}}" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
  
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
  
                    </ul>
  
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                            <li><a class="nav-link" href="/">Home</a></li>
                            <li><a class="nav-link" href="/wood">Wood Department</a></li>
                            <li><a class="nav-link" href="/rattan">Rattan Department</a></li>
                            <li><a class="nav-link" href="/outdoor">Outdoor Department</a></li>
                            <li><a class="nav-link" href="/facility">Facilities</a></li>
                            <li><a class="nav-link" href="/product">Products Gallery</a></li>
                    </ul>
                </div>
            </div>
        </nav>
  
        <main>
            <div class="container-fluid">
                                @yield('content')
            </div>
        </main>
          
    </div>
</body>
</html>