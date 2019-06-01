@extends('layouts.layout')

@section('content')
    <div class="container ">
        <br>
        <div class="row teamdetail">
            <div class="col teamimg">
                <img src="/storage/{{ $team->TeamID }}.jpg" height="400" width="650" />
            </div>

            <div class="col teamimg">
                <form action="" method="post">
                    {{ csrf_field() }}
                    <input type="text" value="{{ $team->TeamNaam}}" class="form-control">
                    <br>
                    <input type="text" value="{{ $team->TeamID}}" class="form-control">
                    <br>
                    <input type="text" value="{{ $team->Klasse}}" class="form-control">
                    <br>
                    <input type="submit" class="btn btn-primary" value="Aanpassen">
                </form>
            </div>
        </div>
    </div>
@endsection