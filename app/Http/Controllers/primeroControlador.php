<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\primeroRepositorio;

class primeroControlador extends Controller
{
    public function __construct(primeroRepositorio $primerorepositorio) {
        $this -> primerorepositorio = $primerorepositorio;
    }

    public function show() {
        $festival = $this -> primerorepositorio -> all();

        return view('index', [
            'festival' => $festival
        ]);
    }
}
