<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Reporte de Usuarios</h1>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellido paterno</th>
                <th>Apellido materno</th>
                <th>Email</th>
                <th>Tipo Usuario</th>
				<th>Telefono</th>
				<th>Fecha de nacimiento</th>

            </tr>
        </thead>
        @foreach($usuarios as $usuario)
        <tbody>
            <tr>				
				<td>{{ $usuario->nombre }}</td>
				<td>{{ $usuario->app}}</td>
				<td>{{ $usuario->apm}}</td>							
				<td>{{ $usuario->email}}</td>
				<td>{{ $usuario->tipo_usuario}}</td>							
				<td>{{ $usuario->tel}}</td>	
				<td>{{ $usuario->fn}}</td>							

			</tr>
        
		</tbody>
       
        @endforeach
    </table>
</body>
</html>