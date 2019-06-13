<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Wedstrijd;
use App\Team;
use Illuminate\Support\Facades\Input;


class TeamController extends Controller
{
    public function Teams(Request $request)
    {
        $klasses = DB::table('Teams')->select('Klasse')->distinct()->get();
        $teams = Team::all()->where('Klasse', '=', 'Hoofdklasse');

        return view('Teams', compact('klasses', 'teams'));
    }

    public function Klasses(Request $request)
    {
        $klasses = DB::table('Teams')->select('Klasse')->distinct()->get();
        $gekozeklasse = $request->input('klasse');
        $teams = Team::all()->where('Klasse', '=', $gekozeklasse);
        // dump('teams');
        return view('Teams', compact('klasses', 'teams'));
    }

    public function TeamDetail(Team $team)
    {
        $team = $team;
        return view('Teamdetail', compact('team'));
    }

    public function TeamAanpassen(Team $team)
    {
        return view('Teamaanpassen', compact('team'));
    }

    public function update(Team $team)
    {
        $team->TeamNaam = Input::get('TeamNaam');
        $team->Klasse = Input::get('Klasse');
        $team->save();
        return redirect('home');
    }

    public function newteampage()
    {
        $klasses = DB::table('Teams')->select('Klasse')->distinct()->get();
        return view('Nieuwteam', compact('klasses'));
    }

    public function storeteam()
    {
        $team = new Team();

        $team->TeamNaam = Input::get('teamnaam');
        $team->Klasse = Input::get('klasse');

        $team->save();
        
        return redirect('home');
    }
}
