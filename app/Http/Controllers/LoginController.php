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
        if($usuario[0] == 'admin'){
            return redirect()->route('usuario');
        } elseif($usuario[0] != 'no-user'){
            return redirect()->route('usuario', compact('$usuario'));
        } else {
            return view('login', compact('usuario'));
        }

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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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
        //SessionController->almacenarSesion($request, $usuarioSesion[0], $usuarioSesion[1]);
        //return view('productos', compact('usuarioSesion'));
        return redirect()->action([ProductosController::class, 'index']);
    }
}
