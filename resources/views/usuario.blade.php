<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Usuario</title>
</head>
<body>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Usuario</th>
                <th scope="col">Contraseña</th>
                <th scope="col">Verificado</th>
                <th scope="col">Admin</th>
            </tr>
        </thead>
        <tbody>
            @foreach ( $informacion as $datos)
                <tr>
                    <td>{{$datos->_id}}</td>
                    <td>{{$datos->usuario}}</td>
                    <td>{{$datos->password}}</td>
                    <td>{{$datos->validate}}</td>
                    <td>{{$datos->admin}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
