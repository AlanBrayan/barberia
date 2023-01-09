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

		border-radius: 15px;
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

	.centrar {
		text-align: center;
	}
</style>

<body class="is-preload">

	<!-- Wrapper -->
	<div id="wrapper">

		<!-- Main -->
		<div id="main">
			<div class="inner">

				@include ('layouts.header')

				
				<h2>Detalle Producto</h2>

				<div class="centrar">

						<div class="row">
							<div class="col-sm-6">
								<div class="card">
								<div class="card-body">
									<img src="{{ asset('img/'.$usu->img) }}" alt="Imagen" width="340" height="340">
								</div>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="card">
									<div class="card-body ">
										<div class="container">
											Nombre del producto: <br> 
											<h2>{{ $usu->nombre_producto}}</h2> 
											Numero de existencias actuales: {{ $usu->no_existencias}} <br>
											Precio: <del> $ {{ $usu->precio }} </del><br>
											Descripcion: {{ $usu->descripcion}} <br>
											Precio de oferta: <br> 
											<h4>$ {{ $usu->precio}} </h4><br>
											
											<form action="{{route('cart.add')}}" method="post">
												@csrf
												<input type="hidden" name="id_producto" value="{{$usu->id_producto}}">
												
												<input type="submit" name="btn" class="btn btn-success" value="AÑADIR AL CARRITO">
											</form>
											<a href="{{ route('catalogo')}}" class="button big">Regresar</a><br><br>

										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="card">
								<div class="card-body">
								</div>
								</div>
							</div>
						</div>
				</div>

			</div>
		</div>
		

		@include ('layouts.menu')

	</div>

	@include ('layouts.footer')

</body>

</html>