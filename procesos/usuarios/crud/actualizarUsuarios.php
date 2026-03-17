<?php

$datos = array(
    "paterno" => $_POST['paternou'],
    "materno" => $_POST['maternou'],
    "nombre" => $_POST['nombreu'],
    "fechaNacimineto" => $_POST['fechaNaciminetou'],
    "sexo" => $_POST['sexou'],
    "telefono" => $_POST['telefonou'],
    "correo" => $_POST['correou'],
    "usuario" => $_POST['usuario'],
    "password" => sha1($_POST['passwordu']),
    "idRol" => $_POST['idRolu'],
    "ubicacion" => $_POST['ubicacionu'],
);

include "../../../clases/usuarios.php";
$Usuario = new usuario();
echo $Usuarios->actualizarUsuario($datos);

?>