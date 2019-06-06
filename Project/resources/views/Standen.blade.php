@extends('layouts.layout')


@section('content')

<br>
<div class="container-fluid">
    <div class="row" style="text-align:center">
        <div class="col">
            <h1 class="h1tekst">Pas de wedstrijd aan</h1>
        </div>
    </div>

    @foreach($wedstrijden as $wedstrijd)
    <form action="/wedstrijd/scoreupdate/{{ $wedstrijd->WedstrijdID }}" method="post">
        {!! csrf_field() !!}
        @endforeach

    <div class="container">
        <div class="row" style="text-align:center">
            <div class="col">
                <h3>Team 1</h3>
            </div>
            <div class="col">
                <h3>Team 2</h3>
            </div>
        </div>
        <br>
        @foreach($wedstrijden as $wedstrijd)
        <a href="/Standen/{{$wedstrijd->WedstrijdID}}">
            <div class="row wedstrijd wedstrijdteam">
                <div class="col">{{ $wedstrijd->TeamThuis }}</div>
                <div class="col">{{ $wedstrijd->TeamUit }}</div>
            </div>
        </a>
        <br>
        @endforeach
    </div>







    {{-- <div class="row">
        <div class="col">
            <h6>Team 1 score:</h6>
            {{-- <input name="TeamThuisScore" id="TeamThuisScore" value="{{ $wedstrijd->TeamThuisScore }}" type="number"> --}}
            {{-- @foreach($wedstrijden as $team1)
            <input name="TeamThuisScore" id="TeamThuisScore" value="{{ $team1->TeamThuisScore }}" type="number">
            @endforeach
        </div>
        <div class="col">
            <h6>Team 2 score:</h6>
            {{-- <input name="TeamUitScore" id="TeamUitScore" value="{{ $wedstrijd->TeamUitScore }}"  type="number"> --}}
            {{-- @foreach($wedstrijden as $team2)
            <input name="TeamUitScore" id="TeamUitScore" value="{{ $team2->TeamUitScore }}"  type="number">
            @endforeach
        </div>
    </div>
    <div class="row">
        <div class="col">
        <a href="/wedstrijd/scoreupdate/{{ $wedstrijd->WedstrijdID }}">
                <button >Update</button>
            </a> 
            <input type="submit" value="Update" class="btn">
        </div>
    </div>  --}}
</form>
    

        {{-- @foreach ($wedstrijden as $wedstrijd)
            <a href="/standenaanpassen/{{wedstrijd}}">
                <div class="row wedstrijd wedstrijdteam">
                        <div class="col"><h6>{{ $wedstrijd->TeamThuis }}</h6></div>
                        <div class="col"><h6>VS</h6></div>
                        <div class="col"><h6>{{ $wedstrijd->TeamUit }}</h6></div>
                </div>
            </a>
        @endforeach --}}

</div>


@endsection
