<?php 
    class ControladorUsuarios{
        static public function ctrIngresoUser(){
            if(isset($_POST["user"])){
                if(preg_match('/^[a-zA-Z0-9]+$/', $_POST["user"]) && preg_match('/^[a-zA-Z0-9 .]+$/', $_POST["password"])){
                       $tabla = "users";
                       $item = "user";
                       $valor = $_POST["user"];

                       $response = ModeloUsuarios::mdlObtenerUsuarios($tabla, $item, $valor);

                       if($response["user"] == $_POST["user"] && $response["password"] == $_POST["password"]){
                            
                        $_SESSION["iniciarSesion"] = "ok";
                        
                           echo '
                           <script>
                                window.location = "dashboard";
                           </script>';
                       }else{
                           /* echo '<div class="alert alert-danger">Error al ingresar, vuelve a intentarlo</div>'; */
                           echo '<script>
                                Swal.fire({
                                    icon: "error",
                                    title: "Oops...",
                                    text: "Error al ingresar, vuelve a intentarlo",
                                })
                                </script>';
                       }
                }else{
                    /* echo '<div class="alert alert-danger"><b>Error al ingresar, se estableció una contraseña que no cumple con los estándares permitidos.</b></div>'; */
                    echo '<script>
                    Swal.fire({
                        icon: "error",
                        title: "Oops...",
                        text: "Algo salió mal",
                      })
                    </script>';
                }
            }
        }
    }