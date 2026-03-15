<?php
class conexion{
    public function conectar(){
        $servidor ="localhost";
        $usuario ="root";
        $password = "Pl12345678";
        $db = "helpdesk";
        $conexion = mysqli_connect($servidor, $usuario, $password, $db);
        return $conexion;
    }
}





?>