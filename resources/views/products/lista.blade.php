@if(count($products) > 0)
<table id="example" class="table table-success table-striped" style="width:100%">
  <thead>
    <tr>
      <th scope="col"># ProductID</th>
      <th scope="col">ProductName</th>
      <th scope="col">CategoryName</th>
      <th scope="col">UnitPrice</th>
      <th scope="col">UnitsInStock</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
 
  <tbody>
  @foreach($products as $product)
    <tr>
      <th scope="row">{{ $product->ProductID}}</th>
      <td>{{$product->ProductName}}</td>
      <td>{{$product->CategoryName}}</td>
      <td>{{$product->UnitPrice}}</td>
      <td>{{$product->UnitsInStock}}</td>
      <td><button type="button" class="btn btn-success"><a href="editProduct/{{$product->ProductID}}">Actualizar</button>
      <button type="button" class="btn btn-danger"><a href="deleteProduct/{{$product->ProductID}}">Eliminar</button></td>
    </tr>
    @endforeach
  </tbody>

  
</table>
@else
    <h2>No se encontraron productos disponibles.</h2>
@endif
<script>
$(document).ready(function () {
    $('#example').DataTable();
});
</script>
