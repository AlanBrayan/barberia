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

			<h2>Editar Productos</h2>


				<form action="{{ route('salvarEmpleados', ['id' => $usu->id_empleado]) }}" method="POST" name="nuevo3" enctype="multipart/form-data">

					{{ csrf_field() }}
					{{ method_field('PUT') }} 

					<div style="padding: 1%;">
						Nombre: <input type="text" name="nombre" value="{{ $usu->nombre }}">
					</div>
					@if($errors->first('nombre')) <i>{{$errors -> first ('nombre')}}</i>@endif

					<div style="padding: 1%;">
						Apellido paterno: <input type="text" name="app" value="{{ $usu->app }}">
					</div>
					@if($errors->first('app')) <i>{{$errors -> first ('app')}}</i>@endif
					
					<div style="padding: 1%;">
						Apellido materno : <input type="text" name="apm" value="{{ $usu->apm }}">
					</div>
					@if($errors->first('apm')) <i>{{$errors -> first ('apm')}}</i>@endif

					<div style="padding: 1%;">
						Telefono: <input type="text" name="tel" value="{{ $usu->tel }}">
					</div>
					@if($errors->first('tel')) <i>{{$errors -> first ('tel')}}</i>@endif


					<div style="padding: 1%;">
						Fecha de nacimiento : <input type="date" name="fn" value="{{ $usu->fn}}">
					</div>
					@if($errors->first('fn')) <i>{{$errors -> first ('fn')}}</i>@endif

					<div style="padding: 1%;">
						Especialidad : <input type="text" name="especialidad" value="{{ $usu->especialidad}}">
					</div>
					@if($errors->first('especialidad')) <i>{{$errors -> first ('especialidad')}}</i>@endif
					
					
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