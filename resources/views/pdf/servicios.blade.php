<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Reporte de Servicios</h1>
    <table>
        <thead>
            <tr>
                <th>Nombre servicio</th>
                <th>Descripcion</th>
                <th>Precio</th>
            </tr>
        </thead>
        @foreach($servicios as $servicio)
        <tbody>
            <tr>				
				<td>{{ $servicio->nombre_servicio }}</td>
				<td>{{ $servicio->descripcion}}</td>
				<td>{{ $servicio->precio}}</td>							
			</tr>
        
		</tbody>
       
        @endforeach
    </table>
</body>
</html>