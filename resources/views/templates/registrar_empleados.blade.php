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

    <script type="text/javascript">
        function soloLetras(e) {
                  key = e.keyCode || e.which;
                  tecla = String.fromCharCode(key).toLowerCase();
                  letras = " áéíóúabcdefghijklmnñopqrstuvwxyz";
                  especiales = [8, 37, 39, 46];
            
                  tecla_especial = false
                  for(var i in especiales) {
                      if(key == especiales[i]) {
                          tecla_especial = true;
                          break;
                      }
                  }
              
                  if(letras.indexOf(tecla) == -1 && !tecla_especial)
                      return false;
              }
    </script>
</head>


<body class="is-preload">

	<!-- Wrapper -->
	<div id="wrapper">

		<!-- Main -->
		<div id="main">
			<div class="inner">

			@include ('layouts.header')
        <form action="{{ route ('guardarEmpleados')}}" method="POST" name="nuevo" enctype="multipart/form-data">

        {{ csrf_field() }}
  
        <div>
            <td>Nombre: </td>
            <td><input type="text" onkeypress="return soloLetras(event)" required autocomplete="off" id="nombre" class="nombre" name="nombre"></td>

        </div>
        @if($errors->first('nombre')) <i>{{$errors -> first ('nombre')}}</i>@endif

        <div>
            <td>Ap. Paterno: </td>
            <td><input type="text" onkeypress="return soloLetras(event)" required autocomplete="off" id="app" class="app" name="app"></td>

        </div>
        @if($errors->first('app')) <i>{{$errors -> first ('app')}}</i>@endif

        <div>
            <td>Ap. Materno: </td>
            <td><input type="text" onkeypress="return soloLetras(event)" required autocomplete="off" id="apm" class="apm" name="apm"></td>

        </div>
        @if($errors->first('apm')) <i>{{$errors -> first ('apm')}}</i>@endif

        <div>
            <td>Fecha de nacimiento :</td>  
            <td><input type="date" name="fn" id="fn" required autocomplete="off"></td><br>
            <td><span id="sfecha" class="sfecha"></span></td><br>

        </div>
        @if($errors->first('fn')) <i>{{$errors -> first ('fn')}}</i>@endif

        
        <div>
        Telefono : <input type="text" maxlength="10" id="tel" class="tel" name="tel" required autocomplete="off" onkeypress="return (event.charCode >= 48 && event.charCode <= 57)" min="1" /><br>
            @if($errors->first('tel')) <i>{{$errors -> first ('tel')}}</i>@endif
        </div>
        
            <div>
            <td>Especialidad : </td>
            <td><input type="text" onkeypress="return soloLetras(event)" required autocomplete="off" id="especialidad" class="especialidad" name="especialidad"></td>

            </div>
            @if($errors->first('especialidad')) <i>{{$errors -> first ('especialidad')}}</i>@endif

            <br>
		    Selecciona una imagen  : <input type="file" name="img" required autocomplete="off"><br><br><br>

            <input type="submit" value="Enviar">
            </form>

			</div>
		</div>
		<script>
		$(document).ready(function(){
			$("#nombre").keyup(function(){
							var txtapm = $("#nombre").val();
                            var formato = /^[A-Za-z\_\-\.\s\xF1\xD1]+$/;
							
                            if(formato.test(txtapm)){ $("#nombre").css({"border": "1px solid #0F0"}).fadeIn(2000); }
                            else{ $("#nombre").css({"border": "1px solid #F00"}).fadeIn(2000); }
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