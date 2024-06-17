<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

</head>
<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg" data-bs-theme="dark">
            <div class="container-fluid">
                <a class="navbar-brand z-2" href="{{ route('guest.index') }}">
                    <!-- <img src="{{ asset('assets/images/logo.png') }}" alt="Logo" class="logo"> -->
                    <img src="{{ asset('assets/images/Logo2.svg') }}" alt="Logo" class="logo ">
                </a>
                <button class="navbar-toggler z-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-between" id="navbarNavAltMarkup">
                    <div class="navbar-nav col-6 menu z-2">
                        <a class="nav-link active" href="#">About</a>
                        <a class="nav-link active" href="#">Games</a>
                        <a class="nav-link active" href="#">Contact</a>
                        <a class="nav-link active" href="#">Community</a>
                    </div>
                    <div class="col-4 ">
                            <form class="d-flex" role="search">
                                <input class="form-control searh" type="search" id="search" name="search" placeholder="Search" aria-label="Search">
                                <div class="searhc-icon"><i class="fa-solid fa-magnifying-glass text-white icons"></i></div>
                            </form>
                        </div>
                        <div class="navbar-nav logaut z-3" >
                          <a href="/login" class="nav-link active log-in"><i class="fa-solid fa-right-to-bracket mr-1"></i>Log In</a>
                          <a href="/register" class="nav-link active register"><i class="fa-solid fa-address-card"></i>Register</a>
                        </div> 
                </div>
            </div>
        </nav>
    </div>

    @yield('content')

    <footer mt-5 p-5 text-white d-flex align-center justify-content-center bg-card>
        <div class="footer">        
        <div class="row">
        <ul>
        <li><a href="#">About</a></li>
        <li><a href="#">Games</a></li>
        <li><a href="#">Privacy Policy</a></li>
        <li><a href="#">Terms & Conditions</a></li>
        <li><a href="#">Contact Us</a></li>
        <li><a href="#">Comunity</a></li>
        </ul>
        </div>
        <p class="my-5 text-white">
            LvlUp Copyright © 2024 LvlUp - All rights reserved || Elaborat de Marius
        </p>
        </div>
        </footer>
</body>
</html>
