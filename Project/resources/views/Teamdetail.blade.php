@extends('layouts.layout')

@section('content')
    <div class="container ">
        <br>
        <div class="row teamdetail">
            <div class="col teamimg">
                <img src="/storage/{{ $team->TeamID }}.jpg" height="400" width="650" />
            </div>

            <div class="col teamimg">
                <h2>{{ $team->TeamNaam}}</h2>
                <br>
                <h5>{{ $team->TeamID}}</h5>
                <br>
                <h5>{{ $team->Klasse}}</h5>
                <br>
                <a href="/Teams/aanpassen/{{$team->TeamID}}">
                    <p class="btn btn-primary">Aanpassen</p>
                </a>
            </div>
        </div>
    </div>
@endsection