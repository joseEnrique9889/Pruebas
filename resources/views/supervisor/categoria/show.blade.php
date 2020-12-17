@extends('layout.master')
@section('title', 'MOSTRAR')
@section('content')
<div class="container-fluid">
	<div class="panel shadow">
		<div class="header">
			<center><h2 class="title"> MOSTRAR </h2></center>
		</div>
	
	<div class="inside">
		@switch($id)
    @case(1)
    @section('contenido')
  <li class="active">Categorias</li>
  <li class="active">Mostrar Electronica</li>
@endsection
    <div>
    <label>Nombre de la seccion: <label>
   <h5>Electronica<h5>
    </div>
    <div>
     <label>Descripcion: <label>
     	<h5>Electronica<h5>
    </div>
       
        @break
    @case(2)
    
  @section('contenido')
  <li class="active">Categorias</li>
  <li class="active">Mostrar Electrodomestico</li>
@endsection
    <div>
    <label>Nombre de la seccion: <label>
   <h5>Electrodomestico<h5>
    </div>
    <div>
     <label>Descripcion: <label>
     	<h5>Electrodomestico<h5>
    </div>
        @break
    @case(3)
    @section('contenido')
  <li class="active">Categorias</li>
  <li class="active">Mostrar Ropa</li>
@endsection
    <div>
    <label>Nombre de la seccion: <label>
   <h5>Ropa<h5>
    </div>
    <div>
     <label>Descripcion: <label>
     	<h5>Ropa<h5>
    </div>
        @break
        
@endswitch

</div>
  	

@endsection