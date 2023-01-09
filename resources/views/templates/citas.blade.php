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


				<h2>Citas realizadas</h2>
				@if(session('session_tipo') == 1)
				<div>
					<form action="{{ route ('informacion')}}" method="GET" name="nuevo" enctype="multipart/form-data">

					
						Selecciona el empleado <select name="id_empleado" id="id_empleado" >
							<option value="">--Selecciona el empleado--</option>
						@foreach($empleados as $empleado)
							<option value="{{ $empleado->id_empleado }}">{{ $empleado->nombre }}</option>
						@endforeach
						</select>

						<input type="submit" value="Enviar">
					</form>
				</div>
				 @endif


				<div>
					
					<table>
						<thead>
							<tr>

								<th><h3>Usuario</h3></th>
								<th><h3>Empleado</h3></th>
								<th><h3>Fecha</h3></th>
								<th><h3>Hora</h3></th>
								<th><h3>Servicio</h3></th>
								
								<th><h3>Eliminar Registro</h3></th>
							</tr>
						</thead>
						@foreach($usus as $usu)
						@if(session('session_tipo') == 1)
						<tbody>
							<tr>



							@foreach($usuarios as $usuario)
								@if($usu->id_usuario == $usuario->id_usuario)



								<td>{{ $usuario->nombre}}</td>
								@endif
							@endforeach

							@foreach($empleados as $empleado)
								@if($usu->id_empleado == $empleado->id_empleado)



								<td>{{ $empleado->nombre}}</td>
								@endif
							@endforeach


								
								<td>{{ $usu->fecha }}</td>
								<td>{{ $usu->hora}}</td>



								
								@foreach($servicios as $servicio)
								@if($usu->id_servicio == $servicio->id_servicio)



								<td>{{ $servicio->nombre_servicio}}</td>
								@endif
								@endforeach
								
								
								<td><h3><a href="{{ route('borrarCita', ['id' => $usu->id_cita]) }}"><i class="fas fa-trash-alt"></i> Eliminar</a></h3></td>
							

							</tr>
						</tbody>
						@endif


						@if(session('session_tipo') == 2)
						@if(session('session_id') == $usu->id_usuario))
						<tbody>
							<tr>



							@foreach($usuarios as $usuario)
								@if($usu->id_usuario == $usuario->id_usuario)



								<td>{{ $usuario->nombre}}</td>
								@endif
							@endforeach

							@foreach($empleados as $empleado)
								@if($usu->id_empleado == $empleado->id_empleado)



								<td>{{ $empleado->nombre}}</td>
								@endif
							@endforeach


								
								<td>{{ $usu->fecha }}</td>
								<td>{{ $usu->hora}}</td>



								
								@foreach($servicios as $servicio)
								@if($usu->id_servicio == $servicio->id_servicio)



								<td>{{ $servicio->nombre_servicio}}</td>
								@endif
								@endforeach
								
								
								<td><h3><a href="{{ route('borrarCita', ['id' => $usu->id_cita]) }}"><i class="fas fa-trash-alt"></i> Eliminar</a></h3></td>
							

							</tr>
						</tbody>
						@endif
						@endif
						
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