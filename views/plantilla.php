<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="views/assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="views/assets/img/favicon.png">
  <title>
    Chromo Cars | Chile
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="views/assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="views/assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <link href="views/assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="views/assets/css/argon-dashboard.css?v=2.0.2" rel="stylesheet" />
</head>

<?php 
    echo '<body class="g-sidenav-show bg-gray-100">';
    if(isset($_SESSION["iniciarSesion"]) && $_SESSION["iniciarSesion"] == "ok"){
        include "modules/aside.php";
            echo '<main class="main-content position-relative border-radius-lg ">';
                include "modules/navbar.php";
                echo '<div class="container-fluid py-4">';
                    echo '<div class="row">';
                            /* Aquí va el contenido dependiendo de la vista a la que entren */
                            if(isset($_GET["ruta"])){
                                if($_GET["ruta"]=="dashboard"){
                                    include "modules/".$_GET["ruta"].".php";
                                }else{
                                    include "modules/404.php";
                                }
                            }else{

                            }
                            include "modules/footer.php";
                    echo '</div>    
                     </div>
            </main>';
    }else{
        include "modules/login.php";
    }
?>
<!--   Core JS Files   -->
<script src="views/assets/js/core/popper.min.js"></script>
<script src="views/assets/js/core/bootstrap.min.js"></script>
<script src="views/assets/js/plugins/perfect-scrollbar.min.js"></script>
<script src="views/assets/js/plugins/smooth-scrollbar.min.js"></script>
<script src="views/assets/js/plugins/chartjs.min.js"></script>

<script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
    var options = {
        damping: '0.5'
    }
    Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
</script>
<!-- Github buttons -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
<!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
<script src="views/assets/js/argon-dashboard.min.js?v=2.0.2"></script>
</body>

</html>