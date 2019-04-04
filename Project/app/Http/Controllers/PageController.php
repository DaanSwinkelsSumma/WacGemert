<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('welcome');
    }

    public function Competitie()
    {
        return view('Competitie');
    }

    
    public function Beker()
    {
        return view('Beker');
    }

    
    public function Teams()
    {
        return view('Teams');
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
        return view('Beheersysteem');
    }

}
