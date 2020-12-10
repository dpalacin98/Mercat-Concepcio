<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juegos</title>
    <link rel="stylesheet" href="./style/bootstrap.min.css">
    <link rel="stylesheet" href="./style/juegos.css">
</head>
<body>
  <!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">LOGO</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">FAQ
          <span class="sr-only">(current)</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Promociones</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Idioma</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Lista de deseos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Cuenta</a>
      </li>
    </ul>
  </div>
</nav>
<div class="container-fluid">
    <!-- SELECT JUEGOS -->
  <div class="row row-select">
    <div class="col"><img src="./media/imagen.png" height="100%" width="80%" style="margin:auto; display: block;"></div>
    <div class="col"><img src="./media/imagen.png" height="100%" width="80%" style="margin:auto; display: block;"></div>
    <div class="col"><img src="./media/imagen.png" height="100%" width="80%" style="margin:auto; display: block;"></div>
    <div class="col"><img src="./media/imagen.png" height="100%" width="80%" style="margin:auto; display: block;"></div>
  </div>
  <div class="container">
      <!-- DIV JUEGO -->
    <div class="juego">
      <!-- row puntos -->
      <div class="row row-puntos">
        <h3>Score: <span id="result"></span></h3>
        <h5><span id="suma"></span></h5>
      </div>
      <!-- row elementos -->
      <div class="row">
        <!-- row grid -->
        <div class="row row-productos">
          <div class="grid"></div>
        </div>
        <!-- row productos -->
        <div class="row row-productoClientes">
          <div class="grid-productos"></div>          
        </div>
        <!-- row clientes -->
        <div class="row row-clientes">
          <div class="grid-clientes"></div>
        </div>
      </div>
    </div>
  </div>
    <!-- BARRA PUNTOS USUARIO -->
  <div class="progress">
    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%; color:black;">100%</div>
  </div>
</div>
</body>
  <!-- FOOTER -->
<footer>
  <div class="jumbotron">
    <h1 class="display-3">Hello, world!</h1>
    <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
    <hr class="my-4">
    <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
    <p class="lead">
      <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
    </p>
  </div>
</footer>
<script src="./js/juego1.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</html>