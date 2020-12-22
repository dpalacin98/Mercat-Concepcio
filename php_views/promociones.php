<?php
include "templates/master.php";
include "../php_controllers/bd.php";

startblock('principal');
?>

<div class="container">
<div class="row">

<h3 class="mt-2 col-8 display-3">Promociones</h3>

    <div class="btn-group  col-2 m-4" role="group" aria-label="Button group with nested dropdown">
        <button type="button" class="btn btn-success ">Success</button>
        <div class="btn-group" role="group">
            <button id="btnGroupDrop2" type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
            <div class="dropdown-menu" aria-labelledby="btnGroupDrop2">
            <a class="dropdown-item" href="#">Dropdown link</a>
            <a class="dropdown-item" href="#">Dropdown link</a>
            </div>
        </div>
    </div>
    </div>


<div class="row clear-fix">
<?  $promos = selectAllPromociones();
    $promos = $promos[0];
    $i = 0;
    foreach ($promos as $promo){
        echo '<div class="col-5>';
        if($i % 2 != 0 ){
            echo 'offset-1';
            
        }
        ?>
     <?php ;
    ?> ">
        <div class="card mt-4 m-3" style="background-color:#f6f6f6">
            <h3 class="card-header bg-primary text-white"><?php echo $promo["titulo"];?></h3>
            <div class="card-body row">
                <div class="col-6 ">
                <h3 class="display-3 text-center mt-4"><?php 
                echo $promo["valor"];
                if($promo['tipo'] == 1){
                    echo " %";
                }
                else{
                    echo" €";
                    }
                    ?></h3>
                <h5><span class="badge badge-danger mt-3">Carniceria</span></h5>
                <h6><span class="badge badge-pill badge-info mt-3"><?php echo $promo["nombre"];?></span>
                </h6>

                </div>
                <div class="col-6">
                    <svg xmlns="http://www.w3.org/2000/svg" class="d-block user-select-none rounded mb-3" width="100%" height="200" aria-label="Placeholder: Image cap" focusable="false" role="img" preserveAspectRatio="xMidYMid slice" viewBox="0 0 318 180" style="font-size:1.125rem;text-anchor:middle">
                        <rect width="100%" height="100%" fill="#868e96"></rect>
                        <text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image cap</text>
                    </svg>
                </div>
                <p class="card-text m-3"><?php echo $promo["descripcion"];?></p>
            </div>
            
            <div class="card-footer text-white bg-dark">
            <button class="btn btn-primary ml-3 float-right">Canjear</button>
                <a href="#" class="card-link m-2 float-right"><i class="far fa-heart"></i></a>
            <p class="card-text mt-1"><?php echo $promo["puntos"] . " puntos";?></p>

            </div>
        </div>
    </div>
    <?php echo $i; $i++;}?>
</div>

</div>  
<?php endblock();?>