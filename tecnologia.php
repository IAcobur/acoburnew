<!DOCTYPE html>
<html lang="es">

<head>
    <!-- <meta charset="utf-8">
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
        rel="stylesheet"> -->
<?php
  $head =[ 
    "titulo"=> "Tecnología",
    "descripcion"=> "Tecnología",
    "keywords"=> "contratacion, publca, españa",
  ]; 
        include_once "_inc_head.php";
?>
</head>

<body>
    <div class="content-wrapper">
        <?php 
      include "_inc_header_normal.php";
    ?>
        <!-- /header -->
        <?php 
      include "_inc_rendimiento.php";
    ?>
        <?php 
      include "_inc_equipo_datos.php";
    ?>
        <?php 
      include "_inc_tec_wt.php"; 
    ?>
        <?php 
      include "_inc_business.php"; 
    ?>
        <?php 
      include "_inc_integra_nuestros_datos.php"; 
    ?>

        <?php 
      #include "_inc_tender_ai.php"; 
    ?>

        <?php 
      #include "_inc_contacto_llamada_atencion.php";
    ?>-
        <?php 
      #include "_inc_recomendaciones.php";
    ?>
        <?php 
      // include "_inc_faqs.php";
    ?>
    <?php 
      include "_inc_contacto_llamada_atencion.php";
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

<?php include "_inc_javascripst.php"; ?>
    <!-- <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <script src="./assets/js/plugins.js"></script>
    <script src="./assets/js/theme.js"></script> -->
</body>

</html>