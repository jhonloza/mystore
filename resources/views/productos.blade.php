@extends('layouts.plantilla')
@section('title', 'Productos')

@section('content')
<div class="sesion-actual">
    @if (empty($usuario))
    @else
        @foreach ($usuario as $clave => $sesion)
            <input id="user{{$clave}}" value="{{$sesion}}" readonly>
        @endforeach
    @endif


</div>
<div class="container">
    <div class="mostrador">
        <div class="row">
        @foreach ( $informacion as $datos)
        <div class="col-md-4">
            <div class="card">
                <img class="card-img-top" src="{{$datos->imagen}}" alt="" srcset="">
                <div class="card-body">
                    <p style="display: none" class="card-text">{{$datos->_id}}</p>
                    <h5 class="card-title">{{$datos->nombre}}</h5>
                    <h6 class="card-subtitle mb2 text-muted">{{$datos->marca_proveedor}}</h6>
                    <p class="card-text">{{$datos->descripcion}}</p>
                    <p class="card-text">Categoria: {{$datos->categoria}}</p>
                    <p class="card-text">Precio Unitario: $ {{$datos->precio}}</p>
                    <table>
                        <tr>
                            <td>Disponibles: {{$datos->cantidad}}</td>
                            <td><button wire:click="addCarrito({{$sesion[0]}}, {{$sesion[1]}}, {{$datos->nombre}}, {{$datos->marca_proveedor}}, {{$datos->descripcion}}.' - '.{{$datos->categoria}}, 1, {{$datos->precio}}, date('Y-m-d'), 0, 'no')" class="btn btn-warning btn-comprar">Añadir a carrito</button></td>

                        </tr>
                    </table>

                </div>
            </div>
        </div>
        @endforeach

        </div>
    </div>
</div>
<div>&nbsp;</div>
<div>&nbsp;</div>




@endsection
