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
<style>
	.alinear{
		text-align: center;
	}
</style>

		<script src=" {{ asset('js/jquery-3.3.1.js') }} "></script>
    	<script src=" {{ asset('js/jquery-ui.js') }} "></script>
		
<script type="text/javascript">
		$(document).ready(function(){
		$("#email").blur(function(){
			var txtemail = $("#email").val();
			var valemail = /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i;
			if(valemail.test(txtemail)){ $("#email").css({"border": "1px solid #0F0"}).fadeIn(2000); }
			else{ $("#email").css({"border": "1px solid #F00"}).fadeIn(2000); }
		});
	});
</script>

<body class="is-preload">

	<!-- Wrapper -->
	<div id="wrapper">

		<!-- Main -->
		<div id="main">
			<div class="inner">

				
			   @include ('layouts.header')
			

				@if(empty(session('session_id')))

				<form action="{{ route ('validar')}}" method="POST" name="nuevo">

					{{ csrf_field() }}

					<div>
						Email : <input type="text" name="email" id="email"><br>
					</div>
					
					@if($errors->first('email')) <i>{{$errors -> first ('email')}}</i>@endif

					<div>
						Password : <input type="password" name="pass"><br>
					</div>
					@if($errors->first('pass')) <i>{{$errors -> first ('pass')}}</i>@endif

					<input type="submit" value="Ingresar">
					
				</form>

				@else
                <div class="alinear">
					<h1>Bienvenido {{session('session_name')}}</h1>
					@if(session('session_tipo') == 1)
					<h1>SUPER ADMINISTRADOR</h1>
					@endif

					@if(session('session_tipo') == 2)
					<h1>USUARIO</h1>
					@endif

					@if(session('session_tipo') == 3)
					<h1>ADMINISTRADOR</h1>
					@endif
					<h2>Revisa lo que tenemos para ti</h2><br>
					<h2>Urbancut</h2><br>
					<h3><em>"Tenemos lo ideal para ti"</em></h3>
					
					<h3> Da click en la imagen</h3>
					<a href="{{ route('catalogo')}}"><img class="d-block w-100" src="https://img.maspormas.com/2017/06/9532_notbmp1grande.jpg" width="850" height="500"></a>
				</div>
						
				@endif

			</div>
		</div>

		@include ('layouts.menu')

	</div>

	@include ('layouts.footer')

</body>

</html>