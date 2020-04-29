<?php
    session_start();
    if ($_SESSION['rango'] != 3){
        header("Location: /index.php");
    }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administracion de Blog - Idemsalud</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/all.min.css">
    <link rel="stylesheet" href="../css/animate.css">
    <link rel="stylesheet" href="../css/estilo.css">
    <script src="../js/jquery-3.4.1.min.js"></script>
    <script src="../js/wow.min.js"></script>
    <script>
      new WOW().init();
    </script>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <?php include 'menuDiseñador.php'; ?>

            <div class="col-xl-8">
                <div class="text-center wow fadeIn" id="saludo">
                    <img src="../img/hello.png" height="80" alt="">
                    <h1 class="">Hola <?php echo $_SESSION['nomApe']; ?></h1>
                </div>
            </div>
        </div>
    </div>
</body>
</html>