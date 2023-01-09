<!DOCTYPE HTML>

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


				<h2>Citas realizadas</h2>
			
				<form action="{{ route ('informacion')}}" method="GET" name="nuevo" enctype="multipart/form-data">

				<div>
					Selecciona el empleado <select name="id_empleado" id="id_empleado" >
						<option value="">--Selecciona el empleado--</option>
					@foreach($empleados as $empleado)
						<option value="{{ $empleado->id_empleado }}">{{ $empleado->nombre }}</option>
					@endforeach
					</select>
					
					<input type="submit" value="Enviar">
					
					
				
				
					
				</div>
				</form>

			</div>
		</div>

		@include ('layouts.menu')

	</div>

	@include ('layouts.footer')

	
</body>

</html>