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
		<script>
			

		</script>
	</head>
	<style>
	
	</style>

<!-- Sidebar -->
<div id="sidebar">



						<div class="inner">

							<!-- Search
								<section id="search" class="alt">
									<form method="post" action="#">
										<input type="text" name="query" id="query" placeholder="Search" />
									</form>
								</section> -->

							<!-- Menu -->
								<nav id="menu" >
									<header class="major">
										<h2>Menu</h2>
									</header>
									<ul>
										<li><a href="{{ route('home')}}">Pagina de Inicio</a></li>
										<li><a href="{{ route('detalleUsuario')}}">Ver perfil</a></li>
										<li><a href="{{ route('catalogo')}}">Nuestros productos</a></li>
										<li><a href="{{ route('catalogo1')}}">Nuestros servicios</a></li>
										@if(session('session_tipo') == 0)
										<li>
											<span class="opener">Sesion/Cliente</span>
											<ul>
												<li><a href="{{ route('registrarse')}}">Registrarse</a></li>
												
												<li><a href="{{ route('iniciar_sesion')}}">Iniciar sesion</a></li>
												

											</ul>
										</li>
										@endif

										@if(session('session_tipo') == 1 || session('session_tipo') == 3)
										
										<li>
											<span class="opener">Productos</span>
											<ul>
												<li><a href="{{ route('registrarProductos')}}">Registrar Productos</a></li>
												<li><a href="{{ route('productos')}}">Ver lista de productos</a></li>
												
											</ul>
										</li>
										<li>
											<span class="opener">Servicios</span>
											<ul>
												<li><a href="{{ route('registrarServicios')}}">Registrar Servicios</a></li>
												<li><a href="{{ route('servicios')}}">Ver lista de servicios</a></li>
												
											</ul>
										</li>
										@endif

										@if(session('session_tipo') == 1)
										<li>
											<span class="opener">Empleados</span>
											<ul>
												<li><a href="{{ route('registrarEmpleados')}}">Registrar Empleados</a></li>
												<li><a href="{{ route('empleados')}}">Ver lista de empleados</a></li>
												<li><a href="{{ route('citasEmpleado')}}">Ver agenda de empleados</a></li>
												
											</ul>
										</li>
										
										<li>
											<span class="opener">Comprar producto</span>
											<ul>
												
												<li><a href="{{ route('registrarVentas')}}">Comprar productos</a></li>
												<li><a href="{{ route('ventas')}}">Ver productos vendidos</a></li>
											</ul>
										</li>
										<li>
											<span class="opener">Agendar cita</span>
											<ul>
											<li><a href="{{ route('registrarCitas')}}">Agenda tu cita</a></li>
											<li><a href="{{ route('citas')}}">Ve citas realizadas</a></li>
												
												
											</ul>
										</li>

										<li>
											<span class="opener">Reportes</span>
											<ul>
											<li><a href="{{ route('reporteVenta')}}">Ventas</a></li>
											<li><a href="{{ route('reporteProducto')}}">Productos</a></li>												
											<li><a href="{{ route('reporteServicio')}}">Servicios</a></li>												
											<li><a href="{{ route('reporteEmpleado')}}">Empleados</a></li>												
											<li><a href="{{ route('reporteUsuario')}}">Usuarios</a></li>												
											</ul>
										</li>

										
										@endif
										@if(session('session_tipo') == 2)
										<li>
											<span class="opener">Comprar producto</span>
											<ul>
												
												<li><a href="{{ route('registrarVentasUsuario')}}">Registrar venta</a></li>
												<li><a href="{{ route('ventas')}}">Ver mis compras</a></li>
											</ul>
										</li>
										<li>
											<span class="opener">Realizar una cita</span>
											<ul>
												
												<li><a href="{{ route('registrarCitasUsuario')}}">realizar cita</a></li>
												<li><a href="{{ route('citas')}}">Ver mis citas</a></li>
											</ul>
										</li>
										
										@endif
										
										
									</ul>
										
								</nav>

								

							<!-- Section -->
								<!-- <section>
									<header class="major">
										<h2>Ante interdum</h2>
									</header>
									<div class="mini-posts">
										<article>
											<a href="#" class="image"><img src="images/pic07.jpg" alt="" /></a>
											<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore aliquam.</p>
										</article>
										<article>
											<a href="#" class="image"><img src="images/pic08.jpg" alt="" /></a>
											<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore aliquam.</p>
										</article>
										<article>
											<a href="#" class="image"><img src="images/pic09.jpg" alt="" /></a>
											<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore aliquam.</p>
										</article>
									</div>
									<ul class="actions">
										<li><a href="#" class="button">More</a></li>
									</ul>
								</section> -->

							<!-- Section -->
								<section>
									<header class="major">
										<h2>Contactanos</h2>
									</header>
									<p>Si tienes alguna duda, contactanos nosotros la resolveremos</p>
									<ul class="contact">
										<li class="icon solid fa-envelope"><a href="{{ route('emailform')}}">urbancut@gmail.com</a></li>
										<li class="icon solid fa-phone">55 (722) 908-7418</li>
										<!-- <li class="icon solid fa-home">1234 Somewhere Road #8254<br />
										Nashville, TN 00000-0000</li> -->
										
									</ul>
								</section>

							<!-- Footer -->
								<footer id="footer">
									<p class="copyright">&copy; Untitled. All rights reserved. Demo Images: <a href="https://unsplash.com">Unsplash</a>. Design: <a href="https://html5up.net">HTML5 UP</a>.</p>
								</footer>

						</div>
					</div>