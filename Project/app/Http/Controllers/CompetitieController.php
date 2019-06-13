<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Calendar;
use DB;
use App\Wedstrijd;
use App\Team;
use Illuminate\Support\Facades\Input;

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
        $klasses = DB::table('Teams')->select('Klasse')->distinct()->get();

        return view('Competitie', compact('wedstrijden', 'klasses'));
    }

    public function wedstrijddetail(Wedstrijd $wedstrijd)
    {

        return view('wedstrijddetail', compact('wedstrijd'));
    }

    public function newcomp()
    {
        $i = 0; 
        
        $TeamsThuis = Team::pluck('TeamNaam')->where('Klasse', '=', 'Hoofdklasse');
        $TeamsThuisArray = $TeamsThuis->all();

        $TeamsUitArray = $TeamsThuisArray;
        $shiftloop = array_shift($TeamsUitArray);
        array_push($TeamsUitArray, $shiftloop);


        while ($TeamsUitArray[0] !== $TeamsThuisArray[0]) {
            // dump($TeamsUitArray);   

            foreach ($TeamsUitArray as $TeamUitArray) {

                $wedstrijden = new Wedstrijd();
                $wedstrijden->TeamThuis = $TeamsThuisArray[$i];
                $wedstrijden->TeamUit = $TeamsUitArray[$i];
                $wedstrijden->Hal = 1;
                $wedstrijden->Tijd = '12:00';
                $wedstrijden->WedstrijdDatum = '16/05/2019';
                $wedstrijden->Klasse = 'Hoofdklasse';
                $wedstrijden->save();
                $i++;
                  
            }

            $shift = array_shift($TeamsUitArray);
            array_push($TeamsUitArray, $shift);
            $i = 0;
        }
        
        $wedstrijden = DB::table('wedstrijden')->get();
        // dd($wedstrijden);
        return view('Competitie', compact('wedstrijden'));

    }
    
    public function wedstijdtoevoegen()
    {
        $teams = DB::table('teams')->select('TeamNaam')->get();
        // dump($teams);
        return view('NieuweWedstrijd', compact('teams'));
    }

    
    public function newwedstrijd()
    {
        $wedstrijd = new Wedstrijd();

        $wedstrijd->TeamUit = Input::get('teamuit');
        $wedstrijd->TeamThuis = Input::get('teamthuis');
        $wedstrijd->Hal = Input::get('hal');
        $wedstrijd->Tijd = Input::get('tijd');
        $wedstrijd->WedstrijdDatum = Input::get('datum');
        $wedstrijd->Klasse = Input::get('klasse');

        $wedstrijd->save();

        return redirect('home');
    }
}




