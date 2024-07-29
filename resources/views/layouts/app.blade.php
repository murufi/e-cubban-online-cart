<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <title>@yield('title', 'E-Cubana OnlineStore')</title>

    <!-- Fonts -->
    {{-- <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet"> --}}

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/main.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <a class="navbar-brand" href="#">E-Cubbana Online Store</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Contact Us</a>
                    </li>
                    {{-- <div class="vr bg-white mx-2 d-none d-lg-block"></div>
                    @guest
                        <a class="nav-link active" aria-current="page" href="{{ route('login') }}">Loging</a>
                        <a class="nav-link active" aria-current="page" href="{{ route('register') }}">Register</a>
                    @else
                        <form id="logout" action="{{ route('logout') }}" method="POST">
                            <a role="button" class="nav-link active" onclick="document.getElementById('logout').submit();">
                                Logout </a>
                            @csrf
                        </form>
                    @endguest
            </div> --}}
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Products
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">All</a></li>
                            <li><a class="dropdown-item" href="#">Foods</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Drinks</a></li>
                            <li><a class="dropdown-item" href="#">Rooms</a></li>
                        </ul>
                    </li>
                    @guest
                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="{{ route('register') }}">Register</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('login') }}">Login</a>
                        </li>
                    @else
                        <form action="{{ route('logout') }}" method="POST" id="logout">
                            <li class="nav-item">
                                <a class="nav-link active" role="button"
                                    onclick="document.getElementById('logout').submit();">Logout</a>
                            </li>
                            @csrf
                        </form>
                    @endguest
                    {{-- <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li> --}}
                </ul>
                <form class="d-flex">

                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <header class="masthead bg-primary text-white text-center py-4">
        <div class="container d-flex align-items-center flex-column">
            {{-- <h1>@yield('OnlineStore', 'Store - Home Page')</h1> --}}
            <h2> @yield('subtitle', 'E-Cubbana Online Store') </h2>
        </div>
        <div class="header__inner">
            <h4 class="logo">Welcome To e-cubana</h4>
            <p>Order Now</p>
        </div>
    </header>


    <div class="container mg-4">

        <div class="menu-list">
            @yield('content')
        </div>
    </div>


    <footer class="footer">
        <div class="footer__inner">
            <div class="content">
                <h3>e-cubana</h3>
                <p>
                    All Rights Reserved
                </p>
            </div>
        </div>
    </footer>
</body>

</html>
