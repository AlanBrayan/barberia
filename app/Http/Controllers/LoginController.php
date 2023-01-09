<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\UsuariosModel;
use Auth;


class LoginController extends Controller
{

    public function validar(Request $request)
    {
        $request->validate([
            'pass' => 'required',
            'email' => 'required'
        ]);

        $correo = $request->input('email');
        $pass = $request->input('pass');
        
        $consulta = UsuariosModel::where('email', '=', $correo)->where('pass', '=', $pass)->get();


        if (count($consulta) == 0) {
            
            return view('templates.iniciar_sesion');
            alert('No hay ningun usuario con ese correo y contraseña');

        } else {
            // return 'entrar';
            $request->session()->put('session_id', $consulta[0]->id_usuario);
            $request->session()->put('session_name', $consulta[0]->nombre);
            $request->session()->put('session_tipo', $consulta[0]->tipo_usuario);

            $session_id = $request->session()->get('session_id');
            $session_name = $request->session()->get('session_name');
            $session_tipo = $request->session()->get('session_tipo');


            switch ($session_tipo) {
                case 1:
                    
                    return view('templates.iniciar_sesion')
                    ->with($tipo = $session_tipo);
                    break;

                    case 2:
                    
                        return view('templates.iniciar_sesion')
                        ->with($tipo = $session_tipo);
                        break;

                        case 3:
                    
                            return view('templates.iniciar_sesion')
                            ->with($tipo = $session_tipo);
                    break;

            }
            
        }
    }

    public function logout(Request $request)
    {

        $request->session()->forget('session_id');
        $request->session()->forget('session_name');
        $request->session()->forget('session_tipo');

        return view('templates.iniciar_sesion');
    }

}
