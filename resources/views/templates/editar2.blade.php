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

			<h2>Editar Perfiles</h2>


				<form action="{{ route('salvar', ['id' => $usu->id_usuario]) }}" method="POST" name="nuevo3" enctype="multipart/form-data">

					{{ csrf_field() }}
					{{ method_field('PUT') }} 
					
					<div>
					Fecha de nacimiento : <input type="date" name="fn" value="{{ $usu->fn }}">
					@if($errors->first('matricula')) <i>{{$errors -> first ('fn')}}</i>@endif
					</div>
					<div>
						Matricula : <input type="text" name="matricula" value="{{ $usu->matricula }}">
					</div>
					@if($errors->first('matricula')) <i>{{$errors -> first ('matricula')}}</i>@endif
					<div>
						Nombre : <input type="text" name="nombre" value="{{ $usu->nombre }}">
					</div>
					@if($errors->first('nombre')) <i>{{$errors -> first ('nombre')}}</i>@endif

					<div>
						Email : <input type="text" name="email" value="{{ $usu->email }}"><br>
					</div>
					@if($errors->first('nombre')) <i>{{$errors -> first ('email')}}</i>@endif

					<div>
						Apellido Paterno : <input type="text" name="app" value="{{ $usu->app }}"><br>
					</div>
					@if($errors->first('nombre')) <i>{{$errors -> first ('app')}}</i>@endif

					<div>
						Apellido Materno : <input type="text" name="apm" value="{{ $usu->apm }}"><br>
					</div>
					@if($errors->first('nombre')) <i>{{$errors -> first ('apm')}}</i>@endif
					<div>
						Password : <input type="text" name="pass" value="{{ $usu->pass }}"><br>
					</div>
					@if($errors->first('nombre')) <i>{{$errors -> first ('pass')}}</i>@endif
					<div>
						Telefono : <input type="text" name="tel" value="{{ $usu->tel }}"><br>
						@if($errors->first('nombre')) <i>{{$errors -> first ('tel')}}</i>@endif
					</div>
					
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