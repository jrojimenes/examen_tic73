<?php
/**
 * Created by PhpStorm.
 * User: Compaq
 * Date: 30/10/14
 * Time: 04:00 PM
 */
class cuestionario  {
public function preguntas(){
   echo" <br><br><br><center><table class='table table-striped'><tr colspan='4'><td colspan='2' align='center'>Pregunta</td><td align='center'>Respuesta</td></tr>";

$sql=mysql_query("SELECT * FROM preguntas ORDER BY RAND() LIMIT 10;") or die (mysql_error());
$fil=mysql_num_rows($sql);
    $tot=0;
for($y=1;$y<10;$y++){
    $idp=mysql_result($sql,$y,'idp');
    $pre=mysql_result($sql,$y,'pregunta');
    echo"<tr><td colspan='2' align='center'>$y .- $pre</td><td align='center'>
<input type='radio' value='verdadero' name='res$y'>Verdadero
<input type='radio' value='falso' name='res$y' checked>Falso
    </td></tr>";
    $this->ids.=$idp." ";
}

echo"<input type='hidden' value='$this->ids' name='re'>";
echo"<tr><td colspan='4' align='center'></td></tr></table></center>";





}
    public  function evalua($ids){
        $y=1;
        $this->cal=0;
        $arreglo = explode(" ",$ids);
        foreach ( $arreglo as $id_pregunta ) {
            $id_pregunta;
            if($y!=11){
                $respuesta=@$_POST['res'.$y];
                $respuesta;
                $y++;
                $sql=mysql_query("SELECT * FROM preguntas where idp='$id_pregunta' AND respuesta='$respuesta'")or die (mysql_error());
                if(mysql_num_rows($sql)!=0){
                    $this->cal=$this->cal+1;

                }
            }
    }

        print"<meta http-equiv='refresh' content='0; url=home'>";


}
    public function update($idusuario,$cal){
        $sql=mysql_query("SELECT * FROM evaluacion where idusuario=$idusuario")or die (mysql_error());
        if(mysql_num_rows($sql)==0){
            mysql_query("INSERT INTO evaluacion (idusuario,cf) VALUES ($idusuario,$cal)")or die (mysql_error());
            print"<meta http-equiv='refresh' content='0; url=home'>";
        }else{
            $califiacion1=mysql_result($sql,0,'cf');
            if($cal>$califiacion1){
                mysql_query("UPDATE evaluacion SET cf=$cal WHERE idusuario=$idusuario");
               print"<meta http-equiv='refresh' content='0; url=home'>";
            }
        }
        exit;
    }
}

