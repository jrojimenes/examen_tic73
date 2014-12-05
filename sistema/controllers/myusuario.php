<?php
/**
 * Created by PhpStorm.
 * User: Compaq
 * Date: 17/10/14
 * Time: 06:22 PM
 */
$usuario = new Usuario();
$titulo = "Bienvenidos a Myuser";
$contenido ='Mestra la variable....';

$variables = array('titulo' => $titulo,
    'contenido' => $contenido,
'nombre'=>$usuario->setUsuario());

view('myusuario',$variables);
?>