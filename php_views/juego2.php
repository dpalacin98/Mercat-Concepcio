<?php include "templates/master.php";
// if(!$_SESSION['id'])
// {
//   header('Location:../index.php');
// }
?>

<!--Colocamos el titulo-->
<?php startblock('titulo'); ?>
Juegos
<?php endblock() ?>

<!--Insertamos la css-->
<?php startblock('css');?>
<link rel="stylesheet" href="../style/juego2.css">
<?php endblock() ?>

<!--Main-->
<?php startblock('principal'); ?>
<div class="container-fluid">
  <!-- SELECT JUEGOS -->
  <div class="row row-select">  
    <div class="col">
      <a href="juegos.php"><img src="../media/outofservice.png" height="100%" width="80%" style="margin:auto; display: block;"></a>
    </div>
    <div class="col">
      <a href="juego2.php"><img src="../media/juego2/juego2.png" height="100%" width="80%" style="margin:auto; display: block;"></a>
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
       
        <div class="container">
            <div class="row p-3" id="plantas" class="plantas" >
                <!-- div para la plantas -->
                <div id="plantas" class="plantas" draggable="true" style= margin:30px>
                    <img id="bambu" class="plantas" src="../media/juego2/bambu.png" width="100" height="100"alt="bambu">
                    <img id="cactus" class="plantas" src="../media/juego2/cactus.svg" width="100" height="100"alt="cactus">
                    <img id="girasol" class="plantas" src="../media/juego2/girasol.svg" width="100" height="100"alt="girasol">
                    <img id="planta" class="plantas" src="../media/juego2/planta.svg" width="100" height="100"alt="planta">
                    <img id="planta-carvivora" class="plantas" src="../media/juego2/planta-carnivora.svg" width="100" height="100"alt="planta-carnivora">
                </div>
            </div>
            <div class="row p-3" >
            
                
            <!--  -->
                <table id="tablero" class="tablero "  width="712px" height="580px";  cellspacing="2" cellpadding="2" style="background-color: white; margin:30px;" >   
                <tr>
                        <td class="verde_claro"></td>
                        <td class="verde_oscuro"></td>
                        <td class="verde_claro"></td>
                        <td class="verde_oscuro"></td>
                        <td class="verde_claro"></td>
                        <td class="verde_oscuro"></td>
                    </tr>
                    <tr>
                        <td class="verde_oscuro"></td>
                        <td class="verde_claro"></td>
                        <td class="verde_oscuro"></td>
                        <td class="verde_claro"></td>
                        <td class="verde_oscuro"></td>
                        <td class="verde_claro"></td>
                    </tr>
                    <tr>
                        <td class="verde_claro"></td>
                        <td class="verde_oscuro"></td>
                        <td class="verde_claro"></td>
                        <td class="verde_oscuro"></td>
                        <td class="verde_claro"></td>
                        <td class="verde_oscuro"></td>
                    </tr>
                    <tr>
                        <td class="verde_oscuro"></td>
                        <td class="verde_claro"></td>
                        <td class="verde_oscuro"></td>
                        <td class="verde_claro"></td>
                        <td class="verde_oscuro"></td>
                        <td class="verde_claro"></td>
                    </tr>  <tr>
                        <td class="verde_claro"></td>
                        <td class="verde_oscuro"></td>
                        <td class="verde_claro"></td>
                        <td class="verde_oscuro"></td>
                        <td class="verde_claro"></td>
                        <td class="verde_oscuro"></td>
                    </tr>
    
                </table>

            </div>
            <!-- DIV para virus -->
            <div class="row p-3" id="virus" class="virus"></div>
                <div id="virus" class="div-virus" draggable="true">
                    <img id="virus" class="virus" src="../media/juego2/coronavirus.svg" width="100" height="100"alt="">
                    <img id="virus" class="virus" src="../media/juego2/coronavirus2.svg"  width="100" height="100"alt="">
                </div>

            </div>
                    <!--  -->
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
<script src=<?php echo $ruta . "js/juego2.js"?>></script>
<?php endblock() ?>