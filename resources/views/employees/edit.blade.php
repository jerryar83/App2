
@extends('layouts.app')
@section('content')
<h1>Employees Actualización de datos</h1>

@foreach($employee as $item)
<form action="/updateEmployee" method="POST">
  @method('put')
  @csrf 
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">EmployeeID</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name= "id" value ="{{$item->EmployeeID}}">

  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">LastName</label>
    <input type="text" class="form-control" id="exampleInputEmail1" required maxlength="30" name= "lastName" value ="{{$item->LastName}}">

  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">FirstName</label>
    <input type="text" class="form-control" id="exampleInputPassword1" required maxlength="10"name = "firtsName"value ="{{$item->FirstName}}">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Title</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name= "title" value ="{{$item->Title}}">
  
  <button type="submit" class="btn btn-primary">Actualizar</button>
</form>
@endforeach

@endsection