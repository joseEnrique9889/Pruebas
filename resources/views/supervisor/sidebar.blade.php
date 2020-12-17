<div class="sidebar shadow">
	<div class="section-top">
		<div class="logo">
			<img src="{{ url('static/images/supervisor.png') }}" class='img-fluid'>
		</div>
		<div class="user">
			<span class="subttitle">Hola:</span>
			<div class="name">
				<label>Supervisor</label>
			</div>
		</div>
	</div>
	<div class="main">
		<ul>
			<form action="buscar" method="POST">
			@csrf
				<input type="text" name="cadena" class="form-control"  placeholder="Buscar....">
			<center><input type="submit" class="btn btn-success" value="buscar"></center>
			</form>
		</ul>
		<ul>
			<li><a href="{{ url('/tablero')}}"><i class="fas fa-table"></i>Tablero</a></i>
			<li><a href="{{ url('/categoria')}}"><i class="fas fa-users"></i>Categoria</a></i>
			<li><a href="{{ url('/user')}}"><i class="fas fa-users"></i>Crear Usuario</a></i>
			<li><a href="{{ url('/actualizacion')}}"><i class="fas fa-database"></i>Actualizacion de datos</a></i>
			<li><a href="{{ url('/restPassword')}}"><i class="fas fa-key"></i>Restablecer contraseña</a></i>
			<li><a href="{{ url('/historia')}}"><i class="fas fa-history"></i>historial del vendedor</a></i>
			<li><a href="{{ url('/kardex')}}"><i class="fas fa-file-alt"></i>kardex de un producto</a></i>
		</ul>
	</div>
	
</div>