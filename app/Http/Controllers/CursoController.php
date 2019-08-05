<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{

    public function index(){

        return view('Admin.cursos.home');
    }
    //
}
