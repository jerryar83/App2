<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\View;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

use Illuminate\Http\RedirectResponse;

class EmployeesController extends Controller
{
    //
    public function index(){

        $employees = Employee::select('EmployeeID','LastName','FirstName','Title')
        ->where('Status_Employee',"=",0)
        ->get();
        return View('employees.index')->with('employees',$employees);
    }

    public function edit($id){
            $employee = Employee::select('EmployeeID','LastName','FirstName','Title')
            ->where('EmployeeID',$id)
            ->get();
            return View('employees.edit',compact('employee'));

    }
    
    public function update(Request $request){


          $request-> all();
           $id = $request->input('id');
           $lastName = $request->input('lastName');
           $firtsName = $request->input('firtsName');
           $title = $request->input('title');

           $update = Employee::where('EmployeeID',$id)
                    ->update(['LastName'=>$lastName,
                     'FirstName'=>$firtsName,
                      'Title'=>$title
                      ]);

            return redirect('/IndexEmployees');

    }
    public function delete($id){
        
//en la variable elimina asignamos el valor del id de la base del empleado nos trae el primer elemento
        $elimina = Employee::where('EmployeeID',$id)->first();
    
    
//comprobamos que el id a eliminar esta en la base
        if($elimina){
            //si esta solo actualizamos el status de 0 a 1 el cual 1 sera para los que estan dados de baja
            $deleteEmployee = Employee::where('EmployeeID',$id)
        ->update(['Status_Employee'=> 1]);

        }
        else{
            return "Error, el usuario no se encuentra en la BD";
              // Hard Delete (no recomendado)
              //$eliminacion = Employee::where('EmployeeID', $id )
              //->delete($id); 
        }
        if($deleteEmployee >= 1 ) {
            // si la consulta se efectua nos direcciona
             return redirect('/IndexEmployees');
        }

    }

        

}
