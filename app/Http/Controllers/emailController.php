<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\UsuariosModel;
use App\ProductosModel;
use App\ServiciosModel;
use App\EmpleadosModel;
use App\CitasModel;


class emailController extends Controller
{
    public function emailform(){
        return view("emailform");
    }

public function emailsend(Request $request){
        //dd($request->all());
        $details = [
            'title' => $request->input('asunto'),
            'body' => $request->input('contenido'),
            'correo' => $request->input('correo')
        ];
        \Mail::to($request->input('email'))->send(new \App\Mail\CorreoUrban($details));
        //dd("Email Enviado a.".$request->input('nombre'));
        return redirect()->route('emailform');
    }

    public function email_eliminar_usuario(Request $request ){
        //dd($request->all());
        $details = [
            'email' => $request->input('email')
        ];


        \Mail::to($request->input('email'))->send(new \App\Mail\CorreoUrban3($details));
        //dd("Email Enviado a.".$request->input('nombre'));
        //$id_usuario = $request->get('id_usuario');
//
        //$id=UsuariosModel::where('id_usuario', '=', $id_usuario)->first();
        //$id -> delete();
        //
        return redirect()->route('detalleUsuario');
    }

    //public function borrarUsuario(UsuariosModel $id){
    //    $id->delete();
    //    return redirect()->route('usuarios');
    //}


    
}
  

