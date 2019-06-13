@extends('layouts.layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <h3>Nieuw team</h3>
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
                <form method="POST" action="/Team/new" style="text-align:center">
                    {{ csrf_field() }}
                    <h6 style="text-align:left">Team naam</h6>
                    <input type="text" class="form-control" name="teamnaam" required>
                    <h6 style="text-align:left">Klasse</h6>
                    <select name="klasse" class="form-control" required>
                        @foreach ($klasses as $klasse)
                            <option name="{{ $klasse->Klasse }}" value="{{ $klasse->Klasse }}">{{$klasse->Klasse }}</option>
                        @endforeach
                    </select>                    
                    <br>
                    <input type="submit" class="btn" value="Toevoegen" >
                </form>
            </div>
            <div class="col">
            </div>
        </div>
    </div>
@endsection