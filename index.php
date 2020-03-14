<html lang="es">
<head> <!-- sdfsdfsdfajja para qu-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/estilo.css">
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/funciones.js"></script>
    <script>
      new WOW().init();
    </script>
    <script>
      $( document ).ready(function() {
        mensajeAyuda();
      });
    </script>
   <script src="js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    <title>Inicio</title>
</head>
<body>

  <!-- MENU -->
  <?php
    include 'menu-web.php';
  ?>

  <!-- CONETENEDOR DE INFORMACION DE INICIO -->
  <div class="container-fluid" id="inicio-seccion" style="position:relative;">
    <div class="row">
      <div clas="col-12">
         <img src="img/enfermera3.jpg" style="width:100%; height:auto;">
      </div>
      <div class="cont-inicio" style="position:absolute;">
          <h1 class="titulo txt-shadow mb-2 animated fadeInLeft slow">MIRA NUESTROS CURSOS</h1>
          <h4 class="descripcion mb-4 animated fadeInUp slow delay-1s">Realizado por profesionales con amplia<br>experiencia en la rama de la salud.</h4>
          <table style="border:2px; color:white; font-weight:bold;" class="imageniniciotips animated fadeInUp slow delay-1s">
            <tr>
              <td style="padding-bottom:12px;"><img src="img/tickrojo.png" style="width:20px;height:20px;vertical-align:sub;">&nbsp;Material adicional</td>
              <td style="padding-left:10px; padding-bottom:12px;"><img src="img/tickrojo.png" style="width:20px;height:20px;vertical-align:sub;">&nbsp;Reseñas de los cursos</td>
            </tr>
            <tr >
            <td style="padding-bottom:12px;"><img src="img/tickrojo.png" style="width:20px;height:20px;vertical-align:sub;">&nbsp;Variedad de cursos</td>
            <td  style="padding-left:10px;padding-bottom:12px;"><img src="img/tickrojo.png" style="width:20px;height:20px;vertical-align:sub;">&nbsp;Seccion comentarios</td>
            </tr> 
            <tr>
            <td style="padding-bottom:12px;"><img src="img/tickrojo.png" style="width:20px;height:20px;vertical-align:sub;">&nbsp;Videos explicativos</td>
            <td style="padding-left:10px;padding-bottom:12px;"><img src="img/tickrojo.png" style="width:20px;height:20px;vertical-align:sub;">&nbsp;Consultas al profesor</td> 
          </table>
          </div>
          <!-- Tabla en celulares pequeños-->
          <div class="cont-iniciocelu" style="position:absolute;">
          <h1 class="titulo">NUESTROS CURSOS</h1>
          <h4 class="descripcion">Realizado por profesionales<br>con amplia experiencia</h4>
          <table style="border:2px; color:white; font-weight:bold;" class="imageniniciotipscelu">
            <tr>
              <td style="padding-bottom:12px;"><img src="img/tickrojo.png" style="width:20px;height:20px;">&nbsp;Variedad de cursos</td>
            </tr>
            <tr >
            <td style="padding-bottom:12px;"><img src="img/tickrojo.png" style="width:20px;height:20px;">&nbsp;Material adicional</td>
            </tr> 
            <tr>
            <td style="padding-bottom:12px;"><img src="img/tickrojo.png" style="width:20px;height:20px;">&nbsp;Videos explicativos</td>
          </table>
      </div>
    </div>
  </div>




  <!-- CONTENEDOR DE INFORMACION DE LOS CURSOS -->
  <div class="container-fluid" id="cartascursos" style="position:relative; background-color:white;">
    <div class="row">
      <div class="col-12">
        <div id="nuestroscursos">
          <div class="wow fadeInUp">
        <h1 class="text-center" style="font-size:36px; margin-bottom:5px;margin-top:60px;"><img style="vertical-align:sub;" src="img/cursos-pc.png" height="40" alt=""> Cursos mas demandados</h1>
        <hr style="border-top: 2px solid red; width:60px;">
          </div>
        <h2 class="text-center wow fadeInUp" style="font-size:22px; font-weight:300; color:#6c757d;margin-bottom:18px;margin-top:20px;">Elige uno de nuestros cursos y empieza a aprender con un profesional calificado.</h2>
      <div  style="padding-bottom:8px;margin-top:60px;text-align:center;">
        <a  href="" style="padding-bottom:9px;"><h2 style="font-size:21px; display:inline;">Enfermería</h2></a>&nbsp;|&nbsp;<a href=""><h2 style="font-size:21px; display:inline;">Otros</h2></a>
      </div>
    </div>
  </div>
    <div class="col-12">
      <div class="carousel wow fadeIn slow" data-flickity='{ "wrapAround": true, "percentPosition": false, "cellAlign": "left" }'>
        <div class="carousel-cell">
          <div class="card">
            <img class="card-img-top" src="img/card4.jpg" style="width:278px;height:160px;" alt="Card image cap">
            <div class="card-body">
            <h5 class="card-title">Curso de Enfermería 1</h5>
            <h6 class="card-subtitle mb-2 text-muted">Rodrigo Garcia</h6>
              <p class="card-text">Excelente curso de enfermería sobre los cuidados intensivos en personas mayores.</p>
              <p class="card-text" style="display:inline;"><img src="img/starllena.png"><img src="img/starllena.png"><img src="img/starllena.png"><img src="img/starllena.png"><img src="img/starmedia.png"></p><span style="font-size:14px; display:inline;">&nbsp;(1820)</span><small class="text-muted"></small><br><span style="font-size:14px; font-weight:400;margin-top:5px;">750$/mes (6 meses)</span>
            <br><button style="font-size:12px;color:white;background-color:gold; display:inline;border:0px;">Mas barato</button>
          </div>
        </div>
      </div>
      <div class="carousel-cell">
        <div class="card">
          <img class="card-img-top" src="img/card5.jpg" style="width:278px;height:160px;" alt="Card image cap">
          <div class="card-body">
          <h5 class="card-title">Curso de Enfermería 2</h5>
          <h6 class="card-subtitle mb-2 text-muted">Juan Perez</h6>
            <p class="card-text">Excelente curso de enfermería sobre los cuidados intensivos en personas mayores.</p>
            <p class="card-text" style="display:inline;"><img src="img/starllena.png"><img src="img/starllena.png"><img src="img/starllena.png"><img src="img/starllena.png"><img src="img/starmedia.png"></p><span style="font-size:14px; display:inline;">&nbsp;(1820)</span><small class="text-muted"></small><br><span style="font-size:14px; font-weight:400;margin-top:5px;">1550$/mes (6 meses)</span>
          <br><button style="font-size:12px;color:white;background-color:purple; display:inline;border:0px;">Mas reseñas</button>
          </div>
        </div>
      </div>
  <div class="carousel-cell">
  <div class="card">
    <img class="card-img-top" src="img/card6.jpg" style="width:278px;height:160px;"alt="Card image cap">
    <div class="card-body">
    <h5 class="card-title">Curso de Enfermería 3</h5>
    <h6 class="card-subtitle mb-2 text-muted">Lucia Fernandez</h6>
      <p class="card-text">Excelente curso de enfermería sobre los cuidados intensivos en personas mayores.</p>
      <p class="card-text" style="display:inline;"><img src="img/starllena.png"><img src="img/starllena.png"><img src="img/starllena.png"><img src="img/starllena.png"><img src="img/starmedia.png"></p><span style="font-size:14px; display:inline;">&nbsp;(1820)</span><small class="text-muted"></small><br><span style="font-size:14px; font-weight:400;margin-top:5px;">1550$/mes (6 meses)</span>
    <br><button style="font-size:12px;color:white;background-color:blue; display:inline;border:0px;">Mejor valorado</button>
    </div>
  </div>
  </div>
  <div class="carousel-cell">
  <div class="card">
    <img class="card-img-top" src="img/card7.jpg" style="width:278px;height:160px;" alt="Card image cap">
    <div class="card-body">
    <h5 class="card-title">Curso de Enfermería 4</h5>
    <h6 class="card-subtitle mb-2 text-muted">María Flores</h6>
      <p class="card-text">Excelente curso de enfermería sobre los cuidados intensivos en personas mayores.</p>
      <p class="card-text" style="display:inline;"><img src="img/starllena.png"><img src="img/starllena.png"><img src="img/starllena.png"><img src="img/starllena.png"><img src="img/starmedia.png"></p><span style="font-size:14px; display:inline;">&nbsp;(1820)</span><small class="text-muted"></small><br><span style="font-size:14px; font-weight:400;margin-top:5px;">1550$/mes (6 meses)</span>
    <br><button style="font-size:12px;color:white;background-color:purple; display:inline;border:0px;"></button>
    </div>
  </div>
  </div>
  <div class="carousel-cell">
  <div class="card">
    <img class="card-img-top" src="img/card8.jpg" style="width:278px;height:160px;" alt="Card image cap">
    <div class="card-body">
    <h5 class="card-title">Curso de Enfermería 5</h5>
    <h6 class="card-subtitle mb-2 text-muted">Fabricio Castro</h6>
      <p class="card-text">Excelente curso de enfermería sobre los cuidados intensivos en personas mayores.</p>
      <p class="card-text" style="display:inline;"><img src="img/starllena.png"><img src="img/starllena.png"><img src="img/starllena.png"><img src="img/starllena.png"><img src="img/starmedia.png"></p><span style="font-size:14px; display:inline;">&nbsp;(1820)</span><small class="text-muted"></small><br><span style="font-size:14px; font-weight:400;margin-top:5px;">1550$/mes (6 meses)</span>
    <br><button style="font-size:12px;color:white;background-color:green; display:inline;border:0px;"></button>
    </div>
  </div>
  </div>
  <div class="carousel-cell">
  <div class="card">
    <img class="card-img-top" src="img/card9.jpg" style="width:278px;height:160px;" alt="Card image cap">
    <div class="card-body">
    <h5 class="card-title">Curso de Enfermería 6</h5>
    <h6 class="card-subtitle mb-2 text-muted">Mariano Bolaños</h6>
      <p class="card-text">Excelente curso de enfermería sobre los cuidados intensivos en personas mayores.</p>
      <p class="card-text" style="display:inline;"><img src="img/starllena.png"><img src="img/starllena.png"><img src="img/starllena.png"><img src="img/starllena.png"><img src="img/starmedia.png"></p><span style="font-size:14px; display:inline;">&nbsp;(1820)</span><small class="text-muted"></small><br><span style="font-size:14px; font-weight:400;margin-top:5px;">1550$/mes (6 meses)</span>
    <br><button style="font-size:12px;color:white;background-color:green; display:inline;border:0px;"></button>
    </div>
  </div>
  </div>
  <div class="carousel-cell">
  <div class="card">
    <img class="card-img-top" src="img/card10.jpg" style="width:278px;height:160px;" alt="Card image cap">
    <div class="card-body">
    <h5 class="card-title">Curso de Enfermería 7</h5>
    <h6 class="card-subtitle mb-2 text-muted">Ernesto Gonzalez</h6>
      <p class="card-text">Excelente curso de enfermería sobre los cuidados intensivos en personas mayores.</p>
      <p class="card-text" style="display:inline;"><img src="img/starllena.png"><img src="img/starllena.png"><img src="img/starllena.png"><img src="img/starllena.png"><img src="img/starmedia.png"></p><span style="font-size:14px; display:inline;">&nbsp;(1820)</span><small class="text-muted"></small><br><span style="font-size:14px; font-weight:400;margin-top:5px;">1550$/mes (6 meses)</span>
    <br><button style="font-size:12px;color:white;background-color:green; display:inline;border:0px;"></button>
    </div>
  </div>
  </div>
  <div class="carousel-cell">
  <div class="card">
    <img class="card-img-top" src="img/card.jpg" style="width:278px;height:160px;" alt="Card image cap">
    <div class="card-body">
    <h5 class="card-title">Curso de Enfermeria 8</h5>
    <h6 class="card-subtitle mb-2 text-muted">Justo Rodriguez</h6>
      <p class="card-text">Excelente curso de enfermería sobre los cuidados intensivos en personas mayores.</p>
      <p class="card-text" style="display:inline;"><img src="img/starllena.png"><img src="img/starllena.png"><img src="img/starllena.png"><img src="img/starllena.png"><img src="img/starmedia.png"></p><span style="font-size:14px; display:inline;">&nbsp;(1820)</span><small class="text-muted"></small><br><span style="font-size:14px; font-weight:400;margin-top:5px;">1550$/mes (6 meses)</span>
    <br><button style="font-size:12px;color:white;background-color:green; display:inline;border:0px;"></button>
    </div>
  </div>
  </div>
  <div class="carousel-cell">
  <div class="card">
    <img class="card-img-top" src="img/card2.jpg" style="width:278px;height:160px;" alt="Card image cap">
    <div class="card-body">
    <h5 class="card-title">Curso de Enfermeria 9</h5>
    <h6 class="card-subtitle mb-2 text-muted">Armando Suarez</h6>
      <p class="card-text">Excelente curso de enfermería sobre los cuidados intensivos en personas mayores.</p>
      <p class="card-text" style="display:inline;"><img src="img/starllena.png"><img src="img/starllena.png"><img src="img/starllena.png"><img src="img/starllena.png"><img src="img/starmedia.png"></p><span style="font-size:14px; display:inline;">&nbsp;(1820)</span><small class="text-muted"></small><br><span style="font-size:14px; font-weight:400;margin-top:5px;">1550$/mes (6 meses)</span>
    <br><button style="font-size:12px;color:white;background-color:red; display:inline;border:0px;">Mas alumnos</button>
    </div>
  </div>
  </div>
  <div class="carousel-cell">
  <div class="card">
    <img class="card-img-top" src="img/card3.jpg" style="width:278px;height:160px;" alt="Card image cap">
    <div class="card-body">
    <h5 class="card-title">Curso de Enfermería 10</h5>
    <h6 class="card-subtitle mb-2 text-muted">Lucio Guerra</h6>
      <p class="card-text">Excelente curso de enfermería sobre los cuidados intensivos en personas mayores.</p>
      <p class="card-text" style="display:inline;"><img src="img/starllena.png"><img src="img/starllena.png"><img src="img/starllena.png"><img src="img/starllena.png"><img src="img/starmedia.png"></p><span style="font-size:14px; display:inline;">&nbsp;(1820)</span><small class="text-muted"></small><br><span style="font-size:14px; font-weight:400;margin-top:5px;">1550$/mes (6 meses)</span>
    <br><button style="font-size:12px;color:white;background-color:green; display:inline;border:0px;">Mas vendido</button>
    </div>
  </div>
  </div> 
</div>
</div>
</div>
</div>





<!-- CONTENEDOR DE BENEFICIOS -->
<div class="container-fluid" style="background-image:url('img/fondo2-2.jpg');width:100%;height:100%;position:relative;background-size: 100% 100%;margin-top:80px;padding-right:0px;padding-left:0px;">
<div class="imgCortina" style="width:100%; height:100%; position:relative;">
  <div class="container-fluid">
    <div class="row">
    <div class="col-12 wow fadeInUp" style="text-align:center;">
        <h1 class="text-center" style="font-size:36px;margin-top:60px;color:white;"><img style="vertical-align:sub;" src="img/beneficios.png" height="40" alt=""> ¡Tus beneficios!</h1>
        <hr style="border-top: 2px solid white; width:60px;margin-bottom:40px;">
    </div>
    </div>
    <div class="row">
      <div class="col-4 offset-2 wow fadeInLeft" style="background:white;margin-right:10px;padding:20px; box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.75);margin-bottom:10px;">
        <img src="img/bookread.png" class="imagenformavirtual img-responsive d-block mx-auto" style="width:64px;height:64px; margin-right:5px;">
        <h1 class="titulo2 text-center ">ESTUDIA EL DÍA Y LA HORA QUE QUIERAS</h1>
        <h4 class="descripcion2 text-center"><img src="img/tickrojo.png" style="height:20px;display:inline;vertical-align:text-bottom;"> Aprovecha tus momentos libres para aprender un nuevo curso</h4>
      </div>
      <div class="col-4 wow fadeInRight" style="background:white;margin-left:10px;padding:20px; box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.75);margin-bottom:10px;">
        <img src="img/worldwide.png" class="imagenformavirtual img-responsive d-block mx-auto" style="display:inline; width:64px;height:64px; margin-right:5px;">
        <h1 class="titulo2 text-center">REALIZA LOS CURSOS DE FORMA VIRTUAL</h1>
        <h4 class="descripcion2 text-center"><img src="img/tickrojo.png" style="height:20px;display:inline;vertical-align:text-bottom;"> Desde tu casa a travez de tu computadora o celular de forma online</h4>
      </div>
    </div>
    <div class="row">
      <div class="col-4 offset-2 wow fadeInLeft" style="background:white;margin-right:10px;padding:20px; box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.75);margin-bottom:10px;">
        <img src="img/books.png" class="imagenformavirtual img-responsive d-block m-auto" style="width:64px;height:64px; margin-right:5px;">
        <h1  class="titulo2 text-center">APROVECHA TODO NUESTRO MATERIAL ONLINE</h1>
        <h4  class="descripcion2 text-center"><img src="img/tickrojo.png" style="height:20px;display:inline;vertical-align:text-bottom;"> Sigue los video tutoriales paso a paso y también descarga el material adicional</h4>
      </div>
      <div class="col-4 wow fadeInRight" style="background:white;margin-left:10px;padding:20px; box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.75);margin-bottom:10px;">
        <img src="img/certificate.png" class="imagenformavirtual img-responsive d-block m-auto" style="width:64px;height:64px; margin-right:5px;">
        <h1  class="titulo2 text-center">COMPLETA EL CURSO Y OBTEN TU CERTIFICADO</h1>
        <h4  class="descripcion2 text-center"><img src="img/tickrojo.png" style="height:20px;display:inline;vertical-align:text-bottom;"> Todos los cursos vienen con certificado que avala que terminaste el mismo</h4>
      </div>
    </div>
  </div>
  </div>
</div>




<!-- CONTENEDOR DE CLIENTES  -->
<div class="container-fluid" id="cartascursos" style="position:relative; background-color:white; margin-top:1px;">
    <div class="row">
      <div class="col-12 wow fadeInUp" style="text-align:center; margin-top:30px;margin-bottom:10px;">
        <h1 class="text-center wow fadeInUp" style="font-size:36px;margin-top:60px;color:black;"><img style="vertical-align:sub;" src="img/cursos.png" height="40" alt="">Nuestros estudiantes</h1>
        <hr style="border-top: 2px solid red; width:60px;margin-bottom:40px;">
      </div>
    </div>
    <div class="row  wow fadeIn slow" style="margin-bottom:150px;">
      <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6  col-xs-12">
          <div class="card" style="height:245px;margin-top:60px;width:100%;">
            <img class="card-img-top" src="img/opinion1.jpg" style="box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.75);width:90px;height:90px;border-radius:90px; display:block; margin:auto; margin-top:-45px;" alt="Card image cap">
            <div class="card-body">
            <h5 class="card-title" style="text-align:center;">Rodrigo</h5>
              <p class="card-text">Excelente curso de enfermería sobre los cuidados intensivos en personas mayores.</p>
                <p class="card-text m-0" style="display:block;text-align:center;"><img src="img/starllena.png"><img src="img/starllena.png"><img src="img/starllena.png"><img src="img/starllena.png"><img src="img/starmedia.png"></p>
                <h1 class="text-center mt-2" style="font-size:16px;">Curso de Enfermería 1</h1>
          </div>
        </div>
      </div>

      <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6  col-xs-12">

        <div class="card" style="height:245px;margin-top:60px;width:100%;">
          <img class="card-img-top" src="img/opinion2.jpg" style="box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.75);width:90px;height:90px;border-radius:90px; display:block; margin:auto; margin-top:-45px;" alt="Card image cap">
          <div class="card-body">
          <h5 class="card-title" style="text-align:center;">Rodrigo</h5>
            <p class="card-text">Excelente curso de enfermería sobre los cuidados intensivos en personas mayores.</p>
              <p class="card-text" style="display:inline;"><img src="img/starllena.png"><img src="img/starllena.png"><img src="img/starllena.png"><img src="img/starllena.png"><img src="img/starmedia.png"></p><span style="font-size:14px; display:inline;"><br>
              <h1 style="font-size:16px;">Curso de Enfermería 1</h1></span><small class="text-muted"></small>
          </div>
        </div>
      </div>

      <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6  col-xs-12">

        <div class="card" style="height:245px;margin-top:60px;width:100%;">
          <img class="card-img-top" src="img/opinion3.jpeg" style="box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.75);width:90px;height:90px;border-radius:90px; display:block; margin:auto; margin-top:-45px;" alt="Card image cap">
          <div class="card-body">
          <h5 class="card-title" style="text-align:center;">Rodrigo</h5>
            <p class="card-text">Excelente curso de enfermería sobre los cuidados intensivos en personas mayores.</p>
              <p class="card-text" style="display:inline;"><img src="img/starllena.png"><img src="img/starllena.png"><img src="img/starllena.png"><img src="img/starllena.png"><img src="img/starmedia.png"></p><span style="font-size:14px; display:inline;"><br><h1 style="font-size:16px;">Curso de Enfermería 1</h1></span><small class="text-muted"></small>
          </div>
        </div>
      </div>

      <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6  col-xs-12">
        <div class="card" style="height:245px;margin-top:60px;width:100%;">
          <img class="card-img-top" src="img/opinion4.jpg" style="box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.75);width:90px;height:90px;border-radius:90px; display:block; margin:auto; margin-top:-45px;" alt="Card image cap">
          <div class="card-body">
          <h5 class="card-title" style="text-align:center;">Rodrigo</h5>
            <p class="card-text">Excelente curso de enfermería sobre los cuidados intensivos en personas mayores.</p>
              <p class="card-text" style="display:inline;"><img src="img/starllena.png"><img src="img/starllena.png"><img src="img/starllena.png"><img src="img/starllena.png"><img src="img/starmedia.png"></p><span style="font-size:14px; display:inline;"><br><h1 style="font-size:16px;">Curso de Enfermería 1</h1></span><small class="text-muted"></small>
          </div>
        </div>
      </div>
    </div>

</div>

<!-- footer -->

<?php
  include 'footer.php';
?>

</body>
</html>

