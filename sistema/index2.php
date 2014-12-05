<?php
require 'helpers.php';
require 'template/header.php';
require 'clases/Usuario.php';
require 'template/BD/conexion.php';
if(empty ($_GET['url']))
    $_GET['url'] = 'home';
controller($_GET['url']);
require 'template/footer.php';
?>
