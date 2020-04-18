


function verificarLogin() {
    event.preventDefault();

    if (validarEmail()==true) {
      if(validarClave()==true){
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
    }    
}


function validarEmail(){
  email=$("#email").val();
  if (email=="") {
    $("#emailHelp").html("<i class='fas fa-info-circle'></i> Debe ingresar su email");
    $("#emailHelp").show();
    return false;
  }else{
    $("#emailHelp").hide();
    return true;
  }
}


function validarClave(){
  clave=$("#clave").val();
  if(clave==""){
    $("#claveHelp").html("<i class='fas fa-info-circle'></i> Debe ingresar su clave");
    $("#claveHelp").show();
    return false;
  }else{
    if (clave.length<5 || clave.length>50) {
      $("#claveHelp").html("<i class='fas fa-info-circle'></i> Debe tener entre 5 y 50 caracteres");
      $("#claveHelp").show();
      return false;
    }else{
      $("#claveHelp").hide();
      return true;
    }
  }
}


function registrar(){
  event.preventDefault();
  $.ajax({
    type: "post",
    url: "./php/registrar.php",
    data:$("#form-registro").serialize()
  })
  .done(function (res) {
    $("#form-registro").hide();
    $("#cont-validar-email").show();
  })
}