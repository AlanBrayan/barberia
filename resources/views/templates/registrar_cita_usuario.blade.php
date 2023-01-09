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
	<script src=" {{ asset('js/jquery-3.3.1.js') }} "></script>
	<script src=" {{ asset('js/jquery-ui.js') }} "></script>

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
					USUARIO: 
					<select name="id_usuario" id="id_usuario">
						<option value="{{session('session_id')}}">{{session('session_name')}}</option>
					</select>						
					</div>
					@if($errors->first('id_usuario')) <i>{{$errors -> first ('id_usuario')}}</i>@endif

					<div style="padding: 1%;">

						Selecciona el empleado <select name="id_empleado" id="id_empleado" >
							<option value="">--Selecciona un usuario--</option>
							@foreach($empleados as $empleado)
							<option value="{{ $empleado->id_empleado }}">{{ $empleado->nombre }}</option>
						@endforeach
						</select>
						
					</div>
					@if($errors->first('id_empleado')) <i>{{$errors -> first ('id_empleado')}}</i>@endif


					<div style="padding: 1%;">
						Escribe la fecha de cita: <input type="date" name="fecha" value="{{ old('fecha')}}">
					</div>
					@if($errors->first('fecha')) <i>{{$errors -> first ('fecha')}}</i>@endif

					<div style="padding: 1%;">
						Hora de cita: <input type="time" name="hora" value="{{ old('hora')}}">
					</div>
					@if($errors->first('hora')) <i>{{$errors -> first ('hora')}}</i>@endif
					

					<div style="padding: 1%;">
						Selecciona el servicio: 
						<select name="id_servicio" id="id_servicio">
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
<script>
	$(document).ready(function(){
		var id = $('#id_usuario').val();
		console.log("id"+id);
	})
	
</script>




</html>