<!--Utilizaremos blade como motor de plntillas-->
<!--Extendemos la plantilla madre-->
@extends('layouts.app')
<!--agregamos en la sección content de la plantilla madre-->
@section('content')
<h1>Employees</h1>
@include('employees.lista')
@endsection
@push('js')
    
@endpush