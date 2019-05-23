<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Calendar;
use DB;
use App\Wedstrijd;
use App\Team;


class CompetitieController extends Controller
{
    public function index()
    {
        $events = [];
        $data = Wedstrijd::all();
        if($data->count()) {
            foreach ($data as $key => $value) {
                $events[] = Calendar::event(
                    $value->title,
                    true,
                    new \DateTime($value->start_date),
                    new \DateTime($value->end_date.' +1 day'),
                    null,
                    // Add color and link on event
	                [
                        'editable' => 'true',
	                    'color' => '#f05050',
	                    'url' => '/home',
	                ]
                );
            }
        }
        $calendar = Calendar::addEvents($events);
        //dd($calendar);
        return view('Calender', compact('calendar'));
    }

    public function competitie()
    {
        $wedstrijden = DB::table('wedstrijden')->get();
        // dd($wedstrijden);

        return view('Competitie', compact('wedstrijden'));
    }

    public function wedstrijddetail(Wedstrijd $wedstrijd)
    {
        // dd($wedstrijd);
        // $wedstrijd = DB::table('wedstrijden')->get();

        return view('wedstrijddetail', compact('wedstrijd'));
    }

    public function newcomp()
    {
    $teams[] = Team::pluck('TeamNaam')->toArray();
    // dd($teams);


    if (count($teams)%2 != 0){
            array_push($teams,"");
        }
        $away = array_splice($teams,(count($teams[0])/2));
        $home = $teams;
        dd($teams);
        for ($i=0; $i < count($home)+count($away)-1; $i++)
        {
            shuffle($home);
            shuffle($away);
            for ($j=0; $j<count($home); $j++)
            {
                $round[$i][$j]["Home"]=$home[$j];
                $round[$i][$j]["Away"]=$away[$j];
            }
            if(count($home)+count($away)-1 > 2)
            {
                $s = array_splice( $home, 1, 1 );
                $slice = array_shift( $s  );
                array_unshift($away,$slice );
                array_push( $home, array_pop($away ) );
            }
        }
        dd($round);
        return $round;

    }
}




