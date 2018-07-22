<nav class="navbar navbar-expand-lg navbar-dark bg-primary navbar navbar-dark bg-dark">
  <a class="navbar-brand" href="#"><img style= "width: 60px; " src="imagenes/zape.png"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">

    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php"><i class="fa fa-home"></i> Inicio <span class="sr-only">(current)</span></a>
      </li>

      <li class="dropdown">
      <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false" ><i class="fa fa-columns"></i>Colecciones</a>
      <ul class="dropdown-menu" id="c">
        <li><a class="dropdown-item" href="verano.php">Verano</a></li>
        <li><a class="dropdown-item" href="otonio.php">Otoño</a></li>
        <li><a class="dropdown-item" href="invierno.php">Invierno</a></li>
      </ul> 
    </li>

      <li class="dropdown">
      <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false" class="fa fa-shopping-cart"><i class="fa fa-shopping-cart"></i> Ventas</a>
      <ul class="dropdown-menu" id="c">
        <li><a class="dropdown-item" href="nuevo.php">Para Damas</a></li>
        <li><a class="dropdown-item" href="caballeros.php">Para Caballeros</a></li>
        <li><a class="dropdown-item" href="ninios.php">Para Niños</a></li>
      </ul> 
    </li>

       <li class="nav-item">
        <a class="nav-link" href="formulario4.php"><i class="fa fa-columns"></i> Consulta</a>
      </li>
    </ul>

    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Buscar...">
      <button class="btn btn-secondary my-2 my-sm-0" type="submit"> <i class="fa fa-search"></i> Buscar</button>
    </form>

  </div>
</nav>