<?php
session_start();
$ruta ="/web/";
require_once $_SERVER['DOCUMENT_ROOT'] . $ruta.'php_libraries/ti.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php startblock('titulo') ?><?php endblock() ?></title>
    
    <!-- Librerías bootstrap -->
    <link rel="stylesheet" href=<?php echo $ruta . "php_libraries/bootstrap/css/bootstrap.css"?>
    >
    <!-- CSS -->
    <?php startblock('css'); endblock()?>
</head>
<body>

  <!-- NAV -->

  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="#">MERCAT DE LA CONCEPCIÓ</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor02">
      <ul class="navbar-nav mr-auto">
      
      <!--inicio izquierdo-->
      <!--Inicio-->
        <li class="nav-item active">
          <a class="nav-link" href="#"><i class="fas fa-home"></i>  Inicio
            <span class="sr-only">(current)</span>
          </a>
        </li>
        <!--Paradas-->
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fas fa-search-location"></i>  Paradas</a>
        </li>
        <!--Promociones-->
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fas fa-tag"></i>  Promociones</a>
        </li>
        <!--Lista de deseos-->
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fas fa-heart"></i>  Lista de deseos</a>
        </li>
      </ul>
        <!-- fin izquierdo-->
        <!--Inicio derecho-->
      <ul class="navbar-nav my-2 my-lg-0">
        <!--Admin-->
        <li class="nav-item">
        <a class="nav-link" href="#" ><i class="fas fa-cog"></i>  Admin</a>
        </li>
        <!--FAQ-->
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="far fa-question-circle"></i>  FAQ</a>
        </li>
        <!--Idiomas-->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><i class="fas fa-globe"></i> Idioma</a>
          <div class="dropdown-menu" style="background-color: #F49600;">
            <a class="dropdown-item" href="#" style="color: white;">  Español</a>
            <a class="dropdown-item" href="#" style="color: white;">  Catalán</a>
            <a class="dropdown-item" href="#" style="color: white;">  Inglés</a>
          </div>
        </li>
      
        <!--cuentas-->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user-alt"></i> Cuenta</a>
          <div class="dropdown-menu" style="background-color: #F49600;">
            <a class="dropdown-item" href="#" style="color: white;">  Usuarix</a>
            <a class="dropdown-item" href="#" style="color: white;">  Admin</a>
          </div>
        </li>
      </ul>
      <!--fin derecho-->
    </div>
  </nav>
 
  <!--FIN NAV-->
  <?php startblock('principal') ?><?php endblock()?>
</body>

<!-- Footer -->
<footer class="page-footer font-small indigo">

  <!-- Footer Links -->
  <div class="container">

    <!-- Grid row-->
    <div class="row text-center d-flex justify-content-center pt-5 mb-3">

      <!-- Grid column Sobre nosotrxs-->
      <div class="col-md-2 mb-3">
        <h6 class="text-uppercase font-weight-bold">
          <a href="#!">Sobre nosotrxs</a>
        </h6>
      </div>
      <!-- Grid column Contacto-->
      <div class="col-md-2 mb-3">
        <h6 class="text-uppercase font-weight-bold">
          <a href="#!">Contacto</a>
        </h6>
      </div>

      <!-- Grid column Paradas-->
      <div class="col-md-2 mb-3">
        <h6 class="text-uppercase font-weight-bold">
          <a href="#!">Paradas</a>
        </h6>
      </div>
      
      <!-- Grid column Promociones-->
      <div class="col-md-2 mb-3">
        <h6 class="text-uppercase font-weight-bold">
          <a href="#!">Promociones</a>
        </h6>
      </div>
      <!-- Grid column FAQ-->
      <div class="col-md-2 mb-3">
        <h6 class="text-uppercase font-weight-bold">
          <a href="#!">FAQ</a>
        </h6>
      </div>
      
    </div>
  <!-- Grid row-->
  <hr class="clearfix d-md-none rgba-white-light" style="margin: 10% 15% 5%;">

  <div div class="row text-center d-flex justify-content-center pt-5 mb-3">
    <!-- Grid row-->
    <div class="row pb-3">

      <!-- Grid column -->
      <div class="col-md-12">

        <div class="mb-5 flex-center">

          <!-- Facebook -->
          <a class="fb-ic" href="https://www.facebook.com/MercatConcepcio/">
            <i class="fab fa-facebook-f fa-lg white-text mr-4"> </i>
          </a>
          <!-- Twitter -->
          <a class="tw-ic" href="https://twitter.com/mercatconcepcio?lang=en">
            <i class="fab fa-twitter fa-lg white-text mr-4"> </i>
          </a>
          <!-- Google +-->
          <a class="gplus-ic" href="">
            <i class="fab fa-google-plus-g fa-lg white-text mr-4"> </i>
          </a>
          <!--Instagram-->
          <a class="ins-ic" href="https://www.instagram.com/laconcepcio/">
            <i class="fab fa-instagram fa-lg white-text mr-4"> </i>
          </a>
          

        </div>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row-->
    </div>
  </div>
  <!-- Footer Links -->


  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2020 Copyright:
    <a href="https://www.laconcepcio.cat/?fbclid=IwAR3smhakc7FotLLhDUlIpmg_iYSC62zk0_55tiiORyqz6vKsqgJKIUp7OjA"> mercatconcepcio</a>
  </div>
  <!-- Copyright -->

</footer>
<!--Añadimos Scripts-->
<script src=<?php echo $ruta ."php_libraries/bootstrap/js/jquery-3.5.1.min.js"?>></script>
<script src=<?php echo $ruta ."php_libraries/bootstrap/js/popper.min.js"?>></script>
<script src=<?php echo $ruta ."php_libraries/bootstrap/js/bootstrap.min.js"?>></script>
<!-- FONT AWESOME -->
<script src="https://kit.fontawesome.com/b87b71c2a9.js" crossorigin="anonymous"></script>
<?php startblock('js') ?><?php endblock()?>
</html>