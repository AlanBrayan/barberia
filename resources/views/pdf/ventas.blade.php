<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Reporte de ventas</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Usuario</th>
                <th>Direccion</th>
                <th>Producto</th>
                <th>Cantidad</th>
                <th>Monto Total</th>
            </tr>
        </thead>
        <tbody>
            @foreach($ventas as $venta)
            <tr>
                <td>{{ $venta->id_venta }}</td>
                <td>{{ $venta->id_usuario }}</td>
                <td>{{ $venta->direccion }}</td>
                <td>{{ $venta->id_producto }}</td>
                <td>{{ $venta->cantidad }}</td>
                <td>{{ $venta->monto_total }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>