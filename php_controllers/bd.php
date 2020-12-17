<?php
session_start();
function connect(){
    include 'config.php';

    try{
        $conn = new PDO("mysql:host=$host;dbname=$db",$user,$pass);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        }
        catch(PDOException $e){
            echo "Connection failed: " . $e->getMessage();
        }
    }

function disconnect(){
    return null;
}
// Funciones BD tabla usuarios

function selectAllUsers(){
    $conn = connect();
    $stmt = $conn-> prepare("SELECT * FROM usuarios");
    $stmt -> execute();
    $result = $stmt->fetchAll();
    $conn = disconnect();
    $fields = $stmt->columnCount();
    return array($result,$fields);
}
function insertAUser($email,$rol,$nombre,$apellido,$password,$nivel,$puntos){
    $conn = connect();
    $password = password_hash($password,PASSWORD_BCRYPT);
    $stmt = $conn -> prepare("INSERT INTO usuarios (email, rol, nombre, apellido, passwd, nivel,puntos) VALUES (:email, :rol,:nombre, :apellido, :passwd, :nivel, :puntos);");
    $stmt->bindParam(':email',$email);
    $stmt->bindParam(':rol',$rol);
    $stmt->bindParam(':nombre',$nombre);
    $stmt->bindParam(':apellido',$apellido);
    $stmt->bindParam(':passwd',$password);
    $stmt->bindParam(':nivel',$nivel);
    $stmt->bindParam(':puntos',$puntos);
    $stmt -> execute();
    $conn = disconnect();
}
//LOGIN
function login ($email,$password){ //$user y $pass variables que introduce el usuario en el login
    $res = false;
    $conn = connect();
    $stmt = $conn->prepare("SELECT * FROM usuarios WHERE email =:email");
    $stmt -> bindParam(':email',$email);
    $stmt -> execute();
    $result = $stmt->fetchAll();
    $conn = disconnect();
    
    if(isset($result[0])){
        $hashpasswd = $result[0]['passwd'];
        if(password_verify($password,$hashpasswd)){
            $_SESSION["id"] = $result[0]["id"];
            $_SESSION["rol"] = $result[0]["rol"];
            $res = true;
        }
    } 
    return $res;
}
function editAUser($id, $email, $rol, $nombre, $apellido, $password, $nivel, $puntos){ 
    //REVISAR ENCRIPTACIÓN CONTRASEÑA
    $conn = connect();
    $stmt = $conn -> prepare("UPDATE usuarios SET email = :email, rol = :rol, nombre = :nombre, apellido = :apellido, passwd = :passwd, nivel = :nivel, puntos = :puntos WHERE id = :id");
    $stmt->bindParam(':email',$email);
    $stmt->bindParam(':rol',$rol);
    $stmt->bindParam(':nombre',$nombre);
    $stmt->bindParam(':apellido',$apellido);
    $stmt->bindParam(':passwd',$password);
    $stmt->bindParam(':nivel',$nivel);
    $stmt->bindParam(':puntos',$puntos);
    $stmt->bindParam(':id',$id);

    $stmt -> execute();
    $conn = disconnect();
}
function deleteAUser($id){
    $conn = connect();
    $stmt = $conn-> prepare("DELETE FROM usuarios WHERE id=:id");
    $stmt->bindParam(':id',$id);
    $stmt -> execute();
    $conn=disconnect();
}
// Funciones BD tabla promociones

function selectAllPromociones(){
    $conn = connect();
    $stmt = $conn-> prepare("SELECT promociones.id, promociones.nombre, promociones.imagen, promociones.descripcion, promociones.puntos, paradas.nombre FROM promociones INNER JOIN paradas ON promociones.parada = paradas.id");
    $stmt -> execute();
    $result = $stmt->fetchAll();
    $conn = disconnect();
    $fields = $stmt->columnCount();
    return array($result,$fields);
}
function insertAPromocion($nombre,$imagen,$descripcion,$parada,$puntos){
    $conn = connect();
    $stmt = $conn -> prepare("INSERT INTO promociones (nombre, imagen, descripcion, puntos, valor, tipo, parada) VALUES (:nombre, :imagen, :descripcion, :puntos, :valor, :tipo, :parada)");
    $stmt->bindParam(':nombre',$nombre);
    $stmt->bindParam(':imagen',$imagen);
    $stmt->bindParam(':descripcion',$descripcion);
    $stmt->bindValue(':valor',0);
    $stmt->bindValue(':tipo',0);
    $stmt->bindParam(':parada',$parada);
    $stmt->bindParam(':puntos',$puntos);

    $stmt -> execute();
    $conn = disconnect();
}
function editAPromocion($id, $nombre, $imagen, $descripcion, $valor, $tipo, $parada){
    $conn = connect();
    $stmt = $conn -> prepare("UPDATE promociones SET nombre = :nombre, imagen = :imagen, desripcion = :descripcion, valor = :valor, tipo = :tipo, parada = :parada WHERE id = :id");
    $stmt->bindParam(':nombre',$nombre);
    $stmt->bindParam(':imagen',$imagen);
    $stmt->bindParam(':descripcion',$descripcion);
    $stmt->bindParam(':valor',$valor);
    $stmt->bindParam(':tipo',$tipo);
    $stmt->bindParam(':parada',$parada);
    $stmt->bindParam(':id',$id);

    $stmt -> execute();
    $conn = disconnect();
}
function deleteAPromocion($id){
    $conn = connect();
    $stmt = $conn-> prepare("DELETE FROM promociones WHERE id=:id");
    $stmt->bindParam(':id',$id);
    $stmt -> execute();
    $conn=disconnect();
}

//Funcion Select Puntos juego
function selectTipoJuego(){
    $conn = connect();
    $stmt = $conn -> prepare("SELECT * from tipo_juego");
    $stmt -> execute();
    $result = $stmt->fetchAll();
    $conn = disconnect();
    $fields = $stmt->columnCount();
    return array($result,$fields);
}
// Funciones BD tabla historial de juego
function selectAllHistory(){
    $conn = connect();
    $stmt = $conn-> prepare("SELECT juegos.tipo_juego,juegos.puntos,usuarios.email,juegos.fecha FROM juegos INNER JOIN usuarios ON juegos.id_usuario = usuarios.id");
    $stmt -> execute();
    $result = $stmt->fetchAll();
    $conn = disconnect();
    $fields = $stmt->columnCount();
    return array($result,$fields);
}

function selectAllParadas(){
    $conn = connect();
    $stmt = $conn -> prepare("SELECT * from paradas");
    $stmt -> execute();
    $result = $stmt->fetchAll();
    $conn = disconnect();
    return $result;
}
// var_dump(selectAllUsers());