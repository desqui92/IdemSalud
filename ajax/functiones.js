function verificarLogin() {
    event.preventDefault();
    $.ajax({
        url:'./php/verificarLogin.php',
        type:'post',
        data:$('#form-login').serialize()
    })
    .done(function(res) {
        alert(res);
    })
    
}