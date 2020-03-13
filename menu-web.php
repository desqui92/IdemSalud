<nav class="navbar navbar-expand-lg" id="navid" style="border-style: solid; border-width:0px 0px 2px 0px;border-color:red; font-family:Montserrat; font-size:15px;">
<a class="navbar-brand" href="#"><img src="img/logo.png"></a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
<i class="fas fa-bars"></i>
  </button>
<div class="collapse navbar-collapse" id="navbarTogglerDemo01" style="text-align:justify;">
    <ul class="navbar-nav mr-auto margenabajo ordenaritems">
        <li class="nav-item margenabajo" id="inicio1">
            <a class="link1 text-muted spancito" href="index.php" style="font-family:Montserrat;"><img style="vertical-align:baseline;" src="img/home.png" height="18" alt=""> Inicio</a>
      </li>
      <li class="nav-item margenabajo" id="quienesomos">
          <a class="link1 text-muted spancito" id="quienessomos" href="nosotros.php" style="font-family:Montserrat;"></a>
      </li>
      <li class="nav-item margenabajo" id="cursos">
        <a class="link1 text-muted spancito"href="misCursos.php" style="font-family:Montserrat;"><img style="vertical-align:baseline;" src="img/cursos.png" height="18" alt=""> Cursos</a>
      </li>
        <li class="nav-item margenabajo">
        <a class="link1 text-muted spancito"href="blog.php" style="font-family:Montserrat;"><img style="vertical-align:baseline;" src="img/blog.png" height="18" alt=""> Blog</a>
      </li>
    </ul>
    <div style="margin-right:15px; margin-top:-10px;" class="d-flex justify-content-center">
      <form class="form-inline my-2 my-lg-0">
      <div class="input-group mb-3" style="margin-right:10px; margin-top:15px;">
 <!-- <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1" style="background-color:red;"><i class="fa fa-search" style="color:white;"></i></span>
  </div>
  <input type="text" class="form-control" placeholder="Buscar..." aria-label="Username" aria-describedby="basic-addon1" style="font-size:15px;font-family:opensans">
</div>-->
          </form></div>
    <div id="div1" style="margin-right:15px; text-align:center;">  
    <script> 
    function myFunction(x) {
    if (x.matches) {
      document.getElementById("div1").innerHTML = "<button onclick=\"window.location=\'iniciarSesion.php\'\" type=\"button\" class=\"btn btn-op1\"><i class=\"far fa-user-circle fa-lg\"></i> Entrar / Registrarse</button> </div><br><div style=\"margin-right:15px; margin-bottom:5px; margin-top:5px;\"><i class=\"fa fa-envelope text-danger\"></i><span class=\"text-muted\">&nbsp;info@idemsalud.com </span><i class=\"fa fa-phone text-danger\"></i><span class=\"text-muted\">&nbsp;0221-4707735</span></div>";
      document.getElementById("quienessomos").innerHTML = "<img style=\"vertical-align:baseline;\" src=\"img/nosotros.png\" height=\"18\" alt=\"\">Nosotros";
    } else {
      document.getElementById("div1").innerHTML = "</div><br><div style=\"margin-right:15px; margin-bottom:5px; margin-top:5px;\"><i class=\"fa fa-envelope text-danger\"></i><span class=\"text-muted\">&nbsp;info@idemsalud.com </span><i class=\"fa fa-phone text-danger\"></i><span class=\"text-muted\">&nbsp;0221-4707735</span></div><button onclick=\"window.location=\'iniciarSesion.php\'\" type=\"button\" class=\"btn btn-op1\"><i class=\"far fa-user-circle fa-lg\"></i> Entrar / Registrarse</button>";
      document.getElementById("quienessomos").innerHTML = "<img style=\"vertical-align:baseline;\" src=\"img/nosotros.png\" height=\"18\" alt=\"\">Quienes somos";
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