@extends('layouts.layout')

@section('content')
    <div class="container">
    <br>
        <br>
        <div class="row">
            <div class="col wedstrijdteam">
                <h4>Thuis</h4>
            </div>
            <div class="col wedstrijdteam">
            </div>
            <div class="col wedstrijdteam">
                <h4>Uit</h4>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col wedstrijdteam">
                <h3>{{ $wedstrijd->TeamThuis}}</h3>
            </div>
            <div class="col wedstrijdteam">
                <h3>{{ $wedstrijd->Tijd}}</h3>
            </div>
            <div class="col wedstrijdteam">
                <h3>{{ $wedstrijd->TeamUit}}</h3>
            </div>
        </div>
        <br>
        <form action="/wedstrijd/uitslag/{{ $wedstrijd->WedstrijdID}}" method="POST">
            {{ csrf_field() }}
            <div class="row">
                <div class="col wedstrijdteam">
                    <input class="form-control" type="number" name="TeamThuisScore" value="{{ $wedstrijd->TeamThuisScore}}">
                </div>
                <div class="col wedstrijdteam">
                    <h3>{{ $wedstrijd->WedstrijdDatum }}</h3>
                </div>
                <div class="col wedstrijdteam">
                    <input class="form-control" type="number" name="TeamUitScore" value="{{ $wedstrijd->TeamUitScore}}">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col"></div>
                <div class="col wedstrijdteam">
                    <input type="submit" value="Upload uitslag" class="btn">
                </div>
                <div class="col"></div>
            </div>
            <br>
            <div class="row">
                <div class="col"></div>
                <div class="col wedstrijdteam">
                        <label id="minutes" style="font-size:30px">00</label>:<label id="seconds" style="font-size:30px">00</label>
                    </div>
                <div class="col"></div>
            </div>
        </form>
    </div>


    <script type="text/javascript">
        var minutesLabel = document.getElementById("minutes");
        var secondsLabel = document.getElementById("seconds");
        var totalSeconds = 0;
        setInterval(setTime, 1000);

        function setTime() {
            ++totalSeconds;
            secondsLabel.innerHTML = pad(totalSeconds % 60);
            minutesLabel.innerHTML = pad(parseInt(totalSeconds / 60));
        }

        function pad(val) {
            var valString = val + "";
            if (valString.length < 2) {
                return "0" + valString;
            } else {
                return valString;
            }
        }
        if(document.getElementById("minutes").value > 1) {
            document.getElementById("minutes").value = 0;
        }
    </script>
@endsection