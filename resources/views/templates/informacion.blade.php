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


				<h2>Citas realizadas</h2>
				<div>
					<form action="{{ route ('informacion')}}" method="GET" name="nuevo" enctype="multipart/form-data">

					
						Selecciona el empleado <select name="id_empleado" id="id_empleado" >
							<option value="">--Selecciona el empleado--</option>
						@foreach($empleados as $empleado)
							<option value="{{ $empleado->id_empleado }}">{{ $empleado->nombre }}</option>
						@endforeach
						</select>

						<input type="submit" value="Enviar">
					</form>
                    <table>
                        <thead>
                            <tr>
                                <th><h3>Empleado</h3></th>
								<th><h3>Usuario del servicio</h3></th>
								<th><h3>Fecha</h3></th>
								<th><h3>Hora</h3></th>
								<th><h3>Servicio</h3></th>
                            </tr>
                        </thead>
                        @foreach($usus as $usu)
                        @if(session('session_tipo') == 1)
                        <tbody>
                        
                      
                            <tr>
                            
                                <td>{{ $usu->id_empleado}}</td>

                               
                                <td>{{ $usu->id_usuario}}</td>
                              

                                <td>{{ $usu->fecha}}</td>
                                <td>{{ $usu->hora}}</td>
                                <td>{{ $usu->id_servicio}}</td>
                                
                            </tr>
                        
                        
                        </tbody>
                        @endif
                        @endforeach
                    </table>

                    
                        
                    
				</div>


				<div>
					
					
				</div>

			</div>
		</div>

		@include ('layouts.menu')

	</div>

	@include ('layouts.footer')

</body>

</html>