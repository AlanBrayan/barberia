<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Reporte de empleados</h1>
    <table>
        <thead>
            <tr>
            <th>Nombre</th>
                <th>Apellido paterno</th>
                <th>Apellido materno</th>
                <th>Telefono</th>
                <th>Fecha de nacimiento</th>
				<th>Especialidad</th>

            </tr>
        </thead>
        @foreach($empleados as $empleado)
        <tbody>
            <tr>				
				<td>{{ $empleado->nombre }}</td>
				<td>{{ $empleado->app}}</td>
				<td>{{ $empleado->apm}}</td>							
				<td>{{ $empleado->tel}}</td>	
				<td>{{ $empleado->fn}}</td>							
				<td>{{ $empleado->especialidad}}</td>							

			</tr>
        
		</tbody>
       
        @endforeach
    </table>
</body>
</html>