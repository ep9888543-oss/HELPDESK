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


        public function agregarNuevoUsuario($datos){
            $conexion = conexion::conectar();
            $idPersona = self::agregarPersona($datos);
            
            if ($idPersona > 0) {
                $sql = "INSERT INTO t_usuarios (id_rol, id_persona, usuario, password, ubicacion)
                VALUES (?, ?, ?, ?, ?,)";
                $query = $conexion->prepare($sql);
                $query->bind_param("iisss", $datos['idRol'], $idPersona, $datos['usuario'], $datos['password'], 
                $datos['ubicacion']);
                $respuesta = $query->execute();
                return $respuesta;
            }else{
                return 0;
            }
            $sql = "INSERT INTO t_persona";


        }
            public function agregarPersona($datos){
            $conexion = conexion::conectar();
            $sql ="INSERT INTO t_persona(paterno,materno,nombre,fecha_nacimiento,sexo,telefono,correo)
            values(?, ?, ?, ?, ?, ?, ?, ?,)";
            $query = $conexion->prepare($sql);
            $query->bind_param("sssssss", $datos['paterno'],$datos['materno'],$datos['nombre'], $datos['fecha_nacimiento'],$datos['sexo'],
            $datos['telefono'],$datos['correo']);
            $respuesta  = $query->execute();
            $idPersona = $query->insert_id($conexion);
            $query->close();
            return $idPersona;
        }
        public function obtenerDatosUsuario($idUsuario){
             $conexion = conexion::conectar();

             $sql ="SELECT
    usuarios.id_usuario AS idUsuario,
    usuarios.usuario AS nombreUsuario,
    roles.nombre AS rol,
    usuarios.id_rol AS idRol,
    usuarios.ubicacion AS ubicacion,
    usuarios.activo AS estatus,
    usuarios.id_persona AS idPersona,
    persona.nombre AS nombrePersona,
    persona.paterno AS paterno,
    persona.materno AS materno,
    persona.fecha_nacimiento AS fechaNacimiento,
    persona.sexo AS sexo,
    persona.correo AS correo,
    persona.telefono AS telefono
FROM
    t_usuarios AS usuarios
INNER JOIN
    t_cat_roles AS roles ON usuarios.id_rol = roles.id_rol
INNER JOIN
    t_persona AS persona ON usuarios.id_persona = persona.id_persona
    AND usuarios.id_usuarios = '$idUsuario'";
    $respuesta =  mysqli_query($conexion, $sql);
    $Usuario = mysqli_fecht_array($respuesta);

    $datos = array(
        'idUsuario' => $usuario['idUsuario'],
        'nombreUsuario' => $usuario['nombreUsuario'],
        'rol' => $usuario['rol'],
        'idRol' => $usuario['idRol'],
        'ubicacion' => $usuario['ubicacion'],
        'estatus' => $usuario['estatus'],
        'idPersona' => $usuario['idPersona'],
        'nombrePersona' => $usuario['nombrePersona'],
        'paterno' => $usuario['paterno'],
        'materno' => $usuario['materno'],
        'fechaNacimiento' => $usuario['fechaNacimiento'],
        'sexo' => $usuario['sexo'],
        'correo' => $usuario['correo'],
        'telefono' => $usuario['telefono'],
    );
    return $datos;
        }
}

