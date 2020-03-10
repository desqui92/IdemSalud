<nav class="navbar navbar-expand-lg" id="navid" style="border-style: solid; border-width:0px 0px 2px 0px;border-color:red; font-family:Montserrat; font-size:15px;">
<a class="navbar-brand" href="#"><img src="img/logo.png"></a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
<i class="fas fa-bars"></i>
  </button>
<div class="collapse navbar-collapse" id="navbarTogglerDemo01" style="text-align:center;">
    <ul class="navbar-nav mr-auto margenabajo">
        <li class="nav-item margenabajo" id="inicio1">
            <a class="link1 text-muted spancito" href="index.php" style="font-family:Montserrat;">Inicio</a>
      </li>
      <li class="nav-item margenabajo" id="quienesomos">
          <a class="link1 text-muted spancito" href="nosotros.php" style="font-family:Montserrat;">Quienes Somos</a>
      </li>
      <li class="nav-item margenabajo" id="cursos">
        <a class="link1 text-muted spancito"href="misCursos.php" style="font-family:Montserrat;">Cursos</a>
      </li>
        <li class="nav-item margenabajo">
        <a class="link1 text-muted spancito"href="blog.php" style="font-family:Montserrat;">Blog</a>
      </li>
    </ul>
    <div style="margin-right:15px;" class="d-flex justify-content-center">
      <form class="form-inline my-2 my-lg-0">
      <div class="input-group mb-3" style="margin-right:10px; margin-top:15px;">
 <!-- <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1" style="background-color:red;"><i class="fa fa-search" style="color:white;"></i></span>
  </div>
  <input type="text" class="form-control" placeholder="Buscar..." aria-label="Username" aria-describedby="basic-addon1" style="font-size:15px;font-family:opensans">
</div>-->
          </form></div>
    <div id="div1" style="margin-right:15px;">  
    <script> 
    function myFunction(x) {
    if (x.matches) {
      document.getElementById("div1").innerHTML = "<button onclick=\"window.location=\'iniciarSesion.php\'\" type=\"button\" class=\"btn btn-op1\"><i class=\"far fa-user-circle fa-lg\"></i> Entrar / Registrarse</button> </div><br><div style=\"margin-right:15px; margin-bottom:5px; margin-top:5px;\"><i class=\"fa fa-envelope text-danger\"></i><span class=\"text-muted\">&nbsp;info@idemsalud.com </span><i class=\"fa fa-phone text-danger\"></i><span class=\"text-muted\">&nbsp;0221-4707735</span></div>";
    } else {
      document.getElementById("div1").innerHTML = "</div><br><div style=\"margin-right:15px; margin-bottom:5px; margin-top:5px;\"><i class=\"fa fa-envelope text-danger\"></i><span class=\"text-muted\">&nbsp;info@idemsalud.com </span><i class=\"fa fa-phone text-danger\"></i><span class=\"text-muted\">&nbsp;0221-4707735</span></div><button onclick=\"window.location=\'iniciarSesion.php\'\" type=\"button\" class=\"btn btn-op1\"><i class=\"far fa-user-circle fa-lg\"></i> Entrar / Registrarse</button>";
    }
  }
  
  var x = window.matchMedia("(max-width: 991px)");
  myFunction(x); // Call listener function at run time
  x.addListener(myFunction);
    </script>
     <!-- <div style="margin-right:15px; margin-bottom:5px; margin-top:5px;">
    <i class="fa fa-envelope text-danger"></i><span class="text-muted">&nbsp;info@idemsalud.com </span>
    <i class="fa fa-phone text-danger"></i><span class="text-muted">&nbsp;0221-4707735</span>
      </div>
    <button onclick="window.location='iniciarSesion.php'" type="button" class="btn btn-op1"><i class="far fa-user-circle fa-lg"></i> Entrar / Registrarse</button> </div>-->
</div>
</div>
   <!-- <div style="margin-right:15px;"><button type="button" class="btn btn-outline-danger">Iniciar Sesión</button></div>
    <div style="margin-right:15px;"><button type="button" class="btn btn-outline-danger">Regístrate</button></div>-->
</nav>