<?php
session_start();
require_once $_SERVER['DOCUMENT_ROOT'].'/Mercat-Concepcio/php_libraries/ti.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php startblock('titulo') ?><?php endblock() ?></title>
    
    <!-- Librerías bootstrap -->
    <link rel="stylesheet" href="../php_libraries/bootstrap/css/bootstrap.css">
    <script src="../php_libraries/bootstrap/js/jquery-3.5.1.min.js"></script>
    <script src="../php_libraries/bootstrap/js/popper.min.js"></script>
    <script src="../php_libraries/bootstrap/js/bootstrap.min.js"></script>
    <!-- FONT AWESOME -->
    <script src="https://kit.fontawesome.com/b87b71c2a9.js" crossorigin="anonymous"></script>

    <!-- CSS -->
    <?php startblock('css'); endblock()?>
</head>
<body>

    <!-- NAV -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary" style="z-index:100">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarColor02">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item ">
                    <a class="nav-link <?php if($_SESSION['page']=='home'){echo 'active';}?>" href="#">Inicio
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Administración</a>
                </li>
            </ul>
        </div>
    </nav>
    <?php startblock('principal') ?><?php endblock() ?>
    </body>
</html>