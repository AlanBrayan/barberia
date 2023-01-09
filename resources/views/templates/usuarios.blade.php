
<!DOCTYPE HTML>
<!--
	Editorial by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Inicio</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="{{asset('assets/css/main.css')}}" />

	</head>

	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<div id="main">
						<div class="inner">

						@include ('layouts.header')

								
<h2>Usuarios registrados</h2>

<div>
	<table>
		<thead>
			<tr>
				<th><h3>ID</h3></th>
				<th><h3>Matricula</h3></th>
				<th><h3>Nombre</h3></th>
				<th><h3>Genero</h3></th>
				<th><h3>Email</h3></th>
				<th><h3>Editar Registro</h3></th>
				<th><h3>Eliminar Registro</h3></th>
			</tr>
		</thead>
		@foreach($usus as $usu)
		<tbody>
			<tr>
				<td>{{ $usu->id_usuario}}</td>
				<td>{{ $usu->matricula}}</td>
				<td>{{ $usu->app }} {{ $usu->apm }} {{ $usu->nombre }}</td>
				<td> @if($usu->gen == 0)
					Masculino
					@else
					Femenino
					@endif</td>
				<td>{{ $usu->email}}</td>
				<td><h3><a href="{{ route('modificar', ['id' => $usu->id_usuario]) }}"><i class="fas fa-pen-square"></i> Editar perfil</a></h3></td>
				<td><h3><a href="{{ route('borrar', ['id' => $usu->id_usuario]) }}"><i class="fas fa-trash-alt"></i> Eliminar usuario</a></h3></td>
							
			</tr>
		</tbody>

		@endforeach
		<!-- <tfoot>
												<tr>
													<td colspan="2"></td>
													<td>100.00</td>
												</tr>
											</tfoot> -->
	</table>
</div>



<!-- <div id="">
					<div class=""></div>
					<h1>
						
					</h1>
					<div class="">

					 <br>
						
						 <br>
						{{ $usu->pass }} <br>
						{{ $usu->img }} <br>
						{{ $usu->id_grupo }} <br>
						{{ $usu->id_tipo}} <br>
						{{ $usu->activo }} <br>
					</div>
				</div> -->

						</div>
					</div>

				@include ('layouts.menu')

			</div>

			@include ('layouts.footer')

	</body>
</html>
