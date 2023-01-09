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

			<h2>Editar Ventas</h2>


				<form action="{{ route('salvarVentas', ['id' => $usu->id_venta]) }}" method="POST" name="nuevo3" enctype="multipart/form-data">

					{{ csrf_field() }}
					{{ method_field('PUT') }} 

					<div style="padding: 1%;">
						Monto total : <input type="number" name="monto_total" value="{{ $usu->monto_total }}">
					</div>
					@if($errors->first('monto_total')) <i>{{$errors -> first ('monto_total')}}</i>@endif

					<div style="padding: 1%;">
						Id de la direccion vinculada : <input type="number" name="direcciones_id" value="{{ $usu->direcciones_id }}">
					</div>
					@if($errors->first('direcciones_id')) <i>{{$errors -> first ('direcciones_id')}}</i>@endif
					

					<div style="padding: 1%;">
						Cliente que realizo la compra : <input type="number" name="clientes_id" value="{{ $usu->clientes_id }}"><br>
					</div>
					@if($errors->first('clientes_id')) <i>{{$errors -> first ('clientes_id')}}</i>@endif
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