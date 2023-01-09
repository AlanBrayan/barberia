<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VentasModel extends Model
{
    protected $table = 'tb_ventas';
    protected $primaryKey = 'id_venta';
    protected $fillable = [
       'id_usuario',
       'direccion',
       'id_producto',
       'cantidad',
       'precio',
       'monto_total'
    ];
}
