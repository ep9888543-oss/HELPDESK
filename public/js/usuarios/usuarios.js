$(document).ready(function(){
    $('#tablaUsuariosLoad').load("usuarios/tablaUsuarios.php");
});


function agregarNuevosUsuarios(){
    $.ajax({
        type:"POST",
        data: $('#frmAgregarUsuario').serialize(),
        url:"../procesos/usuarios/crud/agregrarNuevoUsuario.php",
        success:function(respuesta){
            respuesta = respuesta.trim();
            if (respuesta == 1) {
                $('tablaUsuariosLoad').load("usuarios/tablaUsuarios.php");
                $('#frmAgregarUsuarios')[0].reset();
                Swal.fire(":D","Agregado con exito!" , "sucess");
            }else{
                Swal.fire(":(","Error al agregar" + respuesta, "Error");
            }
        }
    });
    return false;
}



function obtenerDatosUsuario(idUsuario){
     $.ajax({
        type:"POST",
        data: "idUsuaio=" + idUsuario,
        url:"../procesos/usuarios/crud/obtenerDatosUsuario.php",
        success:function(respuesta){
            respuesta = jQuey.parseJSON(respuesta);
            console.log(respuesta);
            
        }
        });
}