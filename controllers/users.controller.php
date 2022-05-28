<?php 
    class ControladorUsuarios{
        static public function ctrIngresoUser(){
            if(isset($_POST["user"])){
                if(preg_match('/^[a-zA-Z0-9]+$/', $_POST["user"]) && preg_match('/^[a-zA-Z0-9 .]+$/', $_POST["password"])){
                       $table = "users";

                       $item = "user";
                       $valor = $_POST["user"];

                       $response = ModeloUsuarios::mdlObtenerUsuarios($tabla, $item, $valor);
                       if($response["user"] == $_POST["user"] && $response["password"] == $_POST["password"]){
                           echo '<script>
                                window.location = "dashboard";
                           </script>';
                       }else{
                           echo '<div class="alert alert-danger">Error al ingresar, vuelve a intentarlo</div>';
                       }
                }else{
                    echo '<div class="alert alert-danger">Error al ingresar, se estableció una contraseña que no cumple con los estándares permitidos.</div>';
                }
            }
        }
    }