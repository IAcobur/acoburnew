<!DOCTYPE html>
<html lang="es">

<head>
<?php
$head =[ 
  "titulo"=> "Gestion de Licitaciones",
  "descripcion"=> "Gestion de Licitaciones",
  "keywords"=> "contratacion, publca, españa",
]; 
      include_once "_inc_head.php";
  ?>

</head>

<body>
    <div class="content-wrapper">
    <?php
      include "_inc_header_normal.php";
   
      include "_inc_gestion_bloque1.php";
      
     

      include "_inc_gestion_bloque3.php";


      include "_inc_gestion_bloque2.php";
      // include "_inc_investigacion_de_mercado.php";

      
      // include "_inc_consultoria_bloque4.php";


     
      include "_inc_contactanos.php";

      // include "_inc_faqs.php";
     
      // include "_inc_suscripcion.php";
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