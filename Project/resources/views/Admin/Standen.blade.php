@extends('layouts.layout')


@section('content')

<!--navigatie-->
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
<!--end navigatie-->

<div class="container-fluid">
    <div class="row">
        <div class="col">
            <h1 class="h1tekst">Pas de score aan</h1>
        </div>
    </div>
    <div class="row">
            <div class="col">
                <select>
                    @foreach($wedstrijden as $wedstrijd)
                    <option value="{{ $wedstrijd->WedstrijdID }}" >{{ $wedstrijd->WedstrijdID }}</option>
                    @endforeach
                </select>
            </div>
        </div>
    <div class="row">
        <div class="col">
            <h6>Team 1 score:</h6>
            @foreach($wedstrijden as $team1)
            <input name="TeamThuisScore" id="TeamThuisScore" value="{{ $team1->TeamThuisScore }}">
            @endforeach
        </div>
        <div class="col">
            <h6>Team 2 score:</h6>
            @foreach($wedstrijden as $team2)
            <input name="TeamUitScore" id="TeamUitScore" value="{{ $team2->TeamUitScore }}">
            @endforeach
        </div>
    </div>
    <div class="row">
        <div class="col">
        <a href="/wedstrijd/scoreupdate/{{ $team1->TeamThuisScore }}">
                <button >Update</button>
            </a>
        </div>
    </div>
</div>


@endsection
