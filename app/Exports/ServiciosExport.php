<?php

namespace App\Exports;

use App\ServiciosModel;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;


class ServiciosExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    //public function collection()
    //{
    //    return ServiciosModel::select("nombre_servicio","descripcion","precio")->get();
    //}

    public function headings(): array
    {
        return [
            ['URBANCUT'],
            ['REPORTE DE SERVICIOS'],
            [
                'Nombre',
                'Descripcion',
                'Precio',
            ]
        ];
    }
    public function collection()
    {
             return ServiciosModel::select("nombre_servicio","descripcion","precio")->get();


    }
}
