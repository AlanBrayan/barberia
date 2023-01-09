<?php

namespace App\Http\Controllers;

use App\ProductosModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return ProductosModel::all();

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    /**
     * Display the specified resource.
     *
     * @param  \App\ProductosModel  $productosModel
     * @return \Illuminate\Http\Response


     */

    public function altaProducto(Request $request){
        $consulta = ProductosModel::create($request->all());
        return response()->json($consulta,201);

       

        }


    public function consultaProducto()
    {
        $consulta = \DB::select("select * from tb_productos order by nombre_producto asc");
        return response()->json($consulta,201);
    }


    public function modificarProducto(Request $request)
    {
        $consulta = ProductosModel::find($request->id_producto);
        $consulta->update($request->all());

        return response()->json($consulta,200);

    }


    public function eliminaProducto($id)
    {
      $consulta = ProductosModel::find($id);
      $consulta->delete();
      return response()->json(null,204);
    }


    public function buscaProducto($id_producto)
    {
        $consulta = ProductosModel::find($id_producto);
        if(is_null($consulta))
        {
            return response()->json([''=>'Producto no encontrado']);
        }
        return response()->json($consulta::find($id_producto), 200);
    }




    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ProductosModel  $productosModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProductosModel $productosModel)
    {
        $request->validate([
            'nombre_producto' => 'required',
            'no_existencias' => 'required',
            'precio' => 'required',
            'descripcion' => 'required',
        ]);

        $productosModel = update($request->all());
        return response()->json($productosModel, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ProductosModel  $productosModel
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_producto)
    {
        $producto = ProductosModel::findOrFail($id_producto);
        $producto->delete();
    }
}
