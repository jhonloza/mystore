<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use MongoDB\Driver\Manager;
use MongoDB\Driver\Query;
use MongoDB\Driver\ReadPreference;
include 'SessionController.php';

class UsuarioController extends Controller
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
        $host = "localhost";
        $port = "27017";
        //Conexion a mongo
        $conexion = new Manager("mongodb://$host:$port");
        //variables donde se almacena informacion
        $filtrar = array();
        $options = array();
        $query = new Query($filtrar, $options);
        $leerPreferencia = new ReadPreference(ReadPreference::RP_PRIMARY);
        $informacionUsuarios = $conexion->executeQuery("tiendacomponenteselectronicos.usuario", $query, $leerPreferencia);
        $informacionProductos = $conexion->executeQuery("tiendacomponenteselectronicos.productos", $query, $leerPreferencia);
        $informacionMarcaProveedor = $conexion->executeQuery("tiendacomponenteselectronicos.marca_proveedor", $query, $leerPreferencia);
        if($usuario[0] != 'admin'){
            $filtrar = ['usuario' => $usuario[0], 'email' => $usuario[1]];
            $query = new Query($filtrar, $options);
            $informacionCompras = $conexion->executeQuery("tiendacomponenteselectronicos.carrito", $query);
        } else {
            $informacionCompras = $conexion->executeQuery("tiendacomponenteselectronicos.carrito", $query);
        }
        return view('usuario', compact('usuario', 'informacionUsuarios','informacionProductos','informacionMarcaProveedor','informacionCompras'));
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
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function show(Usuario $usuario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function edit(Usuario $usuario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Usuario $usuario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function destroy(Usuario $usuario)
    {
        //
    }
    public function cerrarSesion(Request $request){
        $control = new SessionController();
        $control->almacenarSesion($request, 'no-user', 'no-email');
        return redirect('/');
    }
}
