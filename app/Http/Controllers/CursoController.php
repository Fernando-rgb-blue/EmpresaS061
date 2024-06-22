<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index (){
        return view('cursos.index');
    }
    public function create (){
        return view('cursos.created');
    }
    public function show ($curso){
        //['curso' => $curso]
        return view('cursos.show',compact('curso'));
    }
}
