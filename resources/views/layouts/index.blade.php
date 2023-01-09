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

				<!-- Banner -->
				<section id="banner">
					<div class="content">
						<header>

						
							<h1>Comienza el dia <br />
								con un nuevo estilo</h1>
							<p>¿Te gustaria tener un nuevo estilo?</p>
						</header>
						<p>
							Urbancut es un sistema orientado a cualquier tipo de clientes
							Comienza ahora! 
							Puedes encontrar distintos cortes y productos para tu estilo!
							<P>
								Es hora de comenzar, comienza a ver nuestro gran catalogo y comienza con una cita hoy mismo!
							</P>

							<P>
								Los precios de los productos y servicios estan sujetos a el establecimiento seleccionadoq
							</P>

						</p>
						<ul class="actions">
							<li><a href="{{route('catalogo')}}" class="button big">¡Vamos alla!</a></li>
						</ul>
					</div>
					<span class="image">
					
						<img src="https://images.pexels.com/photos/3998415/pexels-photo-3998415.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="partner" class="img-fluid">

					</span>
				</section>

				<!-- s -->

				<section id="banner">
					<div class="content">
						<header>
							<h1>Encuentranos en:</h1>
						</header>
						<p><h4>Si desea acudir a nuestro establecimiento para comprar o recibir tus productos, puede consultar la dirección en el siguiente enlace, por el bien de todos mantengamos las medidas de prevención de contagio, esperamos su visita.</h4> </p>
						<ul class="actions">
							<li><a href="{{ route('mapa') }}" class="button big"><i class="fas fa-map-marked"></i>  Aquí</a></li>
						</ul>
					</div>
					
				</section>


			</div>
			
		</div>

		@include ('layouts.menu')

	</div>

	@include ('layouts.footer')

</body>

</html>

<!-- <script>
window.onload = function (){
	if(typeof history.pushState === "function"){
		history.pushState("jibberish",null,null);
		window.onpopstate = function(){
			history.pushState("newjibberish",null,null);
		};
	}else{
		var ignoreHashChange =  true;
		window.onhashchange = function(){
			if (!ignoreHasChange) {
				ignoreHashChange = true;
				window.location.hash = Math.random();				
			}else{
				ignoreHashChange = false;
			}
		}
	}
}
</script> -->