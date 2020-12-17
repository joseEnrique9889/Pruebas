@extends('layout.master')
@section('title', 'ADMINISTRADOR')
@section('content')
<div class="panel shadow">
  <div class="inside">
    <table class="table">
  <thead> 
 <td colspan="3"><center><label>AGREGAR CATEGORIAS</div></label></center></td>
    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">Productos</th>
      <th scope="col">Acciones</th>
    </tr>

  </thead>
  <tbody class="body1">
    <tr>
      <td scope="row">Electronica</td>
      <td>3</td>
      <td>
        <a href="{{ url('/categoria/1/edit') }}" role="button" class="btn btn-success" data-toggle="modal">Editar</a>
        <a href="{{ url('/categoria/1/show') }}" role="button" class="btn btn-warning" data-toggle="modal">Mostrar</a>
         <a href="#victorModal" role="button" class="btn btn-large btn-danger" data-toggle="modal">Eliminar</a>

      </td>
    </tr>
  </tbody>
  <tbody class="body2">
    <tr>
      <td scope="row">Electrodomestico</td>
      <td>3</td>
      <td>
        <a href="{{ url('/categoria/2/edit') }}" role="button" class="btn btn-success" data-toggle="modal">Editar</a>
        <a href="{{ url('/categoria/2/show') }}" role="button" class="btn btn-warning" data-toggle="modal">Mostrar</a>
         <a href="#victorModal" role="button" class="btn btn-large btn-danger" data-toggle="modal">Eliminar</a>
      </td>
    </tr>
    </tbody>
    <tbody class="body3">
    <tr>
      <td scope="row">Ropa</td>
      <td>3</td>
      <td>
        <a href="{{ url('/categoria/3/edit') }}" role="button" class="btn btn-success" data-toggle="modal">Editar</a>
        <a href="{{ url('/categoria/3/show') }}" role="button" class="btn btn-warning" data-toggle="modal">Mostrar</a>
         <a href="#victorModal" role="button" class="btn btn-large btn-danger" data-toggle="modal">Eliminar</a>
      </td>
    </tr>
  </tbody>

</table>
<div class="boton">
<center><a href="{{ url('/categoria/create') }}" role="button" class="btn btn-large btn-info" data-toggle="modal">crear</a></center>
</div>
</div>
  </div>

    
@endsection