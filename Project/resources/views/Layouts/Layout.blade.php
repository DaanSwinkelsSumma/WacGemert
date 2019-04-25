<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Wac-Gemert</title>

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

    <style>
        h1{
            margin-top: 10px;
            margin-bottom: 249px;
        }
    </style>
</head>

<body>
    <!-- Navigatie -->
    <nav class="navbar navbar-expand-lg navigatie">
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
                    <a class="nav-link navigatie-tekst" href="/Beker">Beker</a>
                </li>
                <li class="nav-item navblock">
                    <a class="nav-link navigatie-tekst" href="/Teams">Teams</a>
                </li>
                <li class="nav-item navblock">
                    <a class="nav-link navigatie-tekst" href="/Organisatie">Organisatie</a>
                </li>
                <li class="nav-item navblock">
                    <a class="nav-link navigatie-tekst" href="/Historie">Historie</a>
                </li>
                <li class="nav-item navblock">
                    <a class="nav-link navigatie-tekst" href="/Sponsors">Sponsors</a>
                </li>
                <li class="nav-item navblock">
                    <a class="nav-link navigatie-tekst" href="/CMS">CMS</a>
                </li>
            </ul>
        </div>

        <div class="top-right">
            <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link navigatie-tekst" href="/Profiel">Profiel</a>
            </li>
            </ul>
            </div>

        @if (Route::has('login'))
            <div class="top-right links">
                @auth
                    <!-- <a href="{{ url('/home') }}">Home</a> -->
                    <!-- <div class="topnav-right">
                <li class="nav-item">
                    <a class="nav-link" href="/Profiel">Profiel</a>
                </li>
                </div> -->
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
            <!-- <p>Copyright WAC Gemert, Cis Slits, Freek vd Wijdeven ©2006-2019</p> -->
            <!-- <p class="footer-links">
                    <a href="/home" aria-label="Home" class="footernavhover">Home</a>
                    ·
                    <a href="/overons" aria-label="Competitie" class="footernavhover">Competitie</a>       
                    ·
                    <a href="/overzicht" aria-label="Overzicht " class="footernavhover">Beker</a>
                    ·
                    <a href="/profiel" aria-label="Profiel" class="footernavhover">Teams</a>
                    ·
                    <a href="/profiel" aria-label="Profiel" class="footernavhover">Organisatie</a>
                    ·
                    <a href="/profiel" aria-label="Profiel" class="footernavhover">Historie</a>
                    ·
                    <a href="/profiel" aria-label="Profiel" class="footernavhover">Sponsors</a>
                </p> -->
        </div>
        <div class="footer-center">
            <div>
                <i class="fas fa-map-marker-alt"></i>
                <a target="blank" aria-label="Locatie"
                    href="https://www.google.nl/maps/place/Panovenweg+20,+5708+HR+Helmond/@51.4738781,5.6267348,17z/data=!3m1!4b1!4m5!3m4!1s0x47c7214f44307933:0x16bd59b2e5452121!8m2!3d51.4738748!4d5.6289235"
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
                <p><a href="mailto:kuijpers@kuijpers.com" aria-label="Email">info@wac-gemert.nl</a></p>
            </div>
        </div>
        <div class="footer-right">
            <div class="footer-icons">
                <a href="https://www.facebook.com/kuijpersNL/" aria-label="Facebook" target="blank"><i
                        class="fab fa-facebook-f"></i></a>
                <a href="https://twitter.com/kuijpersnl" aria-label="Twitter" target="blank"><i
                        class="fab fa-twitter"></i></a>
                <a href="https://www.youtube.com/user/KuijpersNL" aria-label="Youtube" target="blank"><i
                        class="fab fa-youtube"></i></a>
                <a href="https://nl.linkedin.com/company/kuijpers-installaties" aria-label="LinkedIn" target="blank"><i
                        class="fab fa-linkedin-in"></i></a>
                <a href="https://www.instagram.com/kuijpersnl/" aria-label="Instagram" target="blank"><i
                        class="fab fa-instagram"></i></a>
            </div>
            <div class="footer-logoff profilepage">

            </div>

        </div>
    </footer>
</body>

</html>
