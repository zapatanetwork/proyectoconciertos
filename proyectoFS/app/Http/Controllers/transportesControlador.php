<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class transportesControlador extends Controller
{

    public function transportes(Request $request){
        $datostransportes = DB::table("hotel")->where("nombreHotel","=",$request->id)
        ->select("*")
        ->get();    
        
        return $datostransportes;
    }
}
