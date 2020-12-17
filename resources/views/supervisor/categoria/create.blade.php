@extends('layout.master')
@section('title', 'Crear')
@section('content')

<div class="container-fluid">
  <div class="panel shadow">
  <div class="inside">
    <form method="POST">
    <center><h3>Nueva Categoria</h3></center>
   <div class="form-group">
    <label for="exampleFormControlInput1">Categoria</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Nombre de la Categoria">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Producto</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Nombre del Producto">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Cantidad</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="cantidad">
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Descripcion Del Producto</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Descripcion"></textarea>
  </div>
  <center><input class="btn btn-success" type="submit" value="Enviar"></center> 
  
</form>
<a href="{{ url('/categoria') }}"><button class="btn btn-danger">Regresar</button></a>
</div>
  

@endsection