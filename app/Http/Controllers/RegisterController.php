<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use MongoDB\Driver\Manager;
use MongoDB\Driver\Query;
use MongoDB\Driver\BulkWrite;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('register');
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
    public function registrar(Request $request){
        $username = $request->username;
        $email = $request->email;
        $password = $request->password;
        $verify = $request->verify;
        $host = "localhost";
        $port = "27017";
        //Conexion a mongo
        $conexion = new Manager("mongodb://$host:$port");
        $bulkWrite = new BulkWrite;
        $nuevoUsuario = ['username' => $username,'email' => $email,'password' => $password,'verify' => $verify,'admin' => false];
        $bulkWrite->insert($nuevoUsuario);
        $registrado = $conexion->executeBulkWrite('tiendacomponenteselectronicos.usuario', $bulkWrite);
        if($registrado->getInsertedCount() == 1){
            echo'<script type="text/javascript">alert("Usuario creado correctamente");</script>';
            return view('welcome');
        } else {
            echo'<script type="text/javascript">alert("fallo al crear Usuario creado correctamente");</script>';
        }
    }
}
