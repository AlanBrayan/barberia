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

				@include ('layouts.header')

				<h2>Carrito de productos</h2>
				<a href="{{ route('catalogo')}}" class="button big">Catalogo</a><br></br>
				<div>
					<div>
						<div>
							@if (count(Cart::getContent()))
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
									@foreach (Cart::getContent() as $item)
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

    <!-- Replace "test" with your own sandbox Business account app client ID -->
    <script src="https://www.paypal.com/sdk/js?client-id=AbGDw3KOnjFg5oBE7_mfamQPlt8DdcTQjFA0FHg35sytUnCWMUU6-8E3iCg_AarEk3LsPT9DvHGOYZNZ&currency=MXN"></script>
    <!-- Set up a container element for the button -->
    <div id="paypal-button-container"></div>
    <script>
      paypal.Buttons({
        // Sets up the transaction when a payment button is clicked
        createOrder: (data, actions) => {
          return actions.order.create({
            purchase_units: [{
              amount: {
                value: '{{$total}}' // Can also reference a variable or function
              }
            }]
          });
        },
        // Finalize the transaction after payer approval
        onApprove: (data, actions) => {
          return actions.order.capture().then(function(orderData) {
            // Successful capture! For dev/demo purposes:
            console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));
            const transaction = orderData.purchase_units[0].payments.captures[0];
            alert(`Transaction ${transaction.status}: ${transaction.id}\n\nSee console for all available details`);
            // When ready to go live, remove the alert and show a success message within this page. For example:
            // const element = document.getElementById('paypal-button-container');
            // element.innerHTML = '<h3>Thank you for your payment!</h3>';
            // Or go to another URL:  actions.redirect('thank_you.html');
          });
        }
      }).render('#paypal-button-container');
    </script>

			</div>


			</div>
		</div>

		@include ('layouts.menu')

	</div>

	@include ('layouts.footer')

</body>

</html>