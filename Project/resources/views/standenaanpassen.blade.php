@extends('layouts.layout')

@section('content')
<div class="container ">
    <br>
    <form action="/Standen/update/{{$wedstrijd->WedstrijdID}}" method="post">
        @method('PATCH')
        {{ csrf_field() }}

        <div class="row" style="text-align:center">
            <div class="col">
                <h5 style="text-align:left">Thuis:</h5>
                <input type="text" value="{{ $wedstrijd->TeamThuis }}" class="form-control" name="TeamThuis">
            </div>
            <div class="col">
                <h5 style="text-align:left">Hal:</h5>
                <input type="text" value="{{ $wedstrijd->Hal }}" class="form-control" name="Hal">
            </div>
            <div class="col">
                <h5 style="text-align:left">Uit:</h5>
                <input type="text" value="{{ $wedstrijd->TeamUit }}" class="form-control" name="TeamUit">
            </div>
        </div>
        <br>
        <div class="row" style="text-align:center">
            <div class="col">
                <h5 style="text-align:left">Score Thuis:</h5>
                <label  class="form-control">{{ $wedstrijd->TeamThuisScore }}</label>
                {{-- <input type="text" value="{{ $wedstrijd->TeamThuisScore }}" class="form-control" name="TeamThuisScore"> --}}
            </div>
            <div class="col">
            </div>
            <div class="col">
                <h5 style="text-align:left">Score Uit:</h5>
                <label  class="form-control">{{ $wedstrijd->TeamUitScore }}</label>
            </div>
        </div>
        <br>
        <div class="row" style="text-align:center">
            <div class="col">
                <h5 style="text-align:left">Datum:</h5>
                <input type="date" value="{{ $wedstrijd->WedstrijdDatum }}" class="form-control" name="WedstrijdDatum" re>
            </div>
            <div class="col">
            </div>
            <div class="col">
                <h5 style="text-align:left">Tijd:</h5>
                <input type="time" value="{{ $wedstrijd->Tijd }}" class="form-control" name="Tijd">
            </div>
        </div>
        <br>
        <div class="row" style="text-align:center">
            <div class="col">
                <input type="submit" class="btn" value="Aanpassen">
            </div>
        </div>
    </form>
</div>
@endsection
