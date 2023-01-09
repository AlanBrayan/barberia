<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsuariosModel extends Model
{
    protected $table = 'tb_usuario';
    protected $primaryKey = 'id_usuario';
    protected $fillable = [
        'nombre',
        'email',
        'app',
        'apm',
        'pass',
        'tel',
        'fn',
        'tipo_usuario',
        'img'
    ];

    

}
