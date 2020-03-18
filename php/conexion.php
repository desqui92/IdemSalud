<?php
function conexion() {
    $link=mysqli_connect('localhost','root','','idemsalud');
    return $link;
   /* $conn = new mysqli('localhost','root','','idemsalud');
    return $conn;*/
}
?>