<?php
session_start();

// session_destroy();
$ruta ="/Mercat-Concepcio/";
require_once $_SERVER['DOCUMENT_ROOT'] . $ruta.'php_libraries/ti.php';

//$_SESSION['id']=1;
// $_SESSION.session_destroy();
//error
  if(isset($_SESSION['Error'])){
      
    $err =  $_SESSION['Error'];
    unset($_SESSION['Error']);
  } 
  
  if(isset($_SESSION['rol'] )){
    $rol = $_SESSION['rol'];
  }
  else{
    $rol = -1;
  }
  if (!isset($_SESSION["lang"])){
 
     include $_SERVER['DOCUMENT_ROOT'] .$ruta . "lang/eng.php";

  } 
  else{
      if(($_SESSION["lang"]== "es")){
        include $_SERVER['DOCUMENT_ROOT'] . $ruta . "lang/es.php";
        header("Location:" . $_SERVER['HTTP_PREFERER']);
      }
      elseif($_SESSION["lang"]== "eng"){
    
        include $_SERVER['DOCUMENT_ROOT'] . $ruta . "lang/eng.php";
        header("Location" .  $_SERVER['HTTP_PREFERER']);
      }
      elseif ($_SESSION["lang"]== "cat"){
        include $_SERVER['DOCUMENT_ROOT'] . $ruta . "lang/cat.php";
        header("Location:" . $_SERVER['HTTP_PREFERER']);
      }
      

  }
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php startblock('titulo') ?><?php endblock() ?></title>
    
    <!-- Librerías bootstrap -->
    <link rel="stylesheet" href=<?php echo $ruta . "php_libraries/bootstrap/css/bootstrap.css"?>>
  
    <!-- CSS -->
    
    <?php startblock('css'); endblock()?>
</head>
<body>

    <!-- NAV -->
   
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <!-- <a class="navbar-brand" href="#">LA CONCEPCIÓ</a> -->
    <img src="../../media/logo.png" width="126" height="51">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor02">
      <ul class="navbar-nav mr-auto">
      
      <!--inicio izquierdo-->
      <!--Inicio-->
        <li class="nav-item active">
          <a class="nav-link" href="#"><i class="fas fa-home"></i>  <?php echo $lang["Inicio"]?>
            <span class="sr-only">(current)</span>
          </a>
        </li>
        <!--Paradas-->
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fas fa-search-location"></i> <?php echo $lang["Paradas"]?></a>
        </li>
        <!--Promociones-->
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fas fa-tag"></i> <?php echo $lang["Promociones"]?></a>
        </li>
        <?php if(isset($_SESSION['id'])){?>

        <!--Juegos-->
          <li class="nav-item">
            <a class="nav-link" href=<?php echo $ruta . "php_views/juegos.php"?>><i class="fas fa-gamepad"></i></i><?php echo $lang["Juegos"]?></a>
          </li>
        <?php }
        ?>
        <!--Lista de deseos-->
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fas fa-heart"></i> <?php echo $lang["Lista"]?></a>
        </li>
        
      </ul>
        <!-- fin izquierdo-->
        <!--Inicio derecho-->
      <ul class="navbar-nav my-2 my-lg-0">
        <!--Admin-->
        <?php if($rol == 1){?>
          <li class="nav-item">
          <a class="nav-link" href=<?php echo $ruta . "php_views/administracion.php"?> ><i class="fas fa-cog"></i><?php echo $lang["Admin"]?></a>
          </li>
        <?php 
        
        }?>
        
        <!--FAQ-->
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="far fa-question-circle"></i> <?php echo $lang["FAQ"]?></a>
        </li>
        <!--Idiomas-->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><i class="fas fa-globe"></i> <?php echo $lang["Idioma"]?></a>
          <div class="dropdown-menu" style="background-color: #F49600;">
            <a value="es" class="dropdown-item" href="#" style="color: white;"> <?php echo $lang["opcion_1"]?></a>
            <a value="cat" class="dropdown-item" href="#" style="color: white;"> <?php echo $lang["opcion_2"]?></a>
            <a value="eng" class="dropdown-item" href="#" style="color: white;"> <?php echo $lang["opcion_3"]?></a>
            
          </div>
        </li>
      
        <!--cuentas-->
        <!-- <button class="btn btn-primary" type="button" data-toggle="modal" data-target='#modal' >MOSTRAR MODAL</button> -->
        <?php if(isset($_SESSION['id'])){?>
          
          <li class="nav-item dropdown">

            <a id="id-cuenta" class="nav-link dropdown-toggle"  data-toggle="dropdown"  href="#" role="button" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user-alt"></i> <?php echo $lang["Cuenta"]?></a>
            <div class="dropdown-menu" style="background-color: #F49600;">
            <!--Comprobar si está registrado/iniciado sesión-->
              <a class="dropdown-item" href="#" style="color: white;">  <?php echo $lang["Editar_perfil"]?></a>
              <a class="dropdown-item" href="logout.php" style="color: white;">  <?php echo $lang["Cerrar"]?></a>
            </div>
          </li>
        <?php }

        else{ ?>
          <li>
            <!-- <a id="id-cuenta" class="nav-link"  data-toggle="modalInicio" data-target='#modalInicio'  href="#" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user-alt"></i> Cuenta</a> -->
            <a id="id-cuenta" class="nav-link" data-toggle="modal" data-target="#modalInicio" href="#"><i class="fas fa-user-alt"></i> <?php echo $lang["Cuenta"]?></a>
            <!-- <a id="id-cuenta" class="nav-link"  data-toggle="modalInicio" data-target='#modalInicio' href="#" role="button" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user-alt"></i> Cuenta</a> -->
          
          </li>

      <?php
      } ?>

      </ul>
      <!--fin derecho-->
    </div>
  </nav>
  
    <!--FIN NAV-->
    <?php startblock('principal') ?><?php endblock() ?>

    <!-- MODAL INICIO -->
    <div class="container">
        <!--modal-->
        <div class="modal fade" tabindex="-1" id="modalInicio">
            <div class="modal-dialog modal modal-dialog-centered">
                <div class="modal-content">
                    
                    <!-- modal header -->
                    <!-- <div class="modal-header">
                        <button class="close" data-dismiss="modal">&times;</button>
                    </div> -->
                    <!-- modal body -->
                    
                    <div class="modal-body">
                        <!-- cuerpo -->
                        <div class="row">
                            <div class="col-xl">
                                <div class="panel panel-login">
                                    <!-- panel encabezado -->
                                    <div class="panel-heading">
                                        <div class="row">
                                            <!-- Iniciar sesión -->
                                            <div class="col-xl">
                                                <a href="#" id="login-form-link" onclick="funcionRegistro()"><?php echo $lang["Iniciar_sesion"]?></a>
                                            </div>
                                            <!-- Registrarme -->
                                            <div class="col-xl">
                                                <a href="#"  id="register-form-link"  onclick="funcionInicarSesion()"><?php echo $lang["Registrarse"]?></a>
                                            </div>
                                        </div>
                                        <hr>
                                    </div>
                                    <!--Panel body-->
                                    <div class="panel-body">
                                        <div class="row">
                                           
                                            <div class="col-lg-12">
                                               <!-- DIV FORM LOGIN -->
                                                <div id="divLogin">
                                                    <form id="login-form"  action="<?php echo $ruta . "php_controllers/login.php"?>"  method="post" role="form" style="display: block;">
                                                        <!-- Usuarix -->
                                                        <div class="form-group">
                                                            <input type="email" name="email" id="emaillogin" tabindex="1" class="form-control" placeholder=<?php echo $lang["Email"]?> >
                                                        </div>
                                                        <!-- Contraseña -->
                                                        <div class="form-group">
                                                            <input type="password" name="password" id="passwordlogin" tabindex="2" class="form-control" placeholder=<?php echo $lang["Contraseña"]?>>
                                                        </div>
                                                        <!-- Recordarme
                                                        <div class="form-group text-center">
                                                            <input type="checkbox" tabindex="3" class="" name="remember" id="remember">
                                                            <label for="remember"> Recordarme</label>
                                                        </div> -->
                                                        <!-- Botón iniciar sesión -->
                                                        <div class="btn-form-group">
                                                            <div class="row">
                                                                <div class="col-xl">
                                                                    <input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login btn-primary " value="<?php echo $lang["Iniciar_sesion"]?>">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                    </form>
                                                <!-- FIN FORM INICIAR SESIÓN -->
                                                
                    

                                                </div>
                                                <!-- Mensaje de alerta -->
                                                <?php if(isset($err)){
                                                  ?>
                                                  
                                                  
                                                  <div class="alert alert-dismissible alert-warning">
                                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                                    <h4 class="alert-heading">ERROR!</h4>
                                                    <p class="mb-0"><?php echo $err ?>.</p>
                                                  </div>
                                                <?php 
                                                
                                                }?>

                                                <!-- FIN DIV LOGIN -->
                                                <!--  INCIO DIV REGISTRO-->
                                                <div id="divRegistro">
                                                    <!-- INICIO FORM REGISTRO -->
                                                    <form id="register-form" action="<?php echo $ruta . "php_controllers/login.php"?>" method="post" role="form">
                                                        <div class="form-group">
                                                            <input type="text" name="name" id="usernameregistro" tabindex="1" class="form-control" placeholder=<?php echo $lang["Usuario"]?> value="">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder=<?php echo $lang["Email"]?> value="">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="password" name="password" id="passwordresgistro" tabindex="2" class="form-control" placeholder=<?php echo $lang["Contraseña"]?>>
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="password" name="confirm-password" id="confirm-password" tabindex="2" class="form-control" placeholder=<?php echo $lang["Confirmar_contraseña"]?>>
                                                        </div>

                                                        <div class="btn-form-group">
                                                            <div class="row">
                                                                <div class="col-xl">
                                                                    <input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register btn-primary" value="<?php echo $lang["Crear_cuenta"]?>">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                    <!-- FIN FORM REGISTRO -->
                                             

                                                </div>
                                                <!-- FIN DIV REGISTRO -->
                                                
                                                        
                                                
                                            </div>
                                        </div>
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>


    <!-- MODAL FIN -->
    <script src=<?php echo $ruta ."php_libraries/bootstrap/js/jquery-3.5.1.min.js"?>></script>
    <script src=<?php echo $ruta ."php_libraries/bootstrap/js/popper.min.js"?>></script>
    <script src=<?php echo $ruta ."php_libraries/bootstrap/js/bootstrap.min.js"?>></script>
    <!-- FONT AWESOME -->
    <script src="https://kit.fontawesome.com/b87b71c2a9.js" crossorigin="anonymous"></script>
    <!-- SCRIPT INICAR SESION/REGISTRO -->

    <script src=<?php echo $ruta ."js/master.js"?>></script>
    <?php startblock('js') ?><?php endblock() ?>



<?php if(isset($err)){?>
  <script> showmodal()</script>
<?php
}?>


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
        <a href="#!"><?php echo $lang["Nosotros"]?></a>
      </h6>
    </div>
    <!-- Grid column Contacto-->
    <div class="col-md-2 mb-3">
      <h6 class="text-uppercase font-weight-bold">
        <a href="#!"><?php echo $lang["Contacto"]?></a>
      </h6>
    </div>

    <!-- Grid column Paradas-->
    <div class="col-md-2 mb-3">
      <h6 class="text-uppercase font-weight-bold">
        <a href="#!"><?php echo $lang["Paradas"]?></a>
      </h6>
    </div>
    
    <!-- Grid column Promociones-->
    <div class="col-md-2 mb-3">
      <h6 class="text-uppercase font-weight-bold">
        <a href="#!"><?php echo $lang["Promociones"]?></a>
      </h6>
    </div>
    <!-- Grid column FAQ-->
    <div class="col-md-2 mb-3">
      <h6 class="text-uppercase font-weight-bold">
        <a href="#!"><?php echo $lang["FAQ"]?></a>
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
<!-- Footer -->
</html>