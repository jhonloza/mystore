@extends('layouts.plantilla')
@section('title', 'Ingreso')

@section('content')

<div class="container">
    <div style="width: 50%; margin-left: 10vw">
        <h3>Carrito actual</h3>
        <table class="table" >
            <thead>
                <tr>
                    <td>Nombre del producto</td>
                    <td>Marca</td>
                    <td>Descripcion y categoria del producto</td>
                    <td>Cantidad</td>
                    <td>Precio unitario</td>
                    <td>Fecha</td>
                </tr>
            </thead>
            <tbody>
                @foreach ( $informacion as $carrito )
                    <tr>
                        <td>{{$carrito->nombre}}</td>
                        <td>{{$carrito->marca}}</td>
                        <td>{{$carrito->descripcion_categoria}}</td>
                        <td>{{$carrito->cantidad}}</td>
                        <td>{{$carrito->precio_unitario}}</td>
                        <td>{{$carrito->fecha}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>
<div>&nbsp;</div>
<div>&nbsp;</div>
<div>&nbsp;</div>
<div>&nbsp;</div>
@endsection
