<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/app.css">
    <script src="app.js"></script>
    <title>Login</title>
</head>
<body>
    <div class="container">
        <form id="login-form" method="POST">
            @csrf
            <div id="usuario">
                <label for="username">Usuario</label>
                <input type="text" id="username" name="username"  required="true">
            </div>
            <div id="contraseña">
                <label for="password">Contraseña</label>
                <input type="password" id="password" name="password"  required="true">
            </div>
            <div>
                <input type="submit" id="btn-login" class="btn btn-primary" value="Ingresar">
            </div>
            <div class="center"><a href="register"><b>Olvidaste tu contraseña? Recuperala</b></a>
            </div>
        </form>
        <div class="center">No tienes cuenta? Registrate <a href="register"><b>aqui</b></a>
        </div>
    </div>
</body>
</html>
