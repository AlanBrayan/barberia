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

			<h2>Nueva Venta</h2>


				<form action="{{ route ('guardarCitas')}}" method="POST" name="nuevo">

					{{ csrf_field() }}

					<div style="padding: 1%;">

						Selecciona el usuario <select name="id_usuario" id="id_usuario" required autocomplete="off">
							<option value="">--Selecciona un usuario--</option>
							@foreach($usuarios as $usuario)
							<option value="{{ $usuario->id_usuario }}">{{ $usuario->nombre }}</option>

						@endforeach
						</select>
						
					</div>
					@if($errors->first('id_usuario')) <i>{{$errors -> first ('id_usuario')}}</i>@endif

					<div style="padding: 1%;">

						Selecciona el empleado <select name="id_empleado" id="id_empleado" required autocomplete="off">
							<option value="">--Selecciona un usuario--</option>
							@foreach($empleados as $empleado)
							<option value="{{ $empleado->id_empleado }}">{{ $empleado->nombre }}</option>
						@endforeach
						</select>
						
					</div>
					@if($errors->first('id_empleado')) <i>{{$errors -> first ('id_empleado')}}</i>@endif


					<div style="padding: 1%;">
						Escribe la fecha de cita: <input type="date" name="fecha" value="{{ old('fecha')}}" required autocomplete="off">
					</div>
					@if($errors->first('fecha')) <i>{{$errors -> first ('fecha')}}</i>@endif

					<div style="padding: 1%;">
						Hora de cita: <input type="time" name="hora" value="{{ old('hora')}}" required autocomplete="off">
					</div>
					@if($errors->first('hora')) <i>{{$errors -> first ('hora')}}</i>@endif
					

					<div style="padding: 1%;">
						Selecciona el servicio: 
						<select name="id_servicio" id="id_servicio" required autocomplete="off">
							<option value="">--Selecciona un servicio--</option>
							@foreach($servicios as $servicio)
							
							
							<option value="{{ $servicio->id_servicio }}">{{ $servicio->nombre_servicio }} -----------------------  Costo: ${{ $servicio->precio }}</option><br>
				

							@endforeach
						</select>

						
					</div>
					<hr>
					
					

					
					<hr>

					

					<input type="submit" value="Enviar">
				</form>

			</div>
		</div>

		@include ('layouts.menu')

	</div>

	@include ('layouts.footer')

</body>





</html>