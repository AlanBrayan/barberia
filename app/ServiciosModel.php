<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiciosModel extends Model
{
    protected $table = 'tb_servicios';
    protected $primaryKey = 'id_servicio';
    protected $fillable = [
       'img',
       'nombre_servicio',
       'precio',
       'descripcion',
    ];

    public function scopeBuscar($query,$buscar){
        if (trim($buscar != "")) {
            $query->where(\DB::raw("nombre_servicio"), "LIKE", "%".$buscar."%");
        }
        }


}
