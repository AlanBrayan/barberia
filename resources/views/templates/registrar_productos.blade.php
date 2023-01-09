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


				<form action="{{ route ('guardarProductos')}}" method="POST" name="nuevo" enctype="multipart/form-data">

					{{ csrf_field() }}

					<div style="padding: 1%;">
						<td>Nombre Del Producto :</td>
						<td><input type="text" name="nombre_producto" id="nombre_producto" value="{{ old('nombre_producto')}}" required autocomplete="off"></td>
					</div>
					@if($errors->first('nombre_producto')) <i>{{$errors -> first ('nombre_producto')}}</i>@endif

					<div style="padding: 1%;">
						Numero de existencias : <input type="number" name="no_existencias" id="no_existencias" value="{{ old('no_existencias')}}" required autocomplete="off">
					</div>
					@if($errors->first('no_existencias')) <i>{{$errors -> first ('no_existencias')}}</i>@endif
					

					<div style="padding: 1%;">
						Precio : <input type="number" name="precio" id="precio" required autocomplete="off">
					</div>
					@if($errors->first('precio')) <i>{{$errors -> first ('precio')}}</i>@endif

					<div style="padding: 1%;">
					<!-- como cambiar el tamaño -->
						Descripcion : <input type="text" name="descripcion" id="descripcion" value="{{ old('descripcion')}}" required autocomplete="off">
					</div>
					@if($errors->first('descripcion')) <i>{{$errors -> first ('descripcion')}}</i>@endif

					<!-- <div style="padding: 1%;">
						Tipo de joyeria : 

						<select name="tipo_joya_id" id="tipo_joya_id" value="{{ old('tipo_joya_id')}}">
							<option value="1">Anillo</option>
							<option value="2">Collar</option>
							<option value="3">Reloj</option>
						</select>
						
						<input type="text" name="tipo_joya_id" id="tipo_joya_id" value="{{ old('tipo_joya_id')}}">
					</div> -->

					
					<br>
					Selecciona una imagen respecto al producto ingresado : <input type="file" name="img" required autocomplete="off"><br><br><br>

					<!-- Imagen secundaria : <input type="file" name="img2"><br> -->

					<hr>
					<!--*Genero : <input type="text" name="gen"><br>

Grupo : <input type="text" name="grupo"><br>
*Activo : <input type="text" name="activo"><br> -->

					<input type="submit" value="Enviar">
				</form>

			</div>
		</div>
		<script>
		$(document).ready(function(){
			//$("#nombre_producto").keyup(function(){
			//				var txtapm = $("#nombre_producto").val();
            //                var formato = /^[A-Za-z\_\-\.\s\xF1\xD1]+$/;
			//				
            //                if(formato.test(txtapm)){ $("#nombre_producto").css({"border": "1px solid #0F0"}).fadeIn(2000); }
            //                else{ $("#nombre_producto").css({"border": "1px solid #F00"}).fadeIn(2000); }
            //            });
			// -------------------------------------------------------------
			const $input = document.querySelector("#no_existencias");
                            const patron = /[0-9]+/;

                            $input.addEventListener("keydown", event => {
                            console.log(event.key);
                            if(patron.test(event.key)){
                                $('#no_existencias').css({ "border":"1px solid #0C0" });
                            }  
                            else{
                                if(event.keyCode==8){ console.log("backspace"); }
                                else{ event.preventDefault(); }
                            }  
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
			//$("#descripcion").keyup(function(){
			//				var txtapm = $("#descripcion").val();
            //                var formato = /^[A-Za-z0-9\_\-\.\s\xF1\xD1]+$/;
			//			
            //                if(formato.test(txtapm)){ $("#descripcion").css({"border": "1px solid #0F0"}).fadeIn(2000); }
            //                else{ $("#descripcion").css({"border": "1px solid #F00"}).fadeIn(2000); }
            //            });
			// -----------------------------------------------------------------------
			const $medida = document.querySelector("#medida");
                            $medida.addEventListener("keydown", event => {
                            console.log(event.key);
                            if(patron.test(event.key)){
                                $('#medida').css({ "border":"1px solid #0C0" });
                            }  
                            else{
                                if(event.keyCode==8){ console.log("backspace"); }
                                else{ event.preventDefault(); }
                            }  
                            });
			// ------------------------------------------------------------------------------
			const $precio_oferta = document.querySelector("#precio_oferta");
                            $precio_oferta.addEventListener("keydown", event => {
                            console.log(event.key);
                            if(patron.test(event.key)){
                                $('#precio_oferta').css({ "border":"1px solid #0C0" });
                            }  
                            else{
                                if(event.keyCode==8){ console.log("backspace"); }
                                else{ event.preventDefault(); }
                            }  
                            });
					});
		
		</script>
		
		@include ('layouts.menu')

	</div>

	@include ('layouts.footer')

</body>

</html>