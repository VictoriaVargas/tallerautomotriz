<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="views/assets2/" data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <title>CHROMO CARS</title>
    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="views/assets2/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="views/assets2/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="views/assets2/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="views/assets2/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="views/assets2/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="views/assets2/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="views/assets2/vendor/js/helpers.js"></script>
    <script src="views/assets2/js/config.js"></script>

    <!-- Sweetalert Libreria para control de mensajes -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<?php 
    if(isset($_SESSION["iniciarSesion"]) && $_SESSION["iniciarSesion"] == "ok"){
        echo '<div class="layout-wrapper layout-content-navbar">';
            echo '<div class="layout-container">';
                include "modules/lateral.php";
                    echo '<div class="layout-page">';
                        include "modules/navbar.php";
                            echo '<div class="content-wrapper">';
                            /* Aquí va el contenido dependiendo de la vista a la que entren */
                            if(isset($_GET["ruta"])){
                                if($_GET["ruta"]=="dashboard"||
                                $_GET["ruta"]=="crearcliente"){
                                    include "modules/".$_GET["ruta"].".php";
                                }else{
                                    include "modules/404.php";
                                }
                            }else{

                            }
                            echo '</div>';
                            include "modules/footer.php";
                    echo '
                    <div class="content-backdrop fade"></div>
                </div>
            </div>
        </div>
    <div class="layout-overlay layout-menu-toggle"></div>
</div>';
    }else{
        include "modules/login.php";
    }
?>
<!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="views/assets2/vendor/libs/jquery/jquery.js"></script>
    <script src="views/assets2/vendor/libs/popper/popper.js"></script>
    <script src="views/assets2/vendor/js/bootstrap.js"></script>
    <script src="views/assets2/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="views/assets2/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="views/assets2/js/main.js"></script>

    <!-- Page JS -->

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>
