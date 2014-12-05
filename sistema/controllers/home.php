<?php
$idu=$_COOKIE['idu'];
include_once('./clases/home.php');

$new=new home();
	$titulo = $new->userstart($idu);


	$contenido =$new->calif($idu);
	
	$variables = array('titulo' => $titulo,
		'contenido' => $contenido);

	view('home',$variables);
?>