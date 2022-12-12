<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class SeleccionControlador extends Controller
{
    public function festival($id){
        $festival = DB::select('select * from festival where id_festival = ?', [$id]);
        return view('seleccion.seleccion', ['festival' => $festival]);
    }
}

