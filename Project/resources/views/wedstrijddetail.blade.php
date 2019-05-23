@extends('layouts.layout')

@section('content')
    <div class="container">
    <br>
        <br>
        <div class="row">
            <div class="col wedstrijdteam">
                <h4>Thuis</h4>
            </div>
            <div class="col wedstrijdteam">
            </div>
            <div class="col wedstrijdteam">
                <h4>Uit</h4>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col wedstrijdteam">
                <h3>{{ $wedstrijd->TeamThuis}}</h3>
            </div>
            <div class="col wedstrijdteam">
                <h3>{{ $wedstrijd->Tijd}}</h3>
            </div>
            <div class="col wedstrijdteam">
                <h3>{{ $wedstrijd->TeamUit}}</h3>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col wedstrijdteam">
                <h3>{{ $wedstrijd->Hal}}</h3>
            </div>
            <div class="col wedstrijdteam">
            </div>
            <div class="col wedstrijdteam">
                <h3>{{ $wedstrijd->WedstrijdDatum}}</h3>
            </div>
        </div>
    </div>
@endsection