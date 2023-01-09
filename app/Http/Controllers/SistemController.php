<?php

namespace App\Http\Controllers;

use App\UsuariosModel;
use App\ProductosModel;
use App\ServiciosModel;
use App\EmpleadosModel;
use App\CitasModel;

use App\Http\Requests\ValidarRequest;
use App\Http\Requests\ValidarProductosRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use App\VentasModel;
use Illuminate\Http\Request;
use Mapper;
use Cornford\Googlmapper\MapperServiceProvider;



class SistemController extends Controller
{
    
    public function login()
    {
    
        return  view("templates.login");
    }

    public function home()
    {
        return  view("layouts.index");
    }

    public function registrarse()
    {
        return  view("templates.registrarse");
    }

    public function iniciar_sesion()
    {
        return  view("templates.iniciar_sesion");
    }

    public function catalogo(Request $request, $buscar=null)
    {
        $usus = ProductosModel::paginate(9);
        
        $orders = ProductosModel::Buscar($request->get('buscar'))
        ->orderBy('nombre');
        return  view("templates.catalogo")
        ->with(['usus' => $usus])
        ->with(['orders' => $orders]);
    }

    public function catalogo1(Request $request, $buscar=null)
    {
        $usus = ServiciosModel::paginate(9);
        
        $orders = ServiciosModel::Buscar($request->get('buscar'))
        ->orderBy('nombre');
        return  view("templates.catalogo1")
        ->with(['usus' => $usus])
        ->with(['orders' => $orders]);
    }

    public function usuarios()
    {
        $usus = UsuariosModel::all();
        return  view("templates.usuarios")
        ->with(['usus' => $usus]);
    }

    public function guardar(Request $request){

         
        // $file = $request ->file('img');
        // $img = $file -> getClientOriginalName();
        // // $img = $request -> file('img')->getClientOriginalName();
    
        // \Storage::disk('local')->put($img, \File::get($file));
        $request->validate([
            'nombre' => 'required',
            'app' => 'required',
            'apm' => 'required',
            'fn' => 'required',
            'pass' => 'required',
            'email' => 'required',
            'tel' => 'required'
        ]);

        $details = [
            'email' => $request->input('email')
        ];
        \Mail::to($request->input('email'))->send(new \App\Mail\CorreoUrban2($details));
        //dd("Email Enviado a.".$request->input('nombre'));
    
         $usu = UsuariosModel::create(array(
            'nombre'     =>$request->input('nombre'),
            'app'        =>$request->input('app'),
            'apm'        =>$request->input('apm'),
            'fn'         =>$request->input('fn'),
            'pass'       =>$request->input('pass'),
            'email'      =>$request->input('email'),
            'tel'        =>$request->input('tel'),
            'tipo_usuario'  =>$request->input('tipo_usuario')
            
         ));
    
        //return redirect()->route('registrarDirecciones2');
        return redirect()->route('iniciar_sesion');
        

    }

    public function modificar(UsuariosModel $id){
        return view("templates.editar")
            ->with(['usu' => $id]);
    }
    public function salvar(UsuariosModel $id, Request $request){

             $id->update($request->only('nombre', 'app' , 'apm' , 'fn', 'email', 'pass', 'tel','tipo_usuario'));

            return redirect()->route('usuarios');
    }

    public function borrar(UsuariosModel $id){
        $id->delete();
        return redirect()->route('usuarios');
    }



    public function guardarProductos(Request $request){

        
        $file = $request->file('img');
        
        $img = $file->getClientOriginalName();
        // $img = $request -> file('img')->getClientOriginalName();
    
        \Storage::disk('local')->put($img, \File::get($file));
    
        $request->validate([
            'img' => 'required',
            'nombre_producto' => 'required',
            'no_existencias' => 'required',
            'precio' => 'required',
            'descripcion' => 'required'
        ]);

         $usu = ProductosModel::create(array(
            'img' => $img,
            //'img2' => $img2,
            'nombre_producto'=>$request->input('nombre_producto'),
            'no_existencias' =>$request->input('no_existencias'),
            'precio' =>        $request->input('precio'),
            'descripcion' =>   $request->input('descripcion')
            
         ));
    
        return redirect()->route('productos');

        }

        public function guardarServicios(Request $request){

        
            $file = $request->file('img');
            
            $img = $file->getClientOriginalName();
            // $img = $request -> file('img')->getClientOriginalName();
        
            \Storage::disk('local')->put($img, \File::get($file));
            
            $request->validate([
                'img' => 'required',
                'nombre_servicio' => 'required',
                'precio' => 'required',
                'descripcion' => 'required'
            ]);

             $usu = ServiciosModel::create(array(
                'img' => $img,
                //'img2' => $img2,
                'nombre_servicio'=>$request->input('nombre_servicio'),
                'precio' =>        $request->input('precio'),
                'descripcion' =>   $request->input('descripcion')
                
             ));
        
            return redirect()->route('servicios');
    
            }

        public function guardarEmpleados(Request $request){
    
            $file = $request->file('img');
            
            $img = $file->getClientOriginalName();
            // $img = $request -> file('img')->getClientOriginalName();
        
            \Storage::disk('local')->put($img, \File::get($file));
           
            $request->validate([
                'img' => 'required',
                'nombre' => 'required',
                'app' => 'required',
                'apm' => 'required',
                'fn' => 'required',
                'tel' => 'required',
                'especialidad' => 'required',
            ]);
            
                $usu = EmpleadosModel::create(array(
                    'img' => $img,
                //'img2' => $img2,
                    'nombre'     =>$request->input('nombre'),
                    'app'        =>$request->input('app'),
                    'apm'        =>$request->input('apm'),
                    'fn'         =>$request->input('fn'),
                    'tel'        =>$request->input('tel'),
                    'especialidad'=>$request->input('especialidad')
                    
                ));
            
                return redirect()->route('empleados');
        
        }


        


        

    public function registrarProductos()
    {
        return  view("templates.registrar_productos");
    }

    public function registrarServicios()
    {
        return  view("templates.registrar_servicios");
    }
    public function registrarEmpleados()
    {
        return  view("templates.registrar_empleados");
    }

    public function modificarProductos(ProductosModel $id){
        return view("templates.editarProductos")
            ->with(['usu' => $id]);
    }

    public function modificarServicios(ServiciosModel $id){
        return view("templates.editarServicios")
            ->with(['usu' => $id]);
    }
    public function modificarEmpleados(EmpleadosModel $id){
        return view("templates.editarEmpleados")
            ->with(['usu' => $id]);
    }

    public function salvarProductos(ProductosModel $id, Request $request){

             $id->update($request->only('nombre_producto','no_existencias', 'precio','descripcion'));

            return redirect()->route('productos');
    }

    public function salvarServicios(ServiciosModel $id, Request $request){

        $id->update($request->only('nombre_servicio', 'precio','descripcion'));

       return redirect()->route('servicios');
}

public function salvarEmpleados(EmpleadosModel $id, Request $request){

    $id->update($request->only('nombre', 'app','apm','tel', 'fn','especialidad'));

   return redirect()->route('empleados');
}

    public function borrarProducto(ProductosModel $id){
        $id->delete();
        return redirect()->route('productos');
    }

    public function borrarServicio(ServiciosModel $id){
        $id->delete();
        return redirect()->route('servicios');
    }

    public function borrarEmpleado(EmpleadosModel $id){
        $id->delete();
        return redirect()->route('empleados');
    }



    public function productos()
    {
        $usus = ProductosModel::all();
        return  view("templates.productos")
        ->with(['usus' => $usus]);
    }

    public function servicios()
    {
        $usus = ServiciosModel::all();
        return  view("templates.servicios")
        ->with(['usus' => $usus]);
    }

    public function empleados()
    {
        $usus = EmpleadosModel::all();
        return  view("templates.empleados")
        ->with(['usus' => $usus]);
    }

    public function carrito()
    {
        $usus = ProductosModel::all();
        return view('templates.carrito')
        ->with(['usus' => $usus]);
    }

    public function addCarrito($id=null)
    {
        $usus = ProductosModel::all();
        return view('templates.carrito')
        ->with('id', $id)
        ->with(['usus' => $usus]);
    }

    public function detalleProducto($id=null)
    {
        $usus = ProductosModel::find($id);
        return view('templates.detalle_producto')
        ->with('id', $id)
        ->with(['usu' => $usus]);
    }


    public function detalleServicio($id=null)
    {
        $usus = ServiciosModel::find($id);
        return view('templates.detalle_servicio')
        ->with('id', $id)
        ->with(['usu' => $usus]);
    }

    public function buscar(Request $request)
    {
        
        $query = ProductosModel::Buscar($request->get('buscar'))->paginate(3);
        // dd($query);
        return view("templates.catalogo")
        ->with(['usus' => $query]);

    }
    public function buscar2(Request $request)
    {
        
        $query = ServiciosModel::Buscar($request->get('buscar'))->paginate(3);
        // dd($query);
        return view("templates.catalogo1")
        ->with(['usus' => $query]);

    }

    





    public function detalleUsuario()
    {
        $usus = UsuariosModel::all();
        return view('templates.detalle_usuario')
        ->with(['usus' => $usus]);
    }

 



public function paypal()
    {
    
        return  view("templates.paypal");
    }

// --------------------------------------------------
public function guardarVentas(Request $request){
    //dd($request -> all());    
    $id_usuario = $request->get('id_usuario');
    $direccion = $request->get('direccion');
    $id_producto = $request->get('id_producto');
    $cantidad = $request->get('cantidad');
    $precio = $request->get('precio');
    $monto_total = $request->get('monto_total');

    DB::table("tb_ventas")
        ->insert([
            'id_usuario' => $id_usuario,
            'direccion' => $direccion,
            'id_producto' => $id_producto,
            'cantidad' => $cantidad,
            'precio' => $precio,
            'monto_total' => $monto_total,
        ]);

    VentasModel::all();
    UsuariosModel::all();
    ProductosModel::all();


    


    return view("templates.ejemplo");
}

public function registrarVentas()
{
    $usuarios = UsuariosModel::all();
    $productos = ProductosModel::all();
    
    return  view("templates.registrar_ventas")
        ->with(['usuarios' => $usuarios])
        ->with(['productos' => $productos]);    
    
}

public function registrarVentasUsuario()
{
    $usuarios = UsuariosModel::all();
    $productos = ProductosModel::all();
    
    return  view("templates.registrar_ventas_usuarios")
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

public function informacion(Request $request)
    {
        
        $usus1 = $request->get('id_empleado');

        $usus = CitasModel::where('id_empleado', $usus1)->get();
        $citas = CitasModel::all();
        $empleados = EmpleadosModel::all();
        $usuarios = UsuariosModel::all();

        return view("templates.informacion")
            ->with(['empleados' => $empleados])
            ->with(['citas' => $citas])
            ->with(['usus' => $usus])
            ->with(['usuarios' => $usuarios]);
    }

    public function export() 
    {
        return Excel::download(new UsersExport, 'users.xlsx');
    }


}



