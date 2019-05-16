<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Wedstrijdstand;

class Wedstrijdstanden extends Controller
{
    public function updateScores(){
        // $wedstrijdID = Wedstrijdstand::getStanden('WedstrijdID');
        // $TeamThuisScore = Wedstrijdstand::getStanden('TeamThuisScore');
        // $teamUitScore = Wedstrijdstand::getStanden('TeamUitScore');
        //array('id'=>$wedstrijdID,'thuis'=>$TeamThuisScore,'uit'=>$teamUitScore)
        $wedstrijden = DB::table('wedstrijden')->get();

        return view('Standen', compact('wedstrijden'));
    }
}