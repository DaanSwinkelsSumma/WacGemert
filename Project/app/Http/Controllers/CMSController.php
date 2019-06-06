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

    public function scoreAanpassen(Wedstrijd $wedstrijd){
        return view('StandenAanpassen', compact('wedstrijd'));
    }

    public function updateScore(Wedstrijd $wedstrijd){
        // dd($request->input('TeamThuisScore'));
        // $wedstrijd = Wedstrijd::find($WedstrijdID);
        
        $wedstrijd->TeamThuisScore = Input::get('TeamThuisScore');
        $wedstrijd->TeamUitScore = Input::get('TeamUitScore');
        // dd($wedstrijd);
        $wedstrijd->save();

        return redirect('Standen');
    }
}

