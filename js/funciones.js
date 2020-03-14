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

function mensajeAyuda(){
    setTimeout(function(){
        var snd = new Audio("sound/mensaje.mp3");
        snd.play();
        $('.mensaje-ayuda').show();
      },5000);
}

function cerrarMensaje(){
    const element =  document.querySelector('.mensaje-ayuda');
    element.classList.add('animated', 'fadeOutDown','faster');
}