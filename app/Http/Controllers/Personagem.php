<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personagens;


class Personagem extends Controller
{
    function view(){
        return view('cadastrar-personagem');
    }
    function salvarPersonagem(Request $dados){
        $personagem = new Personagens();
        $personagem->create($dados->all());
        return view('cadastrar-personagem');

    }
    function listarPersonagem(){
        return view('listar-personagem');
    }
}
