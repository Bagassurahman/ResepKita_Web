<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Poppins', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
            scroll-behavior: smooth;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
        .navbar .navbar-nav .active .nav-link{
            font-weight: 900;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
        <a class="navbar-brand" href="#">
            <img class="img-fluid" src="{{asset('img/logo.png')}}" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item mr-3 {{ request()->is('/*') ? ' active' : '' }}">
              <a class="nav-link" href="{{ url('/') }}">Home</a>
            </li>
            <li class="nav-item mr-3 {{ Request::segment(1) === 'resep' ? 'active' : null }}" >
              <a class="nav-link" href="{{ url('resep') }}">Resep</a>
            </li>
            <li class="nav-item mr-3 {{ Request::segment(1) === 'contact' ? 'active' : null }}">
              <a class="nav-link" href="{{ url('contact') }}">Contact</a>
            </li>

            <div class="nav-item">
                @if (Route::has('login'))
                    <div class="top-right links">
                        @auth
                            {{-- <a href="{{ url('/home') }}">{{ __('Dashboard') }}</a> --}}
                            <li class="dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <span><i class="far fa-user-circle"></i></span>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ url('/home') }}">
                                        {{ __('Dashboard') }}
                                    </a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @else
                            <a href="{{ route('login') }}">Login</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif
            </div>
          </ul>
        </div>
      </nav>

      <script> (function (d, w, c) { if(!d.getElementById("spd-busns-spt")) { var n = d.getElementsByTagName('script')[0], s = d.createElement('script'); var loaded = false; s.id = "spd-busns-spt"; s.async = "async"; s.setAttribute("data-self-init", "false"); s.setAttribute("data-init-type", "opt"); s.src = 'https://cdn.freshbots.ai/assets/share/js/freshbots.min.js'; s.setAttribute("data-client", "dd27e9e1454ccd042eaaf7fead92cb241a7e1eb6"); s.setAttribute("data-bot-hash", "1a53e992657fb7688c4153c22c2bd0e3f5d069a4"); s.setAttribute("data-env", "prod"); s.setAttribute("data-region", "us"); if (c) { s.onreadystatechange = s.onload = function () { if (!loaded) { c(); } loaded = true; }; } n.parentNode.insertBefore(s, n); } }) (document, window, function () { Freshbots.initiateWidget({ autoInitChat: false, getClientParams: function () { return ; } }, function(successResponse) { }, function(errorResponse) { }); }); </script>
      <script>
        AOS.init();
      </script>
    </body>
</html>
