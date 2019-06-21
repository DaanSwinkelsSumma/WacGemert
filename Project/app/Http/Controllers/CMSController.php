<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Wedstrijd;
use DB;

class CMSController extends Controller
{
    public function getScores(){
        $wedstrijden = DB::table('wedstrijden')->get();

        return view('Standen', compact('wedstrijden'));
    }

    public function  wedstrijdDetail(Wedstrijd $wedstrijd){
        //dd($wedstrijd);

        return view('StandenDetail', compact('wedstrijd'));
    }

    public function competitie(){
        $wedstrijden = DB::table('wedstrijden')->get();

        return view('Standen', compact('wedstrijden'));
    }

    public function wedstrijdAanpassen(Wedstrijd $wedstrijd){
        return view('StandenAanpassen', compact('wedstrijd'));
    }

    public function updateWedstrijd(Wedstrijd $wedstrijd){
        // dd($request->input('TeamThuisScore'));
        // $wedstrijd = Wedstrijd::find($WedstrijdID);
        
        $wedstrijd->Hal = Input::get('Hal');
        $wedstrijd->Tijd = Input::get('Tijd');
        $wedstrijd->WedstrijdDatum = Input::get('WedstrijdDatum');
        // $wedstrijd->TeamThuisScore = Input::get('TeamThuisScore');
        // $wedstrijd->TeamUitScore = Input::get('TeamUitScore');
        $wedstrijd->TeamThuis = Input::get('TeamThuis');
        $wedstrijd->TeamUit = Input::get('TeamUit');
        // dd($wedstrijd);
        $wedstrijd->save();

        return redirect('home');
    }
}

