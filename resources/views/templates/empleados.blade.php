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


				<h2>Empleados registrados</h2>

				<div>
					<table>
						<thead>
							<tr>

								<th><h3>Nombre empleado</h3></th>
								<th><h3>Telefono</h3></th>
								<th><h3>Fecha nacimiento</h3></th>
                                <th><h3>Especialidad</h3></th>
								<th><h3>Editar Registro</h3></th>
								<th><h3>Eliminar Registro</h3></th>
							</tr>
						</thead>
						@foreach($usus as $usu)
						<tbody>
							<tr>
								<td>{{ $usu->nombre}} {{ $usu->app}}</td>
								<td>{{ $usu->tel }}</td>
								<td>{{ $usu->fn}}</td>
                                <td>{{ $usu->especialidad}}</td>
								<td><h3><a href="{{ route('modificarEmpleados', ['id' => $usu->id_empleado]) }}"><i class="fas fa-pen-square"></i> Editar</a></h3></td>
								<td><h3><a href="{{ route('borrarEmpleado', ['id' => $usu->id_empleado]) }}"><i class="fas fa-trash-alt"></i> Eliminar</a></h3></td>
							

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