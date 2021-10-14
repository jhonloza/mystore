@extends('layouts.plantilla')
@section('title', 'Registro')

@section('content')


    <div class="container">
        <form id="registro-form" method="POST">
            @csrf
            <div id="usuario">
                <label for="username">Usuario</label>
                <input type="text" id="username" name="username" required="true">
            </div>
            <div id="correo">
                <label for="email">Correo Electronico</label>
                <input type="email" id="email" name="email" required="true">
            </div>
            <div id="contraseña">
                <label for="password">Contraseña</label>
                <input type="password" id="password" name="password" required="true">
            </div>
            <div id="contraseña">
                <label for="verify">Verifica contraseña</label>
                <input type="password" id="verify" name="verify" required="true">
            </div>
            <div>
                <input type="submit" id="btn-registro" class="btn btn-primary" value="Registrar">
            </div>
        </form>
        <div class="center"><a href="login"><b>Ya posees cuenta? Ingresa</b></a>
        </div>
    </div>
    <div>&nbsp;</div>
    <div>&nbsp;</div>

@endsection
