<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Wedstrijd;
use App\Team;

class PageController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //
    }

    public function index()
    {
        return view('home');
    }

    public function Competitie()
    {
        return view('Competitie');
    }

    
    public function Beker()
    {
        return view('Beker');
    }

    
    

    
    public function Organisatie()
    {
        return view('Organisatie');
    }

    
    public function Historie()
    {
        return view('Historie');
    }

    public function Profiel()
    {
        return view('Profiel');
    }

    
    public function CMS()
    {
        return view('Admin/Beheersysteem');
    }

    

}
