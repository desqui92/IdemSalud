<?php
/* Iniciar sesion */
session_start();


/* Realizo la conexion a la db */
include 'conexion.php';
$mysqli=conexion();

/* Tomo los datos del formulario */
$email=$_POST['email'];
$clave=$_POST['clave'];

/*$email="pmariano@hotmail.com";
$clave="pepe";*/

/* Realizo la consulta */
$sql = $mysqli->prepare("SELECT * FROM usuarios WHERE email = ?");
echo $mysqli->error;
$sql->bind_param("s",$email);
$sql->execute();
$res=$sql->get_result();
$user=$res->fetch_assoc();


if(mysqli_num_rows($res)==1){
    /* Evaluar si encontró registro */
    if($user['estado']=='1'){
        if(password_verify($clave,$user['clave'])){
            $_SESSION['idUsuario']=$user['idUsuario'];
            $_SESSION['dni']=$user['dni'];
            $_SESSION['nomApe']=$user['nomApe'];
            $_SESSION['fechaNac']=$user['fechaNac'];
            $_SESSION['provincia']=$user['provincia'];
            $_SESSION['ciudad']=$user['ciudad'];
            $_SESSION['telefono']=$user['telefono'];
            $_SESSION['email']=$user['email'];
            $_SESSION['estado']=$user['estado'];
            $_SESSION['rango']=$user['rango'];
            $_SESSION['fotoPerfil']=$user['fotoPerfil'];
        
            /* Variable de sesion que indica que esta logueado */
            $_SESSION['conectado']='true';
        
            /* 1 sigfinica que logueo */
            echo "1";
        
        }else{
            /* Variable de sesion que indica que no esta logueado */
            $_SESSION['conectado']='false';
        
            /* 2 significa que tiene el email validado pero los datos ingredos son incorrectos*/
            echo "2";
        }   
    }else{
        /* 3 significa que falta validad el email de la cuenta */
        echo "3";
    }
}else{
    /* 0 signifia que la cuenta no existe */
    echo "0";
}






?>