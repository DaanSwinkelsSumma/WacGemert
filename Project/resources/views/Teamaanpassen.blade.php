@extends('layouts.layout')

@section('content')
    <div class="container ">
        <br>
        <div class="row teamdetail">
            <div class="col teamimg">
                <img src="/storage/{{ $team->TeamID }}.jpg" height="400" width="650" />
            </div>

            <div class="col teamimg">
                <form action="/Team/update/{{ $team->TeamID }}" method="post">
                    @method('PATCH')
                    {{ csrf_field() }}
                    <input type="text" value="{{ $team->TeamNaam }}" class="form-control" name="TeamNaam">
                    <br>
                    <label value="" class="form-control">{{ $team->TeamID }}</label>
                    <br>
                    <input type="text" value="{{ $team->Klasse }}" class="form-control" name="Klasse">
                    <br>
                    <input type="submit" class="btn btn-primary" value="Aanpassen">
                </form>
            </div>
        </div>
    </div>
@endsection