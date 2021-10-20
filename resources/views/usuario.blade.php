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

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>

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
                @csrf
                <button type="submit" class="btn btn-danger"> Cerrar sesion</button>
            </form>
        </div>
        <div class="col">&nbsp; </div>
        <div class="col">&nbsp; </div>
    </div>
    <br>
    <p style="margin-right: auto">
        <button class="btn btn-primary column" type="button" data-toggle="collapse" data-target="#collapseHistorialCompra" aria-expanded="false" aria-controls="collapseExample">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrows-angle-expand" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M5.828 10.172a.5.5 0 0 0-.707 0l-4.096 4.096V11.5a.5.5 0 0 0-1 0v3.975a.5.5 0 0 0 .5.5H4.5a.5.5 0 0 0 0-1H1.732l4.096-4.096a.5.5 0 0 0 0-.707zm4.344-4.344a.5.5 0 0 0 .707 0l4.096-4.096V4.5a.5.5 0 1 0 1 0V.525a.5.5 0 0 0-.5-.5H11.5a.5.5 0 0 0 0 1h2.768l-4.096 4.096a.5.5 0 0 0 0 .707z"/>
            </svg>
            &nbsp; Historial de compra
        </button>
        @if ($usuario[0] == 'admin')
        <button class="btn btn-primary column" type="button" data-toggle="collapse" data-target="#collapseProductos" aria-expanded="false" aria-controls="collapseExample">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrows-angle-expand" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M5.828 10.172a.5.5 0 0 0-.707 0l-4.096 4.096V11.5a.5.5 0 0 0-1 0v3.975a.5.5 0 0 0 .5.5H4.5a.5.5 0 0 0 0-1H1.732l4.096-4.096a.5.5 0 0 0 0-.707zm4.344-4.344a.5.5 0 0 0 .707 0l4.096-4.096V4.5a.5.5 0 1 0 1 0V.525a.5.5 0 0 0-.5-.5H11.5a.5.5 0 0 0 0 1h2.768l-4.096 4.096a.5.5 0 0 0 0 .707z"/>
            </svg>
            &nbsp; Productos
        </button>
        @endif
    </p>
    <div style="margin-right: 100%" class="collapse" id="collapseHistorialCompra">
            @if ($usuario[0] != 'admin')
            <table class="table">
                <thead>
                    <tr>
                        <td>usuario</td>
                        <td>email</td>
                        <td>nombre</td>
                        <td>marca</td>
                        <td>descripcion_categoria</td>
                        <td>cantidad</td>
                        <td>precio_unitario</td>
                        <td>fecha</td>
                        <td>total</td>
                        <td>confirmacion</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ( $informacionCompras as $compras )
                        <tr>
                            <td>{{ $compras->usuario }}</td>
                            <td>{{ $compras->email }}</td>
                            <td>{{ $compras->nombre }}</td>
                            <td>{{ $compras->marca }}</td>
                            <td>{{ $compras->descripcion_categoria }}</td>
                            <td>{{ $compras->cantidad }}</td>
                            <td>{{ $compras->precio_unitario }}</td>
                            <td>{{ $compras->fecha }}</td>
                            <td>{{ $compras->total }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
        <table class="table">
            <thead>
                <tr>
                    <td>usuario</td>
                    <td>email</td>
                    <td>nombre</td>
                    <td>marca</td>
                    <td>descripcion_categoria</td>
                    <td>cantidad</td>
                    <td>precio_unitario</td>
                    <td>fecha</td>
                    <td>total</td>
                    <td>confirmacion</td>
                </tr>
            </thead>
            <tbody class="table-striped">
                @foreach ( $informacionCompras as $compras )
                    <tr>
                        <td>{{ $compras->usuario }}</td>
                        <td>{{ $compras->email }}</td>
                        <td>{{ $compras->nombre }}</td>
                        <td>{{ $compras->marca }}</td>
                        <td>{{ $compras->descripcion_categoria }}</td>
                        <td>{{ $compras->cantidad }}</td>
                        <td>{{ $compras->precio_unitario }}</td>
                        <td>{{ $compras->fecha }}</td>
                        <td>{{ $compras->total }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        @endif
    </div>

    <div style="margin-right: 100%" class="collapse" id="collapseProductos">
        @if ($usuario[0] == 'admin')
            <table class="table">
                <thead>
                    <tr>
                        <td>Nombre</td>
                        <td>Marca proveedor</td>
                        <td>Descripcion</td>
                        <td>Stock actual</td>
                        <td>Precio</td>
                        <td>Categoria</td>
                        <td>Imagen</td>
                        <td>Acciones</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ( $informacionProductos as $producto )
                        <tr>
                            <td><div>{{$producto->nombre}}</div></td>
                            <td>{{$producto->marca_proveedor}}</td>
                            <td>{{$producto->descripcion}}</td>
                            <td>{{$producto->cantidad}}</td>
                            <td>{{$producto->precio}}</td>
                            <td>{{$producto->categoria}}</td>
                            <td><img src="{{$producto->imagen}}" width="200px" height="auto"></td>
                            <td>
                                <div>
                                    <form method="post" action="{{ route('editProd', ['idprod' => $producto->_id]); }}">
                                        @csrf
                                        <button class="btn btn-warning">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                                <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
                                            </svg>
                                        </button>
                                    </form>
                                    </div>
                                <br>
                                <div>
                                    <form action="{{ route('deleteProd', ['idprod' => $producto->_id]) }}" method="post">
                                        @csrf
                                        <button class="btn btn-danger">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                                <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                                            </svg>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>

    <br>

    <div class="row">

    </div>


</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<br>
<br>
<br>
<br>

footer
@endsection

