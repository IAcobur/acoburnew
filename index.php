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
    <link rel="stylesheet" href="./assets/css/custom.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet"> -->
<?php

  $head =[ 

    "titulo"=> "Acobur",

    "descripcion"=> "Acobur",

    "keywords"=> "contratacion, publca, españa",

  ]; 
        include_once "_inc_head.php";

?>

</head>

<body>
    <div class="content-wrapper">

        <?php include "_inc_header_normal.php";  ?>
        
        <?php include "_inc_video_cabecera.php"; ?>
    
        <div id="_inc_home_sobre_nosotros">
            <?php include('_inc_home_sobre_nosotros.php'); ?>
        </div>
    
        <?php include "_inc_que_hacemos_y_soluciones.php"; ?>

        <?php include "_inc_comentario.php";?>
        

        <?php include "_inc_recomendaciones.php"; ?>


        <?php include "_inc_producto.php"; ?>
        <!-- <div id="_inc_contactanos"> -->
            <?php //include('_inc_contactanos.php'); ?> 
        <!-- </div> -->

        <?php include "_inc_faqs.php"; ?>
        <?php include "_inc_suscripcion.php"; ?>
       
        
    </div>
        <?php include "_inc_footer.php"; ?>

        <?php include "_inc_javascripst.php"; ?>
    
</body>

</html>