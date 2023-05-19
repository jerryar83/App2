<?php

use App\Http\Controllers\ArchivosFotograficosController;
use App\Http\Controllers\EmployeesController;
use App\Http\Controllers\EjemplosController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\ProductsController;
use App\Models\Employee;
//use Barryvdh\DomPDF\PDF;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
route ::get('cursos',function(){

    
    return 'User';
});
route::get('/NVARPrincipal',function (){
    return view('layouts/principal');
})->name('principal');

//idex principal
route::get('/Index',[HomeController::class, 'index']);


//employees
route::get('/IndexEmployees',[EmployeesController::class, 'index']);
route::get('/editEmployee/{id}',[EmployeesController::class,'edit']);
route::put('/updateEmployee',[EmployeesController::class,'update']);
route::get('/deleteEmployee/{id}',[EmployeesController::class,'delete']);



                            
//products

route::get('/IndexProducts',[ProductsController::class,'index']);
route::get('/editProduct/{id}',[ProductsController::class,'edit']);
route::put('/updateProduct',[ProductsController::class,'update']);
route::get('/deleteProduct/{id}',[ProductsController::class,'delete']);


//ejemplos

route::get('/ejemploTabla',[EjemplosController::class,'tabla']);

//Archivos fotograficos

route::get('/archivosFotograficos',[ArchivosFotograficosController::class,'index']);
route::post('/guardarArchivosFotograficos','App\Http\Controllers\ArchivosFotograficosController@store');

//PDF ejemplo

route::get('/pruebapdf',[PdfController::class,'crearpdf']);