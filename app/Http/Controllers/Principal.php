<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Principal extends Controller
{
    function view(){
        // echo 'Página Principal';
        return view('principal');
    }
}


