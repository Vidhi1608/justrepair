<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://unpkg.com/bootstrap-show-password@1.2.1/dist/bootstrap-show-password.min.js"></script>    {{-- <title>{{ config('app.name', 'Laravel') }}</title> --}}
    <title>JustRepairIt</title>
    <link rel="icon" href="{{url('images/fevicon.png')}}">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        .btn-success {
            border-radius: 50%;
            background-color: #419eaa!important;
            width: 40px;
            font-size: 15px;
            font-weight: bold;
            border: none; 
        }
        .btn-success:hover {
            color: #fcc71f!important;
            box-shadow: 0px 5px 16px 0px rgba(0,0,0,0.2);
        }
        .card-header {
            background-color: #419eaa;
            color: white;
            font-size: 20px;
            font-weight: bold;
        }
        .btn-primary{
            background-color: #fcc71f;
            color: black;
            text-transform: uppercase;
            border-radius: 0!important;
            font-size: .8em!important;
            padding: 12.8px 24px!important;
            padding: 0.8rem 1.5rem!important;
            font-weight: 600!important;
            border: none;
            clip-path: polygon(100% 0%, 100% 74%, 49% 96%, 0 75%, 0 0);
        }
        .btn-primary:hover {
            color: white;
            background-color: #419eaa;
        }
        .bg-greeen {
            background-color: #419eaa!important;

        }
        .card {
            border: none;
            border-radius: 10px;
            
        }
        .card-header {
             clip-path: polygon(100% 0%, 100% 74%, 49% 96%, 0 75%, 0 0);
        }
        .fa-lg {
            color: #419eaa;
        }
        .fa-lg:hover {
            color: #fcc71f;
            transition: .2s ease-in-out;
        }
    </style>
</head>
<body style="background-color: white">
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-transparent">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{-- {{ config('app.name', 'Laravel') }} --}}
                    <img src="{{url('images/justrepairit-logo.png')}}" height="80" width="140">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link btn btn-success btn-sm text-white" href="{{ route('login') }}" title="SignIn"><i class="fas fa-sign-in-alt"></i></a>
                            </li>
                            {{-- @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif --}}
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
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
    {{-- <footer>
        <div class=" bg-greeen text-center p-2">
    
            <span class="">©<script>document.write(new Date().getFullYear());</script> | made with love by <a class="text-decoration-none text-light" href="https://nocat.tech"> nocat technologies pvt. ltd.</a> | Powered by justrepairit</span>
       
       </div>
    </footer> --}}
    <script type="text/javascript">
        $("#password").password('toggle');
    </script>
</body>
</html>
