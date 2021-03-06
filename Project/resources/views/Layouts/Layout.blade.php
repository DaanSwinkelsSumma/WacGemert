<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Wac-Gemert</title>

    @yield('style')
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- bootstrap - fontawesome -->
    <link rel="preload" href="{{ asset('fontawesome/css/all.min.css') }}" as="style" onload="this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" href="{{ asset('fontawesome/css/all.min.css') }}"></noscript>

    <link rel="preload" href="{{ asset('css/bootstrap.min.css') }}" as="style" onload="this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"></noscript>

    <!-- custom css -->
    <link rel="preload" href="{{ asset('css/main.css') }}" as="style" onload="this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" href="{{ asset('css/main.css') }}"></noscript>

    <link rel="preload" href="{{ asset('css/footer.css') }}" as="style" onload="this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" href="{{ asset('css/footer.css') }}"></noscript>

    
</head>

<body>
    <!-- Navigatie -->
    <nav class="navbar navbar-expand navigatie">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item navblock">
                    <a class="nav-link navigatie-tekst" href="/">Home </a>
                </li>
                <li class="nav-item navblock">
                    <a class="nav-link navigatie-tekst" href="/Competitie">Competitie</a>
                </li>
                <li class="nav-item navblock">
                    <a class="nav-link navigatie-tekst" href="/Teams">Teams</a>
                </li>
                <li class="nav-item navblock">
                    <a class="nav-link navigatie-tekst" href="/Organisatie">Organisatie</a>
                </li>
                <li class="nav-item navblock">
                    <a class="nav-link navigatie-tekst" href="/Historie">Verslagen</a>
                </li>
                <li class="nav-item navblock">
                    <a class="nav-link navigatie-tekst" href="/Sponsors">Sponsors</a>
                </li>
                <li class="nav-item navblock">
                    <a class="nav-link navigatie-tekst" href="/Standen">Standen</a>
                </li>
                
               

            </ul>
        </div>

        <div class="top-right">
            <ul class="navbar-nav">
            <li class="nav-item">
            </li>
            </ul>
            </div>

        @if (Route::has('login'))
            <div class="top-right links">
                @auth
                <a class="nav-link navigatie-tekst" href="/Profiel">Profiel</a>

                @else
                    <a class="navigatie-tekst" href="{{ route('login') }}">Login</a>

                    @if (Route::has('register'))
                        <a class="navigatie-tekst" href="{{ route('register') }}">Register</a>
                    @endif
                @endauth
            </div>
        @endif
    </nav>

    <!-- Content -->
    @yield('content')

    <!-- Footer -->
    <footer class="footer-distributed">
        <div class="footer-left">
            <a href="/home">
                <img alt="Kuijpers Logo" src="{{ asset('img/WacLogo.png') }}" class="img-fluid" id="wizlogofooter"
                    height="200" width="200">
            </a>
        </div>
        <div class="footer-center">
            <div>
                <i class="fas fa-map-marker-alt"></i>
                <a target="blank" aria-label="Locatie"
                    href="https://www.google.nl/maps/place/Zaalvoetbalvereniging+W.A.C.+Gemert/@51.5537689,5.6837826,17z/data=!3m1!4b1!4m5!3m4!1s0x47c718a3a823dad7:0xf70b5e2920d0bfd3!8m2!3d51.5537689!4d5.6859713"
                    rel="noopener">
                    <p>Gemert</p>
                </a>
            </div>
            <div>
                <i class="fas fa-phone"></i>
                <p>+1 234 567890</p>
            </div>
            <div>
                <i class="fas fa-envelope"></i>
                <p><a href="mailto:wacgemert@wacgemert.com" aria-label="Email">info@wac-gemert.nl</a></p>
            </div>
        </div>
        <div class="footer-right">
            <div class="footer-icons">
                <a href="https://nl-nl.facebook.com/WACGEMERT/" aria-label="Facebook" target="blank"><i
                        class="fab fa-facebook-f"></i></a>
            </div>
            <div class="footer-logoff profilepage">
                <a href="{{ url('/Logout') }}">
                    <button class="btn btn-secondary" > logout </button>
                </a>
            </div>

        </div>
    </footer>
    @yield('script')
</body>

</html>
