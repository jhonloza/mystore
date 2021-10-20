<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use MongoDB\Driver\Manager;
use MongoDB\Driver\BulkWrite;
use MongoDB\Driver\Query;
use MongoDB\Driver\ReadPreference;
use MongoDB\BSON\ObjectId;
include 'SessionController.php';

class EliminarProductoController extends Controller
{
    public function eliminarProducto (Request $request){
        $idprod = $request->idProd;
        $host = "localhost";
        $port = "27017";
        //Conexion a mongo
        //Driver Manager en linea roja por falta de reconocimiento de la clase base importada de composer
        $conexion = new Manager("mongodb://$host:$port");
        //variables donde se almacena informacion
        //Driver BulkWrite con linea roja por falta de reconocimianto de la clase base de mongo
        $bulkWrite = new BulkWrite; //driver de modificacion de mongo "Insert, Update, Delete, Select"
        $id = new ObjectId($idprod); //Importa la ID de mongo en formato BSON
        $bulkWrite->delete(['_id' => $id], ['limit' => 1]);
        $resultado = $conexion->executeBulkWrite('tiendacomponenteselectronicos.productos', $bulkWrite);
        if($resultado->getDeletedCount() != 0){
            echo '<script type="text/javascript">alert("Producto eliminado correctamente");</script>';
            return redirect('usuario');
        } else{
            echo'<script type="text/javascript">alert("Fallo al eliminar el producto");</script>';
        }
    }
    //Todas las clases en rojo son importadas pero con un fallo de lectura del namespace por parte de composer, pero funcionales al ejecutar "composer install"
}

