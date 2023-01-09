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

			<h2>Editar Materiales</h2>


				<form action="{{ route('salvarMateriales', ['id' => $usu->id_material]) }}" method="POST" name="nuevo3" enctype="multipart/form-data">

					{{ csrf_field() }}
					{{ method_field('PUT') }} 

					<div style="padding: 1%;">
						Nombre del material : <input type="text" name="nombre" value="{{ $usu->nombre }}">
					</div>
					@if($errors->first('nombre')) <i>{{$errors -> first ('nombre')}}</i>@endif

					<div style="padding: 1%;">
						Tipo de material : <input type="text" name="tipo_material" value="{{ $usu->tipo_material }}">
					</div>
					@if($errors->first('tipo_material')) <i>{{$errors -> first ('tipo_material')}}</i>@endif
					
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