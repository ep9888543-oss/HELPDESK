function loginUsuarios(){
    $.ajax({
        type:"POST",
        data:$('#frmLogin').serialize(),
url:"/helpdesk/procesos/usuarios/login/loginUsuarios.php",
        success:function(respuesta){

            respuesta = respuesta.trim();

            if (respuesta == 1) {
                window.location.href = "vistas/inicio.php";
            }else{
                Swal.fire("Error", "Error al entrar", "error");
            }

        }
    });
    return false;
}