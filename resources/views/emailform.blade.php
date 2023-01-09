<!DOCTYPE HTML>
<!--
	Editorial by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>

<head>
	<title>Envio de correo</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="{{asset('assets/css/main.css')}}" />

</head>
<style>
	.alinear{
		text-align: center;
	}
</style>

		

<body class="is-preload">

	<!-- Wrapper -->
	<div id="wrapper">

		<!-- Main -->
		<div id="main">
			<div class="inner">

				
			   @include ('layouts.header')
			

				

<form action="{{ route('emailsend') }}" method="GET" name="nuevo">
                    
    <table border="0">
        <tr>
            <th>Nombre:</th>
            <td>
                <input type="text" name="nombre">
            </td>
        </tr>
        <tr>
          
            <td>
                <input type="hidden" name="email" value="al221911806@gmail.com">
            </td>
        </tr>
        <tr>
            <th>Ingresa tu email para contactarnos: </th>
            <td>
                <input type="text" name="correo">
            </td>
        </tr>
        <tr>
            <th>Asunto:</th>
            <td>
                <input type="text" name="asunto">
            </td>
        </tr>
        <tr>
            <th>Contenido:</th>
            <td>
                <textarea name="contenido"></textarea>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="submit" value="Enviar">
            </td>
        </tr>
    </table>
</form>


					

			</div>
		</div>

		@include ('layouts.menu')

	</div>

	@include ('layouts.footer')

</body>

</html>