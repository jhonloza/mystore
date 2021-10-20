<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function getSesion(Request $request){
        if($request->session()->has('usuario')){
            //echo $request->session()->get('usuario');
            //echo $request->session()->get('email');
            return $datosSesion=[$request->session()->get('usuario'), $request->session()->get('email')];
        } else {
            echo '<p id="ua">no hay usuario</p>';
        }
    }
    public function almacenarSesion(Request $request, $usuario, $email){
        if(empty($usuario) || ($usuario == 'no-user')){
            $request->session()->put(['usuario' => 'no-user', 'email' => 'no-email']);
            //echo 'No existe ese usuario';
        } else {
            $request->session()->put(['usuario' => $usuario, 'email' => $email]);
            //echo 'datos agregados a la sesion';
        }

    }
    public function eliminarSesion(Request $request){
        $request->session()->forget('usuario');
        echo 'datos de sesion eliminados';
    }
}
