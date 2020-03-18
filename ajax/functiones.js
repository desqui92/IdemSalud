function verificarLogin() {
    event.preventDefault();
    $.ajax({
        url:'./php/verificarLogin.php',
        type:'post',
        data:$('#form-login').serialize()
    })
    .done(function(res) {

        switch(res) {
            case '0':
              $('#avisoLogin').text('¡Datos incorrectos!');
              break;
            case '1':
              alert('usted se logueo');
              break;
            case '2':
                $('#avisoLogin').text('¡Datos incorrectos!');
            break;
            case '3':
                $('#avisoLogin').text('¡Por favor valide el email!');
            break;
        }
    })
    
}