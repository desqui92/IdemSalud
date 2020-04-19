<?php
include 'php/conexion.php';
include 'php/funciones.php';
$link=conexion();

$validacion=validarEmail($link);

//echo $validacion;

?>




<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Validación - Idemsalud</title>
</head>
<body>
    <div class="container-fluid" id="cont-validar">
        <div class="row h-100">
            <div class="col-xl-6 offset-xl-3 col-md-8 offset-md-2 col-sm-10 offset-sm-1 col-10 offset-1  validacion my-auto">
                <?php
                    switch ($validacion) {
                        case '1':
                            echo "
                                <img class='mt-4 mb-2' src='img/bienValidado.png' height='100' alt=''>
                                <h4>¡Muy bien ya validaste tu email!</h4>
                                <button type='button' id='entrar' onclick='window.location=\"iniciarSesion.php\"'  class='btn btn-op1 mr-2 mt-2'><i class='fas fa-sign-in-alt fa-lg'></i> Iniciar Sesión</button>
                            ";
                            break;
                        case '2':
                            echo "
                                <img class='mt-4 mb-2' src='img/bienValidado.png' height='100' alt=''>
                                <h4>El usuario ya se encuentra validado</h4>
                                <button type='button' id='entrar' onclick='window.location=\"iniciarSesion.php\"' class='btn btn-op1 mr-2 mt-2'><i class='fas fa-sign-in-alt fa-lg'></i> Iniciar Sesión</button>
                            ";
                            break;
                        case '3':
                            echo "
                                <img class='mt-4 mb-2' src='img/informacion.png' height='100' alt=''>
                                <h4>Algo sucedió , por favor intentelo mas tarde</h4>
                                <button type='button'  onclick='window.location=\"index.php\"' class='btn btn-op1 mr-2 mt-2'> Ir a inicio</button>
                            ";
                            break;
                    }
                ?>
            </div>
        </div>
    </div>
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/funciones.js"></script>
    <script src="ajax/functiones.js"></script>
</body>
</html>