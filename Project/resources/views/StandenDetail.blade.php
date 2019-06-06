@extends('layouts.layout')

@section('content')
    <div class="container ">
        <br>
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
                <h2>{{ $wedstrijd->TeamThuisScore }}</h2>
            </div>
            <div class="col">
                    <h2>-</h2>
                </div>
                <div class="col">
                        <h2>{{ $wedstrijd->TeamUitScore }}</h2>
                    </div>
        </div>
        <br>
        <div class="row" style="text-align:center">
                <div class="col">
                    <h2>{{ $wedstrijd->WedstrijdDatum }}</h2>
                </div>
                <div class="col">
                        <h2>{{ $wedstrijd->Hal }}</h2>
                    </div>
                    <div class="col">
                            <h2>{{ $wedstrijd->Tijd }}</h2>
                        </div>
            </div>
            <br>
        <div class="row" style="text-align:center">
            <div class="col">
            <a href="/Standen/aanpassen/{{$wedstrijd->WedstrijdID}}" class="btn btn-primary">Aanpassen</a>
            </div>
        </div>
    </div>
@endsection