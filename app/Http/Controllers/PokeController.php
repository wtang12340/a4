<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PokeController extends Controller
{
    //
    public function poke(){
        return view('poke');
    }
}
