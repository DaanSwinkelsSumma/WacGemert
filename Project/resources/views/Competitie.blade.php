@extends('layouts.layout')

@section('content')
       

        <div class="container">
        <br>
            <div class="row">
                <div class="col wedstrijdteam">
                    <a href="/Wedstrijd/newpage">
                        <button class="btn">Wedstrijd aanmaken</button>
                    </a>
                </div>
                <div class="col wedstrijdteam">
                    <h2>Competitie</h2>
                </div>
                <div class="col wedstrijdteam">
                    <a href="/Competitie/new">
                        <button class="btn">Nieuwe competitie</button>
                    </a>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col wedstrijdteam">
                    <h2>Thuis</h2>
                </div>
                <div class="col wedstrijdteam">
                </div>
                <div class="col wedstrijdteam">
                    <h2>Uit</h2>
                </div>
            </div>
            <br>
            @foreach ($wedstrijden as $wedstrijd)
                <a href="/competitie/wedstrijd/{{ $wedstrijd->WedstrijdID }}">
                    <div class="row wedstrijd wedstrijdteam">
                        <div class="col"><h6>{{ $wedstrijd->TeamThuis }}</h6></div>
                        <div class="col"><h6>VS</h6></div>
                        <div class="col"><h6>{{ $wedstrijd->TeamUit }}</h6></div>
                    </div>
                </a>
            <br>
            @endforeach
        </div>
@endsection