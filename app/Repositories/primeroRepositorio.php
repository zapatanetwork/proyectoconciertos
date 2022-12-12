<?php

namespace App\Repositories;

use App\Models\primero;
/**
 * Class primeroRepositorio.
 */
class primeroRepositorio 
{
    public function all() {
        return primero::all();
    }
}
