<?php
class Usuario{
     private $name;

    public function getUsuario(){

        echo"<br>Mostrar usuario:".$this->name;
    }
public function setUsuario(){
    $this->name="Rodrigo;1";
    return $this->name;
}

    public function readuG(){
        $sql=mysql_query("select * from usuario where status='active' order by idusuario asc ") or die (mysql_error());
        echo"<div class=table-responsive>";
        echo"<center><table class='table table-striped'>";
        echo"<tr><td>Identificador</td><td>Nombre</td><td>Apellido paterno</td><td>Apellido materno</td><td>Nivel</td></tr>";
        while($field= mysql_fetch_array($sql)){
            $this->id=$field['idusuario'];
            $this->nombre=$field['nombre'];
            $this->apellido_paterno=$field['apellido_paterno'];
            $this->apellido_materno=$field['apellido_materno'];
            $this->nivel=$field['nivel'];
            switch($this->nivel){
                case 1;
                    $type="Administrador";
                    break;
                case 2;
                    $type="Maestro";
                    break;
                case 3;
                    $type="Alumno";
                    break;
            }
            echo"<tr><td>$this->id</td><td>$this->nombre</td><td>$this->apellido_paterno</td><td>$this->apellido_materno</td><td>$type</td></tr>";
        }
        echo"</table></center></div>";
        }

}