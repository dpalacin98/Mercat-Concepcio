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
<link rel="stylesheet" href="../style/juego3.css">
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
      <div class="row w-auto bg-primary border-bottom border-dark" style="height: 40px; ">
            <div class="col-1">
                <h5 id="test"></h5>
            </div>
            
            <div class="col-1 offset-6 border-dark">
                <h5>TIME:</h5>
            </div>
            <div class="col-1">
                <h5 id="timer">00</h5>
            </div>
            <div class="col-1"><h5 >POINTS:</h5></div>
            
            <div class="col-1">
                <h5 style="color:green"id="points">0</h5>
            </div>
      </div>
      <div class="row p-3" style="background-color:grey;">
            <div class="col-2 market_stop">
                <img id="meat"class="img-fluid" src="../media/market_stop/001-butcher shop.svg" alt="Kiwi standing on oval" >
            </div>
            <div class="col-2 market_stop">
                <img id="fish"class="img-fluid" src="../media/market_stop/002-fish market.svg" alt="Kiwi standing on oval">
            </div>
            <div class="col-2 market_stop">
                <img id="plants" class="img-fluid" src="../media/market_stop/039-garden centre.svg" alt="Kiwi standing on oval">
            </div>
            <div class="col-2 market_stop">
                <img id="cheese" class="img-fluid" src="../media/market_stop/016-cheese.svg" alt="Kiwi standing on oval">
            </div>
            <div class="col-2 market_stop">
                <img id="fruit" class="img-fluid" src="../media/market_stop/014-fruit stand.svg" alt="Kiwi standing on oval">
            </div>
            <div class="col-2 market_stop">
                <img id="vegetable" class="img-fluid" src="../media/market_stop/009-spice.png" alt="Kiwi standing on oval">
            </div>
      </div>    
      <div class="row" id="food">
      </div>
      <div class="row" id="divBox" >
          <img class="img-responsive m-auto mx-auto d-block" id="box"  src="../media/food/box.svg" onclick="openBox()">
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
<script src="../js/juego3.js"></script>
<?php endblock() ?>
