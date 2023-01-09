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

	<script src=" {{ asset('js/jquery-3.3.1.js') }} "></script>
	<script src=" {{ asset('js/jquery-ui.js') }} "></script>
</head>

<body class="is-preload">

	<!-- Wrapper -->
	<div id="wrapper">

		<!-- Main -->
		<div id="main">
			<div class="inner">

			@include ('layouts.header')


				<form action="{{ route ('guardarServicios')}}" method="POST" name="nuevo" enctype="multipart/form-data">

					{{ csrf_field() }}

					<div style="padding: 1%;">
						<td>Nombre Del servicio :</td>
						<td><input type="text" name="nombre_servicio" id="nombre_servicio" value="{{ old('nombre_servicio')}}" required autocomplete="off"></td>
					</div>
					@if($errors->first('nombre_servicio')) <i>{{$errors -> first ('nombre_servicio')}}</i>@endif

					<div style="padding: 1%;">
					<!-- como cambiar el tamaño -->
						Descripcion : <input type="text" name="descripcion" id="descripcion" value="{{ old('descripcion')}}" required autocomplete="off">
					</div>
					@if($errors->first('descripcion')) <i>{{$errors -> first ('descripcion')}}</i>@endif

                    <div style="padding: 1%;">
						Precio : <input type="number" name="precio" id="precio" required autocomplete="off">
					</div>
					@if($errors->first('precio')) <i>{{$errors -> first ('precio')}}</i>@endif
	
					<br>
					Selecciona una imagen respecto al servicio ingresado : <input type="file" name="img" required autocomplete="off"><br><br><br>

					<hr>

					<input type="submit" value="Enviar">
				</form>

			</div>
		</div>
		<script>
		$(document).ready(function(){
			$("#nombre_servicio").keyup(function(){
							var txtapm = $("#nombre_servicio").val();
                            var formato = /^[A-Za-z\_\-\.\s\xF1\xD1]+$/;
							
                            if(formato.test(txtapm)){ $("#nombre_servicio").css({"border": "1px solid #0F0"}).fadeIn(2000); }
                            else{ $("#nombre_servicio").css({"border": "1px solid #F00"}).fadeIn(2000); }
                        });
					
			//--------------------------------------------------------------------
			const $precio = document.querySelector("#precio");
                            $precio.addEventListener("keydown", event => {
                            console.log(event.key);
                            if(patron.test(event.key)){
                                $('#precio').css({ "border":"1px solid #0C0" });
                            }  
                            else{
                                if(event.keyCode==8){ console.log("backspace"); }
                                else{ event.preventDefault(); }
                            }  
                            });
			// -------------------------------------------------------------------
			$("#descripcion").keyup(function(){
							var txtapm = $("#descripcion").val();
                            var formato = /^[A-Za-z0-9\_\-\.\s\xF1\xD1]+$/;
						
                            if(formato.test(txtapm)){ $("#descripcion").css({"border": "1px solid #0F0"}).fadeIn(2000); }
                            else{ $("#descripcion").css({"border": "1px solid #F00"}).fadeIn(2000); }
                        });
			
			// ------------------------------------------------------------------------------
			
					});
		
		</script>
		
		@include ('layouts.menu')

	</div>

	@include ('layouts.footer')

</body>

</html>