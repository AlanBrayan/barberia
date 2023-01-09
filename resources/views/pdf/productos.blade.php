<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Reporte de productos</h1>
    <table>
        <thead>
            <tr>
                <th>Nombre producto</th>
                <th>No existencias</th>
                <th>Precio</th>
                <th>Descripcion</th>
            </tr>
        </thead>
        @foreach($productos as $producto)
        <tbody>
            <tr>				
				<td>{{ $producto->nombre_producto }}</td>
				<td>{{ $producto->no_existencias}}</td>
				<td>{{ $producto->precio}}</td>							
				<td>{{ $producto->descripcion}}</td>							
			</tr>
        
		</tbody>
       
        @endforeach
    </table>
</body>
</html>