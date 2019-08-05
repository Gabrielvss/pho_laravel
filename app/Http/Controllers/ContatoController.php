<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Contato;

class ContatoController extends Controller
{
    public function index(){

        $contatos = [
            (object)["nome"=>"Gabriel","telefone"=>"764848868"]

        ];

        $contato = new Contato();
        //dd($contato->lista());

        //perguntar pq quando se pede para retornar diretamente contato da erro
        return view('contato.index', compact('contatos'));
    }
    public function Criar(Request $req){

        
        return $req['nome'];
    }
    public function Editar(){

        return "essa é controller do index";
    }

}
