<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>@yield('title', 'default title')</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="{{URL::asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="{{URL::asset('css/mdb.min.css')}}", rel="stylesheet"/>
    <!-- Your custom styles (optional) -->
    <link href="{{URL::asset('css/style.css')}}", rel="stylesheet"/>
</head>

<body>
<div class="container">
    <header>
        <img src="{{URL::asset('img/easi.png')}}" id="logo"/>
        <nav>
            <ul class="nav md-tabs nav-justified light-blue lighten-1 mx-0 mb-5 mt-3 p-2">
                <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="/players">Show Players</a></li>
                <li class="nav-item"><a class="nav-link" href="/players/create">Create Player</a></li>
                <li class="nav-item"><a class="nav-link" href="/contact">Contact</a></li>
                @guest
                    <li class="nav-item"><a class="nav-link" href="/login">Login</a></li>
                    <li class="nav-item"><a class="nav-link" href="/register">Register</a></li>
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
        </nav>
    </header>
        @yield('headerTitle')
        @yield('content')
    </div>
<script type="text/javascript" src="{{URL::asset('js/jquery-3.3.1.min.js')}}"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="{{URL::asset('js/popper.min.js')}}"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="{{URL::asset('js/bootstrap.min.js')}}"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="{{URL::asset('js/mdb.js')}}"></script>

<!-- not bootstrap -->
<script type="text/javascript" src="{{URL::asset('js/nav.js')}}"></script>
</body>
</html>