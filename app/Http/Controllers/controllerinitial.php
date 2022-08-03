<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controllerinitial extends Controller
{
    public function index(Request $peticion){
        $arreglo=['nombre'=>$peticion->query('nombre','NN')];
        return view('visite1')->with($arreglo);
    }
}
