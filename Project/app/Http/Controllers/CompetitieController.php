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
        // $teams = DB::table('teams')->get();
        $TeamsThuis = Team::inRandomOrder('RAND()')->get();
        // $TeamsUitnotshuffled = Team::inRandomOrder('RAND()')->get();

        $TeamsUit = $TeamsThuis->reverse();
        // dd($TeamsUit);
        
        return view('Competitie', compact('TeamsThuis', 'TeamsUit'));
    }
}



        // $wedstrijd = new Wedstrijd;
        // $wedstrijd->TeamUit = $team1;
        // $wedstrijd->TeamThuis = $team2;
        // $wedstrijd->Hal = '';
        // $wedstrijd->Tijd = '';
        // $wedstrijd->WedstrijdDatum = '';
        // $wedstrijd->save();
