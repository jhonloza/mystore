@extends('layouts.plantilla')
@section('title', 'Ingreso')

@section('content')

<div class="container center" style="margin: 0 33%">
    @foreach ( $informacionProductos as $producto )
    <form method="post" action="{{ route('eliminarProd')}}">
        <h3 style="margin-right: 70%">Eliminando producto</h3>
        @csrf
        <div class="row">
            <input type="text" readonly style="width: 430px" value="{{$producto->_id}}" name="idProd" id="idProd"></div>
        <div class="row">
            <label for="nombre">nombre</label>
            <input type="text" readonly style="width: 430px" id="nombre" name="nombre" value="{{$producto->nombre}}" required="true">
        </div>
        <div class="row">
            <label for="marca">marca proveedor</label>
            <input type="text" readonly style="width: 430px" id="marca" name="marca" value="{{$producto->marca_proveedor}}" required="true">
        </div>
        <div class="row">
            <label for="descripcion">descripcion</label>
            <input type="text" readonly style="width: 430px" id="descripcion" name="descripcion" value="{{$producto->descripcion}}" required="true">
        </div>
        <div class="row">
            <label for="cantidad">cantidad</label>
            <input type="text" readonly style="width: 430px" id="cantidad" name="cantidad" value="{{$producto->cantidad}}" required="true">
        </div>
        <div class="row">
            <label for="precio">precio</label>
            <input type="text" readonly style="width: 430px" id="precio" name="precio" value="{{$producto->precio}}" required="true">
        </div>
        <div class="row">
            <label for="categoria">categoria</label>
            <input type="text" readonly style="width: 430px" id="categoria" name="categoria" value="{{$producto->categoria}}" required="true">
        </div>
        <div class="row">
            <label for="imagen">imagen</label>
            <input type="text" readonly style="width: 430px" id="imagen" name="imagen" value="{{$producto->imagen}}" required="true">
        </div>
        <br>
        <div style="margin-right: 70%">
            <button class="btn btn-danger" type="submit">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
                    <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"/>
                </svg>
                &nbsp;
                Eliminar
            </button>
            &nbsp;
            &nbsp;
            <a href="/usuario">
                <button class="btn btn-warning">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-backspace-fill" viewBox="0 0 16 16">
                        <path d="M15.683 3a2 2 0 0 0-2-2h-7.08a2 2 0 0 0-1.519.698L.241 7.35a1 1 0 0 0 0 1.302l4.843 5.65A2 2 0 0 0 6.603 15h7.08a2 2 0 0 0 2-2V3zM5.829 5.854a.5.5 0 1 1 .707-.708l2.147 2.147 2.146-2.147a.5.5 0 1 1 .707.708L9.39 8l2.146 2.146a.5.5 0 0 1-.707.708L8.683 8.707l-2.147 2.147a.5.5 0 0 1-.707-.708L7.976 8 5.829 5.854z"/>
                    </svg>
                    &nbsp;
                    Cancelar
                </button>
            </a>
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
