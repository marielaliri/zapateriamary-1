<!DOCTYPE html>
<html lang="en">
<head>
<title>PRODUCTOSDOS</title> 
  <meta charset="UTF-8">
   <link rel="stylesheet" href="css/pinterest.css">
  <link rel="icon" href="imagenes/icono.png" type="image/png">

   
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
   


  <link rel="stylesheet" type="text/css" href="css/stile.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="flexslider.css" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
   
<script src="js/jquery.flexslider.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  
  <script type="text/javascript" charset="utf-8">
  $(window).load(function() {
    $('.flexslider').flexslider({
      touch: true,
      pauseOnAction: false,
      pauseOnHover: false,
    });
  });
</script>
  
</head>
<body>
<!-- Inicio de menu -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary navbar navbar-dark bg-dark">
  <a class="navbar-brand" href="#"><img style= "width: 50px; " src="imagenes/zap.png"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php"><i class="fa fa-home"></i> Inicio <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="productos.<?php?>"><i class="fa fa-plus-circle"></i> Nuevo</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="servicios.<?php?>"><i class="fa fa-columns"></i> Colecciones</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contactenos.<?php?>"><i class="fa fa-book"></i> Marcas</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="carrito2.<?php?>"><i class="fa fa-shopping-cart"></i> Ventas</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Buscar...">
      <button class="btn btn-secondary my-2 my-sm-0" type="submit"> <i class="fa fa-search"></i> Buscar</button>
    </form>
  </div>
</nav>

<!-- Fin de menu -->

<div class="flexslider">
    <ul class="slides">
      <li>

        <img src="imagenes/2-1.jpg" alt="">
        <section class="flex-caption">
          <p id="nom-imag">TACONES CERRADOS 1</p>
        </section>
      </li>
      <li>
        <img src="imagenes/2-2.jpg" alt="">
        <section class="flex-caption">
          <p id="nom-imag">VALERINAS CERRADAS 2</p>
        </section>
      </li>
      <li>
        <img src="imagenes/2-3.jpg" alt="">
        <section class="flex-caption">
          <p id="nom-imag">SANDALLAS NIÑAS Y NIÑOS 3</p>
        </section>
      </li>
    </ul>
  </div>

<!-- Fin de menu -->

<div class="container text-center">

   <h1 class="tex" >Camisas Sport</h1>

  <div class="row">
  <div class="fondo-color">
       <div class="col productos"> <img style= "width: 200px;" src="imagenes/image5.jpg" alt="">
</div>
  </div> 


    <div class="col product">
    <div class="fondo-producto">
      <h2>Tacones </h2>
      <h3>Precio: S/60.00</h3>
      <p id="lorem">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi expedita nostrum incidunt labore excepturi ex laborum laboriosam mollitia porro ratione accusantium facere, ipsum delectus consequatur ullam repudiandae perferendis, ducimus maxime  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut unde a dignissimos maiores esse debitis placeat error dolore natus, doloremque atque in enim, facilis quidem.</p>
      <br><br><a class="btn btn-primary" href="carrito.php">Comprar</a>
      <a class="btn btn-success" href="index.php">Regresar</a>
</div>  
</div>     
</div>
</div>

<script src="js/pinterest_grid.js"></script>
<script src="js/main.js"></script>

</body>
</html>


