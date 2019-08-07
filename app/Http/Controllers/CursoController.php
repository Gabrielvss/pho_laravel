<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Curso;

class CursoController extends Controller
{

    public function index(){

        $registros = Curso::all();
        return view('Admin.cursos.index',compact('registros'));
    }
    
    public function adicionar(){

        return view('Admin.cursos.adicionar');
    }

    public function salvar(Request $req){
        $dados = $req->all();
        
        Curso::create($dados);
        dd($dados);

        return redirect()->route('admin.cursos');
        
    }
}

