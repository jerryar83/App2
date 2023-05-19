
@extends('layouts.app')
@section('content')
<h1>Producto Actualización de datos</h1>

@foreach($products as $product)
<form action = "/updateProduct" method="POST">
@method('put')
@csrf 
<div class="mb-3">
    <label for="productID" class="form-label">ProductID</label>
    <input type="text" class="form-control" id="productID" name= "id" value ="{{$product->ProductID}}">

  </div>
  <div class="mb-3">
    <label for="productName" class="form-label">ProductName</label>
    <input type="text" class="form-control" id="productName" name= "productName" value ="{{$product->ProductName}}">

  </div>
  <div class="mb-3">

  <!--por medio de una caja de terxto-->
  <!-- <label for="categoryName" class="form-label">CategoryName</label>
    <input type="text" class="form-control" id="categoryame" name = "categoryame"value ="{{$product->CategoryName}}"> -->


    <select class="form-select" aria-label="Default select example" id="categoryName" name = "categoryName">
      <option >Menú categorias</option>
      @foreach($categories as $categorie)

      @if(("{{$product->CategoryName}}") == ("{{$categorie->CategoryName}}"))

      <option value="{{$categorie->CategoryID}}" selected>{{$categorie->CategoryName}}</option>
      @else
      <!-- <option value="{{$categorie->CategoryID}}">{{$categorie->CategoryName}}</option> -->
      <option value="{{$categorie->CategoryID}}">{{$categorie->CategoryName}}</option>
      
      @endif
      @endforeach


    </select>
  </div>
  <!-- <div class="mb-3">
    <label for="categoryName" class="form-label">CategoryName</label>
    <input type="text" class="form-control" id="categoryName" name = "categoryName"value ="{{$product->CategoryName}}">
  </div> -->
  <div class="mb-3">
    <label for="unitPrice" class="form-label">UnitPrice</label>
    <input type="text" class="form-control"  name= "unitPrice" value ="{{$product->UnitPrice}}">
  </div>
  <div class ="mb-3">
    <label  for="unitsInStock" class="form-label">UnitsInStock</label>
    <input type="text" class="form-conttrol" min="1" step="1" max="1000"  name="unitsInStock" value="{{$product->UnitsInStock}}">
  </div>
  <button type="submit" class="btn btn-primary">Actualizar</button>
</form>
@endforeach

@endsection