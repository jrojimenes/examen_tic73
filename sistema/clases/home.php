<?php
/**
 * Created by PhpStorm.
 * User: Compaq
 * Date: 30/10/14
 * Time: 01:11 PM
 */

class home {

    public function userstart($idu)
    {

        $usuario=mysql_query("select * from usuario where idusuario='$idu'");
        $name=mysql_result($usuario,0,'nombre');
        echo"<center><h1>Bienvenido $name</h1></center>";
    }

    public function calif ($idu){
        $ev=mysql_query("select * from evaluacion where idusuario='$idu'") or die (mysql_error());
        $ev1=@mysql_result($ev,0,'cf');
        $fil=@mysql_num_rows($ev);
        echo"$fil";
        if($fil==0){

            echo"<br><br><br><center><h1>No has realizado aún el exámen</h1></center>";
        }
        else{
            echo"<br><br><br><center><h1>Calificación<br>$ev1</h1></center>";
        }

    }


}
