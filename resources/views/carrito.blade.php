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
                @php
                    $usuario='';
                    $email='';
                    $fecha='';
                    $sumador = 0;
                    foreach ( $informacion as $carrito ) {
                        echo '<tr>
                        <td>'.$carrito->nombre.'</td>
                        <td>'.$carrito->marca.'</td>
                        <td>'.$carrito->descripcion_categoria.'</td>
                        <td>'.$carrito->cantidad.'</td>
                        <td>'.$carrito->precio_unitario.'</td>
                        <td>'.$carrito->fecha.'</td>
                        </tr>';
                        $sumador = $sumador +$carrito->precio_unitario;
                        $usuario=$carrito->usuario;
                        $email=$carrito->email;
                        $fecha=$carrito->fecha;
                    }

                @endphp
            </tbody>
        </table>
    </div>

</div>
<div>&nbsp;</div>
<div style="margin-left: 10%">
    <form method="post">
        @csrf
        <div class="row">
            <div class="col">
                <div><input type="text" id="usuariopago" name="usuariopago" style="width: 50%" value="{{$usuario}}" readonly></div>
                <div><input type="text" id="email" name="email" style="width: 50%" value="{{$email}}" readonly></div>
                <div><input type="text" id="fecha" name="fecha" style="width: 50%" value="{{$fecha}}" readonly></div>
            </div>
            <div class="col" style="margin-right: 30%">
                Total a pagar
                <div><input type="text" id="totalp" name="totalp" style="width: 25%" value="{{$sumador}}" readonly></div>
                <button type="submit" class="btn btn-success">Realizar pago</button>
            </div>
        </div>


    </form>
</div>
<div>&nbsp;</div>
<div>&nbsp;</div>
<div>&nbsp;</div>
<div>&nbsp;</div>
@endsection
