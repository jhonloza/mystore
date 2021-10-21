<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use MongoDB\Driver\Manager;
use MongoDB\Driver\Query;
use MongoDB\Driver\ReadPreference;
include 'SessionController.php';

class CarritoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $control = new SessionController();
        $usuario = $control->getSesion($request);
        if(empty($usuario)){
            $control->almacenarSesion($request, 'no-user', 'no-email');
        }
        $host = "localhost";
        $port = "27017";
        //Conexion a mongo
        $conexion = new Manager("mongodb://$host:$port");
        //variables donde se almacena informacion
        $fecha = date('Y-n-j');
        $options = array();
        //echo $usuario[0].' - '.$usuario[1].' - '.$fecha;
        $query = new Query(['usuario' => $usuario[0], 'email' => $usuario[1], 'fecha' => $fecha, 'confirmacion' => 'no'], $options);
        $informacion = $conexion->executeQuery("tiendacomponenteselectronicos.carrito", $query);
        return view('carrito', compact('informacion', 'usuario'));
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
}
