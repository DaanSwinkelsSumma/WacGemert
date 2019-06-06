@extends('layouts.layout')

@section('content')
<div class="container ">
    <br>
    <form action="/Standen/update/{{$wedstrijd->WedstrijdID}}" method="post">
        @method('PATCH')
        {{ csrf_field() }}

        <div class="row" style="text-align:center">
            <div class="col">
                <input type="text" value="{{ $wedstrijd->TeamThuis }}" class="form-control" name="TeamThuis">
            </div>
            <div class="col">
            </div>
            <div class="col">
                <input type="text" value="{{ $wedstrijd->TeamUit }}" class="form-control" name="TeamUit">
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
                    <input type="text" value="{{ $wedstrijd->WedstrijdDatum }}" class="form-control" name="TeamThuisScore">
                </div>
                <div class="col">
                    <input type="text" value="{{ $wedstrijd->Hal }}" class="form-control" name="TeamThuisScore">
                </div>
                <div class="col">
                    <input type="text" value="{{ $wedstrijd->Tijd }}" class="form-control" name="TeamUitScore">
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
