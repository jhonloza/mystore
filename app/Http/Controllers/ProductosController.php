<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;
use MongoDB\Driver\Manager;
use MongoDB\Driver\Query;
use MongoDB\Driver\ReadPreference;
use Livewire\Component;
include 'SessionController.php';

class ProductosController extends Controller
{
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
        $filtrar = array();
        $options = array();
        $query = new Query($filtrar, $options);
        $leerPreferencia = new ReadPreference(ReadPreference::RP_PRIMARY);
        $informacion = $conexion->executeQuery("tiendacomponenteselectronicos.productos", $query, $leerPreferencia);
        return view('productos', compact('informacion', 'usuario'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show()
    {
        //
    }

    public function edit()
    {
        //
    }

    public function update(Request $request)
    {
        //
    }
    public function addCarrito($sesion1, $sesion2, $nombre, $marca_proveedor, $descripcioncategoria, $cant, $precio, $date, $total, $confir){

    }
    public function destroy()
    {
        //
    }
}
