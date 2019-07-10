<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"> -->

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
        body {
            background: #ECE9E6;
            /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #FFFFFF, #ECE9E6);
            /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #FFFFFF, #ECE9E6);
            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        }

    </style>

</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

                <a class="navbar-brand" href="{{ url('/home') }}">
                    E-Learning System
=======
                <a class="navbar-brand" href="{{ url('/') }}">
<<<<<<< HEAD
=======
                <a class="navbar-brand" href="{{ url('/home') }}">
>>>>>>> [SELS-TASK] User Profile Page
=======
                <a class="navbar-brand" href="{{ url('/home') }}">
>>>>>>> [SELS-TASK] User Profile Page
=======
                <a class="navbar-brand" href="{{ url('/dashboard') }}">
>>>>>>> [SELS-TASK] User Dashboard
=======
>>>>>>> [SELS-TASK] User Registration, Login, and Logout

                    E-Learning System


<<<<<<< HEAD
>>>>>>> [SELS-TASK] User Registration, Login, and Logout
=======

                @guest
                <a class="navbar-brand" href="{{ url('/') }}">
<<<<<<< HEAD
                @else
                <a class="navbar-brand" href="{{ url('/dashboard') }}">
                @endguest
                    E-Learning System
>>>>>>> [SELS-TASK] User Dashboard
=======
=======
                <a class="navbar-brand" href="{{ url('/home') }}">
>>>>>>> [SELS-TASK] User Profile Page
=======
                <a class="navbar-brand" href="{{ url('/dashboard') }}">
>>>>>>> [SELS-TASK] User Dashboard

                    E-Learning System


>>>>>>> [SELS-TASK] User Registration, Login, and Logout
=======
>>>>>>> [SELS-TASK] User Registration, Login, and Logout
                </a>

=======
=======
>>>>>>> [SELS-TASK] User Edit Page and Home Page
            
=======

>>>>>>> [SELS-TASK] Relationships WIP
                @guest
                <a class="navbar-brand" href="{{ url('/') }}">E-Learning System</a>
                @else
                <a class="navbar-brand" href="{{ url('/dashboard') }}">E-Learning System</a>
                @endguest
<<<<<<< HEAD
            
<<<<<<< HEAD
>>>>>>> [SELS-TASK] User Edit Page and Home Page
=======
>>>>>>> [SELS-TASK] User Edit Page and Home Page
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
=======

                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
>>>>>>> [SELS-TASK] Relationships WIP
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                    
                    @guest 
                    @else
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="#">Categories</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/users">Users</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Disabled</a>
                            </li>
                        </ul>
                    @endguest
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                        @endif
                        @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->username }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="/users/{{ Auth::id() }}">
                                    Profile
                                </a>

<<<<<<< HEAD
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                                    <a class="dropdown-item" href="/users/{{ Auth::id() }}">
=======
                                    <a class="dropdown-item" href="#">
>>>>>>> [SELS-TASK] User Registration, Login, and Logout
=======
                                    <a class="dropdown-item" href="/users/{{ Auth::id() }}">
>>>>>>> [SELS-TASK] User Profile Page
=======
                                    <a class="dropdown-item" href="#">
>>>>>>> [SELS-TASK] User Registration, Login, and Logout
=======
                                    <a class="dropdown-item" href="/users/{{ Auth::id() }}">
>>>>>>> [SELS-TASK] User Profile Page
                                        Profile
                                    </a>

                                    <a class="dropdown-item" href="/users/{{ Auth::id() }}/edit">
                                        Edit Profile
                                    </a>

=======
                                    <a class="dropdown-item" href="#">
=======
                                    <a class="dropdown-item" href="/users/{{ Auth::id() }}">
>>>>>>> [SELS-TASK] User Profile Page
                                        Profile
                                    </a>

<<<<<<< HEAD
>>>>>>> [SELS-TASK] User Registration, Login, and Logout
=======
                                    <a class="dropdown-item" href="/users/{{ Auth::id() }}/edit">
                                        Edit Profile
                                    </a>

>>>>>>> [SELS-TASK] User Edit Page and Home Page
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
=======
                                <a class="dropdown-item" href="/users/{{ Auth::id() }}/edit">
                                    Edit Profile
                                </a>

                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
>>>>>>> [SELS-TASK] Relationships WIP
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>

</html>
