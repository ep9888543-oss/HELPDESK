<?php

include "conexion.php";

class Usuarios extends Conexion{

    public function loginUsuario($Usuario, $password){

        $conexion = self::conectar();

        $sql = "SELECT * FROM t_usuarios 
                WHERE usuario='$Usuario' 
                AND password='$password'";

        $respuesta = mysqli_query($conexion, $sql);

        if(mysqli_num_rows($respuesta) > 0){

            $datosUsuario = mysqli_fetch_array($respuesta);

            $_SESSION['usuario']['nombre'] = $datosUsuario['usuario'];
            $_SESSION['usuario']['id'] = $datosUsuario['id_usuario'];
            $_SESSION['usuario']['rol'] = $datosUsuario['id_rol'];

            return 1;

        }else{
            return 0;
        }
    }
}
?>