<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArchivosFotograficosController extends Controller
{
    //
    public function index(){

        return view('archivosFotograficos.index');
    }

    public function store(Request $request){
        if($request->file('file')){
            $file=$request->file('file');
            $nombreArchivoOriginal=$file->getClientOriginalName();
            $size=$file->getSize();
            if ($size >1000000){
                Echo "El archivo excede el tamaño permitido";
                return view('archivosFotograficos.index');//->with('error',$error);
                
                } 
            else{
                $file->move('images',$nombreArchivoOriginal);
                return $input['path']=$nombreArchivoOriginal;

                }
        }
    }
            
            
    
}
