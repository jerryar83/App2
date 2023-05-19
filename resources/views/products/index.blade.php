@extends('layouts.app')
<!--agregamos en la sección content de la plantilla madre-->
@section('content')
<h1>Products</h1>
@include('products.lista')
@endsection
