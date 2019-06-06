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
                <form method="POST" action="/" style="text-align:center">
                    <input type="text" class="form-control" placeholder="Team thuis" name="teamthuis">
                    <br>
                    <input type="text" class="form-control" placeholder="Team uit" name="teamuit">
                    <br>
                    <input type="number" class="form-control" placeholder="Hal nummer" name="hal">
                    <br>
                    <input type="time" class="form-control" placeholder="Tijd" name="tijd">
                    <br>
                    <input type="date" class="form-control" placeholder="Datum" name="datum">
                    <br>
                    <input type="text" class="form-control" placeholder="Klasse" name="klasse">
                    <br>
                    <input type="submit" class="btn" value="Toevoegen" >
                </form>
            </div>
            <div class="col">
            </div>
        </div>
    </div>
@endsection