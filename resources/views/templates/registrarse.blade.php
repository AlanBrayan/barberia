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

			function evaluar(obj){
                var pass = obj.value;           //recibe variables de input
                var conteo = obj.value.length;  //cuenta la cadena string de la contraseña
                var cadena = pass.split("");    // divide la cadena string de la contraseña
                var cont = 0;                   //cuenta los caracteres especiales|errores
                var let_a = 0;                  //cuenta las letras minusculas
                var let_b = 0;                  //cuenta las letras mayusculas
                var let_c = 0;                  //cuenta los numeros

                if(conteo > 3){
                    if(cadena[0].search(/[A-Z]/g)+1 > 0){
                        let_a = 0;
                        let_b = 0;
                        let_c = 0;
                        cont = 0;
                        // ---------- Evalua: Caracter x caracter
                        for(var i=0; i < cadena.length; i++){
                            var letra = cadena[i];
                            if(letra.search(/[a-z]/g)+1 > 0){ let_a = let_a+1;}
                            else{
                                if(letra.search(/[A-Z]/g)+1 > 0){ let_b = let_b+1;}
                                else{
                                    if(letra.search(/[0-9]/g)+1 > 0){ let_c = let_c+1;}
                                    else{ cont = cont+1;}
                                }
                            }
                        }
                        // ---------------------------Evaluar cantidad de aracateres
                        if(conteo >= 8){
                            document.getElementById("nivel").style.cssText = 'color: #FFF; background-color: #0D8E1A;';
                            document.getElementById("nivel").innerHTML = "Segura";
                        }
                        else{
                            if(conteo >= 6){
                                document.getElementById("nivel").style.cssText = 'color: #FFF; background-color: #EFDD0F;';
                                document.getElementById("nivel").innerHTML = "Poco segura";
                            }
                            else{
                                document.getElementById("nivel").style.cssText = 'color: #FFF; background-color: #F00;';
                                document.getElementById("nivel").innerHTML = "Insegura";
                            }
                        }

                        //Indicar errores si existen letras o numeros
                        if(let_a < 1 || let_b < 1 || let_c < 1){
                            if(let_a < 1){ let_a = "una letra minúscula "; } else{ let_a = " "; }
                            if(let_b < 1){ let_b = "una letra mayúscula "; } else{ let_b = " "; }
                            if(let_c < 1){ let_c = "un número "; } else{ let_c = " "; }
                            document.getElementById("error").innerHTML = "Error: La contraseña debe contener al menos: " + let_a + let_b + let_c;

                        }
                        else{  
                            document.getElementById("error").innerHTML =" ";
                        }

                        //------------------- Indica errores: si existen caracteres especiales
                        if(cont > 0){
                            document.getElementById("error").innerHTML = "Error: La contraseña solo debe de contener letras y numeros";
                            document.getElementById("pass").style.cssText = 'color: #F00; border: solid 1px #F00;';
                            document.getElementById("nivel").innerHTML = " ";
                        }
                        else{
                            document.getElementById("pass").style.cssText = 'color: #000; border: solid 1px #000;';
                        }

                    }
                    else{
                        document.getElementById("pass").style.cssText = 'color: #F00; border: solid 1px #F00';
                        document.getElementById("nivel").style.cssText = 'border-style:none;';
                        document.getElementById("nivel").innerHTML = " ";
                        document.getElementById("error").innerHTML = "Error: El primer carácter debe ser una letra mayuscula";

                    }
                }
                else{
                    document.getElementById("pass").style.cssText = 'color: #000; border: solid 1px #000';
                    document.getElementById("nivel").innerHTML = " ";
                    document.getElementById("error").innerHTML = " ";
                }
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


				<form action="{{ route ('guardar')}}" method="POST" name="nuevo" enctype="multipart/form-data">

					{{ csrf_field() }}

					<!-- <div>
						Matricula : <input type="text" name="matricula" value="{{ old('matricula')}}">
					</div>
					@if($errors->first('matricula')) <i>{{$errors -> first ('matricula')}}</i>@endif -->
					<div>
						<td>Nombre: </td>
                        <td><input type="text" onkeypress="return soloLetras(event)"  id="nombre" class="nombre" name="nombre" value="{{old('nombre')}}"></td>
						
					</div>
					@if($errors->first('nombre')) <i>{{$errors -> first ('nombre')}}</i>@endif

					<div>
						<td>Ap. Paterno: </td>
                        <td><input type="text" onkeypress="return soloLetras(event)" id="app" class="app"  name="app" value="{{old('app')}}"></td>
						
					</div>
					@if($errors->first('app')) <i>{{$errors -> first ('app')}}</i>@endif

					<div>
						<td>Ap. Materno: </td>
                        <td><input type="text" onkeypress="return soloLetras(event)"  id="apm" class="apm" name="apm" value="{{old('apm')}}"></td>                     
					</div>
					@if($errors->first('apm')) <i>{{$errors -> first ('apm')}}</i>@endif

					<div>
						<td>Fecha de nacimiento :</td>  
						<td><input type="date" name="fn" id="fn" value="{{old('fn')}}"></td><br>
						<td><span id="sfecha" class="sfecha"></span></td><br>
				
					</div>
					@if($errors->first('fn')) <i>{{$errors -> first ('fn')}}</i>@endif
					
					<div>
						<td>E-mail: </td>
                        <td><input type="text" id="email" class="email" name="email" value="{{old('email')}}"></td>
					</div>
					@if($errors->first('email')) <i>{{$errors -> first ('email')}}</i>@endif

					<div>
						Contraseña: <input type="password" id="pass" name="pass" onkeyup="evaluar(this);" value="{{old('pass')}}">
                    	<b id="nivel"></b>
                    	<b id="error"></b>
					</div>
					@if($errors->first('pass')) <i>{{$errors -> first ('pass')}}</i>@endif
					<div>
						Telefono : <input type="text" value="{{old('tel')}}" maxlength="10" id="tel" class="tel" name="tel"  onkeypress="return (event.charCode >= 48 && event.charCode <= 57)" min="1" /><br>
						@if($errors->first('tel')) <i>{{$errors -> first ('tel')}}</i>@endif
					</div>
					<!-- Imagen : <input type="file" name="img"><br>
					<hr> -->

                    <div>
                        Tipo de cuenta: <br> <br>
                        <p>Para otros tipos de cuenta contactar con el administrador </p>
                        <div> 
                            <input type="radio" id="tipo_usuario" name="tipo_usuario" value="2" checked> 
                            <label for="2">Usuario</label>
                        </div>
                        @if($errors->first('tipo_usuario')) <i>{{$errors -> first ('tipo_usuario')}}</i>@endif
                    </div>
                    

					<input type="submit" value="Enviar">
				</form>

			</div>
		</div>
		<script>

        
		$(document).ready(function(){

			$("#email").blur(function(){
                        var txtemail = $("#email").val();
                        var valemail = /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i;

                        if(valemail.test(txtemail)){ $("#email").css({"border": "1px solid #0F0"}).fadeIn(2000); }
                        else{ $("#email").css({"border": "1px solid #F00"}).fadeIn(2000); }
                    });
			// ------------------------------------------------------------------
			$("#nombre").keyup(function(){
							var txtapm = $("#nombre").val();
                            var formato = /^[A-Za-z\_\-\.\s\xF1\xD1]+$/;
							
				

                            if(formato.test(txtapm)){ $("#nombre").css({"border": "1px solid #0F0"}).fadeIn(2000); }
                            else{ $("#nombre").css({"border": "1px solid #F00"}).fadeIn(2000); }
                        });
			//------------------------------------------------------------------
			$("#app").keyup(function(){
							var txtapm = $("#app").val();
                            var formato = /^[A-Za-z\_\-\.\s\xF1\xD1]+$/;

                            if(formato.test(txtapm)){ $("#app").css({"border": "1px solid #0F0"}).fadeIn(2000); }
                            else{ $("#app").css({"border": "1px solid #F00"}).fadeIn(2000); }
                        });
			 // ------------------------------------------------------------------------------
			 $("#apm").keyup(function(){
                            var txtapm = $("#apm").val();
                            var formato = /^[A-Za-z\_\-\.\s\xF1\xD1]+$/;

                            if(formato.test(txtapm)){ $("#apm").css({"border": "1px solid #0F0"}).fadeIn(2000); }
                            else{ $("#apm").css({"border": "1px solid #F00"}).fadeIn(2000); }
                        });
			//---------------------------------------------------------------------------------
			$("#fn").blur(function(){
                        var f = new Date();
                        var year = f.getFullYear();
                        var mond = f.getMonth();
                        var day = f.getDate();

                        console.log(mond);

                        var fecha = $("#fn").val();

                        if(fecha != ''){
                            var fecha2 = fecha.split("-");

                            var edad = year - fecha2[0];
                            if(edad > 17){ $("#sfecha").text("Es mayor de edad");}
                            else{ $("#sfecha").text("Es menor de edad"); }
                        }
                        else{ $("#sfecha").text("Indique una fecha"); }
                        
                    });

			//----------------------------------------------------------------------------------------
			const $input = document.querySelector("#tel");
                            const patron = /[0-9]+/;

                            $input.addEventListener("keydown", event => {
                            console.log(event.key);
                            if(patron.test(event.key)){
                                $('#tel').css({ "border": "1px solid #0F0" });
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