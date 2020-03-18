<?php
    session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administracion - Idemsalud</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/estilo.css">
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script>
      new WOW().init();
    </script>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-4 wow fadeInLeft" id="menu-administracion">
                <div class="text-center wow fadeIn" data-wow-delay="1s" id="logo-menu">
                    <img src="img/logo.png" height="50" alt="">
                </div>
                <div class="text-center mt-5 mb-5">
                    <img id="foto-perfil"  src="img/sin-foto.png" height="100" alt="">
                </div>
                <ul class="nav flex-column text-center">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Opcion</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Opcion</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php"><i class="fas fa-arrow-left fa-lg"></i> Página principal</a>
                    </li>
                </ul>
            </div>
            <div class="col-xl-8">
                <div class="text-center wow fadeIn" id="saludo">
                    <img src="img/hello.png" height="80" alt="">
                    <h1 class="">Hola <?php echo $_SESSION['nomApe']; ?></h1>
                </div>
            </div>
        </div>
    </div>
</body>
</html>