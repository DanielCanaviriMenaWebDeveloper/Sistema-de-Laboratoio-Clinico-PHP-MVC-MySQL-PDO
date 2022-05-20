function Iniciar_Sesion() {
    let usu  = document.getElementById('txt_usuario').value;
    let pass = document.getElementById('txt_pass').value;
    
    if ( usu.length == 0 || pass.length == 0 ) {
        alert("Ingrese los datos de la sesión");
    } 
}