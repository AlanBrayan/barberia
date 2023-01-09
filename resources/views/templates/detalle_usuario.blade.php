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

<style>
	.card {
		box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
		transition: 0.3s;

		border-radius: 5px;
		text-align: center;
	}

	.card:hover {
		box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
	}

	img {
		border-radius: 5px 5px 0 0;
	}

	.container {
		padding: 2px 16px;
	}
</style>

<body class="is-preload">

	<!-- Wrapper -->
	<div id="wrapper">

		<!-- Main -->
		<div id="main">
			<div class="inner">

				@include ('layouts.header')


				<h2>Perfil</h2>
				<form action="{{ route('email_eliminar_usuario') }}" method="GET">
				<div>
				@foreach($usus as $usu)
				@if($usu->id_usuario == session('session_id'))

					<div class="card">
						<!-- <img src="{{ asset('img/'.$usu->img) }}" alt="Imagen" width="200" height="200"> -->
						<div class="container">
						<table>
							<td><br>
								<th><h3>Nombre : {{ $usu->nombre}} {{ $usu->app}} {{ $usu->apm}} <br>
								
							
								</th><br>
							</td>
							<td>
								Email: {{ $usu->email }} <br>
								 <input type="hidden" name="email" value="{{ $usu->email }}">

								@if($usu->tipo_usuario == 1)
								<center>
									SUPER ADMINISTRADOR
								</center>
								@endif
								@if($usu->tipo_usuario == 2)
								<center>
									USUARIO
								</center>
								@endif
								@if($usu->tipo_usuario == 3)
								<center>
									ADMINISTRADOR
								</center>
								@endif
								<input type="text" value="{{ $usu->id_usuario }}">
								Fecha de nacimiento: {{ $usu->fn }} <br>
								Telefono: {{ $usu->tel}} <br>
								<br></br>
						<input type="submit" value="Eliminar usuario">								

							</td>
						</table>

						</div>
					</div>
					@endif

@endforeach


				</div>
				</form>
			</div>
		</div>

		@include ('layouts.menu')

	</div>

	@include ('layouts.footer')

</body>

</html>