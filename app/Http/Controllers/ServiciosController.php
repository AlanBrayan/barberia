<?php

namespace App\Http\Controllers;

use App\ServiciosModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ServiciosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return ServiciosModel::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }


    public function altaServicio(Request $request){
        $consulta = ServiciosModel::create($request->all());
        return response()->json($consulta,201);

       

        }


    public function consultaServicio()
    {
        $consulta = \DB::select("select * from tb_servicios order by nombre_servicio asc");
        return response()->json($consulta,201);
    }



    public function eliminaServicio($id)
    {
      $consulta = ServiciosModel::find($id);
      $consulta->delete();
      return response()->json(null,204);
    }


    public function buscaServicio($id_servicio)
    {
        $consulta = ServiciosModel::find($id_servicio);
        if(is_null($consulta))
        {
            return response()->json([''=>'Producto no encontrado']);
        }
        return response()->json($consulta::find($id_servicio), 200);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $servicio = ServiciosModel::create($request->all());
        return response()->json(['Mensaje'=>'Servicio creado correctamente', 200]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_servicio)
    {
        $servicio = ServiciosModel::find($id_servicio);
        if(is_null($servicio))
        {
            return response()->json([''=>'Servicio no encontrado']);
        }
        return response()->json($servicio::find($id_servicio), 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ServiciosModel $serviciosModel)
    {
        $request->validate([
            'nombre_producto' => 'required',
            'no_existencias' => 'required',
            'precio' => 'required',
            'descripcion' => 'required',
        ]);

        $serviciosModel = update($request->all());
        return response()->json($serviciosModel, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_servicio)
    {
        $servicio = ServiciosModel::findOrFail($id_servicio);
        $servicio->delete();
    }
}
