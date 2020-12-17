<?php
    include 'bd.php';
    include_once '../lang/es.php'; //QUITAR CUANDO ESTÉ En la template
    if(isset($_POST['add']) || isset($_POST['edit'])){
        $email = $_POST['email'];
        $rol = $_POST['rol'];
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'] ;
        $password = $_POST['contraseña'];
        $nivel = $_POST['nivel'];
        $puntos = $_POST['puntos'];

        if(isset($_POST['edit'])){
            $id = $_POST['idEdit'];
            editAUser($id, $email, $rol, $nombre, $apellido, $password, $nivel, $puntos);
        }
        else{
            insertAUser($email,$rol,$nombre,$apellido,$password,$nivel,$puntos);
        }
        unset($_POST);
    }
    
    if(isset($_POST['deleteID'])){
        deleteAUser($_POST['deleteID']);
    }

    if(isset($_POST['addPromo'])||isset($_POST['editPromo'])){
        $titulo = $_POST['titulo'];
        $imagen = $_POST['imagen'];
        $puntos = $_POST['puntos'];
        $parada = $_POST['parada'];
        $descripcion = $_POST['descripcion'];

        if(isset($_POST['editPromo'])){

        }
        else{
            insertAPromocion($titulo,$imagen,$descripcion,$parada,$puntos);
        }
    }
function showTable($type,$lang){
    if($type == 'users'){
        $results = selectAllUsers();
        $fields = array($lang['field_id'],$lang['field_email'],$lang['field_rol'],$lang['field_name'],$lang['field_surname'],$lang['field_pass'],$lang['field_level'],$lang['field_points']);
    }
    elseif($type =='promociones'){
        $results = selectAllPromociones();
        $fields = array($lang['field_title'],$lang['field_image'],$lang['field_desc'],$lang['field_points'],$lang['field_stop']);

    }
    elseif($type == 'juegos'){
        $results = selectTipoJuego();
        $fields = array($lang['field_game'],$lang['field_easy'],$lang['field_medium'],$lang['field_hard']);
    }
    elseif($type =='historial'){
        $results = selectAllHistory();
        $fields = array($lang['field_game'],$lang['field_points'],$lang['field_user'],$lang['field_date']);
    }
    
    $results = $results[0];
    if(empty($results)){?>
        <div class="row">
            <div class="col-12">
                <div class="alert alert-dismissible alert-secondary">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                        No hay ningún registro en la base de datos.
                </div>
            </div>
        </div>
        
   <?php }
    else{
    ?>
<div class="tableFixHead">
    <table class="table table-hover table-striped table-bordered" style = "max-height: 100vh;">
        <thead class="thead-light">
            <tr>
            <?php for($i = 0;$i < count($fields);$i++){
                        echo "<th scope='col'>". $fields[$i]."</th>";
                    } 
                    ?>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($results as $key => $result){
                    echo '<tr>';
                    for($i = 0; $i < count($fields);$i++){
                        if ($type == 'users' && $i == 2){
                            if($result[$i] == 1)
                            echo "<td><span class='badge badge-warning'>Admin</span></td>";
                            else{
                                echo "<td><span class='badge badge-secondary'>User</span></td>";
                            }
                        } elseif ($type =='promociones' && $i == 0){}
                        else{
                            echo "<td onclick='editUser(".json_encode($result).")'scope='col'>".$result[$i]."</td>"; //revisar .addEventListener
                        }
                        if($type == 'promociones' && $i == count($fields)){

                        }
                        elseif($i == count($fields)-1){
                            echo "<td><i onclick='deleteUser(".$result['id'].")' class='fas fa-trash mx-auto'></i></td>"; 
                        }
                       
                    }
                    echo '</tr>'; 
                }
                
            ?>
        </tbody>
    </table><?php }?>
</div>
<?php } ?>