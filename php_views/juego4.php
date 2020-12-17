<?php include "templates/master.php";
/*if(!$_SESSION['id'])
{
  header('Location:../index.php');
}*/
?>

<!--Colocamos el titulo-->
<?php startblock('titulo'); ?>
Juegos
<?php endblock() ?>

<!--Insertamos la css-->
<?php startblock('css');?>
<link rel="stylesheet" href="../style/juego4.css">
<?php endblock() ?>

<!--Main-->
<?php startblock('principal'); ?>
<div class="container-fluid">
  <!-- SELECT JUEGOS -->
  <div class="row row-select">  
    <div class="col">
      <a href="juego1.php"><img src="../media/imagen.png" height="100%" width="80%" style="margin:auto; display: block;"></a>
    </div>
    <div class="col">
      <a href="juego2.php"><img src="../media/imagen.png" height="100%" width="80%" style="margin:auto; display: block;"></a>
    </div>
    <div class="col">
      <a href="juego3.php"><img src="../media/background-juego4/click-juego3.png" height="100%" width="80%" style="margin:auto; display: block;"></a>
    </div>
    <div class="col">
      <a href="juego4.php"><img src="../media/background-juego4/click-juego4.png" height="100%" width="80%" style="margin:auto; display: block;"></a>
    </div>
  </div>
  <div class="container">
    <!--DECLARAMOS EL MODAL PARA EL GAME OVER-->
    <div id="myModal" class="modal" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
          <div class="modal-header">
              <h6 class="modal-title">SE ACABÓ EL TIEMPO!</h6>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="modal-body">
              <p id="mensaje"></p>
          </div>
          <div class="modal-footer">
              <button  id="BtnKeep" class="btn btn-primary">Quedarse puntos</button>
              <button  id="BtnNext" class="btn btn-primary">Siguiente Juego</button>
              <button  id="BtnTryAgain" class="btn btn-primary">Volver a jugar</button>
          </div>
          </div>
      </div>
    </div>
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
          <h4 id="time-left">50</h4>
        </div>
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
          <div class="grid-clientes">
            <button id="BtnStart" class="btn btn-primary">Start Game</button>
          </div>
        </div>
      </div>
    </div>
    <!-- BARRA PUNTOS USUARIO -->
    <div class="progress">
      <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%; color:black;">100%</div>
    </div>
  </div> 
</div>
 <?php endblock()?>

<!--Insertamos js-->
<?php startblock('js');?>
<script src="../js/juego4.js"></script>
<?php endblock() ?>
