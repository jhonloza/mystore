<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/app.css">
    <script src="app.js"></script>
    <title>Registro</title>
</head>
<body>
    <div class="container">
        <form id="registro-form" method="POST">
            @csrf
            <div id="usuario">
                <label for="username">Usuario</label>
                <input type="text" id="username" name="username" required="true">
            </div>
            <div id="correo">
                <label for="email">Correo Electronico</label>
                <input type="email" id="email" name="email" required="true">
            </div>
            <div id="contraseña">
                <label for="password">Contraseña</label>
                <input type="password" id="password" name="password" required="true">
            </div>
            <div id="contraseña">
                <label for="verify">Verifica contraseña</label>
                <input type="password" id="verify" name="verify" required="true">
            </div>
            <div>
                <input type="submit" id="btn-registro" class="btn btn-primary" value="Registrar">
            </div>
        </form>
        <div class="center"><a href="login"><b>Ya posees cuenta? Ingresa</b></a>
        </div>
    </div>
</body>
</html>
