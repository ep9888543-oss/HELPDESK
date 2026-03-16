<?php
$dato = array(
    "paterno" => $_POST['paterno'],
    "materno" => $_POST['materno'],
    "nombre" => $_POST['nombre'],
    "fechaNacimineto" => $_POST['fechaNacimineto'],
    "sexo" => $_POST['sexo'],
    "telefono" => $_POST['telefono'],
    "correo" => $_POST['correo'],
    "usuario" => $_POST['usuario'],
    "password" => sha1($_POST['password']),
    "idRol" => $_POST['idRol'],
    "ubicacion" => $_POST['ubicacion'],
);

include "../../../classes/Usuarios.php";
$Usuarios = new Usuarios();

echo $Usuarios->agregarNuevoUsuario($dato);
?>