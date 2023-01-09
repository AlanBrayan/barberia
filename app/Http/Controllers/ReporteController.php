<?php

namespace App\Http\Controllers;
use App\UsuariosModel;
use App\ProductosModel;
use App\ServiciosModel;
use App\VentasModel;
use App\EmpleadosModel;
use App\CitasModel;
/////////////////////////////////////
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
Use Maatwebsite\Excel\Facades\Excel;
use Barryvdh\DomPDF\Facades\PDF;
use App\Exports\VentasExport;
use App\Exports\ProductosExport;
use App\Exports\ServiciosExport;
use App\Exports\EmpleadosExport;
use App\Exports\UsuariosExport;



class ReporteController extends Controller
{
    public function reporteVenta(){
        $usus = VentasModel::all();
        $productos = ProductosModel::all();
        $usuarios = UsuariosModel::all();
        
        return  view("reportes.reporte_ventas")
        ->with(['usus' => $usus])
        ->with(['productos' => $productos])
        ->with(['usuarios' => $usuarios]);
    }

    public function exportExcel_Ventas(){
        return Excel::download(new VentasExport, 'ventas-list.xlsx');
    }
        
    public function exportPdf_Ventas(){
        $ventas = VentasModel::get();
            $pdf = \PDF::loadView('pdf.ventas', compact('ventas'));
            return $pdf->download('ventas-list.pdf');
    }

    /// PRODUCTOS /////
    public function reporteProducto(){
        $productos = ProductosModel::all();
        
        return  view("reportes.reporte_productos")
        ->with(['productos' => $productos]);
    }

    public function exportExcel_Productos(){
        return Excel::download(new ProductosExport, 'productos-list.xlsx');
    }
        
    public function exportPdf_Productos(){
        $productos = ProductosModel::get();
            $pdf = \PDF::loadView('pdf.productos', compact('productos'));
            return $pdf->download('productos-list.pdf');
    }

    /// SERVICIOS /////
    public function reporteServicio(){
        $servicios = ServiciosModel::all();
        
        return  view("reportes.reporte_servicios")
        ->with(['servicios' => $servicios]);
    }

    public function exportExcel_Servicios(){
        return Excel::download(new ServiciosExport, 'servicios-list.xlsx');
    }
        
    public function exportPdf_Servicios(){
        $servicios = ServiciosModel::get();
            $pdf = \PDF::loadView('pdf.servicios', compact('servicios'));
            return $pdf->download('servicios-list.pdf');
    }

    /// EMPLEADOS /////
    public function reporteEmpleado(){
        $empleados = EmpleadosModel::all();
        
        return  view("reportes.reporte_empleados")
        ->with(['empleados' => $empleados]);
    }

    public function exportExcel_Empleados(){
        return Excel::download(new EmpleadosExport, 'empleados-list.xlsx');
    }
        
    public function exportPdf_Empleados(){
        $empleados = EmpleadosModel::get();
            $pdf = \PDF::loadView('pdf.empleados', compact('empleados'));
            return $pdf->download('empleados-list.pdf');
    }

    /// USUARIOS /////
    public function reporteUsuario(){
        $usuarios = UsuariosModel::all();
        
        return  view("reportes.reporte_usuarios")
        ->with(['usuarios' => $usuarios]);
    }

    public function exportExcel_Usuarios(){
        return Excel::download(new UsuariosExport, 'usuarios-list.xlsx');
    }
        
    public function exportPdf_Usuarios(){
        $usuarios = UsuariosModel::get();
            $pdf = \PDF::loadView('pdf.usuarios', compact('usuarios'));
            return $pdf->download('usuarios-list.pdf');
    }

    /// CITAS /////
    public function reporteCita(){
        $citas = CitasModel::all();
        
        return  view("reportes.reporte_citas")
        ->with(['citas' => $citas]);
    }

    public function exportExcel_Citas(){
        return Excel::download(new UsuariosExport, 'usuarios-list.xlsx');
    }
        
    public function exportPdf_Citas(){
        $usuarios = UsuariosModel::get();
            $pdf = \PDF::loadView('pdf.usuarios', compact('usuarios'));
            return $pdf->download('usuarios-list.pdf');
    }

   }
