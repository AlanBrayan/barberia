<?php

namespace App\Exports;

use App\EmpleadosModel;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;


class EmpleadosExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */

    public function headings(): array
    {
        return [
            ['URBANCUT'],
            ['REPORTE DE EMPLEADOS'],
            [
                'Nombre',
                'Apellido paterno',
                'Apellido materno',
                'Telefono',
                'Fecha nacimiento',
                'Especialidad',
            ]
        ];
    }
    public function collection()
    {
        return EmpleadosModel::select("nombre","app","apm","tel","fn","especialidad")->get();
    }
}
