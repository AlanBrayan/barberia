<?php

namespace App\Exports;

use App\UsuariosModel;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;


class UsuariosExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */

    public function headings(): array
    {
        return [
            ['URBANCUT'],
            ['REPORTE DE USUARIOS'],
            [
                'Nombre',
                'Apellido paterno',
                'Apellido materno',
                'Email',
                'Tipo usuario',
                'Telefono',
                'Fecha nacimiento'
            ]
        ];
    }

    public function collection()
    {
        return UsuariosModel::select("nombre","app","apm","email","tipo_usuario","tel","fn")->get();
    }
}
