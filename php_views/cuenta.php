<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cuenta</title>
    <link rel="stylesheet" href="./style/bootstrap.min.css">
    <link rel="stylesheet" href="./style/cuenta.css">
</head>
<body>
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
<div class="container-fluid" >
  <div class="row" >
  <!-- MENÚ LATERAL -->
    <div class="col-2 bg-secondary position-absolute" style="height: 100%;">
      <ul class="nav flex-column nav-pills"id="menu">
        <li class="nav-item">
          <a class="nav-link active" href="#users">Usuarios</a>
        </li>
        <li class="nav-item"> 
          <a class="nav-link" href="#promociones">Promociones</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#historial">Historial de Juego</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#paradas">Paradas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#contacto">Contacto</a>
        </li>
      </ul>
    </div>
    <!-- DIV INFORMACION -->
    <div class="col-9 menu"id="información">
      <h3 class="display-4 m-3">Informacion</h3>     
    </div>
    <!-- DIV WHISLIST -->
    <div class="row menu"  id="whislist">   
      <h3 class="display-4 m-3">Whislist</h3>   
    </div>
    <!-- DIV CODIGO PROMOCIONES -->    
    <div class="menu" id="code-promociones">    
      <h3 class="display-4 m-3">Codigos de promociones</h3> 
    </div>  
  </div>
        
</div>        
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</html>