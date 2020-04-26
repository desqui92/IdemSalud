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
    <script src="../js/cropper.min.js"></script><!-- Cropper.js is required -->
    <link  href="../css/cropper.min.css" rel="stylesheet">
    <script src="../js/jquery-cropper.min.js"></script>
    <script src="../js/wow.min.js"></script>
    <script>
      new WOW().init();
    </script>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-4 wow fadeInLeft" id="menu-administracion">
                <div class="text-center wow fadeIn" data-wow-delay="1s" id="logo-menu">
                    <img src="../img/logo.png" height="50" alt="">
                </div>
                <div class="text-center mt-5 mb-5">
                    <img id="foto-perfil"  src="/img/sin-foto.png" height="100" alt="">
                </div>
                <ul class="nav flex-column text-center">
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-user fa-lg"></i> Subir publicación</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-edit fa-lg"></i> Editar publicación</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-edit fa-lg"></i> Borrar publicación</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fab fa-blogger-b fa-lg"></i> Ver Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/index.php"><i class="fas fa-arrow-left fa-lg"></i> Página principal</a>
                    </li>
                </ul>
            </div>
            <div class="col-xl-8">
                <div class="wow fadeInUp">
                    <h1 class="text-center" style="font-size:36px; margin-bottom:5px;margin-top:60px;"><img style="vertical-align:sub;" src="/img/cursos-pc.png" height="40" alt=""> Subir Publicación</h1>
                    <hr style="border-top: 2px solid red; width:60px;">
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 text-center">
                            <h1 class="text-center" style="font-size:24px; margin-top:10px;">Título</h1>
                            <input type="text" name="titulopublicacion" id="titulopublicacion"></input>
                            <h1 class="text-center" style="font-size:24px; margin-top:10px;">Imagen de portada</h1>
                            <div>
                            <img id="image" src="../img/background.jpg" style="max-width: 100%;">
                            </div>
                            <input type="button" onclick="recorte()" value="Recortar Imagen"></button>
                            <script>

const image = document.getElementById('image');
const cropper = new Cropper(image, {
  aspectRatio: 16 / 9,
  crop(event) {
    console.log(event.detail.x);
    console.log(event.detail.y);
    console.log(event.detail.width);
    console.log(event.detail.height);
    console.log(event.detail.rotate);
    console.log(event.detail.scaleX);
    console.log(event.detail.scaleY);
  },
});
function recorte(){
cropper.getCroppedCanvas().toBlob((blob) => {
  const formData = new FormData();

  // Pass the image file name as the third parameter if necessary.
  formData.append('file', blob,'example.png');

  $.ajax({
    url:'subirimagen.php',
    method: 'POST',
    data: formData,
    processData: false,
    contentType: false
  })
  .done(function(res) {
     alert(res);
  });

});


}
                            </script>
                            <!--<script>
                            var $image = $('#image');

                            $image.cropper({
                              aspectRatio: 16 / 9,
                              crop: function(event) {
                                console.log(event.detail.x);
                                console.log(event.detail.y);
                                console.log(event.detail.width);
                               console.log(event.detail.height);
                                console.log(event.detail.rotate);
                               console.log(event.detail.scaleX);
                                console.log(event.detail.scaleY);
                             }
                            });

                            // Get the Cropper.js instance after initialized
                            var cropper = $image.data('cropper');
                            function recorte(){
                                cropper.getCroppedCanvas().toBlob((blob) => {
                               const formData = new FormData();
                               var id = "";
                                $.ajax({
                                type: 'POST',
                                url: 'pediridimagen.php',
                                success: function (data) {
                                    alert("pedirimagen " + data);
                                    subirimagen(data, formData, blob);
                                }
                                });
                                })
                            }
                                function subirimagen(id, formData, blob){
                                alert(formData);
                                var nombre = "imagen" + id + ".png";
                                // Pass the image file name as the third parameter if necessary.
                                formData.append('croppedImage', blob, nombre);
                                // Use `jQuery.ajax` method for example
                                $.ajax('../files/portadaBlog', {
                                  method: 'POST',
                                  url: 'subirimagen.php',
                                  data: formData,
                                  processData: false,
                                  contentType: false,
                                  success: function(data) {
                                    alert (data);
                                    console.log('Upload success');
                                  },
                                  error() {
                                    console.log('Upload error');
                                   },
                                  });
                                } 
                            </script>-->
                            <h1 class="text-center" style="font-size:24px; margin-top:10px;">Contenido</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>