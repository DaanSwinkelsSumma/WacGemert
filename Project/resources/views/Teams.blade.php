@extends('layouts.layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Teams</h1>
            </div>
            <div class="col">
                <form action="/Teams/klasse" method="POST">
                    {{ csrf_field() }}
                    <select name="klasse" style="margin-top: 30px" class="form-control">
                        @foreach ($klasses as $klasse)
                            <option name="{{ $klasse->Klasse }}" value="{{ $klasse->Klasse }}">{{ $klasse->Klasse }}</option>
                        @endforeach
                    </select>
                    <br>
                    <input type="submit" name="" id="" class="btn-primary form-control" value="Zoeken" >
                </form>
            </div>
            <div class="col" style="text-align: right">
                <a href="/Nieuwteam">
                    <button style="margin-top:30px" class="btn btn-primary">Nieuw team</button>
                </a>
            </div>
        </div>
        <div class="row" style="text-align:center">
            <div class="col">
                <h3>Team ID</h3>
            </div>
            <div class="col">
                <h3>Team naam</h3>
            </div>
            <div class="col">
                <h3>Klasse</h3>
            </div>
        </div>
        <br>
        @foreach ($teams as $team)
            <a href="/Teams/{{$team->TeamID}}">
                <div class="row wedstrijd wedstrijdteam">
                    <div class="col">{{ $team->TeamID }}</div>
                    <div class="col">{{ $team->TeamNaam }}</div>
                    <div class="col">{{ $team->Klasse }}</div>
                </div>
            </a>
            <br>
        @endforeach
    </div>
@endsection