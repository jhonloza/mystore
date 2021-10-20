<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\SessionController;
use MongoDB\Driver\Manager;
use MongoDB\Driver\Query;
include 'SessionController.php';

class loginController extends Controller
{

    public function index(Request $request)
    {
        $control = new SessionController();
        $usuario = $control->getSesion($request);
        if (empty($usuario)){
            return view('login', compact('usuario'));
        } elseif($usuario[0] != 'no-user'){
            return redirect()->route('usuario', compact('usuario'));
        } elseif ($usuario[0] == 'admin') {
            return redirect()->route('usuario');
        } else {
            return view('login', compact('usuario'));
        }
    }
    public function create()
    {
        //
    }
    public function store(Request $request)
    {
        //
    }
    public function show($id)
    {
        //
    }
    public function edit($id)
    {
        //
    }
    public function update(Request $request, $id)
    {
        //
    }
    public function destroy($id)
    {
        //
    }
    public function ingresar(Request $request){
        $control = new SessionController();
        $username = $request->username;
        $password = $request->password;
        $host = "localhost";
        $port = "27017";
        //Conexion a mongo
        $conexion = new Manager("mongodb://$host:$port");
        $filtrar = ['username' => $username, 'password' => $password];
        $options = array();
        $query = new Query($filtrar, $options);
        $informacion = $conexion->executeQuery("tiendacomponenteselectronicos.usuario", $query);
        //return view('usuario', compact('informacion'));
        $usuarioSesion = [$request->user0, $request->user1];
        foreach ($informacion as $usuarioActual) {
            $usuarioSesion = [$usuarioActual->username, $usuarioActual->email];
        }
        $control->almacenarSesion($request, $usuarioSesion[0], $usuarioSesion[1]);
        return redirect()->action([ProductosController::class, 'index']);
    }
}
