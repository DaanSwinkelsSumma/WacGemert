@extends('layouts.layout')

@section('content')

        {{-- <form action="/wedstrijd/scoreupdate/{{ $wedstrijd->WedstrijdID }}" method="post">
            {!! csrf_field() !!}


        <div class="row">
            <div class="col">
                <h6>Team 1 score:</h6>
                {{-- <input name="TeamThuisScore" id="TeamThuisScore" value="{{ $wedstrijd->TeamThuisScore }}" type="number"> --}}
                @foreach($wedstrijden as $team1)
                <input name="TeamThuisScore" id="TeamThuisScore" value="{{ $team1->TeamThuisScore }}" type="number">
                @endforeach
            </div>
            <div class="col">
                <h6>Team 2 score:</h6>
                {{-- <input name="TeamUitScore" id="TeamUitScore" value="{{ $wedstrijd->TeamUitScore }}"  type="number"> --}}
                @foreach($wedstrijden as $team2)
                <input name="TeamUitScore" id="TeamUitScore" value="{{ $team2->TeamUitScore }}"  type="number">
                @endforeach
            </div>
        </div>
        <div class="row">
            <div class="col">
            {{-- <a href="/wedstrijd/scoreupdate/{{ $wedstrijd->WedstrijdID }}">
                    <button >Update</button>
                </a> --}}
                <input type="submit" value="Update" class="btn">
            </div>
        </div>
    </form> --}}
    @endsection