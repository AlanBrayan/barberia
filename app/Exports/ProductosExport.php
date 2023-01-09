<?php

namespace App\Exports;

use App\ProductosModel;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;


class ProductosExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function headings(): array
    {
        return [
            ['URBANCUT'],
            ['REPORTE DE PRODUCTOS'],
            [
                'Nombre producto',
                'No existencias',
                'Precio',
                'Descripcion'
            ]
        ];
    }
    public function collection()
    {
        return ProductosModel::select("nombre_producto","no_existencias","precio","descripcion")->get();
    }
}
