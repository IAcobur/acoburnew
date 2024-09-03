<!DOCTYPE html>
<html lang="es">

<head>
<?php
$head =[ 
  "titulo"=> "servicios",
  "descripcion"=> "servicioervicios",
  "keywords"=> "contratacion, publca, españa",
]; 
      include_once "_inc_head.php";
  ?>

</head>

<body>
    <div class="content-wrapper">
    <?php
      include "_inc_header_normal.php";
   
      include "_inc_ser_cab.php";
      
    
      
      include "_inc_ser_consultoria.php";
      
      include "_inc_ser_ten_man.php";
    
      include "_inc_ser_ten_stra.php";
     
      include "_inc_ser_accede.php";
      
      include "_inc_contactanos.php";
          
    
      include "_inc_faqs.php";
     
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