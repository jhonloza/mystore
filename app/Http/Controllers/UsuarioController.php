<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use MongoDB\Driver\Manager;
use MongoDB\Driver\Query;
use MongoDB\Driver\ReadPreference;
use MongoDB\BSON\ObjectId;
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
    public function create()
    {
        //
    }
    public function store(Request $request)
    {
        //
    }
    public function show(Usuario $usuario)
    {
        //
    }
    public function edit(Usuario $usuario)
    {
        //
    }
    public function update(Request $request, Usuario $usuario)
    {
        //
    }
    public function destroy(Usuario $usuario)
    {
        //
    }
    public function cerrarSesion(Request $request){
        $control = new SessionController();
        $control->almacenarSesion($request, 'no-user', 'no-email');
        return redirect('/');
    }
    public function editarProducto($idprod){
        //$datos = [$idprod];
        //echo 'datos : '.$datos[0];
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
        return view('editarProducto', compact('informacionProductos'));
        /*foreach ($informacionProductos as $value) {
            echo '<div>'.$value->nombre.'</div>';
        }*/
    }
    public function eliminarProducto($idprod){
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
        return view('eliminarProducto', compact('informacionProductos'));
    }
}
