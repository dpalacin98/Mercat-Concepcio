
<?php
//REGISTRO
//include de la bd
include "bd.php";
//post con las variables que vamos a utilizar
if(isset($_POST["register-submit"])){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password= $_POST["password"];
    $confirm_pasword = $_POST["confirm-password"];

    if($password == $confirm_pasword){
        insertAUser($email,0,$name,null,$password,1,0);
        login($email,$password);
        header("Location: /Mercat-Concepcio/index.php");

    }else{
        //mnostrar desde lamaster
        $_SESSION["ERROR"] = "Las contraseñas no son iguales";

    }
}
elseif(isset($_POST["login-submit"])){
    $email = $_POST["email"];
    $password= $_POST["password"];


}
//LOGIN

if(isset($_POST["login-submit"])){
    $email = $_POST["email"];
    $password= $_POST["password"];
    if(login($email, $password)){
        header("Location: /Mercat-Concepcio/index.php");
    }
    else{
        echo "error";
        header("Location: /Mercat-Concepcio/index.php");
        $_SESSION["Error"]="Email o contraseña incorrecta";

}

}
