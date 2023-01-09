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


				<h2>Ventas realizadas</h2>

				<div>
					<table>
						<thead>
							<tr>

								<th><h3>Nombre usuario</h3></th>
								<th><h3>Direccion</h3></th>
								<th><h3>Producto</h3></th>
								<th><h3>Cantidad</h3></th>
								<th><h3>Monto total</h3></th>
								<th><h3>Eliminar Registro</h3></th>
							</tr>
						</thead>
						@foreach($usus as $usu)
						@if(session('session_tipo') == 1)
						<tbody>
							<tr>
								@foreach($usuarios as $usuario)
									@if($usu->id_usuario == $usuario->id_usuario)
										<td>{{ $usuario->nombre}}, {{ $usuario->app}}</td>
									@endif
								@endforeach				
								
								<td>{{ $usu->direccion }}</td>
								
								@foreach($productos as $producto)
									@if($usu->id_producto == $producto->id_producto)
									<td>{{ $producto->nombre_producto}}</td>
									@endif
								@endforeach	
								
								<td>{{ $usu->cantidad}}</td>
								<td>{{ $usu->monto_total}}</td>
								
								<td><h3><a href="{{ route('borrarVenta', ['id' => $usu->id_venta]) }}"><i class="fas fa-trash-alt"></i> Eliminar</a></h3></td>
							

							</tr>
						</tbody>
						@endif

						@if(session('session_tipo') == 2)
						@if(session('session_id') == $usu->id_usuario))
						<tbody>
							<tr>
								@foreach($usuarios as $usuario)
									@if($usu->id_usuario == $usuario->id_usuario)
										<td>{{ $usuario->nombre}}, {{ $usuario->app}}</td>
									@endif
								@endforeach				
								
								<td>{{ $usu->direccion }}</td>
								
								@foreach($productos as $producto)
									@if($usu->id_producto == $producto->id_producto)
									<td>{{ $producto->nombre_producto}}</td>
									@endif
								@endforeach	
								
								<td>{{ $usu->cantidad}}</td>
								<td>{{ $usu->monto_total}}</td>
								
								<td><h3><a href="{{ route('borrarVenta', ['id' => $usu->id_venta]) }}"><i class="fas fa-trash-alt"></i> Eliminar</a></h3></td>
							

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