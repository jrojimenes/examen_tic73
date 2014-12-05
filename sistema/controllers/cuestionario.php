<meta charset="utf-8"/>
<?php
include('./clases/cuestionario.php');
$cues = new cuestionario();
$titulo ='';
$idusuario=$_COOKIE['idu'];
if(isset($_POST['submit'])){
    switch($_POST['submit']){
        case "Evaluar";
            $ids=$_POST['re'];
                $cues->evalua($ids);
            $cal=$cues->cal;
            $cues->update($idusuario,$cal);
            break;
    }
}

echo"<form action='cuestionario' method='post'>";

$cues->preguntas();
echo"<center><input type='submit' value='Evaluar' name='submit'></center></form>";
$contenido ='';

$variables = array('titulo' => $titulo,
    'contenido' => $contenido);

view('cuestionario',$variables);
?>