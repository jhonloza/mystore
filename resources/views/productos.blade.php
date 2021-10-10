<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/app.css">
    <script src="app.js"></script>
    <title>Productos</title>
</head>
<body>
    <div class="container">
        @foreach ( $informacion as $datos)
            <div class="card col-4 center">
                <img class="card-img-top" src="{{$datos->imagen}}" alt="" srcset="">
                <div class="card-body">
                    <h5 class="card-title">{{$datos->nombre}}</h5>
                    <h6 class="card-subtitle mb2 text-muted">{{$datos->marca_proveedor}}</h6>
                    <p class="card-text">{{$datos->descripcion}}</p>
                    <p class="card-text">Categoria: {{$datos->categoria}}</p>
                    <p class="card-text">Precio Unitario: $ {{$datos->precio}}</p>
                    <table>
                        <tr>
                            <td>Disponibles: {{$datos->cantidad}}</td>
                            <td>
                                Adquirir:
                                <input class="contador" type="number" name="cantComprar" id="cantComprar" value="1">
                            </td>
                        </tr>
                    </table>
                    <div>
                        <button class="btn btn-warning btn-comprar">Comprar</button>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</body>
</html>
