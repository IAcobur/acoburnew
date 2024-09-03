<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <title>Acobur</title>
    <link rel="shortcut icon" href="./assets/img/favicon.ico">
    <link rel="stylesheet" href="./assets/css/plugins.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
</head>

<body>
    <div class="content-wrapper">
        <?php 
      include "_inc_header.php";
    ?>
        <!-- /header -->
        <?php 
      include "_inc_slider_inicio.php";
    ?>
        <?php 
      include "_inc_que_hacemos_y_soluciones.php";
    ?>
        <?php 
      #include "_inc_contadores.php";
    ?>
        <?php 
      include "_inc_contactanos.php";
    ?>
        <?php 
      include "_inc_recomendaciones.php";
    ?>
        <?php 
      include "_inc_faqs.php";
    ?>
        <?php 
      include "_inc_suscripcion.php";
    ?>



        <!-- /section -->

        <!-- /section -->
    </div>
    <?php 
      include "_inc_footer.php";
  ?>


    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <script src="./assets/js/plugins.js"></script>
    <script src="./assets/js/theme.js"></script>
</body>

</html>