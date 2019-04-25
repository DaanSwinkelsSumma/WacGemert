@extends('layouts.layout')


@section('content')
<!-- Navigatie -->
<nav class="navbar navbar-expand-lg cmsnavigatie">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <li class="nav-item navblock">
                <a class="nav-link navigatie-tekst" href="/Standen">Standen</a>
            </li>
            <li class="nav-item navblock">
                <a class="nav-link navigatie-tekst" href="/Competitie">2</a>
            </li>
            <li class="nav-item navblock">
                <a class="nav-link navigatie-tekst" href="/Beker">3</a>
            </li>
            <li class="nav-item navblock">
                <a class="nav-link navigatie-tekst" href="/Teams">4</a>
            </li>
            <li class="nav-item navblock">
                <a class="nav-link navigatie-tekst" href="/Organisatie">5</a>
            </li>
            <li class="nav-item navblock">
                <a class="nav-link navigatie-tekst" href="/Historie">6</a>
            </li>
            <li class="nav-item navblock">
                <a class="nav-link navigatie-tekst" href="/Sponsors">7</a>
            </li>
        </ul>
    </div>
</nav>
@endsection
