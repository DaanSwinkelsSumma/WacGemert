@extends('layouts.layout')

@section('content')
       

        <div class="container">
            <div class="row">
                <div class="col">
                    <h1>Competitie</h1>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    @foreach ($TeamsThuis as $TeamThuis)
                        <h6>{{ $TeamThuis->TeamNaam }}</h6>
                    @endforeach
                </div>
                <div class="col">
                    <h6>-</h6>
                    <h6>-</h6>
                    <h6>-</h6>
                    <h6>-</h6>
                    <h6>-</h6>
                    <h6>-</h6>
                    <h6>-</h6>
                    <h6>-</h6>
                    <h6>-</h6>
                    <h6>-</h6>
                    <h6>-</h6>
                    <h6>-</h6>
                </div>
                <div class="col">
                    @foreach ($TeamsUit as $TeamUit)
                        <h6>{{ $TeamUit->TeamNaam }}</h6>
                    @endforeach
                </div>
            </div>
        </div>
@endsection