<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CitasModel extends Model
{
    protected $table = 'tb_citas';
    protected $primaryKey = 'id_cita';
    protected $fillable = [
       
       'id_usuario',
       'id_empleado',
       'fecha',
       'hora',
       'id_servicio',
       'total'

    ];
}
