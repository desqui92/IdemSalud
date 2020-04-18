<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Entrar - Idemsalud</title>
</head>
<body>
    <div class="container-fluid" id="cont-login">
        <div class="row">
            <div class="col-xl-4 offset-xl-4">
                <form action="" method="post" id="form-login" class="animated fadeInUp" style="display:none;" onsubmit="verificarLogin()">
                    <img class="d-block mx-auto" src="img/logo.png" height="50" alt="">
                    <h6 class="text-center mt-2">A continuación ingrese sus datos</h6>
                    <div class="form-group">
                        <label for="email"><i class="far fa-user fa-lg"></i> Email</label>
                        <input type="email" class="form-control input-op1" name="email" id="email" aria-describedby="emailHelp" placeholder="Ingrese email">
                        <small id="emailHelp" class="form-text text-muted">Aquí va la validacion de error de email</small>
                    </div>
                    <div class="form-group">
                        <label for="clave"><i class="fas fa-unlock-alt fa-lg"></i> Contraseña</label>
                        <input type="password" class="form-control input-op1" name="clave" id="clave" aria-describedby="claveHelp" placeholder="Ingrese contraseña">
                        <small id="claveHelp" class="form-text text-muted">Aquí va la validacion de error de password</small>
                    </div>
                    <p class="text-center" id="avisoLogin"></p>
                    <div class="text-center">
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <button type="button" id="registrarme" onclick="irRegistro()" class="btn btn-op1 mr-2"><i class="fas fa-user-plus fa-lg"></i> Registrarme</button>
                            <button type="submit" id="entrar" onclick="" class="btn btn-op1 ml-2"><i class="fas fa-sign-in-alt fa-lg"></i> Entrar</button>
                        </div>
                    </div>
                </form>
                <form action="" method="post" id="form-registro"  class="animated fadeInUp" onsubmit="registrar()">
                    <img class="d-block mx-auto" src="img/logo.png" height="50" alt="">
                    <h6 class="text-center mt-2">A continuación ingrese sus datos</h6>
                    <div class="form-group">
                        <label for="nomApe"><i class="far fa-user fa-lg"></i> Nombre y Apellido</label>
                        <input type="text"  class="form-control input-op1" name="nomApe" id="nomApe" aria-describedby="nomApeHelp" placeholder="Ingrese Nombre y Apellido">
                        <small id="nomApeHelp" class="form-text text-muted">Aquí va la validacion de error de nombre y apellido</small>
                    </div>
                    <div class="form-group">
                        <label for="email"><i class="far fa-envelope fa-lg"></i> Email</label>
                        <input type="email" class="form-control input-op1" id="email" name="email" aria-describedby="emailHelp" placeholder="Ingrese email">
                        <small id="emailHelp" class="form-text text-muted">Aquí va la validacion de error de email</small>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="clave"><i class="fas fa-unlock-alt fa-lg"></i> Contraseña</label>
                                <input type="password" class="form-control input-op1" id="clave" name="clave" aria-describedby="claveHelp" placeholder="Ingrese contraseña">
                                <small id="claveHelp" class="form-text text-muted">Aquí va la validacion de error de password</small>
                            </div>
                        </div>
                        <div class="col">
                        <div class="form-group">
                            <label for="clave2"><i class="fas fa-unlock-alt fa-lg"></i> Repetir contraseña</label>
                            <input type="password" class="form-control input-op1" id="clave2" aria-describedby="clave2Help" placeholder="Repita contraseña">
                            <small id="clave2Help" class="form-text text-muted">Aquí va la validacion de error de password</small>
                        </div>
                        </div>
                    </div>
                    <p class="text-center">¡Los datos son incorrectos!</p>
                    <div class="text-center">
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <button type="button" id="entrar" onclick="irLogin()" class="btn btn-op1 mr-2"><i class="fas fa-sign-in-alt fa-lg"></i> Iniciar Sesión</button>
                            <button type="submit" id="registrarme" class="btn btn-op1 ml-2"><i class="fas fa-user-plus fa-lg"></i>  Registrarme</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-6 offset-xl-3 text-center animated fadeInUp d-none" id="cont-validar-email">
                <img src="img/mensaje.png" height="60" alt="">
                <h4 class="mt-2">¡Genial! , ahora revise su correo y valide su email</h4>
                <h5 class="mt-4 mb-4">Podrá reenviar la validación en 50s</h5>
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <button type="button" id="yaValide" onclick="irLogin()" class="btn btn-op1"><i class="fas fa-check fa-lg"></i> Listo</button>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6">
                        <button type="submit" id="reenvioValidacion"  class="btn btn-op1"><i class="fas fa-redo-alt fa-lg"></i> Reenviar validación</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/funciones.js"></script>
    <script src="ajax/functiones.js"></script>
</body>
</html>