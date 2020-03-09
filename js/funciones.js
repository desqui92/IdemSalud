function irRegistro(){
    $('#form-login').hide();
    $('#form-registro').show();
}

function irLogin(){
    $('#form-registro').hide();
    $('#form-login').show();
}
function loguearme(){
    $('#form-login').hide();
    $('#cont-loading').show();
    alert("No esperes que cargue falta el backend rata!!!!!!!!!");
}