
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>FrontEnd</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="images/icono.jpg">
        <link rel="stylesheet" href="views/css/bootstrap.min.css">
        <link rel="stylesheet" href="views/css/font-awesome.min.css">
        <link rel="stylesheet" href="views/css/style.css">
        <link rel="stylesheet" href="views/css/fonts.css">
        <link rel="stylesheet" href="views/css/cssFancybox/jquery.fancybox.css">
        <script src="views/js/jquery-2.2.0.min.js"></script>
        <script src="views/js/bootstrap.min.js"></script>
        <script src="views/js/jquery.fancybox.js"></script>
        <script src="views/js/animatescroll.js"></script>
        <script src="views/js/jquery.scrollUp.js"></script>
    </head>
    <body>
        <div class="container-fluid">
        <!--=====================================
        CABEZOTE
        ======================================-->
        <?php include 'modules/header.php'; ?>
        <!--====  Fin de CABEZOTE  ====-->
        <!--=====================================
        SLIDE
        ======================================-->
        <?php include 'modules/slide.php'; ?>   
        <!--====  Fin de SLIDE  ====-->
        <!--=====================================
        TOP
        ======================================-->
        <?php include 'modules/top.php'; ?>
        <!--====  Fin de TOP  ====-->
        <!--=====================================
        GALERIA
        ======================================-->
        <?php include 'modules/galeria.php'; ?>
        <!--====  Fin de GALERIA  ====-->

        <!--=====================================
        ARTÍCULOS
        ======================================-->
        <?php include 'modules/articulos.php'; ?>
        <!--====  Fin de ARTÍCULOS  ====-->

        <!--=====================================
        VIDEOS
        ======================================-->
        <!--====  Fin de VIDEOS  ====-->
         <?php include 'modules/videos.php'; ?>
        <!--=====================================
            CONTÁCTENOS         
        ======================================-->
        <?php include 'modules/contacto.php'; ?>
        <!--====  Fin de CONTÁCTENOS ====-->

        <!--=====================================
            ARTÍCULO MODAL         
        ======================================-->
        <div id="articulo1" class="modal fade">
  
            <div class="modal-dialog modal-content">
    
             <div class="modal-header" style="border:1px solid #eee">
                
            <button type="button" class="close" data-dismiss="modal">&times;</button>
             <h3 class="modal-title">Lorem Ipsum</h3>
                
            </div>

            <div class="modal-body" style="border:1px solid #eee">
                
            <img src=views/images/articulos/landscape02.jpg" width="100%" style="margin-bottom:20px">
            <p class="parrafoContenido text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                
            </div>

            <div class="modal-footer" style="border:1px solid #eee">
                
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                
            </div>

            </div>

        </div>
        <!--====  Fin de ARTICULO MODAL ====-->
        </div>
        <script src="views/js/script.js"></script>
    </body>
</html>
