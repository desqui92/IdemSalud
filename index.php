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
    <script src="js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    <title>Inicio</title>
</head>
<body>
  <?php
    include 'menu-web.php';
  ?>
  <div class="container-fluid" id="inicio-seccion" style="position:relative;">
    <div class="row">
      <div clas="col-12">
         <img src="img/enfermera2.jpg" style="width:100%; height:auto;">
      </div>
      <div class="cont-inicio" style="position:absolute;">
          <h1 class="titulo">MIRA NUESTROS CURSOS</h1>
          <h4 class="descripcion">Realizado por profesionales con amplia<br>experiencia en la rama de la salud.</h4>
          <table style="border:2px; color:white; font-weight:bold;" class="imageniniciotips">
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
              <td style="padding-bottom:12px;"><img src="img/tickrojo.png" style="width:20px;height:20px;">&nbsp;Variedad de cursos y reseñas</td>
            </tr>
            <tr >
            <td style="padding-bottom:12px;"><img src="img/tickrojo.png" style="width:20px;height:20px;">&nbsp;Material adicional y comentarios</td>
            </tr> 
            <tr>
            <td style="padding-bottom:12px;"><img src="img/tickrojo.png" style="width:20px;height:20px;">&nbsp;Videos explicativos y consultas</td>
          </table>
      </div>
    </div>
  </div>
  <div class="container-fluid" id="cartascursos" style="position:relative; background-color:white;">
    <div class="row">
      <div class="col-12">
        <div id="nuestroscursos">
      <h1 style="font-size:22px; margin-bottom:5px;"><span style="border-bottom:1px solid; border-color:#d0d0d0;">Cursos mas demandados</span></h1><h2 style="font-size:18px; font-weight:300; color:#6c757d;margin-bottom:18px;">Elige uno de nuestros cursos y empieza a aprender con un profesional calificado.</h2>
      <div style="border-bottom:1px #d0d0d0 solid; padding-bottom:8px;">
        <a href="" style="padding-bottom:9px; border-bottom:2px #000000 solid"><h2 style="font-size:21px; display:inline;">Enfermería</h2></a>&nbsp;&nbsp;<a href=""><h2 style="font-size:21px; display:inline;">Otros</h2></a>
      </div>
      </div>
      </div>
      <div class="col-12">
      <div class="carousel"
  data-flickity='{ "wrapAround": true, "percentPosition": false, "cellAlign": "left" }'>
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
</div>
<div class="container-fluid">
   <div class="row">
   <div class="col-12" style="text-align:center; margin-top:100px;">
   <h1 style="font-size:25px; margin-bottom:5px;"><span style="border-bottom:1px solid; border-color:#d0d0d0;">Nuestros beneficios</span></h1>
      </div>
   </div>
   </div>
  <div class="container-fluid" style="background-image:url('img/background.jpg'); background-repeat:no-repeat; background-size:cover;">
    <div class="row cont-info" style="padding-top:20px;">
      <div class="col-8 offset-2" style="padding-top:1%; padding-bottom:1%; background-color:#FFFFFF;border:1px #034158 solid;">
      <img src="img/bookread.png" class="imagenformavirtual img-fluid" style="display:inline; width:64px;height:64px; margin-right:5px;">
          <h1 class="titulo2">ESTUDIA EL DÍA Y LA HORA QUE QUIERAS</h1>
          <h4 class="descripcion2">Aprovecha tus momentos libres para aprender un nuevo curso <img src="img/tick.png" style="width:16px; height:16px;display:inline;"></h4>
      </div>
      </div>
      <div class="row cont-info" style="margin-top:-1px;">
      <div class="col-8 offset-2" style="padding-top:1%; padding-bottom:1%; background-color:#FFFFFF;border:1px #034158 solid;">
      <img src="img/worldwide.png" class="imagenformavirtual img-fluid" style="display:inline; width:64px;height:64px; margin-right:5px;">
          <h1 class="titulo2">REALIZA LOS CURSOS DE FORMA VIRTUAL</h1>
          <h4 class="descripcion2">Desde tu casa a travez de tu computadora o celular de forma online <img src="img/tick.png" style="width:16px; height:16px;display:inline;"></h4>
      </div>
      </div>
      <div class="row cont-info" style="margin-top:-1px;">
      <div class="col-8 offset-2" style="padding-top:1%; padding-bottom:1%; background-color:#FFFFFF;border:1px #034158 solid;">
      <img src="img/books.png" class="imagenformavirtual img-fluid" style="display:inline; width:64px;height:64px; margin-right:5px;">
          <h1 class="titulo2">COMPLETA EL CURSO Y OBTEN TU CERTIFICADO</h1>
          <h4 class="descripcion2">Todos los cursos vienen con certificado que avala que terminaste el mismo <img src="img/tick.png" style="width:16px; height:16px;display:inline;"></h4>
      </div>
      </div>
      <div class="row cont-info" style="margin-top:-1px; padding-bottom:20px;">
      <div class="col-8 offset-2" style="padding-top:1%; padding-bottom:1%; background-color:#FFFFFF;border:1px #034158 solid;">
      <img src="img/certificate.png" class="imagenformavirtual img-fluid" style="display:inline; width:64px;height:64px; margin-right:5px;">
          <h1 class="titulo2">APROVECHA TODO NUESTRO MATERIAL ONLINE</h1>
          <h4 class="descripcion2">Sigue los video tutoriales paso a paso y también descarga el material adicional <img src="img/tick.png" style="width:16px; height:16px;display:inline;"></h4>
      </div>
      </div>
      </div>
    </div>
  </div>
  
  <div class="container-fluid">
   <div class="row">
   <div class="col-12" style="text-align:center; margin-top:10px;">
   <h1 style="font-size:25px; margin-bottom:5px;"><span style="border-bottom:1px solid; border-color:#d0d0d0;">Nuestros Alumnos</span></h1>
      </div>
   </div>
   </div>
    
</body>
</html>

<!-- PARA EMPEZAR CON  ESTOS ENLACES ESTA BIEN , TIENE JQUERY , BOOTSTRAP , LOS ICONOS DE FONT-AWESOME , LAS ANIMACIONES DE ANIMATED CSS , Y HAY UN ARCHIVO ESTILO.CSS 
    QUE AHI PONEMOS EL CSS NUESTRO
-->

<!-- EN ESTA PAGINA TENDRIA QUE IR EL MAQUETADO QUE HICISTE -->

<!-- TESTEE LOS ARCHIVOS INTEGRADOS Y NO ME DIO NINGUNA FALLA EN LA CONSOLA DEL NAVEGADOR... ASI QUE  ESTAN BIEN LINKEADOS -->
<!-- divino-->
<!--Fantabuloso, testeando-->
