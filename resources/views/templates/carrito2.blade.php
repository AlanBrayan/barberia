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
	<!-- <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" /> -->
	<meta name="viewport" content="width=device-width, initial-scale=1"> <!-- Ensures optimal rendering on mobile devices. -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge" /> <!-- Optimal Internet Explorer compatibility -->
     
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

	.izquierda {
		text-align: right;
	}

	.derecha {
		align-content: left;
	}
</style>

<body class="is-preload">

	<!-- Wrapper -->
	<div id="wrapper">

		<!-- Main -->
		<div id="main">
			<div class="inner">
			<form  method="POST" id="payment-form" action="{!! URL::to('paypal') !!}">

				@include ('layouts.header')
				
				<h2>Carrito de servicios</h2>
				<a href="{{ route('catalogo1')}}" class="button big">Catalogo</a><br></br>
				<div>
					<div>
						<div>
							@if (count(Cart2::getContent()))
							<table>
								<thead>
									<th>ID</th>
									<th>NOMBRE</th>
									<th>CANTIDAD</th>
									<th>PRECIO</th>
									<th>ELIMINAR</th>

								</thead>
								<tbody>
									<input type="hidden" name="total" value="{{$total=0}}">
									@foreach (Cart2::getContent() as $item)
									<tr>
										<td>{{$item->id}}</td>
										<td>{{$item->name}}</td>
										<td>{{$item->quantity}}</td>
										<td>{{$item->price}}</td>
										
										<td>
											<input type="hidden" name="total" value="{{$total=$total+ ($item->quantity * $item->price) }}">
											<form action="{{route('cart.removeitem')}}" method="POST">
												@csrf
												<input type="hidden" name="id" value="{{$item->id}}">
												<button type="submit" class="btn btn-link btn-sm text-danger">x</button>
											</form>
										</td>
									</tr>

									@endforeach

									<tr>
										<td></td>
										<td></td>
										<td>Costo Total: </td>
										<td>${{$total}}</td>
										<td></td>
									</tr>
								</tbody>
							</table>
							@else
							<p>Carrito vacio</p>
							<p>Regresa a Comprar!!</p>

							@endif

							@if(empty(session('session_tipo')))
							<button href="{{ route('registrarDireccion', ['id' => $item->id,'cantidad' => $total]) }}" class="button big" disabled>Comprar</button>
							<h2>Para comprar Inicia Sesion</h2>
							@endif



						</div>

					</div>
				</div>

				<div align="center">

				<h1>Pagar con Paypal</h1>
				<form class="w3-container w3-display-middle w3-card-4 w3-padding-16" method="POST" id="payment-form"
        		  	action="{!! URL::to('paypal') !!}">
    			  	{{ csrf_field() }}
    			  	<button class="w3-btn w3-blue" id="amount" name="amount" value="{{$total}}">Pay with PayPal</button>
    			</form>
				

				
				
				</div>
				</form>
			</div>
		</div>

		@include ('layouts.menu')

	</div>

	@include ('layouts.footer')

</body>

</html>