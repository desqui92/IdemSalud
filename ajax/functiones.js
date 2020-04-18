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
              window.location='index.php';
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


function registrar(){
  event.preventDefault();
  $.ajax({
    type: "post",
    url: "./php/registrar.php",
    data:$("#form-registro").serialize()
  })
  .done(function (res) {
    alert(res);
  })
}