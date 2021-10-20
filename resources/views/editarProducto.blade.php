@extends('layouts.plantilla')
@section('title', 'Ingreso')

@section('content')
<!--
nombre
marca_proveedor
descripcion
cantidad
precio
categoria
imagen
-->
<div class="container center" style="margin: 0 33%">
    @foreach ( $informacionProductos as $producto )
    <form method="post" action="{{ route('actualizarProd')}}">
        <h3 style="margin-right: 70%">Editando información</h3>
        @csrf
        <div class="row">
            <input type="text" readonly style="width: 430px" value="{{$producto->_id}}" name="idProd" id="idProd"></div>
        <div class="row">
            <label for="nombre">nombre</label>
            <input type="text"  style="width: 430px" id="nombre" name="nombre" value="{{$producto->nombre}}" required="true">
        </div>
        <div class="row">
            <label for="marca">marca proveedor</label>
            <input type="text"  style="width: 430px" id="marca" name="marca" value="{{$producto->marca_proveedor}}" required="true">
        </div>
        <div class="row">
            <label for="descripcion">descripcion</label>
            <input type="text" style="width: 430px" id="descripcion" name="descripcion" value="{{$producto->descripcion}}" required="true">
        </div>
        <div class="row">
            <label for="cantidad">cantidad</label>
            <input type="text" style="width: 430px" id="cantidad" name="cantidad" value="{{$producto->cantidad}}" required="true">
        </div>
        <div class="row">
            <label for="precio">precio</label>
            <input type="text" style="width: 430px" id="precio" name="precio" value="{{$producto->precio}}" required="true">
        </div>
        <div class="row">
            <label for="categoria">categoria</label>
            <input type="text" style="width: 430px" id="categoria" name="categoria" value="{{$producto->categoria}}" required="true">
        </div>
        <div class="row">
            <label for="imagen">imagen</label>
            <input type="text" style="width: 430px" id="imagen" name="imagen" value="{{$producto->imagen}}" required="true">
        </div>
        <br>
        <div style="margin-right: 70%">
            <button class="btn btn-success" type="submit">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
                    <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"/>
                </svg>
                Actualizar
            </button>
        </div>
    </form>
    @endforeach

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
