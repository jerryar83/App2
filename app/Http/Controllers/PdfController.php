<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Facade;
use PDF;
//use Barryvdh\DomPDF\PDF;
class PdfController extends Controller
{
    public function crearpdf(){
  
        $data = [
            'imagePath'    => public_path('images/imgprueba.jpg'),
            'title' => 'Welcome to ItSolutionStuff.com',
            'date' => date('m/d/Y'),
            'users' => 'Gerardo'
        ]; 
            
        $pdf = PDF::loadView('pdf.pruebapdf', $data);
     
        return $pdf->download('prueba.pdf');


    }
}
