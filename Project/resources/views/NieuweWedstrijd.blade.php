@extends('layouts.layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <h3>Nieuwe wedstrijd</h3>
            </div>
            <div class="col">
            </div>
            <div class="col">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col">
            </div>
            <div class="col">
                <form method="POST" action="/wedstrijd/store/new" style="text-align:center">
                    {{ csrf_field() }}
                    {{-- <input type="text" class="form-control" placeholder="Team thuis" name="teamthuis"> --}}
                    <h6 style="text-align:left">Team thuis</h6>
                    <select name="teamthuis" class="form-control" required>
                        @foreach ($teams as $team)
                            <option name="{{ $team->TeamNaam }}" value="{{ $team->TeamNaam }}">{{$team->TeamNaam }}</option>
                        @endforeach
                    </select>
                    <h6 style="text-align:left">Team uit</h6>
                    <select name="teamuit" class="form-control" required>
                        @foreach ($teams as $team)
                            <option name="{{ $team->TeamNaam }}" value="{{ $team->TeamNaam }}">{{$team->TeamNaam }}</option>
                        @endforeach
                    </select>
                    <h6 style="text-align:left">Hal nummer</h6>
                    <input type="number" class="form-control" name="hal" required>
                    <h6 style="text-align:left">Tijd</h6>
                    <input type="time" class="form-control" name="tijd" required>
                    <h6 style="text-align:left">Datum</h6>
                    <input type="date" class="form-control" name="datum" required>
                    <h6 style="text-align:left">Klasse</h6>
                    <input type="text" class="form-control" name="klasse" required>
                    <br>
                    <input type="submit" class="btn" value="Toevoegen" >
                </form>
            </div>
            <div class="col">
            </div>
        </div>
    </div>
@endsection