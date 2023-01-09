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


				<h2>Productos registrados</h2>

				<div>
					<table>
						<thead>
							<tr>

								<th><h3>Nombre producto</h3></th>
								<th><h3>Precio</h3></th>
								<th><h3>Descripcion</h3></th>
								<th><h3>Editar Registro</h3></th>
								<th><h3>Eliminar Registro</h3></th>
							</tr>
						</thead>
						@foreach($usus as $usu)
						<tbody>
							<tr>
								<td>{{ $usu->nombre_servicio}}</td>
								<td>{{ $usu->precio }}</td>
								<td>{{ $usu->descripcion}}</td>
								<td><h3><a href="{{ route('modificarServicios', ['id' => $usu->id_servicio]) }}"><i class="fas fa-pen-square"></i> Editar</a></h3></td>
								<td><h3><a href="{{ route('borrarServicio', ['id' => $usu->id_servicio]) }}"><i class="fas fa-trash-alt"></i> Eliminar</a></h3></td>
							

							</tr>
						</tbody>
						
						@endforeach
	
					</table>
				</div>

			</div>
		</div>

		@include ('layouts.menu')

	</div>

	@include ('layouts.footer')

</body>

</html>