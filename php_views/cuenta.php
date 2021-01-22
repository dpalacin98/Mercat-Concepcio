<?php include "templates/master.php";
/*if(!$_SESSION['id'])
{
  header('Location:../index.php');
}*/
?>

<!--Colocamos el titulo-->
<?php startblock('titulo'); ?>
Cuenta
<?php endblock() ?>

<!--Insertamos la css-->
<?php startblock('css');?>
<link rel="stylesheet" href="../style/cuenta.css">
<?php endblock() ?>

<!--Main-->
<?php startblock('principal'); ?>
<div class="container-fluid" >
  <div class="row" >
    <!-- MENÚ LATERAL -->
    <div class="col-2 bg-secondary position-absolute" style="height: 100%;">
      <ul class="nav flex-column nav-pills"id="menu">
        <li class="nav-item">
        <li class="nav-item">
          <a class="nav-link" id="navInfo" href="#info">Información</a>
        </li>
        <li class="nav-item"> 
          <a class="nav-link" id="navWhishlist" href="#lista-de-deseos">Whislist</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="navCodigos" href="#codigos-promociones">Códigos de promociones</a>
        </li>
        </li>
      </ul>
    </div>
    <!-- DIV INFORMACION -->
    <div class="col-10 divs" id="informacion">
      <p class="display-4 m-3">Información</p>     
    </div>
    <!-- DIV WHISLIST -->
    <div  class="col-10 divs" id="whislist">   
      <p class="display-4 m-3">Lista de deseos</p>
    </div>
    <!-- DIV CODIGO PROMOCIONES -->    
    <div class="col-10 divs" id="codePromociones">    
      <p class="display-4 m-3">Códigos de promociones</p> 
    </div>  
  </div>
        
</div>  
<?php endblock()?>

<!--Insertamos js-->
<?php startblock('js');?>
<script type="text/javascript" src="../js/cuenta.js"></script>
<?php endblock() ?>
