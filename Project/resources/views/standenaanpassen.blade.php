@extends('layouts.layout')

@section('content')
<div class="container ">
    <br>
    <form action="/Standen/update/{{$wedstrijd->WedstrijdID}}" method="post">
        @method('PATCH')
        {{ csrf_field() }}

        <div class="row" style="text-align:center">
                <div class="col">
                    <h2>{{ $wedstrijd->TeamThuis }}</h2>
                </div>
                <div class="col">
                </div>
                <div class="col">
                    <h2>{{ $wedstrijd->TeamUit }}</h2>
                </div>
        </div>
        <br>
    <div class="row" style="text-align:center">
        <div class="col">

            <input type="text" value="{{ $wedstrijd->TeamThuisScore }}" class="form-control" name="TeamThuisScore">

        </div>
        <div class="col">
        </div>
        <div class="col">


            <input type="text" value="{{ $wedstrijd->TeamUitScore }}" class="form-control" name="TeamUitScore">

        </div>
    </div>
    <br>
    <div class="row" style="text-align:center">
        <div class="col">
               
            <input type="submit" class="btn btn-primary" value="Aanpassen">

        </div>
    </div>
    </form>
</div>
@endsection
