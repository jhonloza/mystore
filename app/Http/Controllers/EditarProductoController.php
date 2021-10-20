<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use MongoDB\Driver\Manager;
use MongoDB\Driver\BulkWrite;
use MongoDB\Driver\Query;
use MongoDB\Driver\ReadPreference;
use MongoDB\BSON\ObjectId;
include 'SessionController.php';

class EditarProductoController extends Controller
{
    public function actualizarProd(Request $request){
        $idprod = $request->idProd;
        $nombre = $request->nombre;
        $marca = $request->marca;
        $descripcion = $request->descripcion;
        $cantidad = $request->cantidad;
        $precio = $request->precio;
        $categoria = $request->categoria;
        $imagen = $request->imagen;
        $host = "localhost";
        $port = "27017";
        //Conexion a mongo
        $conexion = new Manager("mongodb://$host:$port");
        //variables donde se almacena informacion
        $bulkWrite = new BulkWrite;
        $id = new ObjectId($idprod);
        $bulkWrite->update(['_id' => $id],
        ['$set' => ['nombre' => $nombre, 'marca_proveedor'=> $marca,
        'descripcion' => $descripcion, 'cantidad' => $cantidad, 'precio' => $precio,
        'categoria' => $categoria, 'imagen' => $imagen]], ['multi' => false, 'upsert' => true]);
        $resultado = $conexion->executeBulkWrite('tiendacomponenteselectronicos.productos', $bulkWrite);
        if($resultado->getModifiedCount() != 0){
            echo '<script type="text/javascript">alert("Producto actualizado correctamente");</script>';
            return redirect('usuario');
        } else{
            echo'<script type="text/javascript">alert("Fallo al actualizar el producto");</script>';
        }
        //echo 'id: '.$idProducto.'<br>';
        //printf("Updated  %d document(s)\n", $result->getModifiedCount());
    }
}
