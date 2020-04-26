<?php
$destino = "/files/portadaBlog";
//echo move_uploaded_file ($portada , $destino );
//move_uploaded_file ($_FILES['imagen2.png'], $destino);
$tmp_name = $_FILES['croppedImage']["tmp_name"];
move_uploaded_file($tmp_name,$destino);
?>