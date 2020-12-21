<?php include "templates/master.php";
if(!$_SESSION['id'])
{
  header('Location:../index.php');
}
?>

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
    <div class="col">
      <a href="#"><img src="../media/outofservice.png" height="100%" width="80%" style="margin:auto; display: block;"></a>
    </div>
    <div class="col">
      <a href="#"><img src="../media/outofservice.png" height="100%" width="80%" style="margin:auto; display: block;"></a>
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
      <img src="../media/outofservice.png">
    </div>
    <!-- BARRA PUNTOS USUARIO -->
    <!-- <div class="progress">
      <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%; color:black;">100%</div>
    </div> -->
  </div>
 <?php endblock()?>

<!--Insertamos js-->
<?php startblock('js');?>
<script src="../js/juego3.js"></script>
<?php endblock() ?>
