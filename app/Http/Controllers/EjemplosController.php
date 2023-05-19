<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EjemplosController extends Controller
{
    //
    public function tabla(){
        return view('ejemplos.tabla');
    }
}
