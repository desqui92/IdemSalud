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


function validarEmail($link){
    $idUsuario=$_GET['id'];
    $tokenEmail=$_GET['token'];

    $sql="SELECT estado FROM usuarios WHERE idUsuario='$idUsuario' AND tokenEmail='$tokenEmail' LIMIT 1";
    $res=mysqli_query($link,$sql);
    $encontro=mysqli_num_rows($res);
    
    if ($encontro==1) {
        $arr=mysqli_fetch_array($res);
        $estado=$arr[0];
        if ($estado==0) {
            $sql="UPDATE usuarios SET estado='1' WHERE idUsuario='$idUsuario' AND tokenEmail='$tokenEmail'";
            mysqli_query($link,$sql);
            /* retorna 1 porque se valido */
            return 1;
        }else{
            /* retorna 2 si ya esta validado*/
            return 2;
        }
    }else{
        /* retorna 4 si no se encontro el usuario */
        return 3;
    }

}

function traer3Blog($link){
    $sql="SELECT * FROM blog ORDER BY fechaSubida DESC LIMIT 3";
    $res=mysqli_query($link,$sql);
    return $res;
}

function sacarDia($fecha){
    $dia=date("d", strtotime($fecha));
    return $dia;
}
function sacarMes($fecha){
    $mes=date("m", strtotime($fecha));
    switch ($mes) {
        case '01':
            $mes="ENE";
            break;
        case '02':
            $mes="FEB";
            break;
        case '03':
            $mes="MAR";
            break;
        case '04':
            $mes="ABR";
            break;
        case '05':
            $mes="MAY";
            break;
        case '06':
            $mes="JUN";
            break;
        case '07':
            $mes="JUL";
            break;
        case '08':
            $mes="AGO";
            break;
        case '09':
            $mes="SEPT";
            break;
        case '10':
            $mes="OCT";
            break;
        case '11':
            $mes="NOV";
            break;
        case '12':
            $mes="DIC";
            break;
    }
    return strtoupper($mes);
}


?>