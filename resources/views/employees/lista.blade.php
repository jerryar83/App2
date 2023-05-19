

@if(count($employees) > 0)
<table id="employees" class="table table-success table-striped" style="width:100%">
  <thead>
    <tr>
      <th scope="col"># EmployeeID</th>
      <th scope="col">LastName</th>
      <th scope="col">FirstName</th>
      <th scope="col">Title</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
  @foreach($employees as $employee)
 
    <tr>
      <th scope="row">{{ $employee->EmployeeID }}</th>
      <td>{{ $employee->LastName }}</td>
      <td>{{$employee->FirstName}}</td>
      <td>{{$employee->Title}}</td>
      <td><button type="button" class="btn btn-outline-success" ><a href="editEmployee/{{$employee->EmployeeID}}">Actualizar</button>
      <button type="button" class="btn btn-outline-danger"><a href="deleteEmployee/{{$employee->EmployeeID}}">Eliminar</button></td>
    </tr>
  @endforeach
  </tbody>

 
</table>



@else
    <h2>No se encontraron productos disponibles.</h2>
@endif
<script>
$(document).ready(function () {
    $('#employees').DataTable();
});
</script>