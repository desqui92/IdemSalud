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
            <?php include 'menuDiseñador.php'; ?>
            
            <div class="col-xl-8">
                <div class="wow fadeInUp">
                    <h1 class="text-center" style="font-size:36px; margin-bottom:5px;margin-top:60px;"><img style="vertical-align:sub;" src="../img/cursos-pc.png" height="40" alt=""> Subir Publicación</h1>
                    <hr style="border-top: 2px solid red; width:60px;">
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 text-center cont-subirBlog">
                            <h1 class="text-center" style="font-size:24px; margin-top:10px;">Título</h1>
                            <input type="text" placeholder="Escriba el título del blog..." class="form-control" name="titulopublicacion" id="titulopublicacion"></input>
                            <h1 class="text-center" style="font-size:24px; margin-top:10px;">Portada</h1>
                            <div class="alert" id="portadaLista" style="width:300px;border-radius:0px;display:none;margin:auto;" role="alert">
                            <p style="margin:0px;"><i class="fas fa-check fa-lg" style="color:#CE2D2B;"></i>  ¡Su portada está lista!</p>
                            </div>
                            <div>
                            <label for="imgInp" id="labelimgInp" class="btn-subirPortada"><i class="fas fa-upload fa-lg"></i> Subir Portada</label>
                            <input type="file" class="d-none" id="imgInp" onchange="tomarimagen(this)" name="files">
                            <img id="image" src="" style="max-width: 100%;">
                            </div>
                            <button type="button" id="btn-recortar" class="btn btn-subirPortada mt-4" style="display:none;" onclick="recorte()"><i class="fas fa-cut fa-lg"></i> Recortar</button>
                            <script>

                                const cropper=inicializarCropper();


                                function inicializarCropper(){
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
                                    return cropper;
                                }    


                                function tomarimagen(event){
                                 var reader = new FileReader();
                                 var img = document.getElementById('image');
                                 var file = event.files[0];
                            
                                reader.readAsDataURL(event.files[0]);
                                reader.onload = function(e) {
                                    $('#image').attr('src', e.target.result);
                                    cropper.replace(e.target.result);
                                }

                                $("#btn-recortar").show();

                                }
    



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
                                        //alert(res);
                                        $("#portadaLista").show();
                                        $(".cropper-container").hide();
                                        $("#labelimgInp").hide();
                                        $("#btn-recortar").hide();
                                        
                                    });

                                    });

                                }


                            </script>
                            <h1 class="text-center" style="font-size:24px; margin-top:10px;">Contenido</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>