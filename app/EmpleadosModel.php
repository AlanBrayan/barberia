<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmpleadosModel extends Model
{
    protected $table = 'tb_empleados';
    protected $primaryKey = 'id_empleado';
    protected $fillable = [
        'nombre',
        'app',
        'apm',
        'tel',
        'fn',
        'img',
        'especialidad'
    ];

    

    

}
