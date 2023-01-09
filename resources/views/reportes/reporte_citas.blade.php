<!DOCTYPE HTML>
<html>
<head>
	<title>Reporte de Citas </title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="{{asset('assets/css/main.css')}}" />

</head>

<style>
	.card {
		box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
		transition: 0.3s;

		border-radius: 5px;
		text-align: center;
	}

	.card:hover {
		box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
	}

	img {
		border-radius: 5px 5px 0 0;
	}

	.container {
		padding: 2px 16px;
    }
    table th{
        background-color: #337ab7 !important;
        color: white;

    }

    table>tbody>tr>td{
        vertical-align: middle !important;
    }

    .btn-group, .btn-group-vertical{
        position: absolute !important;
    }
</style>

<body class="is-preload">

	<!-- Wrapper -->
	<div id="wrapper">

		<!-- Main -->
		<div id="main">
			<div class="inner">

				@include ('layouts.header')

 <!-- <meta charset="uf-8"> -->
	<meta name="viewport" content="with=dev-width, initial-scale=1, shrink-to-fit=no">
	<link rel="shortcut icon" href="#">

		<title>Reporte de Citas </title>
		<br>
		<br>
		<!-- Bostrap css -->
		<link rel="stylesheet" href="boostrap/css/bootstrap.min.css">
	
<!-- data tables css basico -->
<link rel="stylesheet" type="text/css" href="datatables/datatables.min.css" />
<!-- datatablesestiloboostrap 4 css  -->
<link rel="stylesheet" type="text/css" href="datatables/DataTables-1.10.18/css/datatables.bootstrap4.min.css">
<!-- font awesome con cdn  -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" 
integrity="sha384-oS3vJWV+0UjzBFQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
<!-- <script src="https://kit.fontawesome.com/e7271ede2b.js" crossorigin="anonymous"></script> -->
  
</head>
	<body >
		<head>
			<h1 class="text-center text-light">Reporte de Citas  </h1>
		</head>
<!--
     <p>Click <a href="{{ route('citas.excel') }}">Aqui</a> Para descargar en excel </p>
     <p>Click <a href="{{ route('citas.pdf') }}">Aqui</a> Para descargar en pdf </p>
-->
<div class="container">
	<div class="row">
		<div class="col-lg-12">
			<div class="table-responsive">
				
				
			<table id="example" class="display nowrap" style="width:100%">

        <thead>
            <tr>
                <th>Usuario</th>
                <th>Empleado</th>
                <th>Fecha</th>
                <th>Hora</th>
                <th>Servicio</th>
                <th>Total</th>

            </tr>
        </thead>
        
    </table>

			</div>

		</div>
		

	</div>

</div>
<a href="{{ route('home')}}" class="button big">Regresar</a><br><br>




	</body>
</html>

<!-- editar  -->