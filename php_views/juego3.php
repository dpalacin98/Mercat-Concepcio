<?php include 'templates/master.php';
    
?>
    <?php startblock("titulo");echo "Juego 3";endblock();
    startblock("css");?>
    
    <link rel="stylesheet" href="../style/juego3.css">
    <?php endblock()?>

    <? startblock("principal") ?>
<div class="container border border-dark mt-3">
    <div style="height:600px">
        <div class="row w-auto bg-primary border-bottom border-dark" style="height: 40px; ">
            <div class="col-1">
                <h5 id="test"></h5>
            </div>
            
            <div class="col-1 offset-6 border-dark">
                <h5>TIME:</h5>
            </div>
            <div class="col-1">
                <h5 id="timer">90</h5>
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
            <div style="background-color:#5DC7BD" class="row" id="food">
                
            </div>
            <div style="background-color:#5DC7BD"class="row" >
                <img class="img-responsive m-4 mx-auto d-block" id="box"  src="../media/food/box.svg" onclick="openBox()">
            </div>
        
    </div>
</div>
<?php endblock() ?>
<script type="text/javascript" src="../js/juego3.js"></script>
<!-- <script>pepe()</script> -->