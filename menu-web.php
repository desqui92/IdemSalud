<nav class="navbar navbar-expand-lg" id="navid" style="box-shadow: 0px 5px 5px 0px rgba(0,0,0,0.5);z-index:1;font-family:Montserrat; font-size:15px;">
<a class="navbar-brand" href="#"><img src="img/logo.png"></a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
<i class="fas fa-bars"></i>
  </button>
<div class="collapse navbar-collapse" id="navbarTogglerDemo01" style="text-align:justify;">
    <ul class="navbar-nav mr-auto margenabajo ordenaritems" style="font-weight:600;">
        <li class="nav-item margenabajo" id="inicio1">
            <a class="link1 text-muted spancito" href="index.php" style="font-family:Montserrat;"><img class="iconos" style="vertical-align:baseline;" src="img/home.png" height="25" alt=""> Inicio</a>
      </li>
      <li class="nav-item margenabajo" id="quienesomos">
          <a class="link1 text-muted spancito" id="quienessomos" href="nosotros.php" style="font-family:Montserrat;"></a>
      </li>
      <li class="nav-item margenabajo" id="cursos">
        <a class="link1 text-muted spancito"href="misCursos.php" style="font-family:Montserrat;"><img class="iconos" style="vertical-align:baseline;" src="img/cursos.png" height="25" alt=""> Cursos</a>
      </li>
        <li class="nav-item margenabajo">
        <a class="link1 text-muted spancito"href="blog.php" style="font-family:Montserrat;"><img class="iconos" style="vertical-align:baseline;" src="img/blog.png" height="25" alt=""> Blog</a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:gray;font-weight:400;text-decoration:none;margin-right: 20px;">
          <img src="img/user-student.png" height="20" style="vertical-align: text-bottom;" alt=""> Mi Perfíl
        </a>
        <div  id="submenu" class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#" style="padding:20px 60px 20px 60px;"><i class="fas fa-address-card fa-lg"></i> Mis datos</a>
          <a class="dropdown-item" href="#" style="padding:20px 60px 20px 60px;"><i class="fas fa-book-reader fa-lg"></i> Mis cursos</a>
       <!--   <div class="dropdown-divider"></div>-->
          <a class="dropdown-item" href="#" style="padding:20px 60px 20px 60px;"><i class="fas fa-arrow-left fa-lg"></i> Ir a inicio</a>
          <a class="dropdown-item" href="#" style="padding:20px 60px 20px 60px;"><i class="fas fa-power-off fa-lg"></i> Cerrar Sesión</a>
        </div>
      </li>
    </ul>
    <div style="margin-right:15px; margin-top:-10px;" class="d-none justify-content-center"><!-- aca va un d-flex -->
      <form class="form-inline my-2 my-lg-0">
      <div class="input-group mb-3" style="margin-right:10px; margin-top:15px;">
 <!-- <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1" style="background-color:red;"><i class="fa fa-search" style="color:white;"></i></span>
  </div>
  <input type="text" class="form-control" placeholder="Buscar..." aria-label="Username" aria-describedby="basic-addon1" style="font-size:15px;font-family:opensans">
</div>-->
          </form></div>
    <div id="div1" style="display:block;margin:auto;text-align:center;">  
    <script> 
    function myFunction(x) {
    if (x.matches) {
      document.getElementById("div1").innerHTML = "<button onclick=\"window.location=\'iniciarSesion.php\'\" type=\"button\" class=\"btn btn-op1\"><i class=\"far fa-user-circle fa-lg\"></i> ENTRAR / REGISTRARSE</button> </div><br><div style=\"margin-bottom:5px; margin-top:5px;\"><i class=\"fa fa-envelope text-danger\"></i><span class=\"text-muted\">&nbsp;info@idemsalud.com </span><i class=\"fa fa-phone text-danger\"></i><span class=\"text-muted\">&nbsp;0221-4707735</span></div>";
      document.getElementById("quienessomos").innerHTML = "<img class=\"iconos\" style=\"vertical-align:baseline;\" src=\"img/nosotros.png\" height=\"25\" alt=\"\">Nosotros";
    } else {
      document.getElementById("div1").innerHTML = "</div><br><div style=\"margin-right:15px; margin-bottom:5px; margin-top:5px;\"><i class=\"fa fa-envelope text-danger\"></i><span class=\"text-muted\">&nbsp;info@idemsalud.com </span><i class=\"fa fa-phone text-danger\"></i><span class=\"text-muted\">&nbsp;0221-4707735</span></div><button onclick=\"window.location=\'iniciarSesion.php\'\" type=\"button\" class=\"btn btn-op1\"><i class=\"far fa-user-circle fa-lg\"></i> ENTRAR / REGISTRARSE</button>";
      document.getElementById("quienessomos").innerHTML = "<img class=\"iconos\" style=\"vertical-align:baseline;\" src=\"img/nosotros.png\" height=\"25\" alt=\"\">Quienes somos";
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