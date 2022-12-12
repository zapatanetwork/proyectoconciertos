<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class hotelesControlador extends Controller
{
    public function hotel(Request $request){
        $datoshotel = DB::table("hotel")->join("ciudad", "ciudad.id_hotel_ciudad", "=","hotel.id_hotel")
        ->join("festival","festival.id_festival","=","ciudad.id_festival_ciudad")
        ->where("ciudad.id_festival_ciudad","=",$request->id)
        ->select("*")
        ->get();    
        
        return $datoshotel;
    }
}
