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

        return view('Admin.Standen', compact('wedstrijden'));
    }

    public function updateScore(Request){

        $wedstrijd->TeamThuisScore = Input::get('TeamThuisScore');
        // $wedstrijd->save();
        dd($wedstrijd);
        return redirect('home');
    }
}

