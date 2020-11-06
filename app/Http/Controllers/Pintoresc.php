<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Pintoresc extends Controller
{
    public function menu(){
        return view ('plantilla');
    }
    public function pintorone(){
        return view ('pintor1');
    }
    public function pintortwo(){
        return view ('pintor2');
    }
    public function pintortres(){
        return view ('pintor3');
    }
    public function pintorfor(){
        return view ('pintor4');
    }
    public function pintorfive(){
        return view ('pintor5');
    }
}
