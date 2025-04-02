<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animal;

class ListarAnimais extends Controller
{
    // camelCase
    function listarAnimais(){
        return view('listar-animais');
    }

    function listarAnimal(Request $request) {
        // dd($request->all());
        $Animal = new Animal();
        $Animal->create($request->all());

        return view('listar-animais');
        
    }
}
