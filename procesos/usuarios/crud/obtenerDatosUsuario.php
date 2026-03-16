<?php  

$idUsuario = $_POST['idUsuario'];
include "../../../classes/Usuarios.php";
$Usuarios = new Usuarios();
echo json_decode($Usuarios->obtenerDatosUsuarios(idUsuario)); 


?>