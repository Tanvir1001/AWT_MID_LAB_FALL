<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppsController extends Controller
{
    public function home(){
        return view('HomePage');
    }

    public function service()
    {
        $names = array("Ac Rrpair","Mobile Repair","Pc Repair");
        $prices = array("100$","25$","60$");
        return view('ServicePage')
        ->with('names',$names)
        ->with('prices',$prices);
    }

    public function about(){
        return view('AboutPage');
    }

    public function contact(){
        return view('ContactPage');
    }

    public function ourteam(){
        return view('OurteamPage');
    }
}
