<?php
include "templates/master.php";
include "../php_controllers/bd.php";

startblock('principal');
?>

<div class="container">
    <div class="row">

        <h3 class="mt-2 col-8 display-4">Promociones</h3>

        <div class="btn-group  col-2 m-4" role="group" aria-label="Button group with nested dropdown">
            <button type="button" class="btn btn-primary">Todos</button>
            <div class="btn-group" role="group">
                <button id="btnGroupDrop2" type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                <div class="dropdown-menu" aria-labelledby="btnGroupDrop2">
                    <a class="dropdown-item" href="#">Dropdown link</a>
                    <a class="dropdown-item" href="#">Dropdown link</a>
                </div>
            </div>
        </div>
    </div>
<hr>
<?  $promos = selectAllPromociones();
    $promos = $promos[0];
    $i = 0;
    // echo var_dump($promos);
    foreach ($promos as $promo){
        
        if($i % 2 == 0 ){
            echo '<div class="row clear-fix">';
            echo    '<div class="col-5">';
        }
        else{
            echo    '<div class="offset-1 col-5">';
        }
            
        ?>
        <div class="card mt-4 m-3 border-primary" style="background-color:#f6f6f6">
            <h3 class="card-header bg-dark text-primary"><?php echo $promo["titulo"];?></h3>
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
                        ?>
                    </h3>
                    <h5><span class="badge badge-danger mt-3"><?php echo $promo["tipoNombre"];?></span></h5>
                    <h6><span class="badge badge-pill badge-info mt-3"><?php echo $promo["nombreParada"];?></span>
                     </h6>

                </div>
                <div class="col-6">
                    <img class="img-fluid rounded mt-4" src='../media/<?php echo $promo["imagen"];?>'>
                </div>
                <p class="card-text m-3"><?php echo $promo["descripcion"];?></p>
            </div>
            
            <div class="card-footer text-white bg-dark">
                <button class="btn btn-primary ml-3 float-right">Canjear</button>
                <a href="#" class="card-link m-2 float-right"><i class="far fa-heart"></i></a>
                <p class="card-text text-primary mt-1"><?php echo $promo["puntos"] . " puntos";?></p>

            </div>
        </div>
    </div>
    <?php
    if ($i % 2 !=0){
        echo "</div>";
    } 
    $i++;}
    ?>
</div>

</div>  
<?php endblock();?>