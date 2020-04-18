<?php

/* Incluir la conexion  a la db*/
include 'conexion.php';

/* Incluir funciones de php*/
include 'funciones.php';
/* Ejecutar la conexion a la db */
$link=conexion();

/* Tomar los datos del formulario */
$nombreYApellido=$_POST['nomApe'];
$email=$_POST['email'];
$clave=password_hash($_POST['clave'],PASSWORD_DEFAULT);
$token=generarToken(50);



/* Crear consulta sql */
$sql="INSERT INTO usuarios (nomApe,email,clave,rango,estado,tokenEmail) VALUES ('$nombreYApellido','$email','$clave','4','0','$token')";

if(mysqli_query($link,$sql)){
    echo "se registro";
}else{
    echo "algo paso";
}



?>