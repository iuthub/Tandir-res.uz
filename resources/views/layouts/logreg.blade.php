<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Tandir') }}</title>

    <!-- Scripts -->
   

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/loginForm.css') }}" rel="stylesheet">
    <!-- <link href="{{ asset('css/newStyle.css') }}" rel="stylesheet"> -->
</head>
<body>
    <div class="navbar">
            <!-- Authentication Links -->
            @auth

            @endauth
            @guest
                @if (Route::has('register'))
                  <a class="dropdown-item" href="{{ url('/dashboard') }}">Register</a>
                @endif
            @else
            this is navbar
                 <a class="dropdown-item" href="{{ url('/dashboard') }}">Dashboard</a>
                <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            @endguest

    </div>    
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
