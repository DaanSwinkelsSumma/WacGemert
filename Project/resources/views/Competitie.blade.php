@extends('layouts.layout')

@section('content')
       

        <div class="container">
        <br>
            <div class="row">
                <div class="col">
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
            @foreach ($wedstrijden as $wedstrijd)
                <a href="">
                    <div class="row wedstrijd wedstrijdteam">
                        <div class="col"><h6>{{ $wedstrijd->TeamUit }}</h6></div>
                        <div class="col"><h6>VS</h6></div>
                        <div class="col"><h6>{{ $wedstrijd->TeamThuis }}</h6></div>
                    </div>
                </a>
            <br>
            @endforeach
        </div>
@endsection