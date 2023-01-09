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



				
					{{ csrf_field() }}
					
					<div style="padding: 1%;">

						Selecciona el usuario <select name="id_usuario" id="id_usuario" required autocomplete="off">
							<option value="">--Selecciona un usuario--</option>
							@foreach($usuarios as $usuario)
							<option value="{{ $usuario->id_usuario }}">{{ $usuario->nombre }}</option>
							@endforeach
						</select>
						
					</div>

					<div style="padding: 1%;">
						Escribe tu direccion: <input type="text" name="direccion" value="{{ old('direccion')}}" id="direccion" required autocomplete="off">
					</div>
					@if($errors->first('direccion')) <i>{{$errors -> first ('direccion')}}</i>@endif
					

					<div style="padding: 1%;">
						Selecciona el producto a comprar 
						<select name="id_producto" id="id_producto">
							<option value="">--Selecciona un producto--</option>
							@foreach($productos as $producto)
							<option value="{{ $producto->id_producto }}-{{ $producto->precio }}">
								{{ $producto->nombre_producto }} 
							</option><br>
							
							
				

						
							
							@endforeach

						</select>

						
					</div>
					<hr>
					
					<div style="padding: 1%;">
						Cantidad: <input type="number" name="cantidad" value="{{ old('cantidad')}}" id="cantidad" required autocomplete="off"><br>
					</div>
					@if($errors->first('cantidad')) <i>{{$errors -> first ('cantidad')}}</i>@endif
					<hr>

					
					
					
					<div id="montoTotal"> 
						
					</div>


					

					<input type="submit" value="Enviar" id="submit">
					

			</div>
		</div>

		@include ('layouts.menu')

	</div>

	@include ('layouts.footer')

</body>
<script type="text/javascript">
    
	$(document).ready(function() {
        

		$('#cantidad').change(function() {
            const producto = $('#id_producto').val();
			const separacion = producto.split('-');
			const precio = separacion[1];
			const id = separacion[0];
            //console.log("Producto seleccionada:" + producto);
			//console.log("Precio:" + precio); 
			//console.log("ID:" + id); 

			var cantidad = $('#cantidad').val();
			//console.log(cantidad);

			var montoTotal=precio*cantidad;
			//console.log(montoTotal);

			if(cantidad = 0){
				$('#montoTotal').empty();
			}else{
				 
				$('#montoTotal').html("MONTO TOTAL = " + montoTotal);
				$('#montoTotal').html("MONTO TOTAL = " + montoTotal);

			}
        })

		

		$('#submit').click(function() {
                var url = "guardarVentas/";
            
				var producto = $('#id_producto').val();
				var separacion = producto.split('-');
				var precio1 = separacion[1];
				var id = separacion[0];


                var id_usuario = $("#id_usuario").val();
                var direccion = $("#direccion").val();
                var id_producto = id;
                var cantidad = $("#cantidad").val();
				var precio = precio1;		
				var monto_total= "$ " + (precio*cantidad);
				console.log(id_usuario);
				console.log(direccion);
				console.log(id_producto);
				console.log(cantidad);
				console.log(precio);
				console.log(monto_total);
				
                var formData = new FormData();
                formData.append('_token', $('input[name=_token]').val());
                formData.append('id_usuario',id_usuario);
                formData.append('direccion',direccion);
                formData.append('id_producto',id_producto);
                formData.append('cantidad',cantidad);
                formData.append('precio',precio);
                formData.append('monto_total',monto_total);
            
                $.ajax({
                    type:"POST",
                    url: url,
                    data: formData,
                    processData: false, // tell jQuery not to process the data
                    contentType: false, // tell jQuery not to set contentType
                    success: function(data) {
                        setTimeout(function() {
                            location.reload(true);
                        }, 100);
                    },
                    error:function(e) {
                        console.log(e);
                    }
                
                });

                



});
		
    });
</script>

</html>