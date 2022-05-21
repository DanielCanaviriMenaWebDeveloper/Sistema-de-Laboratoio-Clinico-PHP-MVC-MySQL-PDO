function Iniciar_Sesion() {
    let usu  = document.getElementById('txt_usuario').value;
    let pass = document.getElementById('txt_pass').value;
    
    /* Valida entradas usuario y password */
    if ( usu.length == 0 || pass.length == 0 ) {
        return Swal.fire(
            'Mensaje de Advertencia', 
            'Llene los campos de la sesión', 
            'warning'
        );
    }
    
    $.ajax({
        url: 'controller/usuario/iniciar_sesion.php', 
        type: 'POST', 
        data: {
            u:usu, 
            p:pass
        }
    }).done(function(resp) {
        alert(resp);
    })
}