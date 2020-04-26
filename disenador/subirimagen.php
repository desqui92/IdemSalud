<?php
/* Incluir la conexion  a la db*/
include '../php/conexion.php'; 
$link = conexion();
/*Consulta a la tabla publicaciones, para conseguir la id de la ultima publicacion */
$sql = "SELECT MAX(idBlog) FROM blog";
$res = mysqli_query($link, $sql);
$arr = mysqli_fetch_array($res);
$id = $arr[0] + 1;

$tmp_name = $_FILES['file']["tmp_name"];
$nombre="portada-".$id.'.png';
$ext=$_FILES['file']['type'];
echo move_uploaded_file($tmp_name, '../files/portadaBlog/'.$nombre);
?>