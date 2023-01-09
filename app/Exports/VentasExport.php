<?php

namespace App\Exports;

use App\VentasModel;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;


class VentasExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function headings(): array
    {
        return [
            ['URBANCUT'],
            ['REPORTE DE VENTAS'],
            [
                'Usuario',
                'Direccion',
                'Producto',
                'Telefono',
                'Cantidad',
                'TOTAL',
            ]
        ];
    }

    public function collection()
    {
        return VentasModel::select("id_usuario","direccion","id_producto","cantidad","precio","monto_total")->get();
    }
}
