<?php

namespace App\Http\Controllers;

use App\UsuariosModel;
use App\ProductosModel;
use App\VentasModel;
use App\ServiciosModel;
use App\EmpleadosModel;

use App\CitasModel;
use App\DireccionesModel;
use App\MaterialesModel;
use Illuminate\Http\Request;
use App\Http\Requests\ValidarRequest;
use App\Http\Requests\ValidarVentasRequest;
use App\Http\Requests\ValidarMaterialesRequest;

class CRUDController extends Controller
{
    
    //--------------------------- Ventas  -----------------------------------------------

        public function guardarVentas(Request $request){
            
            $usu = VentasModel::create(array(
                'id_usuario'     =>$request->input('id_usuario'),
                'direccion'        =>$request->input('direccion'),
                'id_producto'        =>$request->input('id_producto'),
                'cantidad'         =>$request->input('cantidad'),
                'monto_total'        =>$request->input('monto_total')
                
            ));
            return redirect()->route('ventas');
        }
    
        public function registrarVentas()
        {
            $usuarios = UsuariosModel::all();
            $productos = ProductosModel::all();
            
            return  view("templates.registrar_ventas")
                ->with(['usuarios' => $usuarios])
                ->with(['productos' => $productos]);    
            
        }
    
        public function ventas()
        {
            $usus = VentasModel::all();
            $productos = ProductosModel::all();
            $usuarios = UsuariosModel::all();
            return  view("templates.ventas")
            ->with(['usus' => $usus])
            ->with(['productos' => $productos])
            ->with(['usuarios' => $usuarios]);
        }

        
        public function modificarVentas(VentasModel $id){
            return view("templates.editarVentas")
                ->with(['usu' => $id]);
        }
        public function salvarVentas(VentasModel $id, Request $request){

                //  $id = AlumnosModel::find($id);
                 $id->update($request->only('monto_total', 'direcciones_id', 'clientes_id'));

                return redirect()->route('ventas');

        }

        public function borrarVenta(VentasModel $id){
            $id->delete();
            return redirect()->route('ventas');
        }




            //--------------------------- Citas  -----------------------------------------------

            public function guardarCitas(Request $request){
            
                $usu = CitasModel::create(array(
                    'id_usuario'        =>$request->input('id_usuario'),
                    'id_empleado'        =>$request->input('id_empleado'),
                    'fecha'        =>$request->input('fecha'),
                    'hora'         =>$request->input('hora'),
                    'id_servicio'        =>$request->input('id_servicio'),
                    'total'        =>$request->input('total')
                    
                ));
                return redirect()->route('citas');

                
            }

            public function registrarCitas() {
                $usuarios = UsuariosModel::all();
            $servicios = ServiciosModel::all();
            $empleados = EmpleadosModel::all();
                return  view("templates.registrar_cita")
                ->with(['usuarios' => $usuarios])
                ->with(['servicios' => $servicios])
                ->with(['empleados' => $empleados]); 
            }

            public function registrarCitasUsuario() {
                $usuarios = UsuariosModel::all();
            $servicios = ServiciosModel::all();
            $empleados = EmpleadosModel::all();
                return  view("templates.registrar_cita_usuario")
                ->with(['usuarios' => $usuarios])
                ->with(['servicios' => $servicios])
                ->with(['empleados' => $empleados]); 
            }

            public function citas()
        {
            $usus = CitasModel::all();
            $servicios = ServiciosModel::all();
            $usuarios = UsuariosModel::all();
            $empleados = EmpleadosModel::all();
            return  view("templates.citas")
            ->with(['usus' => $usus])
            ->with(['servicios' => $servicios])
            ->with(['usuarios' => $usuarios])
            ->with(['empleados' => $empleados]);
        }

        public function citasEmpleado()
        {
            $usus = CitasModel::all();
            $servicios = ServiciosModel::all();
            $usuarios = UsuariosModel::all();
            $empleados = EmpleadosModel::all();
            
            return  view("templates.citasEmpleado")
            ->with(['usus' => $usus])
            ->with(['servicios' => $servicios])
            ->with(['usuarios' => $usuarios])
            ->with(['empleados' => $empleados]);
        }
        
        public function borrarCita(CitasModel $id){
            $id->delete();
            return redirect()->route('citas');
        }

 
            
        //--------------------------- materiales -----------------------------------------------
    
        public function Materiales() {
            $usus = MaterialesModel::all();
            return  view("templates.materiales")
            ->with(['usus' => $usus]);
        }

        public function registrarMateriales() {
            return  view("templates.registrar_materiales");
        }
        
        public function guardarMateriales(ValidarMaterialesRequest $request){
    
            $usus = MaterialesModel::create($request->only('nombre', 'tipo_material'));
            return redirect()->route('registrarMateriales');
        }
        
        public function modificarMateriales(MaterialesModel $id){
            return view("templates.editarMateriales")
                ->with(['usu' => $id]);
        }
        public function salvarMateriales(MaterialesModel $id, Request $request){

                //  $id = AlumnosModel::find($id);
                 $id->update($request->only('nombre', 'tipo_material'));

                return redirect()->route('materiales');
        }

        public function borrarMaterial(MaterialesModel $id){
            $id->delete();
            return redirect()->route('materiales');
        }

        //--------------------------- direcciones -----------------------------------------------
    

        public function Direcciones2() {
            $usus = DireccionesModel::all();
            $comps = UsuariosModel::all();
            return  view("templates.direcciones")
            ->with(['usus' => $usus])
            ->with(['comps' => $comps]);
        }

        public function registrarDirecciones2() {
            return  view("templates.registrar_direcciones");
        }
        
        public function guardarDirecciones2(Request $request){
    
            $usus = DireccionesModel::create($request->only('cliente_id',
            'calle',
            'numero_direccion',
            'localidad',
            'municipio',
            'estado'));
            return redirect()->route('iniciar_sesion');
        }
        
        public function modificarDirecciones2(DireccionesModel $id){
            return view("templates.editarDirecciones")
                ->with(['usu' => $id]);
        }
        /*
        public function salvarDirecciones(DireccionesModel $id, Request $request){

                //  $id = AlumnosModel::find($id);
                 $id->update($request->only('nombre', 'tipo_material'));

                return redirect()->route('iniciar_sesion');
        }

        public function borrarDireccion(MaterialesModel $id){
            $id->delete();
            return redirect()->route('materiales');
        }*/
}

