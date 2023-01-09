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


				<h2>Direcciones registradas</h2>

				<div>
					<table>
						<thead>
							<tr>

								<th>
									<h3>Direccion del cliente</h3>
								</th>
								<th>
									<h3>Calle</h3>
								</th>
								<th>
									<h3>Numero Direccion</h3>
								</th>
								<th>
									<h3>Localidad</h3>
								</th>
								<th>
									<h3>Municipio</h3>
								</th>
								<th>
									<h3>Estado</h3>
								</th>
								<th>
									<h3>Editar Registro</h3>
								</th>
								<th>
									<h3>Eliminar Registro</h3>
								</th>
							</tr>
						</thead>
						@foreach($usus as $usu)
						<tbody>
							<tr>
								
							@foreach($comps as $comp)
							@if($usu->cliente_id  == $comp->id_usuario)
								<td>{{ $comp->nombre}} {{ $comp->app}}</td>
							@endif
							@endforeach
							
								<td>{{ $usu->calle}}</td>
								<td>{{ $usu->numero_direccion}}</td>
								<td>{{ $usu->localidad}}</td>
								<td>{{ $usu->municipio}}</td>
								<td>{{ $usu->estado}}</td>

								<td>
									<h3><a href="{{ route('modificarVentas', ['id' => $usu->id_venta]) }}"><i class="fas fa-pen-square"></i> Editar</a></h3>
								</td>
								<td>
									<h3><a href="{{ route('borrarVenta', ['id' => $usu->id_venta]) }}"><i class="fas fa-trash-alt"></i> Eliminar</a></h3>
								</td>
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