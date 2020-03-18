<?php

/* Realizo la conexion a la db */
include 'conexion.php';
$mysqli=conexion();

/* Tomo los datos del formulario */
/*$email=$_POST['email'];
$clave=$_POST['clave'];*/

$email="pepe@hotmail.com";
$clave="pepe";

/* Realizo la consulta */
$sql = $mysqli->prepare("SELECT * FROM usuarios WHERE email = ? AND clave = ?");
echo $mysqli->error;
$sql->bind_param("ss",$email,$clave);
$sql->execute();
$res=$sql->get_result();
$user=$res->fetch_assoc();
echo mysqli_num_rows($res);

/* 




?>