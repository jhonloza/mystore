<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;
use MongoDB\Driver\Manager;
use MongoDB\Driver\Query;
use MongoDB\Driver\ReadPreference;
use MongoDB\BSON\ObjectId;
use MongoDB\Driver\BulkWrite;
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
    public function añadirCarrito($idprod, Request $request){

        $control = new SessionController();
        $usuario = $control->getSesion($request);
        if(empty($usuario) || ($usuario[0] == 'no-user')){
            return redirect('login');
        }
        $host = "localhost";
        $port = "27017";
        //Conexion a mongo
        $conexion = new Manager("mongodb://$host:$port");
        //variables donde se almacena informacion
        $id = new ObjectId($idprod);
        $filtrar = ['_id' => $id];
        $options = array();
        $query = new Query($filtrar, $options);
        $informacionProductos = $conexion->executeQuery("tiendacomponenteselectronicos.productos", $query);
        $nuevocarrito = [];
        foreach ($informacionProductos as $value) {
            $nuevocarrito = ['usuario' => $usuario[0],
            'email' => $usuario[1],
            'nombre' => $value->nombre,
            'marca' => $value->marca_proveedor,
            'descripcion_categoria' => $value->descripcion.' - '.$value->categoria,
            'cantidad' => 1,
            'precio_unitario' => $value->precio,
            'fecha' => date('Y-n-j'),
            'total' => 0,
            'confirmacion' => 'no'];
        }
        //echo 'carrito: '.$nuevocarrito['usuario'];
        $bulkWrite = new BulkWrite;
        $bulkWrite->insert($nuevocarrito);
        $registrado = $conexion->executeBulkWrite('tiendacomponenteselectronicos.carrito', $bulkWrite);
        //echo 'carrito : '.$nuevocarrito['usuario'];
        if($registrado->getInsertedCount() == 1){
            echo'<script type="text/javascript">alert("Producto agregado al carrito");</script>';
            return redirect('carrito');
        } else {
            echo'<script type="text/javascript">alert("fallo al crear Usuario creado correctamente");</script>';
        }
    }
    public function destroy()
    {
        //
    }

}
