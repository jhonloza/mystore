<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/app.css">
    <script src="app.js"></script>
    <title>Sara Store - @yield('title')</title>
</head>
<body>
    <!--CABECERA-->
    @section('sidebar')
    <header class="main-header">
        <div class="container container--flex">
          <div class="main-header__container">
            <h1 class="main-header__title">Sadita Store</h1>
            <span class="icon-menu" id="btn-menu"><i class="fas fa-bars"></i></span>
            <nav class="main-nav" id="main-nav">
              <ul class="menu">
                <li class="menu__item"><a href="/" class="menu__link">Inicio</a></li>
                <li class="menu__item"><a href="/productos" class="menu__link">Comprar</a></li>
                <li class="menu__item"><a href="/login" class="menu__link">Mi Cuenta <i class="fas fa-shopping-cart"></i></a></li>
              </ul>
            </nav>
          </div>
        </div>
      </header>
    @show
    <!--FIN DE CABECERA-->
    <!--CONTENIDO-->
    <div class="center">
        @yield('content')
    </div>
    <!--FIN DE CONTENIDO-->
    <!--FOOTER-->
    <footer class="footer">
        <div class="container">
            <span class="text-muted">Proyecto por Sara Sanchez &copy; Todos los derechos reservados</span>
        </div>
    </footer>
    <!--FIN DE FOOTER-->
</body>
</html>
