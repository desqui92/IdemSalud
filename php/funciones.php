<?php

function generarToken($longitud) {
    $key = '';
    $pattern = '1234567890abcdefghijklmnopqrstuvwxyz';
    $max = strlen($pattern)-1;
    for($i=0;$i < $longitud;$i++) $key .= $pattern{mt_rand(0,$max)};
    return $key;
}

function tomarDominio(){
    $dominio=$_SERVER['HTTP_HOST'];
    return $dominio;
}

function devolverSeguridadHttp(){
    if (isset($_SERVER['HTTPS'])) {
        return "https://";
    } else {
        return "http://";
    }
}

function emailValidacion($link,$email){
    $dominio=tomarDominio();
    $http=devolverSeguridadHttp();
    $sql="SELECT idUsuario,tokenEmail FROM usuarios WHERE email='$email'";
    $res=mysqli_query($link,$sql);
    $usuario=$res->fetch_assoc();

    $urlValidacion=$http.$dominio.'/IdemSalud/validarEmail.php?id='.$usuario['idUsuario'].'&token='.$usuario['tokenEmail'];

    $destino=$email;
    $asunto="IdemSalud - VALIDACION DE EMAIL";

    $mensaje="<html>
    <head>
        <meta charset='UTF-8'>
    </head>
    <body>
        <h1>IdemSalud - Validación de email</h1>
        <br>
        <a href='$urlValidacion'>Presione aquí para validar el email</a>
    </body>";

    $cabeceras = 'From: info.los.girasolescyv@gmail.com';
    $cabeceras .= 'MIME-Version: 1.0' . "\r\n";
    $cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";


    $asunto=utf8_decode($asunto);
    $mensaje = utf8_decode($mensaje);

    mail($destino, $asunto, $mensaje, $cabeceras);
}


?>