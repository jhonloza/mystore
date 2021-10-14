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
    <br>
    <div class="row">
        <div class="col">&nbsp;</div>
        <div class="col">Usuario: </div>
        @if (empty($usuario))
            <li >No hay usuario</li>
        @else
            @foreach ($usuario as $clave => $sesion)
                <div class="col" id="datos{{$clave}}">{{$sesion}}</div>
            @endforeach
        @endif
        <div class="col">
            <form method="post">
                <button type="submit" class="btn btn-danger"> Cerrar sesion</button>
            </form>
        </div>
        <div class="col">&nbsp; </div>
        <div class="col">&nbsp; </div>
    </div>
    <br>
    <br>
    @if (empty($usuario))
    <li >No hay usuario</li>
    @else
        @if ($usuario[0] == 'admin')
        <table id="usuarios">
            <thead>
                <tr>
                    <td>Usuario</td>
                    <td>Email</td>
                    <td>Contraseña</td>
                    <td>Verificacion</td>
                    <td>Admin</td>
                </tr>
            </thead>
            <tbody>
                @if (empty($informacionUsuarios))
                <tr>
                    <td>No data</td>
                    <td>No data</td>
                    <td>No data</td>
                    <td>No data</td>
                    <td>No data</td>
                </tr>
                @else
                    @foreach ($informacionUsuarios as $nusuario)
                    <tr>
                        <td>{{$nusuario->username}}</td>
                        <td>{{$nusuario->email}}</td>
                        <td>{{$nusuario->password}}</td>
                        <td>{{$nusuario->verify}}</td>
                        <td>{{$nusuario->admin}}</td>
                    </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
        @endif
    @endif


@if (empty($usuario))
<li >No hay usuario</li>
@else
    @if ($usuario[0] == 'admin')
    <table id="usuarios">
        <thead>
            <tr>
                <td>nombre</td>
                <td>marca_proveedor</td>
                <td>descripcion</td>
                <td>cantidad</td>
                <td>precio</td>
                <td>categoria</td>
                <td>imagen</td>
            </tr>
        </thead>
        <tbody>
            @if (empty($informacionProductos))
            <tr>
                <td>No data</td>
                <td>No data</td>
                <td>No data</td>
                <td>No data</td>
                <td>No data</td>
                <td>No data</td>
                <td>No data</td>
            </tr>
            @else
                @foreach ($informacionProductos as $producto)
                <tr>
                    <td>{{$producto->nombre}}</td>
                    <td>{{$producto->marca_proveedor}}</td>
                    <td>{{$producto->descripcion}}</td>
                    <td>{{$producto->cantidad}}</td>
                    <td>{{$producto->precio}}</td>
                    <td>{{$producto->categoria}}</td>
                    <td><img src="{{$producto->imagen}}" width="100px" height="100px"></td>
                </tr>
                @endforeach
            @endif
        </tbody>
    </table>
    @endif
@endif



</div>


@endsection
