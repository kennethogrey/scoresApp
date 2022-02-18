<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ProjectController extends Controller
{
    public function getData(Request $request){
        $date = date('Y-m-d');
        //$response = Http::get("https://api.soccersapi.com/v2.2/fixtures/?user=ogirekenneth&token=6c148306c06e47dd03cefb003ac95715&t=schedule&d=".$date."&league_id=1609");
        $response  = Http::get("https://api.soccersapi.com/v2.2/livescores/?user=ogirekenneth&token=6c148306c06e47dd03cefb003ac95715&t=today");
        return view('index',['response'=>$response]);
    }

    public function about(){
        return view('about');
    }
}
