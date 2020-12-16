<?php include "templates/master.php";?>

<!--Colocamos el titulo-->
<?php startblock('titulo'); ?>
Juegos
<?php endblock() ?>

<!--Insertamos la css-->
<?php startblock('css');?>
<link rel="stylesheet" href="../style/juegos.css">
<?php endblock() ?>

<!--Main-->
<?php startblock('principal'); ?>
<div class="container-fluid">
    <!-- SELECT JUEGOS -->
  <div class="row row-select">
    <div class="col"><img src="../media/imagen.png" height="100%" width="80%" style="margin:auto; display: block;"></div>
    <div class="col"><img src="../media/imagen.png" height="100%" width="80%" style="margin:auto; display: block;"></div>
    <div class="col"><img src="../media/imagen.png" height="100%" width="80%" style="margin:auto; display: block;"></div>
    <div class="col"><img src="../media/click-juego1.png" height="100%" width="80%" style="margin:auto; display: block;"></div>
  </div>
  <div class="container">
    <!-- DIV JUEGO -->
    <div class="juego">
      <!-- row puntos -->
      <div class="row row-puntos">
        <div class="col">
          <h4>Score: <span id="result"></span></h4>
        </div>
        <div class="col">
          <h5><span id="suma"></span></h5>
        </div>
        <div class="col">
          <h4 id="seconds">Seconds left: </h4>
        </div>
        <div class="col">
          <h4 id="time-left">60</h4>
        </div>
      </div>
      <!-- row elementos -->
      <div class="row">
        <!-- row grid -->
        <div class="row row-productos">
          <button  id="BtnStart" class="btn btn-primary" onclick="startGame()">Start Game</button>
          <div class="grid"></div>
        </div>
        <!-- row productos -->
        <div class="row row-productoClientes">
          <div class="grid-productos"></div>          
        </div>
        <!-- row clientes -->
        <div class="row row-clientes">
          <div class="grid-clientes">
          </div>
        </div>
      </div>
    </div>
  </div>
    <!-- BARRA PUNTOS USUARIO -->
  <div class="progress">
    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%; color:black;">100%</div>
  </div>
</div>
 <?php endblock()?>

<!--Insertamos js-->
<?php startblock('js');?>
<script src="../js/juego-venta.js"></script>
<?php endblock() ?>
