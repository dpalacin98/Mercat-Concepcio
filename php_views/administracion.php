<?php include 'templates/master.php';
include '../php_controllers/admin.php';

$niveles = 4;
startblock('css');?>
<link rel="stylesheet" href="../style/admin.css">
<script type="text/javascript" src="../js/admin.js"></script>
<?php endblock();

startblock('titulo');?> Administración <?php endblock();
startblock('principal')?>
<div class="container-fluid" >
  <div class="row" >
  <!-- MENÚ LATERAL -->
    <div class="col-2 position-absolute" style="top:0;height: 100vh;">
      <ul class="nav flex-column nav-pills"id="menu">
        <li class="nav-item">
          <a class="nav-link menul" id="navusers"onclick="toggle('users');" href="#users">Usuarios</a>
        </li>
        <li class="nav-item"> 
          <a class="nav-link menul" id="navpromociones" onclick="toggle('promociones');" href="#promociones">Promociones</a>
        </li>
        <li class="nav-item">
          <a class="nav-link menul" id="navhistorial"onclick="toggle('historial');" href="#historial">Puntos de Juego</a>
        </li>
        <li class="nav-item">
          <a class="nav-link menul" id="navparadas"onclick="toggle('paradas');" href="#paradas" hidden>Paradas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link menul" id="navcontacto"onclick="toggle('contacto');" href="#contacto" hidden>Contacto</a>
        </li>
      </ul>
    </div>
    <!-- DIV USERS -->
    <div class="col-9 menu"id="users">
      <div class="row">
        <div class="col-11">
          <h3 class="display-4 m-3">Usuarios</h3>
        </div>
        <div class="col-1">
          <button type="button" onclick="addUser();" class="btn btn-primary btn-circle mt-4"> + </button>
        </div>   
      </div>
      <div class="row">
        <div class="col-12 ">
          <?php showTable('users',$lang); ?>
        </div>
      </div>
    </div>
    <!-- DIV PROMOCIONES -->
    <div class="menu"  id="promociones">
      <div class="row">
        <div class="col-11">
          <h3 class="display-4 m-3">Promociones</h3>
        </div>
        <div class="col-1">
          <button type="button" onclick="addPromo()" class="btn btn-primary btn-circle mt-4"> + </button>
        </div>
      </div>
      <div class="row">
        <div class="col-12 ">
          <?php showTable('promociones',$lang); ?>
        </div>  
      </div>
    </div>
    <!-- DIV PUNTOS JUEGO -->    
    <div class="menu" id="historial">
      <div class="row">
        <div class="col-8">
          <h3 class="display-4 m-3">Puntos Juego</h3>
        </div>
        <div class="col-4 my-2">
          <button type="button" onclick="addPromo()" class="btn btn-primary mt-4"> Historial partidas </button>
        </div>
      </div>
      <div class="row">
        <div class="col-12 ">
          <?php showTable('juegos',$lang); ?>
        </div>  
      </div>
      
    </div>
    <div class="menu" id="paradas">
      <h3 class="display-4 m-3">Paradas</h3>
    </div>
    <div class="menu" id="contacto">
      <h3 class="display-4 m-3">Contacto</h3>
    </div>     
  </div>
        
</div>
      
<!-- MODALS -->
<!-- delete -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Borrar usuario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       ¿Estás seguro que deseas eliminar este usuario? No se podrán revertir los cambios.
      </div>
      <div class="modal-footer">
        <form method="POST" action="administracion.php">
        <input type="hidden" name="deleteID" id="deleteID" value="">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-danger">Eliminar</button>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- add/edit user -->
<div class="modal fade" id="addUserModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="titleModal">Añadir usuario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="administracion.php">
          <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="email" class="form-control" id="inputEmail" name="email" placeholder="Enter email">
          </div>
          <div class="form-group row">
            <div class="col-6">
              <label>Nombre</label>
              <input type="text" id="inputNombre" name="nombre" class="form-control" placeholder="Nombre">
            </div>
            <div class="col-6">
              <label>Apellidos</label>
              <input type="text" id="inputApellidos" name="apellido" class="form-control" placeholder="Apellidos">
            </div>
          </div>
          
          <div class="form-group row">
            <div class="col-6">
              <label>Contraseña</label>
              <input id="inputContraseña" name="contraseña" type="password" class="form-control">
            </div>
            <div class="col-4">
              <label>Rol</label>
              <select name="rol" class="form-control">
                <option id="user" value=0 >Usuario</option>
                <option id="admin" value=1 >Admin</option>
              </select>
            </div>
            </div>
          <div class="form-group row">
            <div class="col-3">
              <label>Nivel</label>
              <select id="inputNivel" name="nivel" class="form-control">
                <?php for($i=1;$i<=$niveles;$i++){
                echo "<option>$i</option>";
                }?>
              </select>
            </div>
          <div class="offset-3 col-4">
            <label>Puntos</label>
            <input id="inputPuntos" name="puntos" type="number" class="form-control">
          </div>
          <input type="hidden" id="idEdit" name="idEdit">
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" name="add" id="modalButton" class="btn btn-primary">Añadir</button>
      </div>
      </form>
    </div>
  </div>
</div>
<!-- add/edit Promo -->
<div class="modal fade" id="addPromoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="titlePromoModal">Nueva Promoción</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="administracion.php#promociones">
          <div class="form-group">
            <label>Titulo</label>
            <input type="input" class="form-control" id="inputTitulo" name="titulo" placeholder="Introduce un nombre">
          </div>
          <div class="row">
            <div class="form-group">
              <div class="col-7">
                <label>Imagen</label>
                <input type="text" id="inputImagen" name="imagen" class="form-control" placeholder="Imagen">
              </div>
            </div> 
            <div class="form-group">
              <div class="col-5">
                <label>Puntos</label>
                <input id="inputPuntosPromo" name="puntos" type="number" class="form-control">
              </div>
            </div>
           </div>
        <div class="row">
            <div class="form-group col-8">
              <label>Parada</label>
              <select name="parada" class="form-control">
              <?php
                $paradas = selectAllParadas();
                foreach($paradas as $key => $parada){
                  echo "<option value=".$parada['id'].">".$parada['nombre']."</option>";
                }
              ?>
              </select>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <label>Descripción</label>
              <textarea rows="2" id="inputDescripcion" name="descripcion" class="form-control" placeholder="Introduce una descripción"></textarea>
            </div>
          </div>
          
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="submit" name="addPromo" id="modalPromoButton" class="btn btn-primary">Añadir</button>
      </div>
      </form>
    </div>
  </div>
</div>
<? endblock()?>
<script> checkURL()</script>
