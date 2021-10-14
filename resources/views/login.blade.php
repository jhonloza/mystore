@extends('layouts.plantilla')
@section('title', 'Ingreso')

@section('content')
<div class="sesion-actual">
    @if (empty($usuario))
        <li >No hay usuario</li>
    @else
        @foreach ($usuario as $clave => $sesion)
            <input id="user{{$clave}}" value="{{$sesion}}" readonly>
        @endforeach
    @endif
</div>
    <div class="container">
        <form id="login-form" method="POST">
            @csrf

            <div id="usuario">
                <label for="username">Usuario</label>
                <input type="text" id="username" name="username"  required="true">
            </div>
            <div id="contraseña">
                <label for="password">Contraseña</label>
                <input type="password" id="password" name="password"  required="true">
            </div>
            <div>
                <input type="submit" id="btn-login" class="btn btn-primary" value="Ingresar">
            </div>
            <div class="center"><a href="register"><b>Olvidaste tu contraseña? Recuperala</b></a>
            </div>
        </form>
        <div class="center">No tienes cuenta? Registrate <a href="register"><b>aqui</b></a>
        </div>
    </div>
    <div>&nbsp;</div>
    <div>&nbsp;</div>


@endsection
