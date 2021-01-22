<?php include "templates/master.php";
      include "../php_controllers/bd.php";
if(!isset($_SESSION['id']))
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
<link rel="stylesheet" href="../style/juego3.css">
<link rel="stylesheet" href="../style/juego4.css">
<?php endblock() ?>

<!--Main-->
<?php startblock('principal'); ?>
<div class="container-fluid">
  
  <!-- SELECT JUEGOS -->
  <div class="row row-select">  
    <div class="col">
      <a href="juego2.php"><img id="imgJuego2" src="../media/outofservice.png" height="75%" width="80%" style="margin:auto; display: block;"></a>
    </div>
    <div class="col">
      <img id="imgJuego3" src="../media/background-juego4/click-juego3.png" height="75%" width="80%" style="margin:auto; display: block;">
    </div>
    <div class="col">
      <img id="imgJuego4" src="../media/background-juego4/click-juego4.png" height="75%" width="80%" style="margin:auto; display: block;">
    </div>
  </div>
  <div class="container">
    <!-- DIV JUEGO 2 -->
    <div id="juego2" class="divJuego">
    </div>
    <!-- DIV JUEGO 3 -->
    <div id="juego3" class="divJuego">
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
    <!-- DIV JUEGO 4 -->
    <div id="juego4" class="divJuego">
      <!-- row puntos -->
      <div class="row row-puntos">
        <div class="col">
          <h4 class="infoRow">Score: <span id="result"></span></h4>
        </div>
        <div class="col">
          <h5 class="infoRow2"><span id="suma"></span></h5>
        </div>
        <div class="col">
          <h4 class="infoRow" id="seconds">Seconds left: </h4>
        </div>
        <div class="col">
          <h4 class="infoRow" id="time-left">50</h4>
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
      <div id="progress-bar" class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%; color:black;">5</div>
    </div>
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
  </div>
 <?php endblock()?>

<!--Insertamos js-->
<?php startblock('js');?>
<script src="../js/juegos.js"></script>
<script src="../js/juego4.js"></script>
<script src="../js/juego3.js"></script>
<?php endblock() ?>
