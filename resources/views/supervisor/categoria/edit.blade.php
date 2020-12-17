@extends('layout.master')
@section('title', 'Editar')
@section('content')
<div class="container-fluid">
  <div class="panel shadow">
    
  <div class="inside">
   @switch($id)
    @case(1)
    @section('contenido')
  <li class="active">Categorias</li>
  <li class="active">Editar Seccion de Electronicas</li>
@endsection
     <form method="POST">
    <center><h3>EDITAR</h3></center>
   <div class="form-group">
    <label for="exampleFormControlInput1">Nombre de la Seccion</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Electronica">
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Descripcion De La Seccion</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Descripcion de Electronica"></textarea>
  </div>
  <input class="btn btn-info" type="submit" value="Enviar"> 
  
</form>
@break
    @case(2)
    @section('contenido')
  <li class="active">Categorias</li>
  <li class="active">Editar Seccion de Electrodomestico</li>
@endsection
         <form method="POST">
    <center><h3>EDITAR</h3></center>
   <div class="form-group">
    <label for="exampleFormControlInput1">Nombre de la Seccion</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Electrodomestico">
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Descripcion De La Seccion</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Descripcion de eletrodomestuco"></textarea>
  </div>
  <input class="btn btn-info" type="submit" value="Enviar"> 
  
</form>
        @break
    @case(3)
    @section('contenido')
  <li class="active">Categorias</li>
  <li class="active">Editar Seccion de Ropa</li>
@endsection
       <form method="POST">
    <center><h3>EDITAR</h3></center>
   <div class="form-group">
    <label for="exampleFormControlInput1">Nombre de la Seccion</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Ropa">
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Descripcion De La Seccion</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Descripcion de Ropa"></textarea>
  </div>
  <input class="btn btn-info" type="submit" value="Enviar"> 
  
</form>
        @break
        
@endswitch
       
</div>
   
@endsection