<?php
$titulo = "Bienvenidos a Contactanos";
$contenido ='Envíanos tus comentarios';

$variables = array('titulo' => $titulo,
    'contenido' => $contenido);

view('contactanos',$variables);
?>