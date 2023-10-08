<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index(){
        return view("cursos.index");
    }

    public function create(){
        return view("cursos.create");
    }

    public function show($curso,$categoria=null){

         $titulo = $categoria ? "Bienbenido al curso {$curso} de la categoria {$categoria} " :"Bienbenido al curso {$curso}  ";

        return view("cursos.show", compact('titulo') );

    }
}
